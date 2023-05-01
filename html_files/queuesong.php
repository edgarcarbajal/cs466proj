<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>CSCI 466 Project - Karaoke Website: Queue Song</title>
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
              </ul>
            </div>
        </nav>
        <h1>Selected Song Info & Queueing</h1>
        <p>Here you can see the information (contributors) about the song, and choose a queue to line up in.</p>

        <form action="waitroom.php" method="GET">

        <?php
            include "../php_files/PDOStartup.php";
            include "../php_files/utilities.php";
            
            #save session var info for this form(filtering/ordering form)
            $get_varnames = array("custidtf","selectsong");
            savesession_GET($get_varnames);

            #check if session info is available
            $id_field = $_GET["custidtf"];
            $song_field = $_GET["selectsong"];

            $id_field = $_GET["custidtf"];
            $id_q = "SELECT CustID FROM Customers WHERE CustID = ?";
            $id_res = $pdo->prepare($id_q);
            $id_res->execute(array($id_field));

        if(!isset($id_field) || empty($id_field) || isEmptySetSQL($id_res))
        {
            echo "<div class=\"w3-card w3-red\"> <h1>Invalid Customer ID</h1> <br> <p>ID entered: \"$id_field\"</p> </div>\n";
            echo "<p>Please return to the Sign In page and insert a valid Customer ID.</p>";
        }
        elseif(!isset($song_field) || empty($song_field))
        {
            echo "<div class=\"w3-card w3-red\"> <h1>Invalid Song Selected!</h1> <br> <p>Song File entered: \"$song_field\"</p> </div>\n";
            echo "<p>Please return to the Song Select page and select a song before pressing the Submit button.</p>";
        }
        else
        {

            #get primary keys for song
            $karaoke_file = explode(",", $_GET["selectsong"]);

            #get title to display
            $q_info = "SELECT Title FROM Song WHERE SongID = ? AND Version = ?";
            $resinfo = $pdo->prepare($q_info);
            $resinfo->execute($karaoke_file);

            $stitle = $resinfo->fetchColumn();

            #start of song info card:
            echo "<h2>Selected Song Info:</h2><div class=\"w3-container w3-card-4 w3-teal w3-bottombar\">";
            echo "<h3>$stitle</h3> <br>";

            $q_info = "SELECT Name, Role FROM Contributor, Contributes WHERE Contributor.ContribID = Contributes.ContribID AND Contributes.SongID = ? AND Contributes.Version = ?";
            $resinfo = $pdo->prepare($q_info);
            $resinfo->execute($karaoke_file);

            createTable($resinfo);

            echo "<br></div>\n<br><br>\n";


            echo "<h2>Select Queue</h2>\n";
            echo "<p>You can select the queue that you prefer to wait in line for. There is the regular queue which is free, and the priority queue which costs money to line up in.</p>\n";
            echo "<p>The queues are sorted ascending so that the first row is the person who is first in line(although the DJ has the last decision).</p>\n";

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

            echo "<br><p>Select the queue you wish to enter below. If you are using the Priority Queue, make sure to fill in the Money field. This field will be disregarded if you choose the regular queue option.</p>";


            echo "<label for=\"isregQ\">Regular Queue</label>";
            echo "<input type=\"radio\" id=\"isregQ\" name=\"queuetype\" value=\"reg\" required><br>";
            echo "<label for=\"ispryQ\">Priority Queue</label>";
            echo "<input type=\"radio\" id=\"ispryQ\" name=\"queuetype\" value=\"pry\" required><br><br>";

            echo "<label for=\"moneytf\">Payment: $</label>";
            echo "<input type=\"number\" id=\"moneytf\" name=\"moneytf\" min=\"1\" max=\"100\" step=\"0.01\" value=\"1.00\">\n"; 

           
            echo "<input type=\"submit\" value=\"Queue up song choice\"> <br><br>\n";   
        }    
        ?>

        </form>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>


        <form action="customerview.php" method="GET">
        <?php
            #get the tags again to submit before going back
            $get_varnames = array("custidtf","selectsong");
            savesession_GET($get_varnames);
        ?>
            <input type="Submit" value="Go Back to Song Select">
        </form>
        
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