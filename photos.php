<!DOCTYPE html>
<html>
<head>
  <?php
  include("includes/init.php");

  $current_page_id = "photos";

  $photo_gallery = array(
    "images/one.jpg","images/two.jpg","images/three.jpg",
    "images/four.jpg","images/five.jpg","images/six.jpg"
  );
  // photo sources:
  // https://www.pinterest.com/pin/35184440809072186/?lp=true
  // http://nyfalls.com/waterfalls/buttermilk-falls-state-park/
  // https://rickholliday.wordpress.com/2013/12/16/taughannock-falls/
  // https://fineartamerica.com/featured/cascadilla-falls-jessica-jenney.html
  // https://www.etsy.com/listing/535822448/cascadilla-gorge-waterfall-landscape
  // http://www.ithaca4dogs.com/walksbl.html
  // https://sawthelight.deviantart.com/art/Fall-at-Beebe-Lake-76359276

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
</body>
</html>
