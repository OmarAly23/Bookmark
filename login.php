<?php

    require "db_info.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Email='$email'";

    if (!($result = mysql_query($db, $sql))) {
        // the username does not exist in the database
        print("<p>Could not execute query!</p>");
        die(mysqli_error($db) . "</body><html>");
    } else {
        $_SESSION['username'] = $email;
    }



    

?>