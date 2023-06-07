<?php
error_reporting(0);
session_start(); // this is to check the user's ID:
     require_once("connect.php"); // this connects with the database:
     //require_once("access_level.php");
     require("remove_login_cookies.php"); // for the logging the user out:
     include("index.php");
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href=""> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Delete Events Form: </title>
    </head>
    <body>
        <h1>Delete Your Event Here: </h1>
        <br><br>
        <p>In here You will be able to delete your event onto the website: </p>
        <!-- Main Code starts from here: -->
        <button class="btn btn-seconadry m1-2"><a href = "logout.php">Logout</a></button>
		<br><br>
		 <!--Hello <?php //echo $user_data['user_name'];?> -->
        <div id= "box">
            <form name="form2" action="delete_events.php" method="post">
                <!-- All form fields start from here: -->
                <label for= "event_id">Event ID: </label>
                <input type="number" id="event_id" name="id" autocomplete="off" required>
                <br><br>
                <!-- Buttons here below: -->
                <button type="submit" name="delete1" class="btn btn-primary">Delete Selected Items</button>
                <button type="reset" class="btn btn-secondary m1-2" name="reset5">Clear</button> 
                <br><br><br><br>
                <!-- Option to go back to browse: -->
                <button><a href="browse_events.php">Changed Your Mind! Click here to go back to Main Events Page: </a></button>
            </form>
        </div>
    </body>
</html>