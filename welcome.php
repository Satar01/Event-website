<?php
session_start();
     require("connect.php");
     //include("functions.php");
     //$admin_data = check_login($website_connect); // checks the users login status:

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
</head>
<body>
    <!-- All the main code starts here: -->
    <p>Welcome <?php echo $user_data['user_name'];?> </p>
    <br><br><br>
</body>
</html>