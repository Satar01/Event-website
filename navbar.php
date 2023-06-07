<?php
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
?>
<!Doctype html>
<html>
    <head>
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navigation Bar</title>
    </head>
    <body>
       <nav class="navbar navbar-default">
       <div class="container-fluid">
       <div class="navbar-header">
       </div>
         <ul class="nav navbar-nav">
             <li><a href="home.php">Home</a></li>
             <li><a href="display_events.php">Display Events</a></li>
             <li><a href="browse_events.php">Manage Events</a></li>
             <li><a href="add_events_form.php">Add Events</a></li>
             <li><a href="edit_events_form.php">Modify Events</a></li>
             <li><a href="delete_events_form.php">Remove Events</a></li>
	         <li><a href="about.php">About</a></li>
             <li><a href="contact_us.php">Contact Us</a></li>
	         <li><a href="login.php">Login</a></li>
	         <li><a href="signup.php">Sign Up</a></li>
             <li><a href="dashboard.php">Dashboard</a></li>
             <li><a href="admin_details.php">Administrator</a></li>
         </ul>
       </div>
       </nav>
    </body>
</html>