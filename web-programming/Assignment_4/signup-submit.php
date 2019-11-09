<!DOCTYPE html>
<html>
  <head>
    <title> Nerdieluv Confirmation </title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
  </head>
  <body>
    <?php

    include 'common.php';
    //Display's the banner
    Banner();
    //retrieve inputs
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $pType = $_POST['pType'];
    $favOS = $_POST['favOS'];
    $minAge = $_POST['minAge'];
    $maxAge = $_POST['maxAge'];

    if (!@ValidateName($name) && !NameError($name) && !AgeError($age) && !GenderError($gender) && !OSError($favOS) && !MinMaxAge($minAge, $maxAge) && !PTypeError($pType)) {
      echo "<h1>Thank you!</h1>";
      echo "<p>Welcome to NerdLuv, $name!<br><br>";
      echo "Now <a href=matches.php>log in to see your matches!</a>";
      file_put_contents('singles.txt', "$name, $gender, $age, $pType, $favOS, $minAge, $maxAge\n", FILE_APPEND);
    }
    else if (@ValidateName($name) && !NameError($name)) {
      echo "<h1>Error! Name in use.</h1>";
      echo "<p>We're sorry. You submitted a name that is already in our system.
      Please <a href = 'matches.php'>click this link</a> to view your matches.";

    }
    else {
      echo "<h1>Error! Invalid data.</h1>";
      echo "<p>We're sorry. You submitted invalid user information. Please go back
      and try again.<br>
      Please remember the following:<br>
      <ul style='list-style-type:disc;'>
        <li>The name you enter must not be blank.</li>
        <li>The age you submit must be a number between 0 and 99 inclusively.</li>
        <li>The personality type must be a 4 letter value from the Keirsey personality in the link provided.</li>
        <li>The minimum and maximum age must be numbers between 0 and 99 inclusively.</li>
      </ul>";
    }
    echo "<p>This page is for single nerds to meet and date each other!
    Type in <br>your personal information and wait for the nerdly luv to begin!<br>
    Thank you for using our site.
    <br>
    <br>
    Results and page (C) Copyright NerdLuv Inc.<br><br>";

    echo "<img src='back.png' alt='Back arrow' height = '32' width = '32'><a href=index.php>  Back to front page</a>";

    ?>
  </body>
</html>
