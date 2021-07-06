<?php

    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Dune Chronicles</title>
        <link href="../resources/reviews.css" type="text/css" rel="stylesheet">  
        <style>
            p, h1 {
                color: black;
            }
        </style>
    </head>

    <body>
                <div class="choose">
                <a href="#list-th"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                <a href="#large-th"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                </div>

                <div id="large-th">
            <div class="container">
                <h1>The Dune Chronicles</h1>
                <br>

                <div id="list-th">
                <div class="book read">
                    <div class="cover">
                    <img src="../bookImages/Dune-cover-1.jpeg">
                    </div>
                    <div class="description">
                    <p class="title">The Dune Chronicles<br>
                        <span class="author">Frank Herbert</span></p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <form method="POST" action="Dune.php">

                <textarea id="review" name="review" placeholder="Add Your Review" cols="30" rows="5"></textarea>   
                <input type="submit" name="Submit" placeholder="Submit">

            </form>
    </body>

</html>


<?php
   require "db_info.php";
   $review = $_POST['review'];


   $sql = "INSERT INTO `Reviews` (bookName, Reviewer, Review) VALUES ('Harry Potter and the Philosopher’s Stone', 'Osaimi', '$review')";

   if (!($result = mysqli_query($db, $sql))) {
       print("<p>Could not execute query!</p>");
       die(mysqli_error($db) . "</body><html>");
   } else {
    print("<h1>Successfully added the review</h1>");
   }
   
?> 