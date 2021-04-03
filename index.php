<?php
include_once("create_user.php");
include_once("login.php");
if(isset($_SESSION['login_user'])){
header("location: home.php");
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Inventory &amp; Sales</title>
      <style>
      #signUpForm {              
 display:none;
}
.toggleForms {
font-weight: bold;
}
html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}</style>
  </head>
  <body class="text-center">

  <form method="post" class="form-signin" id="signUpForm" name="signUpForm" onsubmit="return FormValidation()">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign Up</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <div id="validate_email"></div>
      <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <div id="validate_password"></div>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <label for="inputPassword" class="sr-only">Comfirm Password</label>
      <div id="validate_confirm_password"></div>
      <input type="password" id="inputPassword" name="comfirm_password" class="form-control" placeholder="Comfirm Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <p><a class="toggleForms">Sign In</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>

      <form method="post"class="form-signin" id="logInForm">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
      <p><a class="toggleForms">Sign Up</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      <span><?php echo $error; ?></span>
    </form>
</form>
           </div>
      </div>
<script type="text/javascript">
      
        $(".toggleForms").click(function() {
            $("#signUpForm").toggle();
            $("#logInForm").toggle();
        });

        function FormValidation(){
          var email = documemt.forms["signUpForm"]["username"].value;
          var password = document.forms["signUpForm"]["password"].value;
          var comfirm_password = document.forms["signUpForm"]["confirm_password"].value;

          if (email == ''){
            document.getElementbyId('validate_email').innerHTML="Require Email";
            return false;
          }
          if(password == ''){
            document.getElementbyId('validate_password').innerHTML = "Require Password";
            return false;
          }
          if(confirm_password == ''){
            document.getElementId('validate_confirm_password').innerHTML = "Please Confirm Password";
            return false;
          }

        }
      </script>
      
    
  </body>
</html>