<?php
session_start();
     require("connect.php");
     if($_SERVER['REQUEST_METHOD'] == "post"){
          $user_blocked = $_POST['user_blocked'];
          $reason_why = $_POST['reason_why'];
          // another check:
          if(!empty($user_blocked) && !empty($reason_why) && !is)is_numeric($user_blocked) && !is_numeric($reason_why){
               $access_control_query = "insert into restricted_users (user_blocked, reason_why) values('$user_blocked', '$reason_why')"
               $result_checker = mysqli_query($website_connect, $access_control_query);
               
               if(!$result_checker){
                    echo "Error! " .mysqli_error($website_connect);
                    die;
               }else{
     	echo "Processed Successful!";
     	die;
               }
          }
     }
?>
<Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap style -->
        <title>Display Events: </title>
    </head>
    <body>
        <div>
             <form method="post" action="auth_check.php">
                  <!-- All the other fields here: -->
                  <label for="user_blocked">User Blocked</label>
                  <input type="text" id="user_blocked" name="user_blocked" autocomplete="off" required>
                  <br><br>
                  <label for="reason_why">Reason Why</label>
                  <input type="text" id="reason_why" name="reason_why" autocomplete="off" required>
                  <br><br><br><br>
                  <button type="submit" name="confirm">Confirm</button>
                  <br><br>
             </form>
        </div>
    </body>
</html>