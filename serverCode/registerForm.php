<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="text/html; charset=uft-8" http-equiv="content-type"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.8">
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="../resources/register.css" rel="stylesheet">
        <script src="../src/Validation.js" type="text/javascript"></script>
    </head>
    <body>
        <h1><img src=".././images/icons8-hatena-bookmark-48-blue.png" width="55px" height="55px"><a href="../homePage.html">  Bookmark</a></h1>
        <div class="form_wrapper">
            <div class="form_container">
              <div class="title_container">
                <h2>Registration</h2>
              </div>
              <div class="row clearfix">
                <div class="">
                  <form name="Registration" method="POST" action="register.php">
                    <div class="input_field fa fa-email"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                      <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                      <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                      <input type="password" name="passwordConfirmation" placeholder="Re-type Password" required />
                    </div>
                    <div class="row clearfix">
                      <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                          <input type="text" name="fname" placeholder="First Name" />
                        </div>
                      </div>
                      <div class="col_half">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                          <input type="text" name="name" placeholder="Last Name" required />
                        </div>
                      </div>
                    </div>
                          <div class="input_field radio_option">
                        <input type="radio" name="radiogroup1" id="rd1">
                        <label for="rd1">Male</label>
                        <input type="radio" name="radiogroup1" id="rd2">
                        <label for="rd2">Female</label>
                        </div>
                      <div class="input_field checkbox_option">
                          <input type="checkbox" id="cb1">
                          <label for="cb1">I agree with terms and conditions</label>
                      </div>
                    <input class="button" type="submit" value="Register" onclick="Validation(document.Registration.email, document.Registration.password, document.Registration.passwordConfirmation)"/>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>


