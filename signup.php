<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
	 require("sanitise.php"); // this is a sanitise file that prevents SQL/XSS injection attempts
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     include("functions.php"); // link to the functions page here: 
    // This is to check if the details entered using the post format:
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // Post all the relevant variables:
        $user_name = $_POST['user_name'];
        $bad_input = $_POST['password'];
        $inputs = $user_name;
		SanitiseInputs($inputs);
		$password = password_hash($bad_input, PASSWORD_DEFAULT);
        $role = $_POST['role'];
        // Checking if they are not both empty:
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){ // !is_numeric username can't be a number or pur upper or lower:
			if (strlen($user_name) < 13 && preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\*\!@#\$%]).{8,12}$/', $bad_input)){
				
				//Save to database;
				$user_id = random_num(6); // User ID using a random number:#
				//For encryption changing the stored text password for md5 - KeshavGumber;
				//$md5password = md5($password);
				// Insert into the database using the query:
				$query = "insert into users (user_id, user_name, password, role) values ( '$user_id', '$user_name', '$password', '$role')";
				// To save the generated query:
				mysqli_query($website_connect, $query);
				// Direct users to login page:
				header("Location: login.php");
			}
			else{
				echo "Make sure your username is less than 12 characters and Make sure your password has a minimum of 8 characters and a maximum of 12, 1 uppercase, 1 lowercase and 1 special value of (*!@#$%)";
				die;
			}
        }
        else{
            echo "Please Enter some valid Information";
            die;// to stop the code from continuing:
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
        <title>Sign Up</title>
    </head>
    <body>
    <h1>Sign Up: </h1>
       <div>
            <form method= "post">
                <!-- user name here: -->
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" required autocomplete="off">
                <br><br>
                <!-- password here: -->
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required autocomplete="off">
                <br><br>
                <label for="role">Role</label>
                <input type="text" id="role" name="role" placeholder="User Or Admin" autocomplete="off" required>
                <br><br><br>
                <!-- Submit button here: -->
                <button type="submit" class="btn btn-primary"name="submit2">Sign Up</button>
                <!-- Reset Button here: -->
                <button type="reset" class="btn btn-secondary" name="reset2">Reset</button>
                <br><br><br><br>
                <!-- Login Page Option Here: -->
               <button class="btn btn-success"><a href="login.php">Already Have an account Login Here: </a></button>
            </form>
            <br><br><br><br>
            <!-- Home Page Displayed Here: -->
            <button class="btn btn-danger"><a href="home.php">Changed Your Mind, Back to Home Page:</a></button>
       </div>
    </body>
</html>