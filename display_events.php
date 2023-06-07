<?php
session_start();
     require_once("connect.php");
     include("navbar.php"); // to connect to navigation bar:
     include("search_bar.php");
     require("remove_login_cookies.php"); // for the logging the user out:
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
        <h1>View Events Here: </h1>
        <!--- table bootstrap here: -->
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Event Date</th>
                        <th scope="col">Event Location</th>
                        <th scope="col">Event Descriptionn</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            // select query:
            $sql_display = "Select * from `events`";
            $result = mysqli_query($website_connect, $sql_display);
            while($row = mysqli_fetch_assoc($result)){
                $event_id=  $row['id'];
                $event_name= $row['event_name'];
                $event_date= $row['event_date'];
                $event_location= $row['event_location'];
                $event_description= $row['event_description'];
                echo '<tr>
                <th scope="row">'.$event_id.'</th>
                <td>'.$event_name.'</td>
                <td>'.$event_date.'</td>
                <td>'.$event_location.'</td>
                <td>'.$event_description.'</td>
                </tr>';
            }
            ?>
        </div>
                </tbody>
            </table>

    </body>
</html>