<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Waiting Room</title>
    </head>

    <body>
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
                <li class="nav-item">
                    <a class="nav-link" href="customer_signin.php">Login Page</a>
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

            # insert only if we have not refreshed the page!
            if($qType == "reg")
            {
                $qin_res = $pdo->prepare($qin_reg); 
                $qin_res->execute($args);
            }
            elseif($qType == "pry")
            {
                array_push($args, $_GET["moneytf"]);
                $qin_res = $pdo->prepare($qin_pry); 
                $qin_res->execute($args);
            }


            echo "<h2>Current Playing Song:</h2>";
            echo "<br><br>\n\n";

            $q_reg = "SELECT Title, Song.Version, Name Customer FROM Song, Queues, Customers WHERE Song.SongID = Queues.SongID AND Song.Version = Queues.Version AND Customers.CustID = Queues.CustID ORDER BY Time";
            $q_pry = "SELECT Title, Song.Version, Name Customer, Money FROM Song, PriorityQueues, Customers WHERE Song.SongID = PriorityQueues.SongID AND Song.Version = PriorityQueues.Version AND Customers.CustID = PriorityQueues.CustID ORDER BY Time";

            $queue_res = $pdo->prepare($q_reg);
            $queue_res->execute();
            echo "<h3>Regular Queue</h3>";
            createTable($queue_res);

            $queue_res = $pdo->prepare($q_pry);
            $queue_res->execute();
            echo "<br><h3>Priority Queue</h3>";
            createTable($queue_res);


            echo "<br><p>If you'd like, you can queue up more songs by pressing the button below. Limit of 3 songs per Customer per queue. (i.e., 6 songs max)</p>";
        ?>
            <input type="submit" value="Go back to Song Select">
        </form>

        <br><br>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>
        <footer class="text-center text-lg-start bg-dark">
            <div class="container d-flex justify-content-center py-5">
            </div>
        
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 Created by: Edgar, Yonas, Mohamed
            </div>
            <!-- Copyright -->
          </footer>
    </body>
</html>