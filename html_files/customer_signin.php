<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Sign In</title>
    </head>

    <body>
        <h1>Sign In, or create a new Customer ID</h1>

        <p>
            In order to select a song, you must first sign in by providing your Customer ID below.
            If you do not have a Customer ID, you can create one below.
        </p>

        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php" method="GET">

            <h2>Sign in using Customer ID</h2>
            <p>
                <label for="custid">Customer ID:</label><br>
                <input type="text" id="custid" name="custidtf"><br>
            </p>
            <input type="submit" value="Sign In">
        
        </form>

            <br><br>
        
        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/cust_cont.php" method="GET">
            <h2>Create Customer ID</h2>
            <p>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="nametf"><br>

                <label for="email">Email:</label><br>
                <input type="text" id="email" name="emailtf"><br>

                <label for="phone">Phone Number (no dashes):</label><br>
                <input type="text" id="phone" name="phonetf"><br>
            </p>
            <input type="submit" value="Create ID">

        </form>
            <?php
                include "../php_files/PDOStartup.php";
            
            
            ?>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>
    </body>
</html>