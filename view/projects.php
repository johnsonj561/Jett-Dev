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

      <!-- Page Header -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Jett Dev
            <small>Computer Science &amp; Engineering Projects</small>
          </h1>
        </div>
      </div>
      <!-- /.row -->

      <!-- Projects Row -->
      <div class="row portfolio-row">

        <!-- Projects 1 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="pic-n-place.php">PIC n Place</a>
          </h2>
          <a href="pic-n-place.php">
            <img class="img-responsive portfolio-image" src="../img/pick-and-place-software.png" alt="Pick and Place Software for Assembling Circuitry">
          </a>
          <p class="text-center">Pick and Place machine that automates placement of SMT Compoennts on printed circuit boards. PC Application implemented in Java.</p>
          <div class="text-center">
            <a  href="pic-n-place.php" class="btn btn-primary">More Info</a>
          </div>
        </div>

        <!-- Projects 2 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="pet-feeder.php">Bluetooth Pet Feeder</a>
          </h2>
          <a href="pet-feeder.php">
            <img class="img-responsive portfolio-image" src="../img/android-icon-700x400.jpg" alt="Bluetooth Controlled Smart Pet Feeder">
          </a>
          <p class="text-center">A smart pet feeder that allows users to view their pet's food supply and dispense additional food through android mobile application.</p>
          <div class="text-center">
            <a class="btn btn-primary" href="pet-feeder.php">More Info</a>
          </div>
        </div>

        <!-- Projects 3 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="#">Cat vs Dog Classifier</a>
          </h2>
          <a href="#">
            <img class="img-responsive portfolio-image" src="../img/cat-vs-dog-image-classifier.jpg" alt="Cat vs Dog Image Classification With Machine Learning">
          </a>
          <p class="text-center">Matlab script utilizes image pre-processing, Convolutional Neural Net feature extraction, and SVM models to make image classification predictions.</p>
          <div class="text-center">
            <a href= "https://github.com/johnsonj561/Cat-Dog-Classification" class="btn btn-primary" target="_blank">View Source</a>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <!-- Projects Row -->
      <div class="row portfolio-row">

        <!-- Projects 1 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="celeb-selfies.php">Celeb Selfies Application</a>
          </h2>
          <a href="celeb-selfies.php">
            <img class="img-responsive portfolio-image" src="../img/celeb-selfies-logo-700x400.jpg" alt="Android application that provides functionality for taking pictures and drawing on images.">
          </a>
          <p class="text-center">Android application that allows users to capture images on mobile phone, apply colorful signatures to images, and share them with friends. </p>
          <div class="text-center">
            <a class="btn btn-primary" href="celeb-selfies.php">More Info</a>
          </div>
        </div>

        <!-- Projects 2 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="http://www.kbsoftwaresolutions.com/view/portfolio.php">Website Designs</a>
          </h2>
          <a href="http://www.kbsoftwaresolutions.com/view/portfolio.php">
            <img class="img-responsive portfolio-image" src="../img/kb-software-logo-700x400.jpg" alt="Website designs by KB Software
                                                                                                       Solutions">
          </a>
          <p class="text-center">Over a dozen website designs created utilizing a variety of web development tools, SEO strategies, and 
            marketing techniques.</p>
          <div class="text-center">
            <a class="btn btn-primary" href="http://www.kbsoftwaresolutions.com/view/portfolio.php">More Info</a>
          </div>
        </div>

        <!-- Projects 3 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="meals-on-wheels.php">Delivery Services App</a>
          </h2>
          <a href="meals-on-wheels.php">
            <img class="img-responsive portfolio-image" src="../img/meals-on-wheels-login-700x400.jpg" alt="Delivery services application
                                                                                                            that provides optimal routing">
          </a>
          <p class="text-center">Meals on Wheels drivers build delivery schedules and generate optimal navigation
            through Google Map API. Administrator privileges allow moderation.</p>
          <div class="text-center">
            <a class="btn btn-primary" href="meals-on-wheels.php">More Info</a>
          </div>
        </div>

      </div>
      <!-- /.row -->

      <!-- Projects Row -->
      <div class="row portfolio-row">

        <!-- Projects 1 -->
        <div class="col-md-4 portfolio-item">
          <h2 class="portfolio-title text-center">
            <a href="daily-inspirations.php">Daily Insparations</a>
          </h2>
          <a href="daily-inspirations.php">
            <img class="img-responsive portfolio-image" src="../img/daily-inspirations-home-screen-700x400.jpg" alt="12 Step Based Recovery Applicaton that sends users daily inspirational messages and tracks their sobriety time">
          </a>
          <p class="text-center">Alcoholics Anonymous based android application that sends users daily inspirational quotes, tracks sobriety time, and locates nearby meetings.</p>
          <div class="text-center">
            <a class="btn btn-primary" href="daily-inspirations.php">More Info</a>
          </div>
        </div>

        <!-- Projects 2 -->
        <div class="col-md-4 portfolio-item">

        </div>

        <!-- Projects 3 -->
        <div class="col-md-4 portfolio-item">

        </div>

      </div>
      <!-- /.row -->

      <!-- Pagination 
<div class="row text-center">
<div class="col-lg-12">
<ul class="pagination">
<li>
<a href="#">&laquo;</a>
</li>
<li class="active">
<a href="#">1</a>
</li>
<li>
<a href="#">2</a>
</li>
<li>
<a href="#">3</a>
</li>
<li>
<a href="#">4</a>
</li>
<li>
<a href="#">5</a>
</li>
<li>
<a href="#">&raquo;</a>
</li>
</ul>
</div>
</div>
<!-- /.row -->

      <?php require_once('../template/footer.php'); ?>