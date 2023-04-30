<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Queue Song</title>
    </head>

    <body>
        <h1>Selected Song Info & Queueing</h1>
        <p>Here you can see the information (contributors) about the song, and choose a queue to line up in.</p>


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
            echo "<p>The queues are sorted ascending so that the first row is the person who will be playing the next song.</p>\n";

            $q_reg = "SELECT Title, Song.Version, Name Customer FROM Song, Queues, Customers WHERE Song.SongID = Queues.SongID AND Song.Version = Queues.Version AND Customers.CustID = Queues.CustID ORDER BY Time";
            $q_pry = "SELECT Title, Song.Version, Name Customer FROM Song, PriorityQueues, Customers WHERE Song.SongID = PriorityQueues.SongID AND Song.Version = PriorityQueues.Version AND Customers.CustID = PriorityQueues.CustID ORDER BY Time";

            $queue_res = $pdo->prepare($q_reg);
            $queue_res->execute();
            echo "<h3>Regular Queue</h3>";
            createTable($queue_res);

            $queue_res = $pdo->prepare($q_pry);
            $queue_res->execute();
            echo "<h3>Priority Queue</h3>";
            createTable($queue_res);
        }    
        ?>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>


        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php" method="GET">
        <?php
            #get the tags again to submit before going back
            $get_varnames = array("custidtf","selectsong");
            savesession_GET($get_varnames);
        ?>
            <input type="Submit" value="Go Back to Song Select">
        </form>
    </body>
</html>