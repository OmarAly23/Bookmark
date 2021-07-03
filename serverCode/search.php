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
    <link href="../resources/style.css" rel="stylesheet" type="text/css">
    <header>
    <div class="bookmark-header">
        <h1><img src=".././images/icons8-hatena-bookmark-48-blue.png" width="55px" height="55px"><a href="../homePage.html">  Bookmark</a></h1>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <input type="button" class="buttn" placeholder="Dark" value="Dark-Mode">
                <script>
                    const btn = document.querySelector(".buttn");
                    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
                    const currentTheme = localStorage.getItem("theme");
                    if (currentTheme == "dark") {
                        document.body.classList.toggle("dark-theme");
                    } else if (currentTheme == "light") {
                        document.body.classList.toggle("light-theme");
                    }

                    btn.addEventListener("click", function () {
                    if (prefersDarkScheme.matches) {
                        document.body.classList.toggle("light-theme");
                        var theme = document.body.classList.contains("light-theme") ? "light" : "dark";
                    } else {
                        document.body.classList.toggle("dark-theme");
                        var theme = document.body.classList.contains("dark-theme") ? "dark" : "light";
                        }
                        localStorage.setItem("theme", theme);
                    });                            
                </script>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#about">About</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <p class="nav-link">Book Reviews</p>
                    <div class="dropdown-content">
                        <span><a class="nav-link" style="color: black;" href="reviews.php">All Reviews</a></span>
                        <span><a class="nav-link" style="color: black;" href="fiction.php">Fiction</a></span>
                        <span><a class="nav-link" style="color: black;" href="nonFiction.php">Non-Fiction</a></span>
                        <span><a class="nav-link" style="color: black;" href="mystery.php">Mystery</a></span>
                        <span><a class="nav-link" style="color: black;" href="horror.php">Horror</a></span>
                        <span><a class="nav-link" style="color: black;" href="Comic_Books.php">Comic books</a></span>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../register.html">Register</a>
            </li>
            <li class="nav-item search">
                <form method="post" action="./search.php">
                    <input type="text" name="search" id="search" placeholder="Search for a book...">
                    <input type="submit" name="submit" value="Search">
                </form>
                
            </li>
          </ul>
        </div>
</header>

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