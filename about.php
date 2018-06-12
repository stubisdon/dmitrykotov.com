<?php
//ABOUT:






 ?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Page title -->
        <title>About Dmitry Kotov</title>

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/slides.css" name="main-styles">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="js/plugins.js" type="text/javascript" name="plugins"></script>
        <script src="js/slides.js" type="text/javascript" name="main-scripts"></script>


    </head>
    <body class="slides scroll fast whiteSlide">
<?php include_once("config/analyticstracking.php") ?>

<!-- SVG Library -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">

  <symbol id="logo" viewBox="0 0 106 31"><path d="M17.413 14.04c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52zm2.222 15.96h6.64v-29.6h-6.64v29.6zm9.662-24.56h6.64v-5.04h-6.64v5.04zm0 24.56h6.64v-22.2h-6.64v22.2zm32.782-29.6h-6.64v9.28c-.72-.72-2.6-2.64-6.52-2.64-5.64 0-11 4.28-11 11.8 0 6.68 4.4 11.88 11.12 11.88 4.48 0 6.08-2.2 6.72-3.12v2.4h6.32v-29.6zm-17.52 18.4c0-2.56 1.8-5.56 5.64-5.56 1.56 0 2.96.56 3.96 1.56 1 .96 1.64 2.32 1.64 3.92.08 1.64-.52 3.08-1.56 4.12s-2.52 1.68-4.12 1.68c-3.12 0-5.56-2.28-5.56-5.68v-.04zm42.502 2.4c.52-4.08-.32-7.64-3.12-10.64-2.08-2.2-5-3.52-8.4-3.52-6.76 0-11.64 5.72-11.64 11.92 0 6.6 5.4 11.76 11.76 11.76 2.28 0 4.48-.68 6.32-2 1.88-1.28 3.44-3.2 4.52-5.68h-6.8c-.8 1.16-1.92 2.08-4.04 2.08-2.6 0-4.84-1.56-5.12-3.92h16.52zm-16.44-5.04c.16-1.04 1.52-3.52 4.96-3.52s4.8 2.48 4.96 3.52h-9.92zm34.502-2.12c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52z"/></symbol>

  <symbol id="logo-icon" viewBox="0 0 50 41"><path d="M4,12h42c2.2,0,4,1.8,4,4v21c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V16C0,13.8,1.8,12,4,12z"/><path opacity="0.6" d="M45.5,9h-41C3.7,9,3,8.3,3,7.5v0C3,6.7,3.7,6,4.5,6h41C46.3,6,47,6.7,47,7.5v0C47,8.3,46.3,9,45.5,9z"/><path opacity="0.4" d="M7.5,0h35C43.3,0,44,0.7,44,1.5v0C44,2.3,43.3,3,42.5,3h-35C6.7,3,6,2.3,6,1.5v0C6,0.7,6.7,0,7.5,0z"/></symbol>

  <symbol id="close" viewBox="0 0 30 30"><path d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/></symbol>

  <symbol id="back" viewBox="0 0 20 20"><path d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/></symbol>

  <symbol id="menu" viewBox="0 0 22 22"><path d="M1 5h20c.6 0 1-.4 1-1s-.4-1-1-1h-20c-.6 0-1 .4-1 1s.4 1 1 1zm20 5h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1zm0 7h-20c-.6 0-1 .4-1 1s.4 1 1 1h20c.6 0 1-.4 1-1s-.4-1-1-1z"/></symbol>

  <symbol id="share" viewBox="0 0 22 22"><path d="M21 10c-.6 0-1 .4-1 1v7h-18v-7c0-.6-.4-1-1-1s-1 .4-1 1v7c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-7c0-.6-.4-1-1-1zM5.5 7.5c.3 0 .5-.1.7-.3l3.8-3.8v9.6c0 .6.4 1 1 1s1-.4 1-1v-9.6l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4l-5.5-5.5c-.1-.1-.2-.2-.3-.2-.2-.1-.5-.1-.8 0l-.3.2-5.5 5.5c-.4.4-.4 1 0 1.4.2.2.4.3.7.3z"/></symbol>

  <symbol id="facebook" viewBox="0 0 24 24"><path d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/></symbol>

  <symbol id="fb-like" viewBox="0 0 20 20"><path d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/></symbol>

  <symbol id="twitter" viewBox="0 1 24 23"><path d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/></symbol>

  <symbol id="dribbble" viewBox="0 0 24 24"><path d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/></symbol>

  <symbol id="youtube" viewBox="0 0 24 24"><path d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/></symbol>

  <symbol id="pinterest" viewBox="0 0 24 24"><path d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/></symbol>

  <symbol id="googlePlus" viewBox="0 0 24 24"><path d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z"/></symbol>

  <symbol id="stumbleupon" viewBox="0 0 24 24"><path d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/></symbol>

  <symbol id="linkedin" viewBox="0 0 24 24"><path d="M22.2 0h-20.4c-1 0-1.8.8-1.8 1.7v20.7c0 1 .8 1.7 1.8 1.7h20.5c1 0 1.8-.8 1.8-1.7v-20.7c-.1-.9-.9-1.7-1.9-1.7zm-14.9 20.2h-3.6v-10.9h3.6v10.9zm-1.8-12.4c-1.2 0-2-.8-2-1.9 0-1.1.8-1.9 2.1-1.9 1.2 0 2 .8 2 1.9-.1 1.1-.9 1.9-2.1 1.9zm14.8 12.4h-3.6v-5.8c0-1.5-.5-2.5-1.8-2.5-1 0-1.6.7-1.9 1.3-.1.2-.1.6-.1.9v6.1h-3.6v-10.9h3.6v1.5c.5-.7 1.3-1.8 3.3-1.8 2.4 0 4.2 1.6 4.2 4.9v6.3z"/></symbol>

  <symbol id="apple" viewBox="-1 1 24 24"><path d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/></symbol>

  <symbol id="tumblr" viewBox="0 0 23 23"><path d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/></symbol>

  <symbol id="instagram" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.8.2 2.2.4.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.4.4 1.1.4 2.2.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.8-.4 2.2-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.4.2-1.1.4-2.2.4-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.8-.2-2.2-.4-.6-.2-1-.5-1.4-.9-.4-.4-.7-.8-.9-1.4-.2-.4-.4-1.1-.4-2.2-.1-1.3-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.3-2.3.2-.6.5-1 .9-1.4.5-.4.9-.6 1.4-.9.4-.1 1.1-.3 2.3-.4h4.8m0-2.2c-3.3 0-3.7 0-4.9.1-1.3 0-2.2.2-3 .5-.7.3-1.4.7-2.1 1.4-.7.7-1.1 1.4-1.4 2.1-.3.8-.5 1.7-.5 3-.1 1.2-.1 1.6-.1 4.9 0 3.3 0 3.7.1 4.9.1 1.3.3 2.1.6 2.9.2.8.6 1.5 1.3 2.2.7.7 1.3 1.1 2.1 1.4.8.3 1.6.5 2.9.6h5s3.7 0 4.9-.1c1.3-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.1-1.4.7-.7 1.1-1.3 1.4-2.1.3-.8.5-1.6.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.3-.3-2.1-.6-2.9-.2-.8-.6-1.5-1.3-2.2-.7-.7-1.3-1.1-2.1-1.4-.8-.3-1.6-.5-2.9-.6h-5zM12 5.8c-3.4 0-6.2 2.8-6.2 6.2s2.8 6.2 6.2 6.2 6.2-2.8 6.2-6.2-2.8-6.2-6.2-6.2zm0 10.2c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"/><circle class="st0" cx="18.4" cy="5.6" r="1.4"/></symbol>

  <symbol id="arrow-down" viewBox="0 0 24 24"><path d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/></symbol>

  <symbol id="arrow-up" viewBox="0 0 24 24"><path d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/></symbol>

  <symbol id="arrow-left" viewBox="0 0 31 72"><path d="M30 72c-.3 0-.6-.1-.8-.4l-29-34c-.3-.4-.3-.9 0-1.3l29-36c.3-.4 1-.5 1.4-.2.4.3.5 1 .2 1.4l-28.5 35.5 28.5 33.4c.4.4.3 1.1-.1 1.4-.2.1-.5.2-.7.2z"/></symbol>

  <symbol id="arrow-right" viewBox="0 0 31 72"><path d="M1 0c.3 0 .6.1.8.4l29 34c.3.4.3.9 0 1.3l-29 36c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l28.5-35.5-28.5-33.4c-.4-.4-.3-1.1.1-1.4.2-.1.5-.2.7-.2z"/></symbol>

  <symbol id="arrow-top" viewBox="0 0 24 24"><path d="M20.7 10.3l-8-8c-.4-.4-1-.4-1.4 0l-8 8c-.4.4-.4 1 0 1.4s1 .4 1.4 0l6.3-6.3v15.6c0 .6.4 1 1 1s1-.4 1-1v-15.6l6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/></symbol>

  <symbol id="play" viewBox="0 0 30 30"><path d="M7 30v-30l22 15z"/></symbol>



  <symbol id="login" viewBox="0 0 22 22"><path d="M13 2c0 .6.4 1 1 1h6v16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c1.1 0 2-.9 2-2v-16c0-1.1-.9-2-2-2h-6c-.6 0-1 .4-1 1zm-6.5 3.5c0 .3.1.5.3.7l3.8 3.8h-9.6c-.6 0-1 .4-1 1s.4 1 1 1h9.6l-3.8 3.8c-.2.2-.3.5-.3.7s.1.5.3.7c.4.4 1 .4 1.4 0l5.5-5.5c.1-.1.2-.2.2-.3.1-.2.1-.5 0-.8l-.2-.3-5.5-5.5c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7z"/></symbol>

  <symbol id="drop-down" viewBox="0 0 16 16"><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,5 8,12 15,5" fill="none"/></symbol>

  <symbol id="direction-horizontal" viewBox="-2 6 16 16"><path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z"/></symbol>

  <symbol id="direction-vertical" viewBox="-2 6 16 16"><path d="M6.7 21.7l5-5c.4-.4.4-1 0-1.4s-1-.4-1.4 0l-3.3 3.3v-11.6c0-.6-.4-1-1-1s-1 .4-1 1v11.6l-3.3-3.3c-.4-.4-1-.4-1.4 0-.2.2-.3.4-.3.7 0 .3.1.5.3.7l5 5c.2.2.4.3.7.3s.5-.1.7-.3z"/></symbol>

  <symbol id="right" viewBox="-2 6 16 16"><path d="M13.7 13.3l-5-5c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l3.3 3.3h-11.6c-.6 0-1 .4-1 1s.4 1 1 1h11.6l-3.3 3.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l5-5c.2-.2.3-.5.3-.7s-.1-.5-.3-.7z"/></symbol>
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
    <div class="left"><a href="#" style="font-family:'Rubik', serif; letter-spacing:-0.06.em;"></a></div>
    <div class="right"><ul class="menu crop">
        <li><a href="/" style="color:black; font-family:'Rubik', serif;">Back</a></li>
      </ul></div>
  </div>
</nav>

<!-- Slide #58 -->
<section class="slide">
  <div class="content">
    <div class="container textBlack">
      <div class="wrap">
        <div class="fix-10-12 left">
          <h1 class="small">WhoTF is Dmitry Kotov?</h1>
          <div class="ae-2 text-58">
            <p>I'm a hands-on Video and Sound producer based in San Francisco, CA.</p>
            <h2 class="uppercase small ae-4 text-58">What does it mean?</h2>
            <p>It means that I don't need a pile of specialists seating in my office and burning your budgets down in a couple days. I shoot, edit, color grade and put a CG-cherry on top of dat cake. Plus, if you need a unique soundtrack (that's 50% of the impression for viewers) to your video, I can do that as well! </p>
            <p>How does it usually work?</p>
            <!--<p>Quick facts: 7 years of acting in Theatre [1995-2001], 3 years of playing in a metal band [2008-2011], 4 years of production management</p>-->
          </div>
          <!--<h2 class="uppercase small ae-4 text-58">Projects</h2>
          <div class="ae-5">
            <p class="tiny">V-Cube Data Mining Project - In Progress</p>
            <p class="tiny">Tasty Pastry – Match-3 Social Game</p>
            <p class="tiny">A.Q.U.A. – Mobile Game Concept</p>
            <p class="tiny">Shopfans – Website Redesign</p>
            <p class="tiny">Realfie – Dating App Concept</p>
            <p class="tiny">Fonts.ru – E-commerce Website</p>
            <p class="tiny">Kaspersky Lab – Future Video Ad</p>
            <p class="tiny">Emilie Muller – Short Film</p>
            <p class="tiny">Escape Plan – Interactive Promo Campaign</p>
            <p class="tiny">Supra – Social Video</p>
            <p class="tiny">G-Drive Racing – Mobile Promo App</p>
            <p class="tiny">Lipton Fruit Journey – Social Video Game</p>
            <p class="tiny">Pizza Hut Launch – Promo Video </p>
            <p class="tiny">Lipton Karaoke – Interactive Promo Campaign</p>
            <p class="tiny">Infiniti Racing – Social Video Game</p>
            <p class="tiny">Lipton Crocodile – Social Video Game</p>
            <p class="tiny">Infiniti Photo Booth – Interactive Installation</p>
            <p class="tiny">Lipton Discovery – Interactive Promo Campaign</p>
            <p class="tiny">Maybelline RFID – Interactive Installation</p>
            <p class="tiny">QR Kodo – Video Ad</p>
          </div>-->
          <h2 class="uppercase small ae-4 text-58">Clients</h2>
          <div class="ae-5">
            <p class="tiny">Unilever</p>
            <p class="tiny">L'Oreal</p>
            <p class="tiny">Kaspersky Lab</p>
            <p class="tiny">Paratype</p>
            <p class="tiny">Yum!</p>
            <p class="tiny">Infiniti</p>
            <p class="tiny">Central Partnership</p>
            <p class="tiny">Gazprom</p>
          </div>
           <h2 class="uppercase small ae-6 text-58">Curriculum (if somebody asks)</h2>
          <ul class="grid">
           <li class="col-6-12 left ae-3">
              <div class="ae-7">
                <p class="tiny">Mathematical Analysis</p>
                <p class="tiny">Analytical Geometry</p>
                <p class="tiny">Atomic, Molecular and Wave Physics</p>
                <p class="tiny">Probability Calculus</p>
                <p class="tiny">Complex Variable Theory</p>
                <p class="tiny">Theory of Strength of Materials</p>
                <p class="tiny">Statistical Thermodynamics</p>
                <p class="tiny">Calculus of Differentials and Integrals</p>
                <p class="tiny">Vectors and Tensors Calculus</p>
              </div>
             </li>
             <li class="col-6-12 left ae-4">
               <div class="ae-7">
                <p class="tiny">Electronics and Electrical Engineering</p>
                <p class="tiny">Electricity and Magnetism Physics</p>
                <p class="tiny">Microprocessor-based Systems</p>
                <p class="tiny">Engineering and Computer Graphics</p>
                <p class="tiny">Intellectual Property Management</p>
                <p class="tiny">Communication Systems and Networks</p>
                <p class="tiny">Linear Algebra</p>
                <p class="tiny">Methods and Tools of Physical Measurement</p>
                <p class="tiny">Research and Data Analysis</p>
              </div>
            </ul>
              <h2 class="uppercase small ae-4 text-58">Find Me On Internetz</h2>
          <div class="col 10-12 ae-6">
			<ul class="grid">
				<li class="col-6-12 left ae-3">
				<p class="tiny"><a href="http://stubisdon.com">Tumblr</a></p>
				<p class="tiny"><a href="http://instagram.com/stubisdon">Instagram</a></p>
				<p class="tiny"><a href="http://fb.co/stubisdon">Facebook</a></p>
				<p class="tiny"><a href="https://vine.co/u/906919083818233856">Vine</a></p>
				</li>
				<li class="col-6-12 left ae-4">
				<p class="tiny"><a href="assets/img/about/img-01-01.jpg">Snapchat</a></p>
				<p class="tiny"><a href="http://twitter.com/stubisdon">Twitter</a></p>
				<p class="tiny"><a href="https://www.behance.net/DmitryKotov">Behance</a></p>
				<p class="tiny"><a href="http://new.vk.com/stubisdon">Vkontakte</a></p>
				</li>
			</ul>
          </div>
             </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="background white"></div>
</section>

<!-- Panel Bottom #09
<nav class="panel bottom">
  <div class="sections">
    <div class="right button rectangular" style="background-color:black;"><a href="mailto:hi@stubisdon.com" style="color:white; font-style:italic; font-family:'Cormorant Garamond', serif; letter-spacing:-0.06.em;">hi@stubisdon.com</a></div>
  </div>
</nav>
-->

<!-- Preloader -->
<div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>

    </body>
</html>
