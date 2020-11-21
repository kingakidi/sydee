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
    <div class="signup-container">
      <form action="" id="form-signup" class="form-signup" method="post">
        <div class="error register-error" id="register-error">REGIST ERROR</div>

        <div class="form-group">
          <input type="text" id="username" class="username" placeholder="USERNAME" />
        </div>
        <div id="username-error" class="error username-error"> USERNAME ERROR </div>

        <div class="form-group">
          <input type="email" id="email" placeholder="EMAIL ADDRESS" />
        </div>
        <div id="email-error" class="error email-error"> EMAIL ERROR</div>

        <div class="form-group">
          <input type="number" id="number" placeholder="PHONE NUMBER" />
        </div>
        <div id="number-error" class="error number-error">PHONE NUMBER ERROR </div>

        <div class="form-group">
          <input type="password" id="password" placeholder="PASSWORD" />
        </div>
        <div id="password-error" class="error password-error">PASSWORD ERROR</div>

        <div class="form-group">
          <input
            type="password"
            id="confirm-password"
            placeholder="CONFIRM PASSWORD"
          />
          <div id="confirm-password-error" class="error confirm-password-error"> CONFIRM PASSWORD ERROR</div>
        </div>
        <div id="confirm-password-error" class="error confirm-password-error"></div>
        <div class="form-group">
          <input type="submit" id="register" value="REGISTER"/>
        </div>

        <div class="form-group">
          <p class="login-account">
            <a href="login.php">ALREADY HAS AN ACCOUNT</a>
          </p>
        </div>
      </form>
    </div>
    <script src="vendor/sydeestack.js"></script>
    <script src="vendor/signup.js"></script>
  </body>
</html>
