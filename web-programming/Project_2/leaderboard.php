<?php
session_start();
 ?>
<!DOCTYPE html>
<html xlms = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "content-type" content = "text/html; charset-utf-8" />
  <link rel = "stylesheet" type = "text/css" href = "default.css" />
<title> </title>
</head>

<body class = "index">
  <h3 style = 'text-align:center'>Leaderboard</h3>
  <table align = 'center' border = '0' width = '600' height = '450'>
    <tr>
      <td>
        <?php
        if(isset($_COOKIE['scores'])) {
          $pieces = explode(",", $_COOKIE['scores']);
          $username = $pieces[0];
          $score = $pieces[1];
          echo "$username : $score";
        } else {
          echo "false";
        }
         ?>
      </td>
    </tr>
  </table>
  <br><br><br>
  <div id = "login">
  <a href = "index.php" class = "button">Home</a>
  </div>
</body>

</html>
