<?php

#Start the session:
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: index.php');
}

?>

<?php include('config/setup.php');?>
