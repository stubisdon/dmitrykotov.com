<?php include('config/setup.php');
      include('config/data.php');

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Page title -->
        <title><?php echo $website_title; ?></title>

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Fonts -->

        <?php include('config/fonts.php'); ?>

        <!-- Styles -->
        <?php include('config/css.php'); ?>

        <!-- Scripts -->
        <?php include('config/scripts.php'); ?>

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
    <body class="slides scroll fast whiteSlide noPreload">
<?php include_once("config/analyticstracking.php") ?>

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
    <div class="left"><a href="http://dmitrykotov.com" class="menu crop panel-top"></a></div>
    <div class="right"><ul class="menu crop panel-top">
        <!-- <li><a href="https://medium.com/@Stubisdon" target="_blank" class="panel-top">Blog</a></li>
        <li><a href="http://stubisdon.com" target="_blank" class="panel-top">Photography</a></li> -->
        <li><a href="about" class="panel-top">About</a></li>
      </ul></div>
  </div>
</nav>

<!-- Slide #69 -->
<section class="slide kenBurns">
  <div class="content">
    <div class="container textBlack">
      <div class="wrap">

        <div class="fix-10-12 toCenter">
          <div class="ae-2"><p class="large" style="margin-bottom:10px;">Hi! My name is</p></div>
          <h1 class="small ae-1">Dmitry Kotov</h1>
          <div class="ae-2"><p class="large" style="margin-bottom:40px;">and I create, produce and analyze videos<!-- moving images and pulsing frequencies --> <!-- I am the fluffiest intermediary between you and the best affordable talent --> // <a href="say_hi" style="font-color:!black;">Get a Free Advice</a></p></div>
        </div>
      <!--  <div class="fix-10-12">
			<div class="ae-2"><p class="large" style="margin-bottom:5px;">Here's what I can do</p></div>
    </div> -->
        <div class="fix-12-12">
          <ul class="grid grid-69 later equal equalMobile">
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project10['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project10['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project10['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project10['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project12['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project12['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project12['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project12['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project7['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project7['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project7['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project7['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project15['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project15['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project15['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project15['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project5['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project5['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project5['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project5['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project6['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project6['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project6['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project6['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project11['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project11['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project11['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project11['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project1['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project1['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project1['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project1['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project8['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project8['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project8['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project8['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project9['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project9['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project9['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project9['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project13['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project13['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project13['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project13['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project4['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project4['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project4['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project4['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project16['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project16['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project16['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project16['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project17['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project17['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project17['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project17['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project18['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project18['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project18['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project18['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project19['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project19['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project19['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project19['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project20['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project20['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project20['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project20['category']; ?></h3>
            </li>
            <li class="col-4-12 col-tablet-1-2 col-phone-1-1">
              <a href="/project.php?id=<?php echo $project14['id']; ?>" class="preview empty margin-bottom-3 ae-4"><img class="img-91 wide" src="assets/img/<?php echo $project14['preview4'] ?>" alt="Image Thumbnail"/></a>
              <div class="ae-6"><p class="projectname"><?php echo $project14['title']; ?></p></div>
              <h3 class="projectcategory"><?php echo $project14['category']; ?></h3>
            </li>

          </ul>
        </div>
        <div class="fix-10-12 center">
          <div class="ae-2">
            <p class="large" style="margin-top:60px; margin-bottom:20px;">Want to make something like this? // <a href="/say_hi" style="font-color:!black;">Get a Free Quote</a></p>
            <!-- <p class="large" style="margin-bottom:40px;">Want to make something in VR? // <a href="mailto:hi@stubisdon.com" style="font-color:!black;">Ask my friends</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="background white"></div>
</section>

<!-- Popup Contact Form -->
<div class="popup" data-popup-id="contact">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        <div class="fix-6-12 box-55 popupContent">
          <h1 class="small ae-1">Holá!</h1>
          <div class="ae-2"><p>Want to make something cool?</p></div>
          <div class="shadow ae-3">
            <form action="ajax-email.php" method="post" id="contact-form" class="wide left">
              <!--<label class="uppercase ae-4" for="name55">Your name</label>-->
              <input class="stroke rectangular ae-5 wide" id="name55" type="name" name="name" placeholder="Your Name" required/>
              <!--<label class="uppercase ae-6" for="email55">Email</label>-->
              <input class="stroke rectangular ae-7 wide" id="email55" type="email" name="email" placeholder="Email" required/>
              <!--<label class="uppercase ae-6" for="phone55">Phone</label>-->
              <input class="stroke rectangular ae-7 wide" id="phone55" type="text" name="phone" placeholder="Phone" required/>
              <!--<label class="uppercase ae-8" for="message55">Your idea in 2-3 sentences. We'll take it from there!</label>-->
              <textarea class="stroke rectangular left ae-9" id="message55" type="text" name="message" placeholder="Your idea in 2-3 sentences" required></textarea>
              <input class="button wide indigo rectangular uppercase ae-10 button-55" type="submit" name="submit" value="Send message" data-success-text="Done!" />
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- Panel Bottom #09
<nav class="panel bottom">
  <div class="sections">
    <div class="center"><a href="mailto:hi@stubisdon.com" style="font-family:'Cormorant Garamond', serif; letter-spacing:-0.06.em;">hi@stubisdon.com</a></div>
  </div>
</nav> -->

<!-- Preloader -->
<div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>

    </body>
</html>
