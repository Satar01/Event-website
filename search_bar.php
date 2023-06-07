<?php
//session_start(); // check the user login to in server website:
     require_once("connect.php"); // connects to the database:
     //include("navbar.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <h1>Search Data</h1>
    <!-- The data will be searched here: -->
    <p></p>
    <div>
        <!-- Search button query here: -->
        <label for="searchbar">Search bar here:</label>
        <input type="text" id="searchbar" name="searchbar">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
    <div class="card head">
        <h4></h4>
        <div>
            <!-- Search bar here: -->
            <p>here is a Search bar! Use this to search for values (events, date, location, description) from the website</p>
            <div class="search-box">
                <form method="post" action="search.php">
                    <label>Search:</label>
                    <input type="text" name="search" placeholder="search here:">
                    <button type="submit" class="btn btn-dark btn-sm" name="submit_search">Search</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <p>Here is the Advance Search Box! Use this to search for two values (events, date, location, description) at the same time! from the website</p>
	    <div class="search-box">
		     <form method="get" action="advance_search.php">
			      <div class="row">
				         <div class="col-md-4">
					     <label>event Name</label>
					     <input type="text" name="event_name_search" class="form-control">
				         </div>
				   <br>
				         <div class="col-md-4">
					         <label>event Genre</label>
					         <input type="text" name="event_genre_search" class="form-control">
				         </div>
				   <br>
				         <div class="col-md-4">
					         <label>Click to Filter</label><br>
					         <button type="submit" class="btn btn-primary">Search</button>
				         </div>
				         <br><br><br>
			       </div>
		     </form>
	    </div>
        <button><a href="home.php">Back to Main page: </a></button>
</body>

</html>