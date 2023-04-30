<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css_files/websitestyle1.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
        <title>CSCI 466 Project - Karaoke Website: Customer Account Creation Status</title>
    </head>

    <body>

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

                    echo "<form action=\"https://students.cs.niu.edu/~z1895668/cs466proj/html_files/customerview.php\" method=\"GET\">\n";
                    echo "<input type=\"hidden\" name=\"custidtf\" value=\"$idstr\">\n"; 
                    echo "<input type=\"submit\" value=\"Sign In Directly\">\n";
                    echo "</form>\n";
    
                }
                
            ?>

        <a href="customer_signin.php">
            <input type="button" value="Return to Sign In/Sign Up page">
        </a>
    </body>
</html>