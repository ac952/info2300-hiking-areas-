<header>
  <h1 id="title"></h1>
  <!-- http://www.visitithaca.com -->
  <nav id="menu">
    <ul>
      <?php
      foreach($pages as $i => $value) {
        if ($current_page_id == $i) {
          $id =  "id='current_page'";
        } else {
          $id = "";
        }
        echo "<li><a ". $id. " href='". $i. ".php'>$value</a></li>";
      }
      ?>
      <img id = "ithaca" alt="ithaca" src="images/ithaca.jpg"/>
    </ul>
  </nav>

</header>
