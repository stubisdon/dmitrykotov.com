<?php

#Start the Session
#session_start();

#if (!isset($_SESSION['username'])) {
#  header('Location: add_port.php');

#}

?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Thanks for a submission!</h1>
        <medium>I am working on your data and will hit you up with a project when it appears.</medium>
      </div>
      <div>
        <img src="img/haminwheel2.gif" alt="I'm working">
      </div>
    </div>

  </body>
</html>
