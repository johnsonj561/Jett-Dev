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
              <h1 class="page-header">Bluetooth Smart Feeder<br>
                <small>Dispense Food From Mobile Phone</small>
              </h1>
              <p>The Bluetooth Smart Feeder was created in 2015 for a FAU Embedded System's course project. The feeder, powered by
                the MSP430 microcontroller, contains various sensors that detect available food supplies and dispense food to the bowl
                to be eaten. The feeder uses a pressure sensor to determine how much food is present in the bowl. This information
                is then communicated to the user's mobile phone over bluetooth. The system also includes object recognition that will prevent
                the dispensing of food when an animal is eating, preventing the system from potentially harming a pet. The mobile phone
                application allows users to view the feeder's available food supply and dispense additional food by activating the system's
                motor.</p>
              <p>The mobile phone application was written in Java using the Android SDK. The application allows users to:</p>
              <ul>
                <li>View and select nearby bluetooth devices</li>
                <li>Connect to a bluetooth device</li>
                <li>View pet's current food supply</li>
                <li>View the feeder's hopper food supply</li>
                <li>Dispense food from the hopper to the pet's bowl</li>
              </ul>
              <p>Check out the code on Github: 
                <a href="https://github.com/johnsonj561/MSP430-Bluetooth-Smart-Feeder" target="_blank">MSP430 Code</a> | 
                <a href="https://github.com/johnsonj561/Android-Bluetooth-V2" target="_blank">Android Code</a>
              </p>
            </div>
            <div class="col-lg-4 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/smart-feeder-home-screen-300x500.jpg" 
                   alt="Android application that communicates with food dish through bluetooth technology">
              <p class="text-center"><em>Intuitive design that allows users to feed their pets</em></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Video Demo -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <div class="col-lg-4">
              <h3>Connect Bluetooth</h3>
              <video controls width= "300" height="500">
                <source src="/video/connect-spinMotor.MOV" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-4">
              <h3>360&deg; View</h3>
              <video controls width= "300" height="500">
                <source src="/video/walk-around-view.MOV" type="video/mp4">
              </video>
            </div>
            <div class="col-lg-4">
              <h3>Dispense Food</h3>
              <video controls width= "300" height="500">
                <source src="/video/dispense-food.MOV" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>

    </div>

    </div>



  <?php require_once('../template/footer.php'); ?>