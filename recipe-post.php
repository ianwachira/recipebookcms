<?php
  include 'header.php';
  include 'nav.php';
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <main>
    <body>
  <div class="form">
  <form action="recipe-post.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
    <form action="recipe-post.php" method="post">
        <label for="title">Recipe Name</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="author">Created by</label>
        <input type="text" id="author" name="author"><br><br>
        <label for="date">Date</label>
        <input type="date" id="date" name="date"><br><br>
        <label for="content"></label>
        <textarea id="content" name="content" rows="4" cols="50">Write your recipe</textarea>
        <input type="submit" value="Submit">
      </form>
  </div>
  <?php
   // get the data to insert into the db
   $title = $_POST["title"];
   $content = $_POST["content"];
   $author = $_POST["author"];
   $date = $_POST["date"];

   // insert the data with the sql query
   include_once 'db_connect.php';
   $sql="INSERT INTO posts (title, content, author, date) VALUES ('" .     
   $title . "','" .  $content . "','" . $author . "','" . $date . "')";
   $result = mysqli_query($conn, $sql);
?>

<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  ob_start();
  echo "Sorry, file already exists.";
  $output = ob_get_contents();
  ob_end_clean();
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  ob_start();
  echo "Sorry, your file is too large.";
  $output = ob_get_contents();
  ob_end_clean();
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  ob_start();
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $output = ob_get_contents();
  ob_end_clean();
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  ob_start();
  echo "Sorry, your file was not uploaded.";
  $output = ob_get_contents();
  ob_end_clean();
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
  </div>
    </body>
  <?php
    include 'footer2.php';
  ?>
  </main>
</html>