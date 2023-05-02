<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Sign In</title>
    </head>

    <body style="background-color: indigo;">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark py-3">
            <div class="container-fluid">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="startpage.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="customer_signin.php">Sing a Song</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="djview.php">DJ Interface</a>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container align-items-center justify-content-center text-light">
            <h1 class="container align-items-center justify-content-center">Sign In, or create a new Customer ID</h1>

               <p>
                In order to select a song, you must first sign in by providing your Customer ID below.
                If you do not have a Customer ID, you can create one below.
                </p>
        </div>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php" method="GET">
                            <h3 class="mb-5">Sign in</h3>
    
                            <div class="form-outline mb-4">
                            <input type="text" id="custid" name="custidtf" required class="form-control form-control-lg" />
                            <label class="form-label" for="custid">Customer ID:</label>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">Login</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Register</h3>
                            <form action="https://students.cs.niu.edu/~z1895668/cs466proj/html_files/cust_cont.php" method="GET">

                            <div class="form-outline mb-4">
                            <input type="text" id="name" name="nametf" required class="form-control form-control-lg" />
                            <label class="form-label" for="name">Name</label>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="text" id="email" name="emailtf" required class="form-control form-control-lg" />
                            <label class="form-label" for="email">Email</label>
                            </div>

                            <div class="form-outline mb-4">
                            <input type="text" id="phone" name="phonetf" required class="form-control form-control-lg" />
                            <label class="form-label" for="phone">Phone Number (No Dashes):</label>
                            </div>

                            <button class="btn btn-primary btn-lg btn-block" type="submit" value="Create ID">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <?php
            include "../php_files/PDOStartup.php";
        
        
        ?>

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