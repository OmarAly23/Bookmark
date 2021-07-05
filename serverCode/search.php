<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table {
                border: 5px solid black; 
                width: 450px;
                height: 300px;
                margin: 0 auto;
            }
            table td, th, tr{
                color: black;
                padding: 20px;
                border: 5px solid black; 
            }
        </style>
    </head>
    <body>
    </body>
</html>
<?php
    session_start();
    require "db_info.php";  //Connect to get info
    $search = $_POST['search'];

    $sql = "SELECT * FROM Books WHERE
                ID LIKE '%$search%' OR
                Name LIKE '%$search%' OR
                Author LIKE '%$search%' OR
                Category LIKE '%$search%' 
            ORDER BY ID ASC";

    if (!($result = mysqli_query($db, $sql))) {
        print("<p>Could not execute query!</p>");
        die(mysqli_error($db) . "</body><html>");
    }

    $number = mysqli_num_rows($result);
    if ($number < 0) {
        echo "Error - No Data To Display";
    }
    $pageTitle = "Search Results";
    include "header.php";
    print <<< HERE

<table id="displayData">
<thead>
    <th id="displayData"><strong>ID</strong></th>
    <th id="displayData"><strong>Name</strong></th>
    <th id="displayData"><strong>Author</strong></th>
    <th id="displayData"><strong>Category</strong></th>
</thead>
HERE;

    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $_SESSION["ID"] = $row["ID"];
        $_SESSION["Name"] = $row["Name"];
        $_SESSION["Author"] = $row["Author"];
        $_SESSION["Category"] = $row["Category"];
        include "tmp.php";
    } // end of the while loop
    print("</tbody></table>");

?>