<?php

function MatchNameFound($nameFound) {
  $data_array = [];
  $data_array2 = [];
  $matches = [];

  $data_array = RetrieveData();
  foreach ($data_array as $i => $values) {
    //echo "$i {<br>";
      foreach ($values as $key => $value) {
        if ($nameFound == $values[name]) {
          $dName = $values[name];
          $dGender = $values[gender];
          $dAge = $values[age];
          $dpType = $values[pType];
          $dfavOS = $values[favOS];
          $dminAge = $values[minAge];
          $dmaxAge = $values[maxAge];
          break 2;
        }
      }
    }
    foreach ($data_array as $i => $values) {
        foreach ($values as $key => $value) {
          if ($dGender != $values[gender] && $dAge >= $values[minAge] && $dAge <= $values[maxAge]
          && $values[age] >= $dminAge && $values[age] <= $dmaxAge && $dfavOS == $values[favOS] && MatchPType($dpType, $values[pType])) {
              //get the index that matches the requirements
              array_push($data_array2, $i);
          }
        }
      }
        //$data_array2 = [];
        //$data_array2[] = ['name' => ""];
        /*else {
          return "echo 'Found a match!'";//echo "$key => $value\n";//edit this line
        }*/
        //echo "$key => $value\n";
      //print "}<br>"
  if (count($data_array2) == 0) {
    echo "Sorry $name, you have no Matches";
  }
  $result = array_unique($data_array2);
  foreach ($result as $j) {
    array_push($matches, $data_array[$j]);
  }

//foreach with general array and use
  foreach ($matches as $x) {
    echo "<div><img src = 'couple.png' alt = 'Couple' height = '150' width = '32'>";
    echo "<div = 'column'><p>$x[name]</p></div>";
    echo "<ul><li><strong>gender:</strong>", "$x[gender]</li>";
    echo "<li><strong>age:</strong>", "$x[age]</li>";
    echo "<li><strong>type:</strong>", "$x[pType]</li>";
    echo "<li><strong>OS:</strong>", "$x[favOS]</li>";
    echo "</ul></div>";
  }
}

function MatchPType($string1, $string2) {
  foreach (str_split($string1) as $i) {
    foreach(str_split($string2) as $j) {
      if ($i == $j){
        return True;
      }
    }
  }
  return False;
}

function NameError($name) {
  if (strlen($name) == 0) {
    return true;
  }
  else {
    return false;
  }
}

function AgeError($age) {
  if ($age < 0 || $age > 99) {
    return true;
  }
  else {
    return false;
  }
}

function GenderError($gender) {
  if ($gender == 'M' || $gender == 'F') {
    return false;
  }
  else {
    return true;
  }
}

function PTypeError($pType) {
  $arr1 = str_split($pType);
  if ($arr1[0] == 'I' || $arr1[0] == 'E') {
    if ($arr1[1] == 'N' || $arr1[1] == 'S') {
      if ($arr1[2] == 'F' || $arr1[2] == 'T') {
        if ($arr1[3] == 'J' || $arr1[3] == 'P') {
          return false;
        }
        else {
          return true;
        }
      }
      else {
        return true;
      }
    }
    else {
      return true;
    }
  }
  else {
    return true;
  }
}

function OSError($favOS) {
  if ($favOS == 'windows' || $favOS == 'linux' || $favOS == 'mac') {
    return false;
  }
  else {
    return true;
  }
}

function MinMaxAge($minAge, $maxAge) {
  if ($minAge < 0 || $minAge > 99 || $maxAge < 0 || $maxAge > 99) {
    return true;
  }
  else if(is_int($minAge) || is_int($maxAge)) {
    return true;
  }
  else {
    return false;
  }
}

function Banner() {
  echo "<div id = 'bannerarea'>
    <div>
      <div style='float:left; font-size:35px; font-weight:bold; color:gray'>nerd</div>
      <div style = 'float:left; font-size:35px; color:blue'>Luv</div>
      <div style = 'color:blue;'>tm</div>
    </div>
    <span>where meek geeks meet</span>
  </div>";
}

function RetrieveData() {
  $data_array = [];
  $myFile = fopen('singles.txt', 'r');
  while (!feof($myFile)) {
    $line = fgets($myFile);
    list($name, $gender, $age, $pType, $favOS, $minAge, $maxAge) = explode(", ", $line);
    $data_array[] = ['name' => "$name", 'gender' => "$gender", 'age' => "$age", 'pType' => "$pType",
    'favOS' => "$favOS", 'minAge' => "$minAge", 'maxAge' => "$maxAge"];
    }
    fclose($myFile);

    return $data_array;
}

function ValidateName($nameGiven) {
  $nameFound = false;
    if($myFile = fopen('singles.txt', 'r')) {
    while (!feof($myFile)) {
      $line = fgets($myFile);
      list($name, $gender, $age, $pType, $favOS, $minAge, $maxAge) = explode(", ", $line);
      if ($nameGiven == $name) {
        $nameFound = true;
      }
      $data_array[] = ['name' => "$name", 'gender' => "$gender", 'age' => "$age", 'pType' => "$pType",
      'favOS' => "$favOS", 'minAge' => "$minAge", 'maxAge' => "$maxAge"];
      }
      fclose($myFile);
    }
  return $nameFound;
}

function UploadPhoto($photo) {
  $target_dir = "/Users/laneal/Sites/Web_Programming/Assignment_4/uploads/";
  $target_file = $target_dir . basename($_FILES["$photo"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
}
?>
