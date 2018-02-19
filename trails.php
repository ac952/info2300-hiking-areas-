<!DOCTYPE html>
<html>

<head>
  <?php
    include("includes/init.php");

    $current_page_id = "trails";
  ?>
<!--
  assign array of elements to a variable called $info
  make a function called print_info with $an_info as a parameter.

  echo a list element of $an_info -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media = "all"/>
  <title>Project 1</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <h1 class="titleHeading">POPULAR TRAILS</h1>
  <!-- In the body:
  create a foreach loop instead of repeating codes.
  In the for each loop, set the variable of the array ($info) to a key called $i, then print the key $i -->
  <?php include("includes/footer.php"); ?>
</body>
</html>
