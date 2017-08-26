<?php
    if (isset($_GET['sendmessage'])) {

        $config = include('../../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $exe = $con->query('SELECT * FROM password LIMIT 1');
        $data = $exe->fetch();
        $password = $data['password'];

<<<<<<< HEAD:profile/olaoluwa_98/index.php
        $subject = "HEY THERE";
=======
        $subject = htmlentities(strip_tags(trim($_GET['subject'])));
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c:profile/olaoluwa_98/index.php
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "awotunde.emmanuel@gmail.com";

        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";

        header("Location: " . $location);

    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Emmanuel Awotunde | HNG Intern</title>
  <style type="text/css">
    /* MAIN CSS*/
    * {
        box-sizing: border-box;
    }

    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    [class*="col-"] {
        float: left;
        padding: 15px;
    }

    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }

    @media only screen and (orientation: landscape) {
        [class*="col-"] {
          width: 33.33%;
      }
    }

    @media only screen and (min-width: 600px) {
        /* For tablets: */
        .col-m-1 {width: 8.33%;}
        .col-m-2 {width: 16.66%;}
        .col-m-3 {width: 25%;}
        .col-m-4 {width: 33.33%;}
        .col-m-5 {width: 41.66%;}
        .col-m-6 {width: 50%;}
        .col-m-7 {width: 58.33%;}
        .col-m-8 {width: 66.66%;}
        .col-m-9 {width: 75%;}
        .col-m-10 {width: 83.33%;}
        .col-m-11 {width: 91.66%;}
        .col-m-12 {width: 100%;}
    }

    @media only screen and (min-width: 600px) {
        /* For desktop: */
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}
    }

    html {
        font-family: "Lucida Sans", sans-serif;
    }

    .header {
        background-color: #65c5c5;
        color: #ffffff;
        padding: 5px;
    }

    .menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .menu li {
        padding: 8px;
        margin-bottom: 7px;
        background-color: #33b5e5;
        color: #ffffff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    }

    .menu li:hover {
        background-color: #0099cc;
    }

    ul.social{
      padding: 0px;
    }
    ul.social li{
      list-style: none;
      display: inline-block;
      margin: 0 10px;
      text-decoration: none;
    }
    ul.social li a{
      color: white;
      font-size: 2em;
    }

    /* OTHERS */

    .button {
        background-color: #65c5c5; /* Green */
        border: none;
        border-radius: 5px;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color .35s ease-in-out , box-shadow .35s ease-in-out;
        -webkit-transition: background-color .35s ease-in-out , box-shadow .35s ease-in-out;

    }
    .button:hover {
      background-color: cadetblue;
      box-shadow: 0 1px 3px rgba(0,0,0,0.12), 3px 3px 4px 0px rgba(0,0,0,0.24);
    }

    .button:active {
      background-color: #1d4141;
      transform: translateY(2px);
      box-shadow: none;
    }

    div.pagination{
      border-radius: 5px;
      margin-top: 40px;
    }

    div.pagination a{
      border-radius: 5px;
      background-color: cadetblue;
      padding: 10px;
      text-decoration: none;
      color: bisque;
    }
    div.pagination a:hover{
      -webkit-transform: translateX(5px);
    }

    ::selection {
        color: #489797;
        background: aqua;
    }

    .image-container-image {
      position: relative;
      margin: 5px;
      width: 100%;
      height: 100%;
    }

    .about {
      margin: 5px;
      height: 100%;
      width: 100%;
      font-size: 1.5em;
      color: #65c5c5;
    }

    .image-container-image .image {
        opacity: 1;
        width: 100%;
        backface-visibility: hidden;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 3px 3px 4px 0px rgba(0,0,0,0.24);
        -webkit-transition: all .35s ease-in-out 0.3s;
        transition: all .35s ease-in-out 0.3s;
    }

    .image-container-image:hover .image {
        opacity: 0.3;
        -webkit-transform: translate(-10px, -10px);
        transform: translate(-10px, -10px);
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    textarea
    {
      color: #489797;
      font: normal normal bold 15px/50px arial, sans-serif;
      border: none;
      margin-top: 5%;
      border-bottom: 4px solid aqua;
      -webkit-transition: all .35s ease-in-out .5s;
      transition: all .35s ease-in-out .5s;
    }

    input{
        width: 80%;
        color: #489797;
        font: normal normal bold 15px/50px arial, sans-serif;
        border: none;
        border-bottom: 2px solid aqua;
        -webkit-transition: all .35s ease-in-out .5s;
        transition: all .35s ease-in-out .5s;
    }

    .contact{
      margin-top: 5%;
      padding: 10px;
      border: 1px solid #ddd;
    }

    .contact-title{
      margin: 0px;
    }

    ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #rgba(107, 156, 156, 0.5);
    opacity: 0.5;
    }
    :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }
    ::-ms-input-placeholder { /* Microsoft Edge */
       color:    #rgba(107, 156, 156, 0.5);
       opacity: 0.5;
    }

    input:placeholder {

    }

    input:focus {
        width: 100%;
        border-bottom: 6px solid aqua;
    }

    input:invalid {
        border-left: 2px solid red;
    }

    input:valid {
        border-bottom: 1px solid aqua;
    }

  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
  <h1>Emmanuel Awotunde (<span  style="font-size: 0.8em">@olaoluwa_98 <i class="fa fa-slack"></i>, @olaoluwa-98 <i class="fa fa-github"></i></span>)</h1>
  <ul class="social">
        <li><a href="mailto:awotunde.emmanuel1@gmail.com" title="Message me?" target="_blank"><i class="fa fa-envelope"></i></a></li>
        <li><a href="https://twitter.com/olaoluwa_98" title="@olaoluwa_98" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://medium.com/@olaoluwa_98" title="@olaoluwa_98" target="_blank"><i class="fa fa-medium"></i></a></li>
        <li><a href="https://github.com/olaoluwa-98" title="@olaoluwa-98" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="https://instagram.com/olaoluwa_98/" title="@olaoluwa_98" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.facebook.com/awotunde.emmanuel" title="@awotunde.emmanuel" target="_blank"><i class="fa fa-facebook"></i></a></li>
  </ul>
</div>

  <div class="row">
    <div class="col-4 col-m-12">
      <div class="image-container-image">
<<<<<<< HEAD:profile/olaoluwa_98/index.php
        <img class="image" src="https://cdn-images-1.medium.com/fit/c/120/120/1*KQbibJtclzBy3gjrPvfDHA@2x.jpeg">
=======
        <img class="image" src="https://cdn-images-1.medium.com/fit/c/120/120/1*KQbibJtclzBy3gjrPvfDHA@2x.jpeg" alt="olaoluwa_98's Picture">
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c:profile/olaoluwa_98/index.php
      </div>
    </div>

  <div class="col-6 col-m-12">
    <div class="about">
        I'm Emmanuel Awotunde. I am a software developer from Kwara state. I use web technologies to build web applications to solve problems.
        I love simplicity.<br>
        <span style="font-weight: bold;">Here is my stage one solution <br><a style="text-decoration: underline;color: #65c5c5" href="https://github.com/olaoluwa-98/HNG-internship"><i style="color: #65c5c5" class="fa fa-github"></i> HNG-internship</a></span>

          <form class="contact" action="http://hng.fun/profile/olaoluwa_98/index.php" method="get">
            <p class="contact-title">Send Me a Mail</p>
<<<<<<< HEAD:profile/olaoluwa_98/index.php
            <input type="text" name="subject" placeholder="subject" value="">
            <textarea rows="3" cols="60" name="body" placeholder="type your message here" value=""></textarea><br>
=======
            <input type="text" name="subject" placeholder="subject" required>
            <textarea rows="3" cols="60" name="body" placeholder="type your message here" required></textarea><br>
>>>>>>> 2d9503c8309e33c70fd14ca09b80d2072a86a99c:profile/olaoluwa_98/index.php
            <button type="submit" name="sendmessage" class="button">Send Mail</button>
          </form>
    </div>
  </div>
  <div class="col-2 col-m-12"></div>
  </div>
</body>
</html>
