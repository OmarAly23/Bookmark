<!DOCTYPE html>
<html lang="en">
    <head>
    <meta content="text/html; charset=uft-8" http-equiv="content-type"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="../resources/style.css" media="screen" rel="stylesheet" type="text/css">
    </head>
    <body>
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
        </header><br><br><br><br><br><br><br><br><br><br>

    </body>
</html>
