<?php
//start the session
session_start();
//
$i = 0;
$_SESSION['question1'] = true;
//
$_SESSION['index'] += 1;
//stores the question number into a session to be transported.
$_SESSION['question'] = 1;
if (!$_SESSION['score']) {
  $_SESSION['score'] = 0;
}
/*stores the score number into a session to be transported.
 I decided to automatically subtract the score just incase the user doesn't answer they will still lose.*/
//$_SESSION['score'] -= 200;
/*automatically redirects the page back to the index after 30 seconds, which
is the amount of time the user has to answer the question.
*/
header("refresh:30; url = index.php");
 ?>
<!DOCTYPE html>
<html xlms = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "content-type" content = "text/html; charset-utf-8" />
  <link rel = "stylesheet" type = "text/css" href = "default.css" />
<title> </title>
</head>

<body class = "index">

      <table align = 'center' border = '1' width = '600' height = '450'>
        <tr>
          <form action = '' method = 'get'>
            <td class = 'fadeIn' id = 'question'><a class = 'qLink' href = 'index.php'>Famous music trio from Atlanta, Georgia</a><br><br><br>
            <input type = 'text' name = 'answer'>
            <br>
            <input type = 'submit' value = 'submit'>
            <br>
            <input type = 'hidden' name = 'question' value = '1'>

            <?php

            if(isset($_GET['answer'])) {
                $answer = $_GET['answer'];
                $answer = strtolower($answer);
                if($answer == 'migos') {
                  echo "Correct!";
                  //I add 200 more then i should to compensate for the earlier subtraction of money.
                  $_SESSION['score'] += 400;
                  $_SESSION['question1f'] = 'flash';
                }
                else {
                  echo "Wrong answer!";
                  $_SESSION['question1f'] = 'noflash';
                }
              } else {
                $_SESSION['score'] -= 200;
                $_SESSION['question1f'] = 'noflash';
              }
             ?>
            </td>
          </form>
        </tr>
      </table>
</body>

</html>
