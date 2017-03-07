<?php 
require_once('../php/connect.php'); 
require_once('../php/account-functions.php');
$errorMessage = "";
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Projects Portfolio</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
  </head>

  <body>
    <?php require_once('../template/navbar.php'); ?>
    <!-- Page Content -->
    <div class="container">


      <!-- Introduction Row -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <div class="col-lg-8">
              <h1 class="page-header">Celebrity Selfies<br>
                <small>Capture Pictures &amp; Signatures</small>
              </h1>
              <p>What's better than a picture with your favorite celebrity!? A selfie signed by your favorite celebrity! 
                The Celebrity Selfies Android application was inspired by 
                Jerry Haffey Jr. All design and implementation was completed
                by Justin Johnson using Android SDK and Java programming language. Photoshop tools were utilized to create an array
                of custom icons, creating a unique and intuitive user experience.
              </p>
              <p>The applications allows users to:</p>
              <ul>
                <li>Capture images using mobile phone's front or rear facing camera</li>
                <ul>
                  <li>Users are able to alternate between cameras while running application</li>
                </ul>
                <li>Draw signatures or pictures onto the image using the phone's touch screen</li>
                <li>Customize their signature with font options</li>
                <ul>
                  <li>9 different colors</li>
                  <li>9 different pen sizes</li>
                  <li>3 different locations to place signature on image</li>
                </ul>
                <li>Save, edit, or delete images</li>
                <li>Share with friends and social media</li>
              </ul>
              <a href="https://github.com/johnsonj561/Celeb-Selfies" target="_blank" class="btn btn-primary">View Source Code</a>
            </div>
            <div class="col-lg-4 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/celeb-selfies-home-page-300x500.jpg" 
                   alt="Android application that allows users to take photos and apply signatures">
            </div>
          </div>
        </div>
      </div>


      <!-- Application Screenshots -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Application Screenshots</h3>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <div class="celeb-image-row">
                <h4>Capture An Image</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/celeb-selfies-capture-image-550x300.jpg" 
                     alt="Android application captures image">
              </div>
              <div class="celeb-image-row">
                <h4>Add A Signature</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/celeb-selfies-create-signature-550x300.jpg" 
                     alt="Android application draws signature onto image">
              </div>
              <div class="celeb-image-row">
                <h4>Save, Edit, Delete, &amp; Share</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/celeb-selfies-save-photo-550x300.jpg" 
                     alt="Android application saves image to local storage">
              </div>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </div> 
      
    </div>



  <?php require_once('../template/footer.php'); ?>