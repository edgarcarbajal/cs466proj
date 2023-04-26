<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
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

            $ddb1_id = "genre_dd";
            $ddq1 = $pdo->prepare("SELECT DISTINCT Genre FROM Song");
            $ddq1->execute();
            echo "<p>";
            echo "<label for=\"$ddb1_id\">Choose a Genre to filter</label>";
            createDropdown($ddq1, $ddb1_id);

            echo "</p><br><br>";

            echo "<input type=\"submit\" value=\"Filter Search\">";

            echo "<br><br>";    


            $q = "SELECT Song.SongID, Title, Contributor.Name Artist, Genre, Song.Version, Year, Duration FROM Song, Contributor, Contributes ";
            $q = $q . "WHERE Song.SongID = Contributes.SongID AND Contributor.ContribID = Contributes.ContribID AND Role = 'Artist' ORDER BY ";

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
                $tblset->execute(); 
            }
            else 
            { 
                echo "<h3>Sorted by: " . $sort_str . ", " . $_GET[$sort_str] . "</h3>";
                
                $q = $q . $sort_str . " " . $_GET[$sort_str];

                $current_key = $sort_str;
                $current_sort = $_GET[$sort_str];

                $tblset = $pdo->prepare($q);
                $tblset->execute(); 
            }

            createTableRadio($tblset, $current_key, $current_sort);
        ?>
        </form>

        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/waitroom.php" method="GET">
            <input type="submit" value="Submit">
        </form>

        <a href="startpage.html">
            <input type="button" value="Go Back">
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