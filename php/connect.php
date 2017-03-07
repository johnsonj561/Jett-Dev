<?php

//db connection parameters
$databaseName = "jett_dev"; 
$databaseHostname = "localhost"; 
$username = "johnsonj561"; 
$password = "GATEway88";

$link = mysqli_connect($databaseHostname, $username, $password, $databaseName);

if($link){

}
else{
  echo "Connection to database failed.";
  echo mysql_error($link);
}


session_start();

if(!isset($_SESSION['loggedIn'])){
  $_SESSION['loggedIn'] = false;
}
if(!isset($_SESSION['userID'])){
  $_SESSION['userID'] = -1;
}
if(!isset($_SESSION['username'])){
  $_SESSION['username'] = -1;
}

?>
