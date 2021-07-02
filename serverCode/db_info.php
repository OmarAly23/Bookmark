<?PHP
	//DATABASE CONNECTION INFORMATION
		$host = "localhost";
		$user = "id16608174_bookmark_name";
		$password = "webCS335Books@";
		$dbname = "id16608174_bookmark";
		$db = mysqli_connect($host, $user, $password, $dbname);
		// Check connection
        if (mysqli_connect_errno()) {
            echo "Connection failed: " . mysqli_connect_error();
            exit();
        }
        echo "Connected successfully";
?>