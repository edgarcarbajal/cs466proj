<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <title>CSCI 466 Project - Karaoke Website: DJ Page</title>
    </head>

    <body>
        <h1>Nothing here yet... (DJ View)</h1>

        <?php
        
        include "../php_files/PDOStartup.php";

        // give the dj the abilty to see regualr Queue
        echo "<h3>Queue</h3>";
        $queue = $pdo->prepare("SELECT * from Queues order by Time");
        $queue->execute();
        createTable($queue);
        
        // give the dj the ability to see PriorityQueue
        echo "<h3>PriorityQueue</h3>";
        $Pqueue = $pdo->prepare("SELECT * from PriorityQueues order by Time");
        $Pqueue->execute();
        createTable($Pqueue);

        // get first person from the queue and add it into where clause under
        $queue2 = $pdo->prepare("SELECT Name,Time from Customers,PriorityQueues where Customers.CustID = PriorityQueues.CustID order by Time");
        $queue2->execute();
        $result = $queue2 -> fetch(PDO :: FETCH_ASSOC);
        if($result)
        {
            echo "</br>";
            echo "<h1>";
            echo "Next to sing &nbsp" . $result['Name'];  
            echo "</br>";
            echo "</h1>";
        }

        ?>
      

        <a href="startpage.html">
            <input type="button" value="Go Back">
        </a>
    </body>
</html>
