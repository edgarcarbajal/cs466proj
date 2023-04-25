<?php
# CSCI 466 Project - showTables.php
#  
# A function that creates a table in html tags from a result set given by PDO.
# Returns a boolean to inform the caller whether an empty set was found or not.
# ===============================================
function createTable($result_set)
{
    if($result_set) 
    {
        echo "<table border=1 cellspacing=1>\n";
        $i = 0;
 
        while($row = $result_set->fetch(PDO::FETCH_ASSOC))
        {
            #print headers of tables on top row
            if($i == 0)
            {
                echo "<tr>\n";
                foreach($row as $key => $item) { echo "<th>$key</th>"; }
                echo "</tr>\n";
            }
            echo "<tr>\n";
            foreach($row as $key => $item) { echo "<td>$item</td>"; }
            echo "</tr>\n";
            $i++;
        }
        echo "</table>\n"; 
        if($i == 0)
        {
            echo "<p>Empty set! Nothing was shown.</p>\n";
            return false; 
        }
    }
    else{ echo "<p>Table not created - Failed to obtain a result set.</p>\n"; return false; }
 
    return true;
}


function createTableRadio($result_set)
{
    if($result_set) 
    {
        echo "<table border=1 cellspacing=1>\n";
        $i = 0;
 
        while($row = $result_set->fetch(PDO::FETCH_ASSOC))
        {
            #print headers of tables on top row
            if($i == 0)
            {
                echo "<tr>\n";
                foreach($row as $key => $item) { echo "<th>$key</th>"; }
                echo "</tr>\n";
            }
            echo "<tr>\n";
            $j = 0;
            foreach($row as $key => $item) 
            {
                if($j == 0)
                {
                    echo "<td>"; 
                    echo "<input type=\"radio\" id=\"song_$i\" name=\"selectsong\" value=\"$item\">";
                    echo "<label for=\"song_$i\">$item</label></td>";
                }
                else{ echo "<td>$item</td>"; }  
                $j++;
            }
            echo "</tr>\n";
            $i++;
        }
        echo "</table>\n"; 
        if($i == 0)
        {
            echo "<p>Empty set! Nothing was shown.</p>\n";
            return false; 
        }
    }
    else{ echo "<p>Table not created - Failed to obtain a result set.</p>\n"; return false; }
 
    return true;
}
?>