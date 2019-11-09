<!DOCTYPE html>
<html>
  <head>
    <title> Nerdieluv Sign Up </title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
  </head>
  <body>
    <?php

      include 'common.php';
      //Display banner
      Banner();
    ?>
    <form action ="signup-submit.php" method = "post">
      <fieldset>
        <legend>New User Signup:</legend>
        <ul>
          <li> <strong>Name:</strong>
            <input type = "text" name = "name" minlength = 4 maxlength = "16">
          </li>
          <li> <strong>Gender:</strong>
            <input type = "radio" name = "gender" value = "M"> Male
            <input type = "radio" name = "gender" value = "F" checked> Female
          </li>
          <li> <strong>Age:</strong>
            <input type = "text" name = "age" required size = "6">
          </li>
          <li> <strong>Personality type:</strong>
            <input type = "text" name = "pType" required minlength = "4" maxlength = "4" size = "6">
            <a href = "http://www.humanmetrics.com/cgi-win/jtypes2.asp" target="_blank">(Don't know your type?)</a>
          </li>
          <li> <strong>Favorite OS:</strong> <select name = "favOS">
            <option value = "windows">Windows</option>
            <option value = "mac">Mac OS X</option>
            <option value = "linux">Linux</option>
          </select>
          </li>
          <li> <strong>Seeking age:</strong>
            <input type = "text" name = "minAge" required placeholder = "min" size = "6">to
            <input type = "text" name = "maxAge" required placeholder = "max" size = "6">
          </li>
          <li>
            <input type = "submit" value ="Sign Up">
        </ul>
      </fieldset>
    </form>
  </body>
</html>
