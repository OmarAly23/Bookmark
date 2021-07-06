<?php
    // session_start();
    require "db_info.php";

	$email = cleanData($_POST['email']);
	$password = cleanData($_POST['password']);
	$username = cleanData($_POST['fname']); // unique
	// $type = cleanData($_POST['type']);
	// addData($id, $name, $age, $type);

	function cleanData($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = trim($data);
		$data = htmlspecialchars($data);
		$data = strip_tags($data);
		return $data;
	}

    $sql = "SELECT * FROM Users WHERE email = '$email'";

    if (!($result = mysqli_query($db, $sql))) {
        $_SESSION["Already_Exists"] = "This account already exists!!!!!!!!!!!";
        $_SESSION["tmpMail"] = $email;
        $_SESSION["tmpUsername"] = $username;  
        // header("Location: register.php");
    } else {
        $insert = "INSERT INTO Users (Username, Email, Password) VALUES ('$username', '$email', '$password')";
        if (!($result = mysqli_query($db, $insert))) {
            print("<p>Could not execute query!</p>");
            die(mysqli_error($db) . "</body><html>");
        }
        print("<p style='color:black;'>Successfully added</p>");
        $url = "loginForm.php";
        header("Location: $url");
    }
?>