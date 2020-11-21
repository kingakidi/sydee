<?php
include './control/conn.php';
if (isset($_SESSION['id'])) {
  header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SYDEE STACK:: SIGN UP</title>
    <link rel="stylesheet" href="vendor/sydee.css" />
  </head>
  <body>
    <div class="login-container">
      <form action="" class="form-login" id="login-form">

        <div id="login-error" class='error login-error'></div>
        <input type="text" name="" id="username" class="username" placeholder="USERNAME" />
        <div id="username-error" class="error username-error"></div>

        <input type="password" name="password"  id="password" class="password" placeholder="PASSWORD" />
        <div id="password-error" class="error password-error"></div>

        <input type="submit" value="LOGIN" id="login" />

        <div class="forget-container">
          <span class="create-account"
            ><a href="signup.php">CREATE ACCOUNT</a></span
          >
          <span class="forget-password"
            ><a href="forget-password.php">FORGET PASSWORD</a></span
          >
        </div>
      </form>
    </div>
    <script src="vendor/sydeestack.js"></script>
    <script src="vendor/login.js"></script>
  </body>
</html>
