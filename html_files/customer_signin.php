<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Sign In</title>
    </head>

    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-3">
            <div class="container-fluid">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" href="startpage.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="customer_signin.php">Sing a Song</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="djview.php">DJ Interface</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer_signin.php">Login Page</a>
                </li>
              </ul>
            </div>
        </nav>
        <h1>Sign In, or create a new Customer ID</h1>

        <p>
            In order to select a song, you must first sign in by providing your Customer ID below.
            If you do not have a Customer ID, you can create one below.
        </p>

        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php" method="GET">

            <h2>Sign in using Customer ID</h2>
            <p>
                <label for="custid">Customer ID:</label><br>
                <input type="text" id="custid" name="custidtf" required><br>
            </p>
            <input type="submit" value="Sign In">
        
        </form>

            <br><br>
        
        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/cust_cont.php" method="GET">
            <h2>Create Customer ID</h2>
            <p>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="nametf" required><br>

                <label for="email">Email:</label><br>
                <input type="text" id="email" name="emailtf" required><br>

                <label for="phone">Phone Number (no dashes):</label><br>
                <input type="text" id="phone" name="phonetf" required><br>
            </p>
            <input type="submit" value="Create ID">

        </form>
            <?php
                include "../php_files/PDOStartup.php";
            
            
            ?>

        <a href="startpage.html">
            <input type="button" value="Go Back to Start Page">
        </a>
        <footer class="text-center text-lg-start bg-dark">
            <div class="container d-flex justify-content-center py-5">
            </div>
        
            <!-- Copyright -->
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2023 Created by: Edgar, Yonas, Mohamed
            </div>
            <!-- Copyright -->
          </footer>
    </body>
</html>