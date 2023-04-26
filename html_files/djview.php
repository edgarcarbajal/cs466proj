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
        createTableRadio($queue);
        
        // give the dj the ability to see PriorityQueue
        echo "<h3>PriorityQueue</h3>";
        echo "<form method = \"get\"";
        $Pqueue = $pdo->prepare("SELECT * from PriorityQueues order by Time");
        $Pqueue->execute();
       echo "<table border = 1 cellspacing = 1>
       <thead>
         <tr>
         <h1>
           <th>CustID &nbsp;</th>
           <th>SongID &nbsp;</th>
           <th>Version &nbsp;</th>
           <th>Time &nbsp;</th>
           <th>&nbsp; Money &nbsp;</th>
           </h1>
         </tr>
       </thead>
       <tbody>";
        while($row = $Pqueue -> fetch())
        {
            $id = $row['CustID'];
            $Song = $row['SongID'];
            $Version = $row['Version'];
            $Time = $row['Time'];
            $Money = $row['Money'];
            echo "<h1><tr><td><input type='radio' name='Pqueue' value='$Song' '$id'>$id &nbsp</td><td>$Song &nbsp</td><td>$Version &nbsp </td><td>$Time &nbsp</td><td>$Money &nbsp </td></tr></h1>";
        }
        echo "</tbody></table>";

        $queue2 = $pdo->prepare("SELECT * from Customers,PriorityQueues where Customers.CustID = PriorityQueues.CustID order by Time");
        $queue2->execute();
        $result = $queue2 -> fetch(PDO :: FETCH_ASSOC);

        echo "<form method = \"post\"><button type = \"submit\" name = \"Delete\" value = \"clicked\">SING</button></form>";
        if(isset($_GET['Pqueue'])&& $_GET['Delete'] === 'clicked')
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
