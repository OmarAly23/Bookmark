<?php

    require "db_info.php";  //Connect to get info
    $search = $_POST['search'];

    $sql = "SELECT * FROM books WHERE
                ID LIKE '%$search%' OR
                Name LIKE '%$search%' OR
                Author LIKE '%$search%' OR
                Category LIKE '%$search%' 
            ORDER BY ID ASC";

    if (!($result = mysqli_query($db, $sql))) {
        print("<p>Could not execute query!</p>");
        die(mysqli_error($database) . "</body><html>");
    }

    $number = mysqli_num_rows($result);
    $pageTitle = "Search Results";
    include "header.php";
    print <<< HERE
    <header>
    <div class="bookmark-header">
        <h1><img src="./images/icons8-hatena-bookmark-48-blue.png" width="55px" height="55px"><a href="homePage.html">  Bookmark</a></h1>
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
                <a class="nav-link" href="features.html">Features</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recommendations.html">Recommendations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reviews.html">Reviews</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.html">Register</a>
            </li>
            <li class="nav-item search">
                <input type="text" placeholder="Search for a book...">
            </li>
          </ul>
        </div>
    </header>
HERE;


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $ID = $row["ID"];
        $Name = $row["Name"];
        $Author = $row["Author"];
        $Category = $row["Category"];
    }

    print <<< HERE

                <table id="displayData" border='2px solid black'>
                    <thead>
                        <th id="displayData" ><strong>ID</strong></th>
                        <th id="displayData" ><strong>Name</strong></th>
                        <th id="displayData" ><strong>Author</strong></th>
                        <th id="displayData" ><strong>Category</strong></th>
                    </thead>
                    <tbody>
                        <tr id="displayData">
                            <td id="displayData">$ID</td>
                            <td id="displayData">$Name</td>
                            <td id="displayData">$Author</td>
                            <td id="displayData">$Category</td>
                        </tr>
                    </tbody>

HERE;
        


?>