<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <title>CSCI 466 Project - Karaoke Website: DJ Page</title>
    </head>

    <body>
        <h1>Nothing here yet... (DJ View)</h1>
        <form action = "https://students.cs.niu.edu/~z1899807/cs466proj/html_files/djview.php" method = "GET">
        <?php
        
        include "../php_files/PDOStartup.php";
        // find a way to check if the url has php get values
        if(isset($_GET['PQUEUE']))
        {
        $del = $pdo->prepare("DELETE FROM PriorityQueues where CustID = ? AND Version = ? and SongID = ?");

        $ex = explode(",",$_GET['PQUEUE']);
        $del->execute($ex);


        if(empty($ex))
        {
            echo "empty";
        }
        else 
        {
            foreach($ex as $value)
            {
                echo "&nbsp" . $value;
            }
        }
    }
        // give the dj the abilty to see regualr Queue
        echo "<h3>Queue</h3>";
        $queue = $pdo->prepare("SELECT * from Queues order by Time");
        $queue->execute();
        
        createTblRadio($queue);
        
        // give the dj the ability to see PriorityQueue
        echo "<h3>PriorityQueue</h3>";
        $Pqueue = $pdo->prepare("SELECT * from PriorityQueues order by Time");
        $Pqueue->execute();
        createTblRadio($Pqueue);
        
        // get first person from the queue and add it into where clause under
        $queue2 = $pdo->prepare("SELECT Name,Time from Customers,PriorityQueues where Customers.CustID = PriorityQueues.CustID order by Time");
        $queue2->execute();
        $result = $queue2 -> fetch(PDO :: FETCH_ASSOC);

    
        
        ?>
            <input type = "submit" value = "Submit">
        </form>
      

        <a href="startpage.html">
            <input type="button" value="Go Back">
        </a>
    </body>
</html>
