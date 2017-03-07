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
          <h1 class="page-header">PIC n Place
            <small>Java User Interface Provides Full Control of Pick and Place Machine</small>
          </h1>
        </div>
      </div>
      <!-- /.row -->

      <!-- Introduction Row -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <div class="col-lg-8">
              <p>The PIC n Place machine was designed and built by Sam Rosenfield (electrical), Stephen Lyons (mechanical), and Justin 
                Johnson (programmer) in Fall of 2016 as a Senior design project. The machine utilizes a vacuum nozzle to pick up surface
                mount components, move them about the workspace, and place them accurately onto printed circuit boards. This is accomplished
                with 4 degrees of movement - X, Y, Z, and rotation. Computer vision libraries are used to increase accuracy and improve
                performance. All aspects of the machine were implemented from the ground up with completely custom PCB Design and Software.</p>
              <p>Justin's PC Interface functionality includes:</p>
              <ul>
                <li>Connecting to machine's embedded controller over USB</li>
                <li>Serial communication to send G-Code instructions to machine and parse machine feedback</li>
                <li>Manually controlling machine axes with UI Jog Controls</li>
                <li>Parsing PCB Design input files to generate G-Code commands capable of automating part placement</li>
                <li>Defining SMT part reels and locations on workspace to allow for full placement automation</li>
                <li>Processing batch jobs of G-Code while providing user feedback through interface and log files</li>
                <li>Utilizing OpenCV Computer Vision library to detect proper alignment of larger components before being placed</li>
              </ul>
            </div>
            <div class="col-lg-4 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-manual-controller-600x550.jpg" 
                   alt="Pick and place machine's manual controller written in Java.">
              <p class="text-center"><em>PC Application's Manual Controller provides full control of machine</em></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Connection Settings Row -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Connection Settings</h3>
            <div class="col-lg-4 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-connection-settings-600x550.jpg" 
                   alt="Connection Settings view of Pick and Place machine user interface">
              <p class="text-center"><em>Easy to use application gets new users up and running quickly</em></p>
            </div>
            <div class="col-lg-8">
              <p>When the PC application is first launched the Connection Settings view is displayed. This view allows users to connect
                to a machine over USB. The intuitive design of this application allows users to begin operating the PIC n Place machnie
                quickly and efficiently.</p>
              <p>Components of Connection Settings Include</p>
              <ul>
                <li>Define workspace dimensions</li>
                <ul>
                  <li>Allows software to catch out of bounds errors that could potentially damage machine</li>
                </ul>
                <li>Select a communication baud rate to synchronize with the machine's embedded controller</li>
                <li>Select a default feed rate to define machine's speed</li>
                <li>View available communication ports and select an appropriate port for machine</li>
                <li>Connect or Disconnect from a machine</li>
                <li>Save connection and workspace settings for future jobs</li>
                <li>Import connection and workspace settings from previous jobs</li>
                <li>Restore default workspace and connection settings (suggested settings)</li>
                <li>Enable debug log which creates text file on local machine</li>
                <ul>
                  <li>Job feedback and error messages will be written to log file</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </div> 

      <!-- Define Parts Row -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Defining Parts</h3>
            <div class="col-lg-6">
              <p>In order to allow for complete automation - the machine must know where parts to be placed are located on the workspace.
                Once the machine is aware of the part's locations, it can compare these coordinates to those coordinates of the PCB design
                file, then calculate the required movements to place all parts autonomously.</p>
              <p>SMT Components are often stored in reels/tapes along the edge of the workspace. Larger ICs may be found in trays that
                are placed on the workspace. The Parts Definition view of the application allow users to tell the machine exactly where to
                find the parts that it needs, so that the machine can then pick them up and place them onto the PCB.</p>
              <p>Parts Definition Overview</p>
              <ul>
                <li>User jogs machine head to the first part in a row and click's "Define First Part"</li>
                <li>User jogs machine to last part in the row and click's "Define Last Part"</li>
                <li>Defining this part's footprint, value, and checking off whether or not placement requires vision</li>
                <li>Selecting "Add Part" to workspace</li>
                <ul>
                  <li>Software takes first part, last part, and total part count as input; then calculates the exact coordinates of
                    every part in that row</li>
                  <li>This allows machine to iterate through it's list of parts and find coordinates of next available part to be placed</li>
                </ul>
                <li>Users are able to save their part's files for future use and import them to future jobs</li>
                <ul>
                  <li>Saves time and prevents users from creating new parts files each batch job</li>
                </ul>
                <li>Parts can be edited or changed as required</li>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-define-parts-600x550.jpg" 
                   alt="Pick and place machine's define parts view allows user to tell machine where it can find the next part">
              <p class="text-center"><em>Part's Definition view tells the machine where to find the parts being placed</em></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Generate G Code View -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Generating G Code</h3>
            <div class="col-lg-6 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-generate-g-code-600x550.jpg" 
                   alt="Generate G Code View allows users to combine PCB design files with parts definition files to create G Code">
              <p class="text-center"><em>Application takes PCB Design File and Parts Definitions file as input, producing G Code output
                that allows for complete part placement automation.</em></p>
            </div>
            <div class="col-lg-6">
              <p>The primary goal of the PIC n Place machine is automating the process of placing surface mount components onto printed
                circuit boards. Our machine operates on G Code instructions. For example - G1 X5.5 instructs the machine to move laterally
                on x-axis to position at 5.5mm. The G Code Generation view is the next step in automating part placement, as it allows the machine
                operator to provide PCB Design Files and Part Definition files as input. The application will parse these files and output the G
                Code instructions required to effectively pick up and place all surface mount components onto the PCB.
              </p>
              <p>PCB Design files are generated by the PCB design software. The PIC n Place application is able to fully parse and comprehend 
                design files generated by Eagle and Altium, two popular PCB design tools. These design tools offer options to export centroid
                files, text files that describe the exact position of all components, their angle of rotation, their part footprints and values,
                and more. Users can easily upload these files to the PIC n Place application for parsing.
              </p>
              <p>Next, users upload the part's definitions file. This is the text file that was generated in the previous section. It contains
                the location of all parts on the workspace, including their footprint, value, and andle of rotation. With this information, the
                PC application is able to parse both files, calculate the required movements to pick up and place all parts, then translate these
                movements into universal G Code instructions. Users can then review the produced G Code, make edits to it as needed, read over
                application's auto-generated comments, and of course save the G Code for future use. </p>
              <p>Components of Connection Settings Include</p>
            </div>
          </div>
        </div>
      </div> 

      <!-- Upload To Machine -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Batch Jobs</h3>
            <div class="col-lg-6">
              <p> Uploading G Code files to the PIC n Place machine is the final step in automating part placement. The G Code that was
                produced by the PC application in the previous step can now be uploaded to the machine line by line, carrying out all
                instructions until the job is complete.</p>
              <p>Some key features include:</p>
              <ul>
                <li>Upload G Code View forces user to validate G Code before starting batch job</li>
                <ul>
                  <li>Detects errors before starting job</li>
                  <li>Highlights errors in read and prompts user to correct them</li>
                </ul>
                <li>G Code instructions are uploaded to machine's embeded controller for processing line by line</li>
                <li>PC Application waits for the machine's response before sending another instruction</li>
                <ul>
                  <li>Sychronizes PC application with embeddedsystem, allows for error detection and handling</li>
                </ul>
                <li>Current instruction is highlighted in green to alert user of job progress</li>
                <li>Upon job completion user is alerted and given the option to save the updated Parts Definition File</li>
                <ul>
                  <li>Note - user should save the updated parts definition file, as some parts have now been used</li>
                  <li>This allows for jobs to be carried out in sequence while using the same part's file, no need to re-create</li>
                </ul>
              </ul>
            </div>
            <div class="col-lg-6 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-upload-600x550.jpg" 
                   alt="Pick and place machine's upload G Code view is responsible for sendig G Code instructions to machine's embedded controller">
              <p class="text-center"><em>The Upload G Code view carries out batch jobs while providing user feedback</em></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Computer Vision -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Computer Vision</h3>
            <div class="col-lg-6 text-center">
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-computer-vision.jpg" 
                   alt="Computer Vision Used to detect errors in part placement">
              <p class="text-center"><em>Vision System processes images to detect error in position and rotation</em></p>
            </div>
            <div class="col-lg-6">
              <p>The PIC n Place machine utilizes a Computer Vision system to detect error in component position and rotation. If the vision
                system detects error, the application then signals the machine's embedded controller to make adjustments. Once adjustments
                are complete, the vision system will capture a new image and re-check that orientation is now correct. This crucial subsystem
                greatly improves the machine's accuracy when automating part placement during batch jobs.
              </p>
              <p>The Vision System was implemented in python using the OpenCV vision library. A short breakdown in the vision system's
                processing includes: </p>
              <ul>
                <li>Move part to light chamber and lower part over camera</li>
                <ul>
                  <li>Light chamber improves image quality and allows for better results in edge detection</li>
                </ul>
                <li>Application signals PC to capture image using the workspace's USB Camera that is also connected to PC</li>
                <li>Perform image pre-processing techniques</li>
                <ul>
                  <li>Threshold data to create binary black and white image</li>
                  <li>Sharpen edges by applying edge sharpening kernal to data</li>
                  <li>Utilize OpenCV Contour Detection to construct fitted rectangle around component</li>
                  <li>Collect data from contours - center (x,y), width, height, angle of rotation, etc</li>
                </ul>
                <li>Display the image and the component's data values to user</li>
                <li>Send appropriate G Code instructions to machine's embedded system, correcting any orientation errors</li>
              </ul>
            </div>
          </div>
        </div>
      </div> 

      <!-- Video of Batch Job -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <h3>Light Chamber</h3>
              <p>A LED Light Chamber was used to capture effective images that would make for easy image processing and edge detection.</p>
              <img class="img-responsive img-rounded wrap-image" src="../img/pic-n-place-lightchamber-600x550.jpg" 
                   alt="Pick and Place Machine Vision System Light Chamber">

            </div>
            <div class="col-lg-6">
              <h3>Video Demo</h3>
              <p>A short video that displays PIC n Place machine carrying out batch job and placing 0805 SMT components onto PCB.</p>
              <video id="pic-n-place-video" controls>
                <source src="/video/pic-n-place-demo.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>

      <!-- Conclusions -->
      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <h3>Conclusions</h3>
            <p>We feel that our Senior Design Project was a huge success. Our team of 3 undergraduate engineering students overcame 
              major challenges and developed a working solution that met all design specifications in just over a semester's 
              time frame. We enjoyed many late night's in the engineering lab, working hard and having a great time.</p>
            <p>The PC Application was written by Justin Johnson in Java using MVC architecture. Feel free to 
              <a href="https://github.com/johnsonj561/PNP-UI" target="_blank"> check out the source code on github.</a></p>
          </div>
        </div>
      </div>
    </div>

    </div>

  <?php require_once('../template/footer.php'); ?>