<html>
  <head>
    <link rel="stylesheet" href="../css_files/websitestyle1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <title>CSCI 466 Project - Karaoke Website: DJ Page</title>
  </head>

  <body onload="movebar()">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-3">
      <div class="container-fluid"> 
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="startpage.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer_signin.php">Sing a Song</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="djview.php">DJ Interface</a>
            </li>
        </ul>
      </div>
    </nav>



    <h1>DJ Interface - Song Selector</h1>
    <p>Select a song from any of the two queues to set it as the currently playing song.</p>
    <p>Both queues are set to be sorted by time oldest as a default.
      Priority queue will have a button to change sorting by Money paid or by time right above it (Time is ascending, money is descending).
    </p>



    <?php
      
      include "../php_files/PDOStartup.php";
      include "../php_files/utilities.php";
      

      # insert only if we have not refreshed the page! \/ from stackoverflow (does not work in firefox? or if cookies turned off??)
      $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');


      $deletesong = "";
      $candelete = false;
      if(isset($_GET["selectqueue"])) { $deletesong = $_GET["selectqueue"]; $candelete = true;}

      $args = explode(",", $deletesong);
      $qreg_del = "DELETE FROM Queues WHERE SongID = ? AND Version = ? AND CustID = ?";
      $qpry_del = "DELETE FROM PriorityQueues WHERE SongID = ? AND Version = ? AND CustID = ?";

      $qresset = NULL;
      if($candelete && !$is_page_refreshed)
      {
        if($args[0] == "reg") { $qresset = $pdo->prepare($qreg_del); }
        else { $qresset = $pdo->prepare($qpry_del); }

        $qresset->execute(array($args[1], $args[2], $args[3]));

        echo "<div class=\"w3-card w3-green\"> <h2>Current Song Playing Changed</h2> <br> <p>Successfully changed the currently playing song.</p> </div>\n";
      }

      //print current song!
      if($candelete)
      {
        $qcurr = "SELECT Title, Song.Version, Contributor.Name Artist, Year, Duration FROM Song, Contributor, Contributes ";
        $qc2 = "WHERE Song.SongID = Contributes.SongID AND Song.Version = Contributes.Version AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist' ";
        $qc3 = "AND Song.SongID = ? AND Song.Version = ?";

        $qresset = $pdo->prepare($qcurr . $qc2 . $qc3);
        $qresset->execute(array($args[3], $args[2]));

        $row = $qresset->fetch(PDO::FETCH_ASSOC);

        $item = $row["Title"];
        echo "<div class=\"w3-card w3-amber\">\n";
        echo "<h2>Now playing: $item</h2>";

        $item = $row["Duration"];
        echo "<input type=\"hidden\" id=\"totdur\" value=\"$item\">";
        echo "<div class=\"w3-light-grey\">";
        echo "<div id=\"songdurbar\" class=\"w3-container w3-cyan w3-center\" style=\"width:0%\">0%</div>";
        echo "</div>";

        $item = $row["Artist"];
        echo "<p>By: $item | ";  
        $item = $row["Version"];
        echo "$item - ";
        $item = $row["Year"];
        echo "$item</p>\n";

        $qcurr = "SELECT Name FROM Customers WHERE CustID = ?";
        $qresset = $pdo->prepare($qcurr);
        $qresset->execute(array($args[3]));

        $item = $qresset->fetchColumn();
        echo "<p><b>Selected By: </b>$item</p>\n";

        echo "</div>";
      }
      else
      {
        echo "<div class=\"w3-card w3-amber\">\n";
        echo "<h2>Now playing: N/A </h2>";
        echo "</div>";
      }


      $qreg = "SELECT Queues.SongID, Queues.Version, Title, Contributor.Name Artist, Queues.CustID, Customers.Name Customer, Time FROM Queues, Song, Customers, Contributor, Contributes WHERE ";
      $qreg_e1 = "Queues.SongID = Song.SongID AND Queues.Version = Song.Version AND Queues.CustID = Customers.CustID AND Queues.SongID = Contributes.SongID AND Queues.Version = Contributes.Version ";
      $qreg_e2 = "AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist' ORDER BY ";

      $qpry = "SELECT PriorityQueues.SongID, PriorityQueues.Version, Title, Contributor.Name Artist, PriorityQueues.CustID, Customers.Name Customer, Time, Money FROM PriorityQueues, Song, Customers, Contributor, Contributes WHERE ";
      $qpry_e1 = "PriorityQueues.SongID = Song.SongID AND PriorityQueues.Version = Song.Version AND PriorityQueues.CustID = Customers.CustID AND PriorityQueues.SongID = Contributes.SongID AND PriorityQueues.Version = Contributes.Version ";
      $qpry_e2 = "AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist' ORDER BY ";

      $qorder = "Time";
      $qorder2 = "Money DESC";


      echo "<h2>Priority Queue</h2>";

      echo "<form action=\"djview.php\" method=\"GET\" id=\"form123\">";

      #save session var info for this form.
      $get_varnames = array("selectqueue");
      savesession_GET($get_varnames);

      echo "<input type=\"hidden\" id=\"prysort\" name=\"prysort\" value=\"time\">";
      echo "<button type=\"button\" id=\"buttonsort\" class=\"btn btn-primary\" onclick=\"sortPryBy()\">Switch Sorting</button>";
      echo "</form>";
      
      echo "<form action=\"djview.php\" method=\"GET\" id=\"form456\">";

      #save session var info for this form.
      $get_varnames = array("selectqueue");
      savesession_GET($get_varnames);

      $sort = "";
      if(isset($_GET["prysort"])) { $sort = $_GET["prysort"]; }

      if($sort == "money") { echo "<p>Sorted by Money, DESC</p>\n"; $qresset = $pdo->prepare($qpry . $qpry_e1 . $qpry_e2 . $qorder2); }
      else { echo "<p>Sorted by Time, ASC</p>\n"; $qresset = $pdo->prepare($qpry . $qpry_e1 . $qpry_e2 . $qorder); }
      
      $qresset->execute();

      createTableRadioDJ($qresset, "pry");

      echo "<br>";

      echo "<h2>Regular Queue</h2>";
      $qresset = $pdo->prepare($qreg . $qreg_e1 . $qreg_e2 . $qorder);
      $qresset->execute();

      createTableRadioDJ($qresset, "reg");
      
    ?>

      <input type="submit" value="Submit">
    </form>
      

    <a href="startpage.html">
      <input type="button" value="Go Back">
    </a>
    <footer class="text-center text-lg-start bg-dark">
      <div class="container d-flex justify-content-center py-5"></div>
        
      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Created by: Edgar, Yonas, Mohamed
      </div>
        <!-- Copyright -->
    </footer>


    <script>
      //from w3schools example
      function movebar() {
        var elem = document.getElementById("songdurbar");   
        var width = 0;
        var id = setInterval(frame, 1000);
        function frame() {
          if (width >= 100) {
            clearInterval(id);
          } else {
            width++; 
            elem.style.width = width + '%'; 
            elem.innerHTML = width * 1  + '%';
          }
        }
      }


      function sortPryBy()
      {
        //document.getElementById("sortform").submit();
        console.log("hello");
        //get the GET values from url, to keep the same sorting when resetting the form to apply the new sort
        const urlParams = new URL(window.location.toLocaleString());
        var filterval = urlParams.searchParams.get("prysort");

        console.log(filterval);

        if(filterval == "money")
        {
          document.getElementById("prysort").value = "time";
          //console.log("mones");
        }
        else
        {
          document.getElementById("prysort").value = "money";
          //console.log("nope");
        }

        document.getElementById("form123").submit();
      }
    </script>
  </body>
</html>
