<?php

    require "db_info.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE Email='$email'";

    if (!($result = mysqli_query($db, $sql))) {
        // the username does not exist in the database
        print("<p>Could not execute query!</p>");
        die(mysqli_error($db) . "</body><html>");
    } else {
        $_SESSION['username'] = $email;
        print("<h3><strong><center>Successfully Logged in</center></strong></h3>");
    }

?>