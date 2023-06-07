<?php
//session_start();
     require_once("connect.php"); // to connect to the database:
     //include("index.php"); // to check user's login status:
	// This is to check if the user is logged in or not: if not then direct them to the login page
	if(!isset($_SESSION['user_id'])){
		header("Location: login.php");
	}else{
		echo ""; // it works:
	}
	if(!isset($_SESSION['admin_id'])){
		header("admin_details.php");
	}else{
		echo ""; // it works:
	}


?>