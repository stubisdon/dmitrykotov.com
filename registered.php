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
        <h1>This email already exists in the database</h1>
        <medium>Did you want to change something or that was not you? Shoot me a message about it <a href="mailto:hi@dmitrykotov.com">here</a></medium>
      </div>

    </div>

  </body>
</html>
