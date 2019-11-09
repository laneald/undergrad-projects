<!DOCTYPE html>
<html>
  <head>
    <title> Nerdieluv Matches </title>
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
  </head>
  <body>
    <?php

    include 'common.php';
    //Display banner
    Banner();
    echo "<form action = 'matches-submit.php' method = 'get'>
      <fieldset>
        <legend>Returning User:</legend>
         <ul>
          <li><strong>Name:</strong>
              <input type = 'text' name = 'name' rawurlencode(name) required minlength = '4' maxlength = '16'>
          </li>
          <li>
            <input type = 'submit' value = 'View My Matches'>
          </li>
        </ul>
      </fieldset>
    </form>";
    ?>
  </body>
</html>
