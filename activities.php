<!DOCTYPE html>
<html>

<head>
  <?php
    include("includes/init.php");

    $current_page_id = "activities";
  ?>

  <!-- assign array of elements (days) to a variable called $week

  make a function called print_schedule with $day as a parameter/key.

  inside the function, create an array with details of each day, assign the array to a variable called $time. -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media = "all"/>
  <title>Project 1</title>
</head>

<body>
  <?php include("includes/header.php")?>
 <!-- Add pictures and information below using floats and css (2/3 of the page)-->

  <!-- create a conditional that prints/echo the time to each corresponding day. -->
  <?php include("includes/footer.php"); ?>
</body>
</html>
