<?php
/*
| -------------------------------------------------------------------
| sendContactMessage(name, telephone, email, message
| -------------------------------------------------------------------
| Sends message info through use of php mail() function
| 
*/
function sendContactMessage($name, $telephone, $email, $message){
  
  // Define message details
  $recipients = 'jjohnson@ambrosiatc.com, johnsonj561@gmail.com';
  $subject = 'Jett Dev Message Center';
  $message = "
    <html>
      <head>
        <title>New Message from Jett Dev</title>
      </head>
      <body>
        <h3>Name</h3>
        <p>$name</p>
        <h3>Telephone</h3>
        <p>$telephone</p>
        <h3>Email</h3>
        <p>$email</p>
        <h3>Message</h3>
        <p>$message</p>
      </body>
    </html>";
  
  // Set headers
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';
  $headers[] = 'From: Jett Dev Messaging <contact@jettdev.ddns.net>';
  
  // Mail message and return true if successful
  if(mail($recipients, $subject, $message, implode("\r\n", $headers))){
    return true;
  }
  
  // If Mail() failed, return false
  return false;
}
?>