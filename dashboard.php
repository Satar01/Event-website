<?php
session_start();
     require_once("connect.php");
     include("navbar.php"); // to connect to navigation bar:
     include("search_bar.php");
     require("access_level.php"); // to check if user is logged in:
     require("remove_login_cookies.php"); // for the logging the user out:
?>
<Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap style -->
        <title>Display Users: </title>
    </head>
    <body>
        <!--- table bootstrap here: -->
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">User Signed Up Date</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            // select query:
            $sql_display = "Select * from `users`";
            $result = mysqli_query($website_connect, $sql_display);
            while($row = mysqli_fetch_assoc($result)){
                $id=  $row['id'];
                $user_id=  $row['user_id'];
                $user_name= $row['user_name'];
                $password= $row['password'];
                $date= $row['date'];
                $role= $row['role'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <th scope="row">'.$user_id.'</th>
                <td>'.$user_name.'</td>
                <td>'.$password.'</td>
                <td>'.$date.'</td>
                <td>'.$role.'</td>
                </tr>';
            }
            ?>
        </div>
                </tbody>
            </table>

    </body>
</html>