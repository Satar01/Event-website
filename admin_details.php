<?php
error_reporting(0);
session_start(); // check the user login to in server website:
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); 
     //include("welcome.php");
     //require("remove_login_cookies.php");
     //include("navbar.php");
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href=""> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>
    <body>
        <!-- All the main code here: -->
        <h1>Dashboard</h1>
        <br><br>
        <p>In here you'll be able to have a look at the admin's dashbaord to look at the website.</p>
        <div class="container my-5">
            <form id="form11" action="add_login_cookies.php" method="post">
                <!-- All the fields will be visible here: -->
                <label for="admin_name">Admin User Name</label>
                <input type="text" name="admin_name" autocomplete="off" required>
                <br><br>
                <label for="admin_password">Admin Password</label>
                <input type="password" name="admin_password" autocomplete="off" required>
                <br><br>
                <label for="security_question">Security Question</label>
                <input type="text" name="security_question" autocomplete="off" required>
                <br><br>
                <label for="security_question_answer">Security Question Answer</label>
                <input type="text" name="security_question_answer" autocomplete="off" required>
                <br><br>
                <button>Submit</button>
                <button>Reset</button>
            </form>
        </div>
        <br><br><br>
        <button><a href="home.php"></a>Back to the Main Page:</button>
        <button><a href="view_admin.php">Click here to View Admins:</a></button>
    </body>
</html>