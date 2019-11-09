<!DOCTYPE html>
<html>
  <head>
    <title>Assignment 3</title>
  </head>
  <body>
    <h1><center>Web Programming <br> Assignment 3 <br> by Laneal Dickerson</center><br><br></h1>
    <?php

    /* Function that will return true or false based on a 50% probability.
    Decided to use a rand function that chooses either 1 or 2 and outputs
    true or false based on the value. */
    function isBitten() {
      $randNum = rand(1,2);
      if ($randNum == 1) {
        return true;
      }
      else {
        return false;
      }
    }

    echo "Part 1:<br><br>";

    if (isBitten()) {
      echo "Charlie ate my lunch!";
    }
    else {
      echo "Charlie did not eat my lunch!";
    }

    echo "<br><br><br>Part 2:<br><br>";
    /* Used a nested for loop to fill in the spaces of a table to
    generate the look of a checkerboard. */
    echo "<table width = '300px' cellspacing = '1px' cellpadding = '1px' border = '1px'>";

    for($row = 1; $row <= 8; $row++) {
      echo "<tr>";
      for($col = 1; $col <= 8; $col++) {
        $total = $row + $col;

        if($total % 2 == 0) {
          echo "<td height = 35px width = 35px bgcolor = #FF0000></td>";
        }
        else {
          echo "<td height = 35px width = 35px bgcolor = #000000></td>";
        }
      }
      echo "</tr>";
    }

    echo "</table>";

    echo "<br><br><br>Part 3:<br><br>";
    /* Printed out each month then used the sort function to sort the array
    in alphabetical order and output the value */
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December');
    //step 1 in part 3
    for ($i = 0; $i < sizeof($month); $i++) {
      echo $month[$i], str_repeat('&nbsp;', 5); //adds 5 blank white spaces after each month
    }

    echo "<br><br>";
    //step 2 in part 3
    $sortedMonth = $month;
    sort($sortedMonth); //sorts the months in alphabeticle ascending order
    for($i = 0; $i < sizeof($sortedMonth); $i++) {
      echo $sortedMonth[$i], str_repeat('&nbsp;', 5);
    }

    echo "<br><br>";
    //step 3 in part 3
    foreach ($month as $value) {
      echo $value, str_repeat('&nbsp;', 5);
    }

    echo "<br><br>";
    sort($month);
    foreach ($month as $value) {
      echo $value, str_repeat('&nbsp;', 5);
    }

    echo "<br><br><br>Part 4:<br><br>";

    $restaurant = array ('Chama Gaucha' => '$40.50', 'Aviva by Kameel' => '$15.00', 'Bone\'s Restaurant'
    => '$65.00', 'Umi Sushi Buckhead' => '$40.50', 'Fandangles' => '$30.00', 'Capital Grille'
    => '$60.50', 'Canoe' => '$35.50', 'One Flew South' => '$21.00', 'Fox Bros. BBQ' => '$15.00',
    'South City Kitchen Midtown' => '$29.00');

    echo "<table style = 'width : 23%', border = '1px solid black'>";
    echo "<tr>";
    echo "<th align = 'left'>Restaurant's Name</th>";
    echo "<th align = 'left'>Average Cost</th>";
    echo "</tr>";
    //step 1 in part 4
    foreach ($restaurant as $name => $value) {
      echo "<tr>", "<td>$name</td>" , "<td>$value</td>", "</tr>";
    }

    SortTableByPrice($restaurant);
    echo "<br><br>";
    SortTableByName($restaurant);
    echo "<br><br>";

    //step 2 in part 4
    function SortTableByPrice($array) {
      echo "<table style = 'width : 23%', border = '1px solid black'>";
      echo "<tr>";
      echo "<th align = 'left'>Restaurant's Name</th>";
      echo "<th align = 'left'>Average Cost</th>";
      echo "</tr>";

      ksort($array);
      foreach ($array as $name => $value) {
        echo "<tr>", "<td>$name</td>" , "<td>$value</td>", "</tr>";
      }
    }

    function SortTableByName($array) {
      echo "<table style = 'width : 23%', border = '1px solid black'>";
      echo "<tr>";
      echo "<th align = 'left'>Restaurant's Name</th>";
      echo "<th align = 'left'>Average Cost</th>";
      echo "</tr>";

      asort($array);
      foreach ($array as $name => $value) {
        echo "<tr>", "<td>$name</td>" , "<td>$value</td>", "</tr>";
      }
    }

    ?>
  </body>
</html>
