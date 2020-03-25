<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="validatecss.css" rel="stylesheet" type="text/css">

   </head>
   <body>
         <?php
         
         //Retrieve inputs (using helper function)
         $fname = $_GET['fname'];
         $zip = $_GET['zip'];
         $birthday = $_GET['birthday'];
         $age = $_GET['age'];
         $email = $_GET['email'];
         $state = $_GET['state'];

         echo "";
       
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
         ?>
   </body>
</html>
