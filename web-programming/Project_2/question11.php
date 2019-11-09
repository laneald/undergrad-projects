<?php
//start the session
session_start();
//
$_SESSION['question11'] = true;
//
$_SESSION['index'] += 1;
//stores the question number into a session to be transported.
$_SESSION['question'] = 1;
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
            <td id = 'question'><a class = 'qLink' href = 'index.php'>In what year did the popular music icon Kanye West release his first pair of yeezy's</a><br><br><br>
            <input type = 'text' name = 'answer'>
            <br>
            <input type = 'submit' value = 'submit'>
            <br>
            <input type = 'hidden' name = 'question' value = '1'>

            <?php

            if(isset($_GET['answer'])) {
                $answer = $_GET['answer'];
                $answer = strtolower($answer);
                if($answer == '2009') {
                  echo "Correct!";
                  //I add 200 more then i should to compensate for the earlier subtraction of money.
                  $_SESSION['score'] += 800;
                  $_SESSION['question11f'] = 'flash';
                }
                else {
                  echo "Wrong answer!";
                  //same as above
                  $_SESSION['question11f'] = 'noflash';
                }
              }
              else {
                $_SESSION['score'] -= 400;
                $_SESSION['question11f'] = 'noflash';
              }

             ?>
            </td>
          </form>
        </tr>
      </table>
</body>

</html>
