<!DOCTYPE html>
<html>

<head>
  <?php
  include("includes/init.php");

  $current_page_id = "activities";

  $days = array("Sunday", "Monday",
  "Tuesday", "Wednesday",
  "Thursday", "Friday", "Saturday");

  function get_schedule($days){
    $schedule = array(
      "Sunday" => "12:00 - 2:00pm",
      "Monday" => "1:00 - 3:00pm",
      "Tuesday" => "2:30 - 4:30pm",
      "Wednesday" => "12:00 - 2:00pm",
      "Thursday" => "1:30 - 3:00pm",
      "Friday" => "3:00 - 4:00pm",
      "Saturday" => "2:00 - 4:00pm",
    );
    echo "<td>".$schedule[$days]."</td>";
  }

  function day_of_week($days){
    echo "<td>". $days ."</td>";
  }

  ?>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="style/all.css" media = "all"/>
  <title>Project 1</title>
</head>

<body>
  <?php include("includes/header.php");?>
  <h1 class="titleHeading">ACTIVITIES</h1>
  <!-- Add pictures and information below using floats and css (2/3 of the page)-->
  <div id="activity">
    <div id="firstAct">
      <!-- https://ithacatrails.org/#find-trails -->
      <!-- http://www.minitime.com/Taughannock_Falls_State_Park-Trumansburg-New_York-attraction -->
      <img id ="hiking" src="images/hiking.jpg"/>
      <h2>Hiking</h2>
      <p>Explore the beautiful scenery at Ithaca and the surrounding gorges. Click images below to learn more about the popular hiking trails.</p>
      <div class = "activityimg">
        <a href= "https://ithacatrails.org/site/Allen%20H.%20Treman%20State%20Marine%20Park" title = "Allen H. Treman State Marine Park">
          <img class = "himages" src="images/allen.jpg"></a>
          <a href = "https://ithacatrails.org/site/Black%20Diamond%20Trail" title = "Black Diamond Trail">
            <img class = "himages" src="images/black.jpg"></a>
            <a href="https://ithacatrails.org/site/Buttermilk%20Falls%20State%20Park" title = "Buttermilk Falls State Park">
              <img class = "himages" src="images/buttermilk.jpg"></a>
            </div>
          </div>
          <div id="secondAct">
            <!-- https://rootsrated.com/stories/5-waterfall-hikes-around-san-francisco-perfect-winter-exploration -->
            <img id="swimming" src="images/swimming.jpg"/>
            <h2>Swimming</h2>
            <p>Enjoy swimming in the lakes around Ithaca with family and friends. Click images below to learn about some of the locations/parks that allow this. </p>
            <div class = "activityimg">
              <a href= "https://ithacatrails.org/site/Stewart%20Park" title = "Stewart Park">
                <img class = "himages" src="images/stewart.jpg"></a>
                <a href = "https://ithacatrails.org/site/Taughannock%20Falls%20State%20Park" title = "Taughannock Falls State Park">
                  <img class = "himages" src="images/taugh.jpg"></a>
                  <a href="https://ithacatrails.org/site/Beebe%20Lake%20Natural%20Area" title = "Beebe Lake Natural Area">
                    <img class = "himages" src="images/beebe.jpg"></a>
                  </div>
                </div>
                <div id="schedule">
                  <table>
                    <th>Walking Tour Schedule</th>
                    <tr>
                      <?php
                      foreach($days as $day){
                        echo "<td>".day_of_week($day)."</td>";
                        echo "<tr>".get_schedule($day)."</tr>";
                      }
                      ?>
                    </tr>
                  </table>
                </div>
              </div>
            </body>
            </html>
