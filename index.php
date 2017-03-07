<?php 
require_once('php/connect.php');
require_once('php/account-functions.php');

$errorMessage = "";

// If sign in button clicked
if(isset($_POST['sign-in'])){
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    if(loginuser($_POST['username'], $_POST['password'], $link)){
      $errorMessage = "Welcome $username";
    }
    else{
      $errorMessage = "Unable to Login $username";  
    }
  }
}

// Process results to display appropriate user feedback
else if(isset($_GET['result'])){

  switch ($_GET['result']) {
    case 'logout-success':
      logoutUser();
      $errorMessage= "Log Out Successful, Thanks for Visiting!";
      break;
    case 'registration-success':
      $errorMessage = "Registration Succesful. Log In To Begin";
      break;
    default:
      $errorMessage = "";
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
    <title>Jett Dev | pi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once('template/navbar.php'); ?>
    <!-- Page Content -->
    <div class="container">
      <!-- User Login Form -->
      <div class="home-login-div">
        <form role="form" action="#" method = "post">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 home-login-border text-center">
              <div class="col-md-12">
                <label>Username</label>
                <input autofocus type="text" class="form-control home-login-input" name = "username" id = "username" required>
              </div>
              <div class="col-md-12">
                <label>Password</label>
                <input type="password" class="form-control home-login-input" name = "password" id = "password">
              </div>
              <div class="text-center home-sign-in-btn-div col-md-12">
                <button type="submit" name = "sign-in" class="btn btn-lg orange-btn square-btn">Sign In</button>
              </div>
              <div class="col-md-12 text-center">
                <h4 class="register-text"><a href="view/register.php">Register</a> | 
                  <a href="#">Reset Password</a></h4>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </form>
        <div class="error-div">
          <p class="error-message text-center"><?php echo $errorMessage; ?></p>
        </div>
      </div>
    </div>
    <div class="full-width">
      <div class="home-page-intro">
        <div class="home-page-intro-title">
          <h2 class="text-center text-white intro">A Showcase for Jett-Dev Projects and Tutorials</h2>
        </div>
        <div class="home-page-intro-img text-center row">
          <img src="img/raspberry-pi-logo-200x250.png" class="img-fluid text-center" alt="Responsive image">
        </div>
        <div class="home-page-intro-subtitle">
          <h3 class="text-center text-white">Hosted By Pi</h3>
        </div>
      </div>
      <?php require_once('template/footer.php'); ?>