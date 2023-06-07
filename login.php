<?php
//error_reporting(0);
session_start();
	 require("sanitise.php"); // this is a sanitise file that prevents SQL/XSS injection attempts
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("functions.php"); // links the functions file here:
     include("navbar.php");
     /*
     // checkbox option here:
     if(isset($_POST['ch1']) || $_SERVER['REQUEST_METHOD'] == "POST"){
        setcookie("cookie_user_name",$_POST['user_name'], time() (0 + 3600)); // Setting a cookie value:
        setcookie("cookie_password",$_POST['password'], time() (0 + 3600)); // Setting a cookie value:
        setcookie("loggedin", "true", time() (0 + 3600)); // setting the loggin became true:
        // set session variables to set the user details:
        $_SESSION['loggedin'] = true;
        $_SESSION['user_name'] = "cookie_user_name";
        $_SESSION['password'] = "cookie_password";
        // redirect user to home page:
        header("Location: index.php");
     }else{
        header("login.php");
        die;
    }
    */
     // This is to check if the details entered using the post format:
	 if($_SERVER['REQUEST_METHOD'] == "POST"){
        // SOMETHING WAS posted:	
        $user_name = $_POST['user_name'];
		$inputs = $user_name;
		SanitiseInputs($inputs);
        $password = $_POST['password'];
        $role = $_POST['role'];
        // Checking if they are not both empty:
        if(!empty($user_name) && !empty($password) && !empty($role) && !is_numeric($user_name) && !is_numeric($role)){
            //Read from the database:
            $query = "select * from users where user_name= '$user_name' limit 1";

            // Need the result To save the generated query:
            $result = mysqli_query($website_connect, $query);
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    // password is the same as here:
                    if(password_verify($password, $user_data['password'])){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        // Direct users to main page:
                        header("Location: index.php");
                        die; // This is to stop the code from continuing:
                    }
                }
            }
            
            echo("Wrong username or password entered!");
        }
        else{
            echo("Please Enter valid Information");
            header("login.php");
            die;
        }
    }
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href=""> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login:</h1>
        <div class="container my-5">
            <form method= "post">
                <!-- username file here: -->
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" autocomplete="off" required>
                <br><br>
                <!-- password here: -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
                <br><br>
                <label for="ch1">Remember Username and Password</label>
                <input type="checkbox" id="ch1" name="ch1" value="">
                <br><br>
                <label for="role">Role</label>
                <input type="text" id="role" name="role" placeholder="User Or Admin" autocomplete="off" required>
                <br><br><br><br>
                <!-- Submit button here: -->
                <button type="submit" class="btn btn-primary" name="submit1">Login</button>
                <!-- Reset Button here: -->
                <button type="reset" class="btn btn-secondary m1-2" name="reset1">Clear</button>
                <br><br><br><br>
                <!-- Signup Page Option Here: -->
                <button><a href="signup.php">New to Website Signup here: </a></button>
            </form>
            <br><br><br>
            <!-- Home Page Displayed Here: -->
            <button class="btn btn-danger"><a href="home.php">Changed Your Mind, Back to Home Page:</a></button>
            <button><a href="admin_details.php">Admin! Login Here:</a></button>
        </div>
    </body>
</html>