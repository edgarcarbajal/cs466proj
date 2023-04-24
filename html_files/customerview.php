<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <title>CSCI 466 Project - Karaoke Website: Customer Page</title>
    </head>

    <body>
        <h1>Pick a Song!</h1>

        <p>
            Choose a song to queue.
        </p>

    <?php
        include PDOStartup.php

        tblset = $pdo->prepare('SELECT * FROM Song');
        tblset->execute();

        createTable(tblset);
    ?>
        <a href="startpage.html">
            <input type="button" value="Go Back">
        </a>
    </body>
</html>