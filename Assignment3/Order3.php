<?php
$first = "firstname";
$mod = "model";
$colors = "colorr";
$fname = $_GET['fname'];
$model = $_GET['model'];
$color = $_GET['color'];
setcookie($first,$fname);
setcookie($mod,$model);
setcookie($colors,$color);
?>
<html>
   <head>
      <title>Order Confirmation</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="pageContainer centerText"> <p></p>
          <form action="Order3.php" class="formLayout" method="get">
          </form>
          <?php
            function whichOne($color, $model){
                if($color=="red" && $model=="Mustang"){
                    echo '<img src="mustangRed.jpg">';
                }
                elseif($color=="red" && $model=="Corvette"){
                    echo '<img src="corvetteRed.jpg">';
                }
                elseif($color=="red" && $model=="Subaru"){
                    echo '<img src="subaruRed.jpg">';
                }
                elseif($color=="blue" && $model=="Mustang"){
                    echo '<img src="mustangBlue.jpg">';
                }
                elseif($color=="blue" && $model=="Corvette"){
                    echo '<img src="corvetteBlue.jpg">';
                }
                elseif($color=="blue" && $model=="Subaru"){
                    echo '<img src="subaruBlue.jpg">';
                }
                elseif($color=="yellow" && $model=="Mustang"){
                    echo '<img src="mustangYellow.jpg">';
                }
                elseif($color=="yellow" && $model=="Corvette"){
                    echo '<img src="corvetteYellow.jpg">';
                }
                else{
                    echo '<img src="subaruYellow.jpg">';
                }
            }
          
            echo "<h2>Order Confirmation</h2>";
         
            echo "<h3> Congratulations, " . $_COOKIE[$first] . " you
            have ordered a " . $_COOKIE[$colors] . " " . $_COOKIE[$mod] . "</h3><br>";
          
          $choicecolor = $_COOKIE[$colors];
          $choicemodel = $_COOKIE[$mod];
          
            whichOne($choicecolor, $choicemodel);
          
          echo "<br>";          
          echo '<a href="Order1.php">Place another order</a>';
        
          ?>
      </div>
   </body>
</html>