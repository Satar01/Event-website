<?php
session_start();
      require_once("connect.php");
      include("navbar.php");

      // Let's display the admin first:
      $query = "select * from administrators where admin_name= '$admin_name' limit 1";

?>
<Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap style -->
        <title>View Administrators: </title>
    </head>
    <body>
        <h1>Displaying the Administrators</h1>
        <p>Here you can view all the events available: </p>
        <!--- table bootstrap here: -->
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Admin ID</th>
                        <th scope="col">Admin Name</th>
                        <th scope="col">Admin Date</th>
                        <th scope="col">Admin Location</th>
                        <th scope="col">Admin Description</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            // select query:
            $sql_display = "Select * from `administratorsadmin`";
            $result = mysqli_query($website_connect, $sql_display);
            while($row = mysqli_fetch_assoc($result)){
                $id=  $row['id'];
                $admin_name= $row['admin_name'];
                $admin_date= $row['admin_date'];
                $security_location= $row['security_location'];
                $security_description= $row['security_description'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$admin_name.'</td>
                <td>'.$admin_date.'</td>
                <td>'.$event_location.'</td>
                <td>'.$event_description.'</td>
                <td>
                   <a href="edit_events_form.php" class="btn btn-dark">Update Events</a>
                   <a href="delete_events_form.php" class="btn btn-danger">Delete Events</a>
                   <a href="add_events_form.php" class="btn btn-success">Add Events</a>
                </td>
                </tr>';
            }
            ?>
        </div>
                </tbody>
            </table>

    </body>
</html>