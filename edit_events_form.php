<?php
error_reporting(0);
session_start();
     require_once("connect.php");
     include("index.php");
     //require_once("access_level.php");
     require("remove_login_cookies.php"); // for the logging the user out:
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href="">  for website style file local: 
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit & Update Events Form: </title>
    </head>
    <body>
        <h1>Edit & Update Your Event Here: </h1>
        <br><br>
        <p>In here You will be able to add your event onto the website: </p>
        <!-- Main Code starts from here: -->
        <button class="btn btn-seconadry m1-2"><a href = "logout.php">Logout</a></button>
		<br><br>
		 <!--Hello <?php //echo $user_data['user_name'];?> -->
        <div id= "container my-5">
            <form name="form3" action="edit_events.php" method="post">
                <!-- All form fields start from here: -->
                <label for= "event_id">Event ID: </label>
                <input type="number" id="event_id" name="id" autocomplete="off" required>
                <br><br>
                <label for="event_name">Event Name To Update: </label>
                <input type="text" id="event_name" name="event_name" autocomplete = "off" required>
                <br><br>
                <label for="event_date">Event Date To Update: </label>
                <input type="text" id="event_date" name="event_date" autocomplete = "off" required>
                <br><br>
                <label for="event_location">Event Location To Update: </label>
                <input type="text" id="event_location" name="event_location" autocomplete = "off" required>
                <br><br>
                <label for="event_description">Event Description To Update: </label>
                <input type= "memo" id="event_description" name="event_description" autocomplete = "off" required>
                <br><br>
                <!-- Buttons here below: -->
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                <button type="reset" class="btn btn-secondary m1-2" name="reset6">Reset</button> 
                <br><br><br><br>
                <!-- Option to go back to browse: -->
                <button><a href="browse_events.php">Changed Your Mind! Click here to go back to Main Events Page: </a></button>
            </form>
        </div>
    </body>
</html>