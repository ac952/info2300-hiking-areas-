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
     <img src="images/one.png"/>
     <p>Lorem Ipsum is simply dummy text of the printing and
       typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a
        type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially
        unchanged. It was popularised in the 1960s with the release of
         Letraset sheets containing Lorem Ipsum passages, and more
         recently with desktop publishing software like Aldus PageMaker
         including versions of Lorem Ipsum.</p>
   </div>
   <div id="secondAct">
     <img src="images/one.png"/>
     <p>Lorem Ipsum is simply dummy text of the printing and
       typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown
        printer took a galley of type and scrambled it to make a
        type specimen book. It has survived not only five centuries,
        but also the leap into electronic typesetting, remaining essentially
        unchanged. It was popularised in the 1960s with the release of
         Letraset sheets containing Lorem Ipsum passages, and more
         recently with desktop publishing software like Aldus PageMaker
         including versions of Lorem Ipsum.</p>
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
