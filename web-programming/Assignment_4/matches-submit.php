<!DOCTYPE html>
<html>
  <head>
    <title> Nerdieluv Matches Submission </title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
  </head>
  <body class = "match">
    <?php

    include 'common.php';
    //Display's the banner
    Banner();
    //retrieve the name you want to compare
    $nameFound = $_GET['name'];

    if (!NameError($nameFound) && ValidateName($nameFound)) {
      echo "<h1>Matches for $nameFound<h1>";
      MatchNameFound($nameFound);
    }
    else {
      echo "<h1>Error! Invalid data.</h1>";
      echo "<div>We're sorry. You submitted invalid user information. Please
      <a href = 'matches.php'>go back</a> and try again.<br><br></div>";
    }
    ?>
  </body>
</html>
