<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Page</title>
    </head>


    <body>
        <h1>Pick a Song!</h1>

        <p>
            Choose a song to queue by writing the SongID below.
        </p>
    
        <form id="songdisplay" action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php" method="GET">
        <?php
            include "../php_files/PDOStartup.php";
            include "../php_files/utilities.php";

            #save session var info for this form(filtering/ordering form)
            $get_varnames = array("custidtf","dd_filter", "filtertxt");
            // "SongID", "Title", "Artist", "Genre", "Version", "Year", "Duration" <- adding these makes the sort not work anymore...
            savesession_GET($get_varnames);


            #Check for valid ID in order to properly queue
            $id_field = $_GET["custidtf"];
            $id_q = "SELECT CustID FROM Customers WHERE CustID = ?";
            $id_res = $pdo->prepare($id_q);
            $id_res->execute(array($id_field));

        if(!isset($id_field) || empty($id_field) || isEmptySetSQL($id_res))
        {
            echo "<div class=\"w3-card w3-red\"> <h1>Invalid Customer ID</h1> <br> <p>ID entered: \"$id_field\"</p> </div>\n";
            echo "<p>Please return to the Sign In page and insert a valid Customer ID.</p>";
        }
        else
        {
            $id_q = "SELECT Name FROM Customers WHERE CustID = ?";
            $id_res = $pdo->prepare($id_q);
            $id_res->execute(array($id_field));
            $cust_name = $id_res->fetchColumn();

            echo "<h2>Welcome $cust_name, to the Karaoke Service!</h2>\n\n";

            $ddb1_id = "dd_filter";
            $ddq1 = array("Title", "Artist", "Genre", "Version", "Year", "Duration", "Contributor");

            echo "<p>";
            echo "<label for=\"$ddb1_id\">Choose a section to filter</label>";
            createDropdownNorm($ddq1, $ddb1_id);

            echo "</p><br><br>";

            echo "<input type =\"text\" id=\"filtertxt\" name=\"filtertxt\">";

            echo "<input type=\"submit\" value=\"Filter Search\">";

            echo "<br><br>";
            

            #main query to build search table
            $q = "SELECT Song.SongID, Title, Contributor.Name Artist, Genre, Song.Version, Year, Duration FROM Song, Contributor, Contributes WHERE ";

            $qdefault = "Song.SongID = Contributes.SongID AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist' ";
            $qextra = "Song.SongID IN(SELECT SongID FROM Contributes WHERE ContribID IN(SELECT ContribID FROM Contributor WHERE Name LIKE ?)) AND ";
            $qsuffix = "ORDER BY ";

            #parts to append if meet requirements set by dropdown
            $qtitle = $qart = $qdefault . "AND Title LIKE ? " . $qsuffix;
            $qart = $qdefault . "AND Contributor.Name LIKE ? " . $qsuffix;
            $qgen = $qdefault . "AND Genre LIKE ? " . $qsuffix;
            $qver = $qdefault . "AND Song.Version LIKE ? " . $qsuffix;
            $qyear = $qdefault . "AND Year LIKE ? " . $qsuffix;
            $qdur = $qdefault . "AND Duration LIKE ? " . $qsuffix;

            #determine which query is run when loading in search table
            $do_filter = false;
            $q_arg = "";
            if(empty($_GET["filtertxt"])) { $q = $q . $qdefault . $qsuffix; }
            else
            {
                $q_arg = $_GET["filtertxt"];    

                if($_GET["dd_filter"] == "Title") { $q = $q . $qtitle; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Artist") { $q = $q . $qart; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Genre") { $q = $q . $qgen; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Version") { $q = $q . $qver; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Year") { $q = $q . $qyear; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Duration") { $q = $q . $qdur; $do_filter = true; }
                elseif($_GET["dd_filter"] == "Contributor") { $q = $q . $qextra . $qdefault . $qsuffix; $do_filter = true; }
            }

            #get the current column that the table is being ordered by
            $sort_str = "";
            $headerarr = array("SongID", "Title", "Artist", "Genre", "Version", "Year", "Duration");

            for ($i = 0; $i < sizeof($headerarr); $i++)
            {
                if(isset($_GET[$headerarr[$i]])) { $sort_str = $headerarr[$i]; break;}
            }
            
            # sort by column header clicked - cannot use execute to place values here, must be done directly for some reason
            $current_key = "SongID";
            $current_sort = "ASC";
            if(empty($sort_str)) 
            { 
                echo "<h3>Sorted by: SongID, ascending.</h3>";
                $q = $q . "SongID ASC";

                $current_key = "SongID";
                $current_sort = "ASC";

                $tblset = $pdo->prepare($q);

                #filter results if selected a category and given a non-empty string!
                if($do_filter) { $tblset->execute(array("%$q_arg%")); }
                else { $tblset->execute(); }
            }
            else 
            { 
                echo "<h3>Sorted by: " . $sort_str . ", " . $_GET[$sort_str] . "</h3>";
                
                $q = $q . $sort_str . " " . $_GET[$sort_str];

                $current_key = $sort_str;
                $current_sort = $_GET[$sort_str];

                $tblset = $pdo->prepare($q);
                
                #filter results if selected a category and given a non-empty string!    
                if($do_filter) { $tblset->execute(array("%$q_arg%")); }
                else { $tblset->execute(); }
            }

            createTableRadio($tblset, $current_key, $current_sort);

            #do this again for second form before submission!
            $get_varnames = array("custidtf","dd_filter", "filtertxt");
            savesession_GET($get_varnames);
            
            echo "<input type=\"submit\" value=\"Submit\">\n</form>";

        }
        ?>

        <a href="startpage.html">
            <input type="button" value="Go Back to home page">
        </a>

        <a href="customer_signin.php">
            <input type="button" value="Go Back to Sign In">
        </a>


        <script>
            function sortBy(item_id) 
            { 
                console.log(item_id);
                var current_value = document.getElementById(item_id).value;
                document.getElementById("songdisplay").reset();

                if(current_value == "ASC") 
                    document.getElementById(item_id).value = "DESC";
                else
                    document.getElementById(item_id).value = "ASC";

                document.getElementById("songdisplay").submit();
            }

        </script>
    </body>
</html>
