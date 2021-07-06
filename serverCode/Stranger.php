<?php

    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Stranger In A Strange Land</title>
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
                <h1>Stranger In A Strange Land</h1>
                <br>

                <div id="list-th">
                <div class="book read">
                    <div class="cover">
                    <img src="../bookImages/Stranger.jpg">
                    </div>
                    <div class="description">
                    <p class="title">Stranger In A Strange Land<br>
                        <span class="author">Robert A. Heinlein</span></p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <form method="POST" action="Stranger.php">

                <textarea id="review" name="review" placeholder="Add Your Review" cols="30" rows="5"></textarea>   
                <input type="submit" name="Submit" placeholder="Submit">

            </form>
    </body>

</html>

<?php
   require "db_info.php";
   require "login.php";
   $review = $_POST['review'];
   isset($_SESSION['username']);
   $tmp = $_SESSION['username'];
   if ($tmp == NULL) {
    print("<h3><strong><center>Must be a Registered User</center></strong></h3>");
    die(mysqli_error($db) . "</body><html>");
}


   $sql = "INSERT INTO `Reviews` (bookName, Reviewer, Review) VALUES ('Stranger In A Strange Lan', '$tmp', '$review')";

   if (!($result = mysqli_query($db, $sql))) {
       print("<p>Could not execute query!</p>");
       die(mysqli_error($db) . "</body><html>");
   } else {
    print("<h1>Successfully added the review</h1>");
   }

?> 