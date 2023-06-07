<?php
session_start();
     require("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     require("remove_login_cookies.php"); // for the logging the user out:
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href=""> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <!--  Main Website code here: -->
        <h1>Welcome to Addies Events </h1>
        <br>
        <br>
        <button><a href="search_bar.php">Looking for Events! Find them here using our Search Menu:</a></button>
        <br>
        <p>In here you will find all sort of events below.</p>
        <br><br>
        <button><a href="admin_details.php">Are You an Administrator! Click here to Login</a></button>
        <button><a href="login_form.php">Are You a User! Click here to Login</a></button>
    </body>
</html>