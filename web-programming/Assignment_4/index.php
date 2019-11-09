<!DOCTYPE html>
<html>
  <head>
    <title> Nerdieluv Homepage </title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
  </head>
  <body>
    <?php

      include 'common.php';
      //display's the banner through a function created in common.php
      Banner();

    ?>
      <h1>Welcome!</h1>
      <p><img src = "hand.png" alt = "Sign-up" height = "32" width="32"
        ><a href='signup.php'> Sign up for a new account</a></p>
      <p><img src = "heart.png" alt = "Heart" height = "32" width = "32"
        ><a href='matches.php'> Check your matches</a></p>
      <p>This page is for single nerds to meet and date each other! type
      in your personal information<br> and wait for the nerdly luv to begin!
      Thank you for using our site. <br><br> Results and page (C) Copyright Nerdluv
       Inc.</p>
      <p><img src='back.png' alt='Back arrow' height = '32' width = '32'><a href='index.php'>  Back to front page</a></p>
  </body>
</html>
