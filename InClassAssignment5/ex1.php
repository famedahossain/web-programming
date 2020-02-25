<html>
<head>
    <title>Exercise 1</title>
</head>
<body>
    <?php
        
        // Exercise 1 
        print "<i>\"Good Morning, Dave,\" said Hal.</i>\n";
        
        echo "<br>";    
        //Exercise 2
        $radius = 5;
        $a = M_PI*pow($radius, 2);
        print "The area is $a \n";
    
        echo "<br>"; 
        //Exercise 3
        $celFahr = 80;
        $convert = (float)(5/9)*($celFahr -32);
        print "The conversion of $celFahr Fahrenheit to Cecius is $convert \n";
        
        echo "<br>"; 
        //Exercise 4
        $phrase = " PHP is fun ";
        $x = 0;
        for($i=0; $i<strlen($phrase); $i++){
            if(($i==0 && substr($phrase,$i,1) == " ")){
                continue;
            }
            else if(($i==(strlen($phrase)-1) && substr($phrase,$i,1) == " ")){
                continue;
            }
            else{
                $x++;
            }
        }
        print "String has $x characters";
        
        
        echo "<br>"; 
        //Exercise 5
        $word = "WDWWLWWWLDDWDLL";
        $rep = "WWW";
        $pos = strpos($word, $rep);
        print substr($word,$pos+3,1);
    
        echo "<br>";
        //Exercise 6
        $pal = "kayak";
        $reversed = strrev($pal);
        if($reversed == $pal){
            print "$pal is a palindrome";
        }
        else{
            print "$pal is not a palindrome";
        }
    
        echo "<br>"; 
        //Exercise 7
        $num = 7;
            if(($num % 2) == 1){
                print "Odd \n";
            }
            else{
                print "Even \n";
            }
        
        echo "<br>"; 
        //Exercise 8
        $currentyear = 2020;
        $leapyear = date('L', mktime(0, 0, 0, 1, 1, $currentyear));
        echo "<b>" . $currentyear . ' ' . ($leapyear ? 'is' : 'is not') . ' a leap year.' . "</b>";
    
    
    ?>

</body>
</html>