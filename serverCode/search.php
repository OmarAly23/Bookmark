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
            #displayData td, th, tr{
                color: black;
                padding: 20px;
            }
        </style>
    </head>
    <body>
    </body>
</html>
<?php

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
    $pageTitle = "Search Results";
    include "header.php";
    print <<< HERE

<table id="displayData" border='2px solid black'>
<thead>
    <th id="displayData"><strong>ID</strong></th>
    <th id="displayData"><strong>Name</strong></th>
    <th id="displayData"><strong>Author</strong></th>
    <th id="displayData"><strong>Category</strong></th>
</thead>
HERE;

    
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $ID = $row["ID"];
        $Name = $row["Name"];
        $Author = $row["Author"];
        $Category = $row["Category"];

    print <<<HERE

                    <tbody>
                        <tr id="displayData">
                            <td id="displayData">$ID</td>
                            <td id="displayData">$Name</td>
                            <td id="displayData">$Author</td>
                            <td id="displayData">$Category</td>
                        </tr>
                    </tbody>
                </table>

HERE;
    } // end of the while loop
        


?>