<?php
# CSCI 466 Project - PDOStarup.php 
#
#   -Edgar, Yonas, & Mohamed
#
# File that startsup the PDO object. Always include this file in a new page.
# E.g: When on a different html or php file in the website.
#
# *If you are running this php file in your own public_html directory, you must supply your own
#  "MariaDB_secrets.php" file in order to login to the database, and use PDO.
#  Place the secrets file in the same directory where the webpage files are located in!
# =============================================================================


include "MariaDB_secrets.php"; 
#login creds stored in here as variables
include "showTables.php"; 
#function stored here that helps with printing tables
try 
{
    // if something goes wrong, an exception is thrown
    $temp = "mysql:host=courses;dbname=";
    $dsn = $temp . $username; 
    //should now read: "mysql:host=courses;dbname=(your zID here)"
    
    $pdo = new PDO($dsn, $username, $password);
}
catch(PDOexception $e) 
{ 
    // handle that exception
    echo "Connection to database failed: " . $e->getMessage();
}

# Set error handling to catch any errors:
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);