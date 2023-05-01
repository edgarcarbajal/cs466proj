<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Waiting Room</title>
    </head>

    <body>
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

    </body>
</html>