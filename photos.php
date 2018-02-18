<!DOCTYPE html>
<html>

<head>
  <?php
    include("includes/init.php");

    $current_page_id = "photos";
  ?>
  <!--
    assign array of elements to a variable called $photo
    make a function called print_photo with $a_photo as a parameter.

    echo a list element of $a_photo -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media = "all"/>
  <title>Project 1</title>
</head>

<body>
  <?php include("includes/header.php")?>
  <!-- In the body:
  create a foreach loop instead of repeating codes.
  In the for each loop, set the variable of the array ($photo) to a key called $j, then print the key $j -->
  <?php include("includes/footer.php"); ?>
</body>
</html>
