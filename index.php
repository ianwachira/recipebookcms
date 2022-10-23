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
   function getPostTitlesFromDatabase() {
   // Get all the post titles from the posts table
   include_once 'db_connect.php';
   $sql = "SELECT title FROM posts";
   $result = mysqli_query($conn, $sql);
   
   // Get each result row as an assoc array, then add title to $postTitles
   $postTitles = array();
   while($row = mysqli_fetch_assoc($result)){
       array_push($postTitles, $row['title']);
   }
   return $postTitles;
   }
?>
<?php
   // Display post titles
   $postTitles = getPostTitlesFromDatabase();
   foreach ($postTitles as $postTitle) {
   echo "<li><a href='recipe-post.php?title=" . $postTitle . "'>" . $postTitle .
   "</a></li>";
   }
?>
</ul>
</main>
<?php
  include 'footer.php';
?>
</body>
</html>