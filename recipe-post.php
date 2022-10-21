<?php
    include 'header.php';
    include 'nav.php';
?>
<html>
<body>
<div class= "form">
  <main>
    <form action="/submit-recipe.php" method="POST" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <form action="/submit-recipe.php" method="POST">
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
  </main>
<?php
    include 'footer.php';
?>
 </body>
</html>