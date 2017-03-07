<?php 
require_once('../php/connect.php'); 
require_once('../php/account-functions.php');

$errorMessage = "";

// If the send message button was clicked
if(isset($_POST['send-message'])){
  require_once('../php/send-contact-mail.php');

  // Prepare data for sending
  $name = mysqli_real_escape_string($link, strip_tags($_POST['name']));
  $email = mysqli_real_escape_string($link, strip_tags($_POST['email']));
  $telephone = mysqli_real_escape_string($link, strip_tags($_POST['telephone']));
  $message = nl2br(htmlspecialchars($_POST['message']));


  // If sent successful, notify user and clear POST variables
  if(sendContactMessage($name, $telephone, $email, $message)){
    $errorMessage = "Message sent! Thanks for your feedback :)";
    unset($_POST['send-message']);
  }
  else{
    $errorMessage = "Message failed :( <br> Please Try Again";
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
    <title>Contact</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

  </head>
  <body>
    <?php require_once('../template/navbar.php'); ?>
    <!-- Page Content -->
    <div class="container">
      <!-- Contact Form -->
      <div class="home-login-div">
        <h1 class="intro-text text-center">Drop A Message</h1>
        <form role="form" action="#" method = "post" onsubmit="return onContactSubmit()">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 home-login-border">
              <div class="col-md-4">
                <label>Name</label>
                <input autofocus type="text" class="form-control home-login-input" name = "name" id = "name" required>
              </div>
              <div class="col-md-4">
                <label>Email</label>
                <input type="email" class="form-control home-login-input" name = "email" id = "email" required>
              </div>
              <div class="col-md-4">
                <label>Telephone</label>
                <input type="telephone" class="form-control home-login-input" name = "telephone" id = "telephone" required>
              </div>
              <div class="col-md-12">
                <label>Email</label>
                <textarea class="form-control" rows="6" name = "message" id = "message" required></textarea>
              </div>
              <div class="text-center contact-sign-in-btn-div col-md-12">
                <button type="submit" name = "send-message" class="btn btn-lg orange-btn square-btn">Submit</button>
              </div>
            </div>
            <div class="col-md-2"></div>
          </div>
        </form>
        <div class="error-div">
          <p class="error-message text-center" id="error-message"><?php echo $errorMessage; ?></p>
        </div>
      </div>
    </div>
    <hr>
    </div>
  <script src="../js/validate-contact.js"></script>
  <?php require_once('../template/footer.php'); ?>