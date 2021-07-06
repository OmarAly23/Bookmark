<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=uft-8" http-equiv="content-type"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="../resources/login.css" rel="stylesheet">
    </head>
    <body>
        <h1><img src=".././images/icons8-hatena-bookmark-48-blue.png" width="55px" height="55px"><a href="homePage.html">  Bookmark</a></h1>
        <div class="form_wrapper">
            <div class="form_container">
              <div class="title_container">
                <h2>Login</h2>
              </div>
              <div class="row clearfix">
                <div class="">
                  <form name="login" method="POST" action="login.php">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                      <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                      <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input class="button" type="submit" value="Login"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>