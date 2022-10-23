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
    <form action="submit-recipe.php" method="post">
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
    </body>
  <?php
    include 'footer2.php';
  ?>
  </main>
</html>