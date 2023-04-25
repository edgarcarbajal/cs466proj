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
    
        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/waitroom.php" method="GET">

        <?php
            include "../php_files/PDOStartup.php";

            $tblset = $pdo->prepare("SELECT SongID, Title, Genre, Version, Year, Duration FROM Song");
            $tblset->execute();

            createTableRadio($tblset);
        ?>

        <input type="submit" value="Submit">
        </form>

        <a href="startpage.html">
            <input type="button" value="Go Back">
        </a>
    </body>
</html>