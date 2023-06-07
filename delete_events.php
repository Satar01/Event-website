<?php
//session_start(); // this is to check the user's ID:
	 require("sanitise.php"); // this is a sanitise file that prevents SQL/XSS injection attempts
     require_once("connect.php"); // this connects with the database:
     //using form to check the result:
     if(isset($_POST['id']) || $_SERVER["REQUEST_METHOD"] == "POST"){
      $id=$_POST['id'];
	  $inputs = $id;
	  SanitiseInputs($inputs);
      $sql_delete = "delete from `events` where id= $id";
      $result = mysqli_query($website_connect, $sql_delete); // Save the query:
      // Check if query worked:
      if($result){
        echo "Records deleted successfully! "; // positive message:
        header("Location: browse_events.php");
      }else{
        echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
        die; // to stop the code from continuing:
      }
    }
?>