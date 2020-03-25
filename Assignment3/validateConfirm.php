<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="validatecss.css" rel="stylesheet" type="text/css">

   </head>
   <body>
         <?php include 'validationUtilities.php';
         
         //Retrieve inputs (using helper function)
         $novalidate = $_GET['notvalid'];
         $fname = $_GET['fname'];
         $zip = $_GET['zip'];
         $birthday = $_GET['birthday'];
         $age = $_GET['age'];
         $email = $_GET['email'];
         $state = $_GET['state'];

         //set validation flag
         $IsValid = true;

         echo "";
       
         if($novalidate){
            echo "
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Birthday: $birthday <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            
            "; 
         }
       
        else {
        
         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }
       
         if (!fIsValidZipCode($zip)) {
            echo "Invalid zip<br>";
            $IsValid = false;
         }
       
         if (!fIsValidDate($birthday)) {
            echo "Invalid birthday<br>";
            $IsValid = false;
         }
       
         if (!fIsValidRange($age, 13, 99)) {
            echo "Invalid age<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            echo "One of your inputs is incorrect, please fix it and submit again";
            echo "<br><br><p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            exit();
         }
       
         //all inputs are valid. 
            echo "
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Birthday: $birthday <br>
            Age: $age <br>
            State: $state <br>
            Zip: $zip <br>
            
            ";
        }
         ?>
   </body>
</html>
