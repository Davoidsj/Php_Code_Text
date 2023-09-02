<?php 


$cookie_name = "user";
$cookie_variable = "Yahoo Baba";


setcookie($cookie_name,$cookie_variable,time()+(86400),"/");




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Burger Paradise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Burger Paradise</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
  
    <footer style="margin-top:20px;">
        <p>&copy; 2023 Burger Paradise</p>
    </footer>
</body>
</html>
