<?php
  //display the message then redirect to sign-in
  header("refresh:3; url = sign-in.php");
 ?>
<!DOCTYPE html>
<html xlms = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "content-type" content = "text/html; charset-utf-8" />
  <link rel = "stylesheet" type = "text/css" href = "default.css" />
<title> </title>
</head>

<body class = "index">

      <table align = 'center' border = '0' width = '600' height = '450'>
        <tr>
            <td id = 'question'>You have successfully logged out!<br> You will be redirected to login in shortly.
            </td>
        </tr>
      </table>

</body>

</html>
