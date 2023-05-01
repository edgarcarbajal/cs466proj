<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <title>CSCI 466 Project - Karaoke Website: Customer Account Creation Status</title>
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
              </ul>
            </div>
        </nav>
            <?php
                include "../php_files/PDOStartup.php";

                $cre_built = true;

                if(empty($_GET["nametf"]) || empty($_GET["emailtf"]) || empty($_GET["phonetf"]))
                {
                    $cre_built = false;
                }
                else
                {
                    try
                    {
                        $createCustID = $pdo->prepare("INSERT INTO Customers (Name, Email, Phone) VALUES (?, ?, ?)");
                        $createCustID->execute(array($_GET["nametf"], $_GET["emailtf"], $_GET["phonetf"]));
                    }
                    catch(PDOException $err)
                    {
                        echo "Error MSG - Failed to create Customer ID: " . $err->getMessage();
                        $cre_built = false;
                    }
                }


                if(!$cre_built)
                {
                    echo "<h1>Falied to create Customer ID!</h1>";
                    echo "<p>We did not get the right information in the text fields, please return to the previous page and try again.</p>";
                }
                else
                {
                    echo "<h1>Created Customer ID!</h1>";
                    echo "<p>Below is your new Customer ID, use it to sign in in order to use the karaoke service!</p>";

                    $getCustID = $pdo->prepare("SELECT CustID FROM Customers ORDER BY CustID DESC");
                    $getCustID->execute();

                    $idstr = $getCustID->fetchColumn();

                    echo "<h2>Customer ID: " . $idstr ." </h2>";

                    echo "<p>You can return to the previous page and enter your new Customer ID, or press the button below to sign in directly!</p>\n";

                    echo "<form action=\"customerview.php\" method=\"GET\">\n";
                    echo "<input type=\"hidden\" name=\"custidtf\" value=\"$idstr\">\n"; 
                    echo "<input type=\"submit\" value=\"Sign In Directly\">\n";
                    echo "</form>\n";
    
                }
                
            ?>

        <a href="customer_signin.php">
            <input type="button" value="Return to Sign In/Sign Up page">
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