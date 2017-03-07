<?php 

require_once('../php/connect.php'); 
require_once('../php/account-functions.php');

$errorMessage = "";

// If register button clicked
if(isset($_POST['register'])){

  // Verify username and password values are set
  if(isset($_POST['username']) && isset($_POST['password1']) && isset($_POST['password2'])){

    // Protect from SQL injection
    $username = mysqli_real_escape_string($link, strip_tags($_POST['username']));
    $password1 = mysqli_real_escape_string($link, strip_tags($_POST['password1']));
    $password2= mysqli_real_escape_string($link, strip_tags($_POST['password2']));

    // If username is valid and passwords match, add new user to database
    if(!usernameExists($username, $link) && validatePasswords($password1, $password2)){
      $salt = "X1K$6B8";
      $cryptedPassword = crypt($password1, $salt);
      addNewUser($username, $cryptedPassword, $link);
      
      // Registration Successful, re-direct to home page with message
      echo "<meta http-equiv='refresh' content='0; url=/index.php?result=registration-success'>";
    }
    else{
        $errorMessage = "Unable to register. Verify passwords match or try new username.";
    }
  }
  else{
    $errorMessage = "Unable to register. Please Try Again or <a href='/view/contact.php'>Contact</a> For Help.";
  }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('../template/navbar.php'); ?>
    <!-- Page Content -->
    <div class="container">
      <h1 class="intro-text text-center">Register For Access</h1>
      <hr>
      <div class="sign-in-border">
        <form role="form" action="#" method = "post">
          <div class="row text-center">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Username</label>
                  <input autofocus type="text" class="form-control" name = "username" id = "username" required>
                </div>
                <div class="col-lg-4"><p class="error-mssg" id="username_error" name="username_error"></p></div>
              </div>
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Password</label>
                  <input type="password" class="form-control" name = "password1" id = "password1">
                </div>
                <div class="col-lg-4"><p class="error-mssg" id="password1_error" name="password1_error"></p></div>
              </div>
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="form-group col-lg-4">
                  <label class="pull-left">Confirm Password</label>
                  <input type="password" class="form-control" name = "password2" id = "password2">
                </div>
                <div class="col-lg-4"><p class="error-mssg" id="password2_error" name="password2_error"></p></div>
              </div>
              <div class="row">
                <p class = "intro-text text-center error-mssg" name = "errorElement" id = "errorElement"></p>
              </div>
            </div>
            <div class="form-group text-center">
              <button type="submit" name="register" class="btn btn-lg orange-btn square-btn">Register</button>
            </div>
          </div>
        </form>
        <div class="error-div">
          <p class="error-message text-center"><?php echo $errorMessage; ?></p>
        </div>
      </div>
    </div>
    <hr>
    </div>
  <?php require_once('../template/footer.php'); ?>