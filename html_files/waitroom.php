<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Waiting Room</title>
    </head>

    <body onload="movebar()" style="background-color: indigo;" class="text-light">

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
        <h1>Waiting Room</h1>

        <form action="customerview.php" method="GET">

        <?php
            include "../php_files/PDOStartup.php";
            include "../php_files/utilities.php";
            
            echo "<p>Thank You for using our Karaoke service! Please wait here until the DJ picks your song!</p>";
            echo "<p>For your convienience, the current queue ordering will be displayed, alongside the current playing song!</p>";

            $get_varnames = array("custidtf","selectsong", "queuetype", "moneytf");
            savesession_GET($get_varnames);

            $qType = $_GET["queuetype"];
            $qin_reg = "INSERT INTO Queues (CustID, SongID, Version, Time) VALUES (?,?,?,?)";
            $qin_pry = "INSERT INTO PriorityQueues (CustID, SongID, Version, Time, Money) VALUES (?,?,?,?,?)";

            $karaoke_file = explode(",", $_GET["selectsong"]);
            $date = date('Y-m-d H:i:s');
            $args = array($_GET["custidtf"], $karaoke_file[0], $karaoke_file[1], $date);

            # insert only if we have not refreshed the page! \/ from stackoverflow (does not work in firefox? or if cookies turned off??)
            $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');

            if($qType == "reg" && !$is_page_refreshed)
            {
                $qin_res = $pdo->prepare($qin_reg); 
                $qin_res->execute($args);
            }
            elseif($qType == "pry" && !$is_page_refreshed)
            {
                array_push($args, $_GET["moneytf"]);
                $qin_res = $pdo->prepare($qin_pry); 
                $qin_res->execute($args);
            }


        //display current playing song
        $qcurr = "SELECT Title, Song.SongID, Song.Version, Contributor.Name Artist, Year, Duration, Current FROM Song, Contributor, Contributes WHERE Current NOT IN(SELECT Current FROM Song WHERE Current = 'DNE') ";
        $qc2 = "AND Song.SongID = Contributes.SongID AND Song.Version = Contributes.Version AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist'";
        $qresset = $pdo->prepare($qcurr . $qc2);
        $qresset->execute();

        //should only return one row so use fetchall
        if($row = $qresset->fetch(PDO::FETCH_ASSOC))
        {
          $sel_kfile = $row["SongID"];
        $sel_kfile = array($sel_kfile, $row["Version"]);
        $item = $row["Title"];

        $q_info = "SELECT Imagepath FROM Song WHERE SongID = ? AND Version = ?";
        $resinfo = $pdo->prepare($q_info);
        $resinfo->execute($sel_kfile);
        $imagepath = $resinfo->fetchColumn();

        //$item = $row["Duration"];
        //echo "<input type=\"hidden\" id=\"totdur\" value=\"$item\">";
        echo "<div class=\"bg-dark container card\"> 
                <div class=\"row\">
                  <div class=\"col-lg-4 mb-4\">
                    <img class=\"img-responsive\" src=\"$imagepath\" alt=\"Song Art/Image\" width=\"380\" height=\"380\">
                  </div>
                  <div class=\"col-lg-6 mb-4\">
                  <h2>Now playing: $item</h2>";

        echo "<div class=\"w3-light-grey\">";
        echo "<div id=\"songdurbar\" class=\"w3-container w3-cyan w3-center\" style=\"width:0%\">0%</div>";
        echo "</div>";

        $item = $row["Artist"];
        echo "<p>By: $item | ";  
        $item = $row["Version"];
        echo "$item - ";
        $item = $row["Year"];
        echo "$item</p>\n";

        $item = $row["Current"];
        $qcurr = "SELECT Name FROM Customers WHERE CustID = ?";
        $qresset = $pdo->prepare($qcurr);
        $qresset->execute(array($item));

        $item = $qresset->fetchColumn();
        echo "<p><b>Selected By: </b>$item</p>\n";

      echo "\t\t</div></div>\n\t</div>\n";
      }
      else
      {
        echo "<div class=\"w3-card w3-amber\">\n";
        echo "<h2>Now playing: N/A </h2>";
        echo "</div>";
      }

            echo "<br><br>\n\n";

            $q_reg = "SELECT Title, Song.Version, Name Customer FROM Song, Queues, Customers WHERE Song.SongID = Queues.SongID AND Song.Version = Queues.Version AND Customers.CustID = Queues.CustID ORDER BY Time";
            $q_pry = "SELECT Title, Song.Version, Name Customer, Money FROM Song, PriorityQueues, Customers WHERE Song.SongID = PriorityQueues.SongID AND Song.Version = PriorityQueues.Version AND Customers.CustID = PriorityQueues.CustID ORDER BY Time";


            $queue_res = $pdo->prepare($q_pry);
            $queue_res->execute();
            echo "<h3>Priority Queue</h3>";
            createTable($queue_res);


            $queue_res = $pdo->prepare($q_reg);
            $queue_res->execute();
            echo "<br><h3>Regular Queue</h3>";
            createTable($queue_res);


            echo "<br><p>If you'd like, you can queue up more songs by pressing the button below. Limit of 3 songs per Customer per queue. (i.e., 6 songs max)</p>";
        ?>
            <input type="submit" value="Go back to Song Select">
        </form>

        <br><br>


        <footer class="text-center text-lg-start bg-dark">
            <div class="container d-flex justify-content-center py-5">
            </div>
        
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
    </script>
    </body>
</html>