<?php
$first = "firstname";
$mod = "model";
$fname = $_GET['fname'];
$model = $_GET['model'];
setcookie($first,$fname);
setcookie($mod,$model);
?>
<html>
   <head>
      <title>Select Color</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText">
<p></p>
         <h2 class="centerText">Select Color</h2>

         <div class="pageContainer">
            <form action="Order3.php" class="formLayout" method="get">
               <div class="formGroup">
                  <label>Car color:</label>
                  <div class="formElements">
                     <select name="color" required>
                        <option style="background-color: blue" name="blue" value="blue">Blue</option>
                        <option style="background-color: red" name="red" value="red">Red</option>
                        <option style="background-color: yellow" name="yellow" value="yellow">Yellow</option>
                     </select> 
                  </div>
               </div>
               <div class="formGroup">
                  <label></label>
                  <button type="submit"> >> Next >> </button>
               </div>
               <div class="centerText vertGap55">
                  <button type="submit" formnovalidate>Submit without validation</button><br><br>
                  <a href="?">Reload page</a>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>