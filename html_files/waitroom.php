<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <title>CSCI 466 Project - Karaoke Website: Customer Waiting Room</title>
    </head>

    <body>
        <h1>Waiting Room</h1>

        <p>
            Choose a song to queue by writing the SongID below.
        </p>

        <?php
            include "PDOStartup.php";
            
            $test = $_GET["selectsong"];
            echo "selectsong = $test";
        ?>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>
    </body>
</html>