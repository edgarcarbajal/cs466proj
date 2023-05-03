<?php
# CSCI 466 Project - showTables.php
#  
# Functions that creates a tables and other objects in html tags from a result set given by PDO.
# These functions return booleans to inform the caller whether an empty set was found or not.
# ===============================================
function createTable($result_set)
{
    if($result_set) 
    {
        echo "<table class=\"table table-bordered\">\n";
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

# this should be used only for custview
function createTableRadio($result_set, $curr_sortkey, $curr_sort)
{
    if($result_set) 
    {
        echo "<table class=\"table table-bordered\">\n";
        $i = 0;
 
        while($row = $result_set->fetch(PDO::FETCH_ASSOC))
        {
            #print headers of tables on top row
            if($i == 0)
            {
                echo "<tr>\n";
                foreach($row as $key => $item)
                {
                    $buttonlbl = "";
                    if($curr_sort == "ASC") { $buttonlbl = $key . " /\ "; }
                    else { $buttonlbl = $key . " \/ "; }

                    if($curr_sortkey == $key)
                        echo "<th><button class=\"btn btn-secondary\" id=\"$key\" name=\"$key\" value=\"$curr_sort\" onclick=\"sortBy('$key')\">$buttonlbl</button></th>"; 
                    else
                        echo "<th><button class=\"btn btn-secondary\" id=\"$key\" name=\"$key\" value=\"ASC\" onclick=\"sortBy('$key')\">$key</button></th>"; 
                }
                echo "</form>";
                echo "</tr>\n";
                echo "<form action=\"../html_files/queuesong.php\" method=\"GET\">";
            }
            echo "<tr>\n";
            $j = 0;
            foreach($row as $key => $item) 
            {
                $ver = $row["Version"];
                if($j == 0)
                {
                    echo "<td>";
                    echo "<input type=\"radio\" id=\"song_$i\" name=\"selectsong\" value=\"$item,$ver\" required>";
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

#use this if grabbing single values from SQL queries
function createDropdown($result_set, $elem_name)
{
    if($result_set) 
    {
        echo "<select id=\"$elem_name\" name=\"$elem_name\">\n";
        $i = 0;
 
        while($item = $result_set->fetchColumn())
        {
            echo "<option value=\"$item\">$item</option>";
            $i++;
        }
        echo "</select>\n"; 
        if($i == 0)
        {
            echo "<p>Empty set! No dropdown was created.</p>\n";
            return false; 
        }
    }
    else{ echo "<p>Dropdown not created - Failed to obtain a result set.</p>\n"; return false; }
 
    return true;
}

# this is used if not grabbing from SQL query
function createDropdownNorm($arr, $elem_name)
{
    echo "<select id=\"$elem_name\" name=\"$elem_name\">\n";
 
    for($i = 0; $i < sizeof($arr); $i++)
    {
        $str = $arr[$i];
        echo "<option value=\"$str\">$str</option>";
    }
 
    return true;
}


function createTableRadioDJ($result_set, $queuetype)
{
    if($result_set) 
    {
        echo "<table class=\"table table-bordered\">\n";    
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
                if($j == 0) #first row is song id
                {
                    $ver = $row['Version'];
                    $cid = $row['CustID'];
                    echo "<td>"; 
                    echo "<input type=\"radio\" id=\"song_$i\" name=\"selectqueue\" value=\"$queuetype,$item,$ver,$cid\">";
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