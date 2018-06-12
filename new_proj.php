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
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="fb:app_id" content="123"/>
    <meta property="og:title" content="Get your project done" />
    <meta property="og:url" content="http://dmitrykotov.com/project" />
    <meta property="og:image" content="http://dmitrykotov.com/img/project_thumb.jpg" />
    <meta property="og:description" content="Let me make a competitive proposal for you new project" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-formhelpers.css">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap-formhelpers.js"></script>

    <title>Make a new project</title>

  </head>
  <body>
    <div class="container" style="padding-bottom:15px;">
      <div class="jumbotron">
        <h1>New Project? Awesome!</h1>
        <p>Now it's time to tell a little bit about your Project so I could take that information and build a nice and competitive estimate for you.</p>
      </div>
<form action="new_project.php" name="addProject" id="projForm" method="post" role="form">
      <?php

      if($_POST['submitted'] == 1) {

        $q = "INSERT INTO project_data (name, email, title, description, objective, deadline, budget_min, budget_max) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[title]', '$_POST[description]', '$_POST[objective]', '$_POST[deadline]', '$_POST[budget_min]', '$_POST[budget_max]')";
        $r = mysqli_query($db, $q);

        if($r) {
          echo '<p>Project is added!</p>';
        } else {echo 'error';}

      }

       ?>

      <div class="row">
      <div class="col-md-6">

          <div class="form-group">
            <label for="InputInvestorName">Your Name</label>
            <input type="text" class="form-control" name="name" id="InputInvestorName" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <label for="InputEmail">E-mail address</label>
            <input type="email" class="form-control" name="email" id="InputEmail" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="InputTitle">Name of the project</label>
            <input type="text" class="form-control" name="title" id="InputTitle" placeholder="Let's give it a name, shall we?" required>
          </div>
          <div class="form-group">
            <label for="InputDescription">Desciption</label>
            <input type="text" class="form-control" name="description" id="InputDescription" placeholder="What do you need to make?" required>
          </div>
          <div class="form-group">
            <label for="InputObjective">Objective</label>
            <input type="text" class="form-control" name="objective" id="InputObjective" placeholder="Is there any goals for the project?" >
          </div>
          <div class="form-group">
            <label for="InputDeadline">Deadline (optional)</label>
            <input type="date" class="form-control" name="deadline" id="InputDeadline" placeholder="" >
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
            <label for="InputBudget">Budget ($,min-max)</label>
            <div data-role="rangeslider">
              <input type="range" name="budget_min" id="range-1a" min="0" max="10000" value="1000">
              <input type="range" name="budget_max" id="range-1b" min="0" max="10000" value="5000">
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
