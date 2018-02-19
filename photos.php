<!DOCTYPE html>
<html>

<head>
  <?php
    include("includes/init.php");

    $current_page_id = "photos";

    $photo_gallery = array(
      "images/one.png","images/two.png","images/three.png",
      "images/one.png","images/two.png","images/three.png"
    );

    function get_photo($a_photo){
      echo "<img id='photoFormat' src= '". $a_photo . "'/>";
    }
  ?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media = "all"/>
  <title>Project 1</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <h1 class="titleHeading">PHOTO GALLERY</h1>

  <?php
  foreach($photo_gallery as $a_photo) {
    get_photo($a_photo);
  }
  ?>
  <?php include("includes/footer.php"); ?>
</body>
</html>
