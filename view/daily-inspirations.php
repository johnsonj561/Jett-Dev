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
              <h1 class="page-header">Daily Inspirations<br>
                <small>12 Step Recovery App</small>
              </h1>
              <p>This Android application was developed in Summer of 2014 using Java and the Android SDK, marking the first complete Android
                application to be developed by Justin.</p>
              <p>Functionality Includes:</p>
              <ul>
                <li>Randomly generates a new inspirational quote and scenic image each day</li>
                <ul>
                  <li>Quotes are spiritual and religious expressions designed to promote healthy lifestyles</li>
                  <li>Quotes are recycled in a manner that prevents repeated instances</li>
                </ul>
                <li>Pushes notifications to user's phone on a daily basis</li>
                <ul>
                  <li>Users are able to choose the time of day they would like to receive their notification</li>
                </ul>
                <li>Display common Alcoholics Anonymous literature to user</li>
                <li>Find local AA and NA meetings with Google Maps</li>
                <ul>
                  <li>Users enter a city and state, or use phone's current location</li>
                </ul>
                <li>Track Sobriety Time</li>
                <ul>
                  <li>Users enter their sobriety date and app calculates time since sobriety date</li>
                  <li>Users may view their sobriety time in years, days, hours, minutes, or seconds</li>
                </ul>
              </ul>
              <a href="https://github.com/johnsonj561/Daily-Inspirations" target="_blank" class="btn btn-primary">View Source Code</a>
            </div>
            <div class="col-lg-4 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/daily-inspirations-home-screen-300x500.jpg" 
                   alt="Android application that supports users with their 12 step recovery program">
            </div>
          </div>
        </div>
      </div>


      <!-- Application Screenshots -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Application Screenshots</h3>
            <div class="col-lg-4">
              <h4>Sobriety Counter</h4>
              <img class="img-responsive img-rounded wrap-image" src="../img/daily-inspirations-view-sober-time-300x500.jpg" 
                   alt="Android application that tracks and displays sober time">
            </div>
            <div class="col-lg-4">
              <h4>Find Meetings</h4>
              <img class="img-responsive img-rounded wrap-image" src="../img/daily-inspirations-find-meetings-300x500.jpg" 
                   alt="Android application that helps users to find local AA and NA meetings">
            </div>
            <div class="col-lg-4">
              <h4>Be Inspired</h4>
              <img class="img-responsive img-rounded wrap-image" src="../img/daily-inspirations-spiritual-message-300x500.jpg" 
                   alt="Android application that sends users daily inspirational messages">
            </div>
          </div>
        </div>
      </div> 

    </div>



    <?php require_once('../template/footer.php'); ?>