<?php
session_start();
     require_once("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search Data</title>
</head>

<body>
    <h3>Use the Search bar to search your favourite events</h3>
    <br><br>
    <div class="container my-5">
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Event Date</th>
                        <th scope="col">Event Location</th>
                    </tr>
                </thead>
                <?php
			  if(isset($_GET['event_name_search']) && isset($_GET['event_location_search'])){
				$event_name_search = $_GET['event_name_search'];
				$event_location_search = $_GET['event_location_search'];

				// create the query:
				$query = "select * from `searchbar` where event_name_search like '%$event_name_search%' and  event_location_search like '%$event_location_search%'";
				$result = mysqli_query($website_connect, $query);

				if(mysqli_num_rows($result) > 0){
					foreach($result as $row){
                        echo '<tbody>
                        <tr>
                        <td> '.$row['id'].'</td>
                        <td> '.$row['event_name_search'].'</td>
                        <td> '.$row['event_date_search'].'</td>
                        <td> '.$row['event_location_search'].'</td>
                        </tr>
                        </tbody>';
					}
				}else{
					echo "No record found!";
				}
			  }
			?>
            </div>
        </table>
    </div>
    <button class="btn btn-primary"><a href="home.php">Back To Main Page:</a></button>
</body>
</html>