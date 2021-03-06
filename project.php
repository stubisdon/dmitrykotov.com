<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = 18;
}

# Previous and next project id modification ($id == 1 doesn't work, why?)

if ($id != 20) {
    $next_id = $id+1;
    $prev_id = $id-1;
} elseif ($id == 1) {
    $next_id = 2;
    $prev_id = 20;
} else {
    $next_id = 1;
    $prev_id = 19;
}

$db = mysqli_connect('localhost', 'root', '407a8b25', 'portfolio') OR die('Error: '.mysqli_connect_error);

$q = "SELECT * FROM portfolio_data WHERE id = $id";
$r = mysqli_query($db,$q);

$project = mysqli_fetch_assoc($r);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Page title GET?? -->
        <title><?php echo $project['title'] . " Project Card" ?></title>

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700" rel="stylesheet">


        <!-- Styles -->
        <link rel="stylesheet" href="css/slides.css" name="main-styles">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="js/plugins.js" type="text/javascript" name="plugins"></script>
        <script src="js/slides.js" type="text/javascript" name="main-scripts"></script>
        <script>
          $(function(){
           $('.gasayhievent').click(function(){
             ga('send', 'event', 'project<?php echo $project['id']; ?>', 'sayhi');
           });
           $('.ganextproject').click(function(){
             ga('send', 'event', 'project<?php echo $project['id']; ?>', 'next');
           });
           $('.gaprevproject').click(function(){
             ga('send', 'event', 'project<?php echo $project['id']; ?>', 'prev');
           });
           $('.gaplayvideo').click(function(){
             ga('send', 'event', 'project<?php echo $project['id']; ?>', 'play');
           });
          });
        </script>
        <!-- Hotjar Tracking Code for www.dmitrykotov.com -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:416577,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
        </script>


    </head>
    <body class="slides scroll fast whiteSlide">
<?php include_once("config/analyticstracking.php") ?>
      <!-- SVG Library -->
      <svg xmlns="http://www.w3.org/2000/svg" style="display:none">

        <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>

        <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>

        <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>

        <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>

        <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>

      </svg>


<!-- Navigation
<nav class="side">
  <div class="navigation">
    <ul></ul>
  </div>
</nav>
-->

<!-- Panel top #06 -->
<nav class="panel top">
  <div class="sections">
    <div class="left"><a href="/" style="font-family:'Rubik', serif; letter-spacing:0em; color:white;"></a></div>
    <div class="right"><ul class="menu crop">
        <li><a href="/" style="font-family:'Rubik', serif; letter-spacing:0em; color:white;">All Projects</a></li>
      </ul></div>
  </div>
</nav>

<section class="slide kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-12-12">
          <ul class="grid left">
            <li class="col-12-12 fromBottomLeft">
              <h2 class="micro ae-1">project #<?php echo $project['id']; ?></h2>
              <h1 class="ae-2 small"><?php echo $project['title'] ?></h1>
            </li>
            <li class="col-12-12">
              <div class="<?php echo $project['video?'] ?> noShadow box-90 ae-7 gaplayvideo" data-popup-id="90">
                <?php echo $project['video_embed']; ?>
              </div>
            </li>
            <li class="col-12-12">
              <div class="ae-3"><p><?php echo $project['long description']; ?></p></div>
            </li>
            <li class="col-6-12 ae-5 equalElement">
              <h3 class="uppercase">Credits</h3>
              <p class="tiny"><?php echo $project['credits']; ?></p>
            </li>
            <li class="col-6-12 ae-4 equalElement">
              <h3 class="uppercase">What I've done</h3>
              <p class="tiny"><?php echo $project['skill']; ?></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="background <?php echo $project['back_color']; ?>"></div>
</section>

<!-- Popup Video
<div class="popup autoplay" data-popup-id="90">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo">
            ?php echo $project['video_popup']; ?
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Popup Video 2
<div class="popup autoplay" data-popup-id="91">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent">
            <iframe src="?php echo $project['video_embed']; ?" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Popup Video 3
<div class="popup autoplay" data-popup-id="92">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-10-12">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/178097719?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Panel Bottom #09 -->
<nav class="panel bottom">
  <div class="sections desktop">
    <div class="center">
      <a class="button rectangular gaprevproject" href="/project.php?id=<?php echo $prev_id; ?>">Previous</a>
      <a class="button purple rectangular gasayhievent" href="/say_hi">Request a project</a>
      <a class="button rectangular ganextproject" href="/project.php?id=<?php echo $next_id; ?>" style="color:black">Next</a>
    </div>
  </div>
  <div class="sections compact">
    <div class="center">
      <div class="button rectangular gaprevproject"><a href="/project.php?id=<?php echo $prev_id; ?>" style="color:black"><</a></div>
      <button class="button rectangular popupTrigger gasayhievent" data-popup-id="contact">Say hi!</button>
      <div class="button rectangular ganextproject"><a href="/project.php?id=<?php echo $next_id; ?>" style="color:black">></a></div>
    </div>
  </div>
</nav>

<!-- Popup Contact Form -->
<div class="popup" data-popup-id="contact">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        <div class="fix-6-12 box-55 popupContent">
          <h1 class="small ae-1">Holá!</h1>
          <div class="ae-2"><p>Want to make something cool?</p></div>
          <div class="ae-3">
            <form action="ajax-email.php" method="post" id="contact-form" class="wide left">
              <!--<label class="uppercase ae-4" for="name55">Your name</label>-->
              <input class="stroke rectangular ae-5 wide" id="name55" type="name" name="name" placeholder="Your Name" required/>
              <!--<label class="uppercase ae-6" for="email55">Email</label>-->
              <input class="stroke rectangular ae-7 wide" id="email55" type="email" name="email" placeholder="Email" required/>
              <!--<label class="uppercase ae-8" for="message55">Your idea in 2-3 sentences. We'll take it from there!</label>-->
              <textarea class="stroke rectangular left ae-9" id="message55" type="text" name="message" placeholder="What can I help with?" required></textarea>
              <input class="button wide indigo rectangular uppercase ae-10 button-55" type="submit" name="submit" value="Send message" data-success-text="Done!" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Preloader -->
<div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>

    </body>
</html>
