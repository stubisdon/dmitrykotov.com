<?php

#Start Session:
session_start();

#Database Connection:
include('config/setup.php');

if ($_POST) {
  $q = "SELECT * FROM project_data WHERE email = '$_POST[email]'";
  $r = mysqli_query($db, $q);

  if(mysqli_num_rows($r) == 0) {
    header('Location: thank_you_project.php');
  } else {header('Location: one_email.php');}

}

?>
<!doctype html>
<html> <head> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> <title>Let's make you a new video!</title> <style type="text/css"> html{ margin: 0; height: 100%; overflow: hidden; } iframe{ position: absolute; left:0; right:0; bottom:0; top:0; border:0; } </style> </head> <body> <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://stubisdon1.typeform.com/to/UXuX7Y"></iframe> <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script> </body> </html>
