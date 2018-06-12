<?php

#Start Session:
session_start();

#Database Connection:
include('config/setup.php');

if ($_POST) {
  $q = "SELECT * FROM player_data WHERE email = '$_POST[email]'";
  $r = mysqli_query($db, $q);

  if(mysqli_num_rows($r) == 0) {
    header('Location: thank_you_freelancer.php');
  } else {header('Location: registered.php');}

}

?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="fb:app_id" content="123"/>
    <meta property="og:title" content="Würk Freelancer Registration form" />
    <meta property="og:url" content="http://dmitrykotov.com/freelance" />
    <meta property="og:image" content="http://dmitrykotov.com/img/wurk_thumb2.jpg" />
    <meta property="og:description" content="We are helping creative freelancers get projects" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-formhelpers.css">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap-formhelpers.js"></script>

    <title>Freelancer Registration Form</title>

  </head>
  <body>
    <div class="container" style="padding-bottom:15px;">
      <div class="jumbotron">
        <h1>Hello, my friend!</h1>
        <p>My job is to get you busy. Let's complete this form and start working together.</p>
      </div>
<form action="add_port.php" name="addPortfolio" id="portForm" method="post" role="form">
      <?php

      if($_POST['submitted'] == 1) {

        $q = "INSERT INTO player_data (username, email, portfolio_link, skillset, country, languages, rate_min, rate_max) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[portfolio_link]', '$_POST[skillset]', '$_POST[country]', '$_POST[languages]', '$_POST[rate_min]', '$_POST[rate_max]')";
        $r = mysqli_query($db, $q);

        if($r) {
          echo '<p>User is added!</p>';
        } else {echo '<p>Script is not launched because: '.mysqli_error($db).'</p>';
          echo '<p>'.$q.'</p>';
          print_r($_POST);}

      }

       ?>

      <div class="row">
      <div class="col-md-6">

          <div class="form-group">
            <label for="InputUsername">Username</label>
            <input type="text" class="form-control" name="username" id="InputUsername" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="InputEmail">E-mail address</label>
            <input type="email" class="form-control" name="email" id="InputEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="InputPortfolio">Link to Your Portfolio</label>
            <input type="link" class="form-control" name="portfolio_link" id="InputPortfolio" placeholder="http://" required>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label for="InputSkill">Skills</label>
            <input type="text" class="form-control" name="skillset" id="InputSkill" placeholder="e.g. Graphic Design, Web Development, etc." required>
          </div>
          <div class="form-group">
            <label for="InputCountry">Country</label>
            <input type="text" class="form-control" name="country" id="InputCountry" placeholder="Country" required>
          </div>
          <div class="form-group">
            <label for="InputLanguages">Languages</label>
            <input type="text" class="form-control" name="languages" id="InputLanguages" placeholder="Languages" required>
          </div>
          <!-- attach file
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          -->
          <!-- Checkbox
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
        -->
      </div>
    </div>
      <div class="row">
        <div class="col-md-12">
            <label for="exampleInputLanguages1">Hourly rate, $USD (min-max)</label>
            <div data-role="rangeslider">
              <input type="range" name="rate_min" id="range-1a" min="0" max="99" value="10">
              <input type="range" name="rate_max" id="range-1b" min="0" max="99" value="20">
            </div>
        </div>
      </div>
      <!--<div class="row">
        <div class="col-md-12">
              <fieldset data-role="controlgroup">
                  <input type="checkbox" name="agreed_projects" id="checkbox-v-2a">
                  <label for="checkbox-v-2a">I agree to receive emails with new projects</label>
                  <input type="checkbox" name="agreed_show" id="checkbox-v-2b">
                  <label for="checkbox-v-2b">I agree to publish my work on this website as a demonstration of my skills</label>
              </fieldset>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-default">Submit</button>
          <input type="hidden" name="submitted" value="1">
        </div>
      </form>
      </div>
    </div>

  </body>
</html>
