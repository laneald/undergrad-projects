<?php
//start the session
session_start();
//initialize the variable to restart the game
$_SESSION['restart'] = false;
//if the variable is true reset the webpage and set variable to false
if ($_SESSION['restart']) {
  header('refresh');
  $_SESSION['restart'] = false;
}
//if the user has data then they successfully logged in, else go back to sign-in.
if (!isset($_SESSION['userdata']['username'])){
  header("location:sign-in.php");
  exit;
}
else {
  $username = $_SESSION['username'];
  echo "Welcome, " . $username . "!";
}
 ?>

<!DOCTYPE html>
<html xlms = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "content-type" content = "text/html; charset-utf-8" />
  <link rel = "stylesheet" type = "text/css" href = "default.css" />
<title> </title>
</head>

<body class = "index">

<div id = "banner">
  <img src="logo.png">
</div>

<?php

include 'functions.php';
//if the score session doesn't exist, initialize it
if(!$_SESSION['score']) {
  $_SESSION['score'] = 0;
}
 $totalScore = $_SESSION['score'];

  echo "<p style = 'text-align:center'>$username's score: $totalScore</p>";


 if ($_SESSION['index'] < 30) {
  echo "<table align = 'center' border = '1' width = '600' height = '450'>
    <tr>
      <td>Pop Culture</td><td>Tv Shows</td><td>Fast Food</td><td>Youtube</td><td>Scary Movies</td><td>Store Slogans</td>
    </tr>";
  echo "
    <tr>
      ";DisplayQuestion('1', '$200');
      DisplayQuestion('2', '$200');DisplayQuestion('3',  '$200');DisplayQuestion('4', '$200');DisplayQuestion('5', '$200');DisplayQuestion('6', '$200');echo "
    </tr>
    <tr>
      ";DisplayQuestion('7', '$400');DisplayQuestion('8', '$400');DisplayQuestion('9', '$400');DisplayQuestion('10', '$400');DisplayQuestion('11', '$400');DisplayQuestion('12', '$400');echo "
    </tr>
    <tr>
      ";DisplayQuestion('13', '$600');DisplayQuestion('14', '$600');DisplayQuestion('15', '$600');DisplayQuestion('16', '$600');DisplayQuestion('17', '$600');DisplayQuestion('18', '$600');echo "
    </tr>
    <tr>
      ";DisplayQuestion('19', '$800');DisplayQuestion('20', '$800');DisplayQuestion('21', '$800');DisplayQuestion('22', '$800');DisplayQuestion('23', '$800');DisplayQuestion('24', '$800');echo "
    </tr>
    <tr>
      ";DisplayQuestion('25', '$1000');DisplayQuestion('26', '$1000');DisplayQuestion('27', '$1000');DisplayQuestion('28', '$1000');DisplayQuestion('29', '$1000');DisplayQuestion('30', '$1000');echo "
    </tr>
  </table>";

}
else {
  echo "<table align = 'center' border = '0' width = '600' height = '450'>
    <tr>
      <td><span style = 'font-size:60px;'>GAME OVER</span></td>
    </tr>
    <tr>
      <form action = 'index.php' method = 'get'>
        <td>
          <input type = 'submit' name = 'playagain' value = 'Play Again?'>
        </td>
      </form>
    </tr>
  </table>";
  //$data[$username] = $totalScore;
  //print_r($data);
setcookie('scores', $username . ',' . $totalScore);
}

if (isset($_GET['playagain'])) {
  $_SESSION['index'] = 0;
  $_SESSION['score'] = 0;
  ResetGame();
  //$_SESSION['restart'] = true;
}
  SetFlashVariables();
  ?>
  <br><br><br><br>

  <div id = "login">
    <a href = "sign-out.php" class = "button">Sign out</a>
    <a href = "leaderboard.php" class = "button">Leaderboard</a>
    <a href = "help.html" class = "button">Help</a>
  </div>

</body>
</html>
