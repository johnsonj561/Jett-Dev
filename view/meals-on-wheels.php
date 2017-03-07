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
            <h1 class="page-header">Meals On Wheels Application<br>
              <small>Delivery &amp; Routing Services</small>
            </h1>
            <div class="col-lg-6">
              <p>The Meals On Wheels Delivery &amp; Routing Services is a web application developed on the LAMP stack. The application
                provides functionality for both Meals On Wheels employees and their drivers - allowing drivers to create delivery schedules, 
                generate optimal delivery routes using Google Map API, and launch navigation services that will take the driver to their stops.
              </p>
              <p>Administrators can: </p>
              <ul>
                <li>Add, remove, or edit recipients that will have food delivered to them</li>
                <li>View driver's schedules</li>
                <li>Confirm that all recipients have drivers assigned to them</li>
                <ul>
                  <li>Manually assign recipients to drivers so that no one is left out</li>
                </ul>
                <li>View issues or concerns that have been reported by delivery drivers</li>
                <li>View check-in statuses to make sure that scheduled drivers have checked in</li>
                <ul>
                  <li>If drivers have not checked in, administrators may then divide their schedule up
                    amongst other drivers</li>
                </ul>
              </ul>
              <p>Delivery drivers can: </p>
              <ul>
                <li>Register an account and edit their profile</li>
                <li>Check in on their delivery day to confirm attendance</li>
                <li>Create a schedule for a given day of the week</li>
                <ul>
                  <li>Select recipients that they would like to deliver food to on a given day</li>
                </ul>
                <li>Generate Google navigation that optimizes their delivery route</li>
                <li>Edit their profile</li>
              </ul>

            </div>
            <div class="col-lg-6 text-center">
              <img class="img-responsive img-rounded wrap-image meals-on-wheels-image" src="../img/meals-on-wheels-login-500x300.jpg" 
                   alt="Web application for Meals On Wheels">
              <a href="https://github.com/johnsonj561/Meals-On-Wheels" target="_blank" class="btn btn-primary">View Source Code</a><br>
              <a id="view-demo-btn" href="http://www.sharpcutlawns.com/mealsonwheels/" target="_blank" class="btn btn-primary">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Application Screenshots -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Application Screenshots</h3>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="mow-image-row">
                <h4>Drivers Build Routes &amp; Access Navigation</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/meals-on-wheels-build-schedule-500x300.jpg" 
                     alt="Delivery drivers build custom schedules and utilize Google Map API">
              </div>
              <div class="mow-image-row">
                <h4>Administrators Modify Recipient List</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/meals-on-wheels-admin-edit-recipients-500x300.jpg" 
                     alt="Administrators edit schedules to make sure all clients receive food">
              </div>
              <div class="mow-image-row">
                <h4>Administrators Edit Schedules</h4>
                <img class="img-responsive img-rounded wrap-image" src="../img/meals-on-wheels-admin-update-schedule-500x300.jpg" 
                     alt="">
              </div>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </div> 

    </div>



    <?php require_once('../template/footer.php'); ?>