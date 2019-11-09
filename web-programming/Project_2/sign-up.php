<?php

if (isset($_POST['submit'])) {
  setcookie($_POST['username'], $_POST['password']);

  header("location:sign-up-success.php");
  exit;

}
 ?>
<!DOCTYPE html>
<html xlms = "http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv = "content-type" content = "text/html; charset-utf-8" />
  <link rel = "stylesheet" type = "text/css" href = "default.css" />
<title> Sign up Form </title>
</head>

<body class = "login">

  <div id = "banner">
    <img src="logo.png">
  </div>

  <center>
    <h3>Register Here</h3>

    <form action ="" method = "post">

      <table>

        <tr>
          <td>Username:</td>
          <td>
            <input type = "text" name = "username" placeholder = "Enter name here">
          </td>
        </tr>

        <tr>
          <td>Password:</td>
          <td>
            <input type = "password" name = "password" placeholder = "Enter password here">
          </td>
        </tr>

        <tr>
          <td>Email:</td>
          <td>
            <input type ="email" name = "email" placeholder = "Enter email here">
          </td>
        </tr>

        <tr>
          <td>Phone:</td>
          <td>
            <input type = "text" name = "phone" placeholder = "678*******">
          </td>
        </tr>

        <tr>
          <td>Gender:</td>
          <td>
            <input type = "radio" name = "gender" value = "Male">Male
            <input type = "radio" name = "gender" value = "Female">Female
          </td>
        </tr>

        <tr>
          <td>
          <input type = "submit" name = "submit" value = "Create Account">
          </td>
          <td>
            Already a user? <a href = "sign-in.php">Login Here</a>
          </td>
        </tr>

      </table>
    </form>
</body>

</html>
