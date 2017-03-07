<?php
require_once("connect.php");    //connect to DB

/*
| -------------------------------------------------------------------
| isLoggedIn(username)
| -------------------------------------------------------------------
| Login function checks database for username/password pair
| Returns true if Username exists and password is correct
| Returns false if no valid matchis found 
*/
function isLoggedIn($username = NULL){

  // If a user is logged in
  if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 'true'){

    // If username not provided, isLoggedIn returns true
    if($username == NULL){
      return true;
    }

    // If username is provided and username matches, return true
    else if(isset($_SESSION['username']) && $_SESSION['username'] == $username){
      return true;
    }

    // Else no match, return false
    return false;

  }

  return false;

}

/*
| -------------------------------------------------------------------
| isAdmin()
| -------------------------------------------------------------------
| Returns true if current active user has admin priveleges
| 
*/
function isAdmin(){

  // If someone is logged in
  if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']){

    // If usertype = Admin, return true
    if(isset($_SESSION['userType']) && $_SESSION['userType'] == 'Admin'){
      return true;
    }

  }

  // Else return false
  return false;

}


/*
| -------------------------------------------------------------------
| loginUser(username, password)
| -------------------------------------------------------------------
| Login function checks database for username/password pair
| Returns true if Username exists and password is correct
| Returns false if no valid matchis found 
*/
function loginUser($username, $password, $link){

  // Find username in database
  $salt = "X1K$6B8";
  $query = "SELECT * FROM Users where Username = '$username';";
  $result = mysqli_query($link, $query);

  // If we have a match then check password
  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $password = crypt($password, $salt);

    // If password matches, store login status in $_SESSION
    if($password == $row['Password']){
      $_SESSION['userID'] = $row['UserID'];
      $_SESSION['loggedIn'] = true;
      $_SESSION['username'] = $username;
      $_SESSION['userType'] = $row['UserType'];
      return true;
    }

    // Else passwords do not match, return to home page wtih error
    else{ 
      return false;
    }

    mysqli_free_result($result);
  }

  // Else Username does not exist, return to home page wtih error
  else{
    return false;
  }

}

/*
| -------------------------------------------------------------------
| usernameExists(username, link)
| -------------------------------------------------------------------
| Queuries database to see if username exists
| Returns true if username already exists
| 
*/
function usernameExists($username, $link){
  $query = "SELECT UserID FROM Users WHERE Username = '$username'";
  $result = mysqli_query($link, $query);
  // If row with username exists, it is not a valid username for registration
  if(mysqli_num_rows($result) > 0){     
    return true;
  }
  // Else username does not exist
  else{                                
    return false;
  }
  mysqli_free_result($result);
}


/*
| -------------------------------------------------------------------
| validatePasswords(password1, password2)
| -------------------------------------------------------------------
| Returns true if password1 == password2
| 
*/
function validatePasswords($password1, $password2){
  if($password1 == $password2){
    return true;
  }
  else{
    return false;
  }
}


/*
| -------------------------------------------------------------------
| addNewUser(username, password, usertype)
| -------------------------------------------------------------------
| Adds new user to Users table of database
| username - unique name for new user
| password - encrypted password
| usertype - User vs Admin to determine privileges, default is User
| 
*/
function addNewUser($username, $password, $link){
  // Add entry to Users table
  $query = "INSERT INTO Users
            (Username, Password) 
            VALUES
            ('$username', '$password');";
  mysqli_query($link, $query);

}


/*
| -------------------------------------------------------------------
| logout()
| -------------------------------------------------------------------
| Destroys current session and logs user out
| 
*/
function logoutUser(){
  session_destroy();
  session_start();
}






?>