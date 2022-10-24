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
