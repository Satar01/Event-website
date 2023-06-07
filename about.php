<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     //require_once("access_level.php");
     require("remove_login_cookies.php"); // for the logging the user out:
     //include("index.php");
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href=""> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
    </head>
    <body>
        <!--  Main Website code here: -->
        <h1>About Us</h1>
        <!-- Information here: -->
        <p>In here, it will contain informtion regarding the website functions here: </p>
    </body>
</html>