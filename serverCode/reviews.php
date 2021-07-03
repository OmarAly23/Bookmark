<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=uft-8" http-equiv="content-type"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="resources/reviews.css" rel="stylesheet" type="text/css">
        <!-- <link href="build/tailwind.css" rel="stylesheet"> -->
    </head>
    <body>
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
        <main><br><br><br><br><br>
            
            <div class="bkimg">
                <img src="images/bg.png">
            </div><br><br><br>

            <footer class="footer" id="about">
                <div class="footer__addr">
                  <h1 class="footer__logo">Bookmark</h1>
                      
                  <h2>Contact</h2>
                  
                  <address>
                    MCC Labs @ KU<br>
                        
                    <a class="footer__btn" href="mailto:aly.omar@cs.ku.edu.kw">Email Us</a>
                  </address>
                </div>
                
                <ul class="footer__nav">
                  <li class="nav__item">
                    <h2 class="nav__title">Media</h2>
              
                    <ul class="nav__ul">
                      <li>
                        <a href="#">Authors</a>
                      </li>
              
                      <li>
                        <a href="#">Interviews</a>
                      </li>
                    </ul>
                  </li>
                  
                  <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">Categories</h2>
                    
                    <ul class="nav__ul nav__ul--extra">
                      <li>
                        <a href="#">Fiction</a>
                      </li>
                      
                      <li>
                        <a href="#">Sci-Fi</a>
                      </li>
                      
                      <li>
                        <a href="#">Mystery</a>
                      </li>
                      
                      <li>
                        <a href="#">Thriller</a>
                      </li>
                      
                      <li>
                        <a href="#">Romance</a>
                      </li>
                      
                      <li>
                        <a href="#">Dystopian</a>
                      </li>
                    </ul>
                  </li>
                  
                  <li class="nav__item">
                    <h2 class="nav__title">Legal</h2>
                    
                    <ul class="nav__ul">
                      <li>
                        <a href="#">Privacy Policy</a>
                      </li>
                      
                      <li>
                        <a href="#">Terms of Use</a>
                      </li>
                      
                      <li>
                        <a href="#">Sitemap</a>
                      </li>
                    </ul>
                  </li>
                </ul>
                
                <div class="legal">
                  <p>&copy; 2021 Bookmark. All rights reserved.</p>
                </div>
    
              </footer>
    </body>

</html>