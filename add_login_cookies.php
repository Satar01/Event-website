<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     //include("index.php"); // this file included will make access to website navigation bar for user when in action:
     /*
     $sql_display = "Select * from `dashboard`";
     $result = mysqli_query($website_connect, $sql_display);
     if(!$result){
          echo "Admin Found!";
     }else{
          echo "Admin Not Found! ";
          die; // to stop the code:
     }
     if(isset($_SESSION['admin_id'])){
          echo "Admin Signed In: ";
     }else{
          echo "error" .mysqli_error($website_connect);
          die; // to stop the code from working:
     }
     */
     // Using the session to check the form method:
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Something was posted:
        // get all the other variables:
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];
        $security_question = $_POST['security_question'];
        $security_question_answer = $_POST['security_question_answer'];
        if(!empty($admin_name) && !empty($admin_password) && !empty($security_question) && !empty($security_question_answer) && !is_numeric($admin_name) && !is_numeric($security_question)){
            // echo Something:
            // Insert Query here for Dashboard Table:
            $admin_sql_add = "insert into administrators (admin_name, admin_password, security_question, security_question_answer) values ('$admin_name', '$admin_password', '$security_question', '$security_question_answer')";
            // Save the query:
            $admin_details = mysqli_query($website_connect, $admin_sql_add);
            // check if it worked:
            if($admin_details){
               echo "Admin Added Successfully! ";
               header("view_admin.php"); 
            }else{
                echo "Error!" .mysqli_error($website_connect);
                die;
            }
        }

     }
?>