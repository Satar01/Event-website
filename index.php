<?php
session_start();
     require_once("connect.php"); // for database connections:
     require("navbar.php");
     include("functions.php"); // this file inclusion will functions for details:
     //require_once("access_level.php");
     require("remove_login_cookies.php"); // for the logging the user out:
     $user_data = check_login($website_connect); //  checks the admin login status:

?>
<!DOCTYPE html>
<html>
     <head></head>
     <body>
          <?php echo $user_data['user_name'];?>
     </body>
</html>