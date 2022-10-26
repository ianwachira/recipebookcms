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
<?php
include 'db_connect.php';
$sql = "SELECT * FROM posts (title, content, author, date) VALUES ('" .     
$title . "','" .  $content . "','" . $author . "','" . $date . "')";
$result = mysqli_query($conn, $sql);

// get the data to insert into the db
$title = $_GET["title"];
$content = $_GET["content"];
$author = $_GET["author"];
$date = $_GET["date"];

echo $title;
echo $content; 
echo $author;
echo $date;
?>
</main>
<?php
  include 'footer.php';
?>
</body>
</html>

