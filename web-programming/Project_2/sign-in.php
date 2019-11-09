<?php
  session_start(); /* Starts the session */
  /* Check Login form submitted */
  if(isset($_POST['submit'])){

  /* Check and assign submitted Username and Password to new variable */      $username = isset($_POST['username']) ? $_POST['username'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';

  /* Check Username and Password existence in cookies */
  if (isset($_COOKIE[$username]) && $_COOKIE[$username] == $password){
  /* Success: Set session variables and redirect to Protected page  */    $_SESSION['userdata']['username']=$_COOKIE[$username];
  $_SESSION['username'] = $username;
  header("location:index.php");
  exit;
  echo "success";
  } else {
  /*Unsuccessful attempt: Set error message */
  $loginFail = true;
  }
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
    <h3>Login Here</h3>

    <?php
    if ($loginFail) {
      echo "<p style='color:red; text-align:center;'>Invalid Login Details</p>";
    }
     ?>

    <form action = "" method = "post">

      <table>
        <tr>
          <td>Username:</td>
          <td>
            <input type = "text" name = "username">
          </td>
        </tr>

        <tr>
          <td>Password:</td>
          <td>
            <input type = "password" name = "password">
          </td>
        </tr>

        <tr>
          <td>
            <input type = "submit" name = "submit" value = "Login">
          </td>
          <td>
            Not yet a Member?<a href = "sign-up.php"> Register here!</a>
          </td>
        </tr>
      </table>
    </form>
  </center>

</body>

</html>
