<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="/sandvig/mis314/assignments/style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      <div class="pageContainer centerText">
         <?php
         include 'validationUtilities.php';

         //Retrieve inputs (using helper function)
         $email = $_GET['email'];
         $fname = $_GET['fname'];
         $date = $_GET['birthday'];
         $phone = $_GET['phone'];
         $age = $_GET['age'];
         $state = $_GET['state'];
         $zip = $_GET['zip'];

         //set validation flag
         $IsValid = true;

         echo "<p class='centeredNotice'>";
         //email
         if (!fIsValidEmail($email)) {
            echo "Invalid email<br>";
            $IsValid = false;
         }

         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }

         if (!fIsValidDate($date)) {
           echo "Invalid birthday format<br>";
           $IsValid = false;
         }

         if (!fIsValidRange($age, 1, 99)) {
           echo "Invalid age format<br>";
           $IsValid = false;
         }

         if (!fIsValidZipcode($zip)) {
           echo "Invalid zipcode format<br>";
           $IsValid = false;
         }



         /*if (!fIsValidPhone($phone)) {
            echo "Enter 10 digit phone number<br>";
            $IsValid = false;
         }*/

         if (!fIsValidStateAbbr($state)) {
            echo "Enter 2-character state abbreviation<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            //at least one element not valid. Echo a message and stop execution
            echo "<img class='validImage' src='/sandvig/mis314/images/red_x.jpg' /><br><br>
            <p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            //stop execution.
            exit();
         }
         //all inputs are valid.
            echo "<div class='center'>
            <img class='validImage' src='/sandvig/mis314/images/valid.png' />
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Birthday: $date <br>
            Age: $age <br>
            Phone: $phone <br>
            State: $state <br>
            Zip: $zip <br>
            ";
         ?>
      </div>
   </body>
</html>
