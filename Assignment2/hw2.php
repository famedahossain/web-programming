<html>
<head>
    <title>Assignment 2</title>
</head>
<body>
    <?php
        
       // Question 1
        function isBitten(){
            $chance=rand(0,1);
            
            if($chance==1){
                return true;
            }
            else{
                return false;
            }
        }
        $prob=isBitten();  
        if($prob==true){
            print "Charlie ate my lunch!";
        }
        else{
            print "Charlie did not eat my lunch!";
        }
    
        echo "<br>";
        // Question 2
        $k=0;
        echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1">';
        for($i=0; $i<9; $i++){
            echo "<tr>";
                for($j=0; $j<9; $j++){
                    $k=$k+1;
                    if($k%2==0){
                        echo '<td height="35" width="35" style="background-color:red;"></td>';
                    }
                    else{
                        echo '<td height="35" width="35" style="background-color:black;>"</td>';
                    }
                }
            echo "</tr>";
        }
        echo "</table>";
        
    
        echo "<br>";
        //Question 3 ela fix sort function???
        $month=array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'); 
        for($i=0; $i<count($month); $i++){
            echo "$month[$i],\n";
        }
        
        echo "<br>";
        $month=array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'); 
        sort($month);
        for($i=0; $i<count($month); $i++){
            echo "$month[$i],\n";
        }
    
        echo "<br>";
        $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
        foreach($month as &$value) {
            echo "$value,\n";
        }
    
        echo "<br>";
        $month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
        sort($month);
        foreach ($month as &$value) {
            echo "$value,\n";
        }
    
        echo "<br>";
        // Question 4
        $restr=array("Chama Gaucha"=>"40.50", "Aviva by Kameel"=>"15.00", "Bone's Restaurant"=>"65.00", "Umi Sushi Buckhed"=>"40.50", "Fandangles"=>"30.00", "Capital Grille"=>"60.50", "Canoe"=>"35.50", "One Flew South"=>"21.00", "Fox Bros.BBQ"=>"15.00", "South City Kitechen Midtown"=>"29.00");
        
        function printTable($restr){
            $printit = '<table border="1">';
            $printit .= '<tr>';
            $printit .= '<th>' . 'Restaurant Name'. '</th>';
            $printit .= '<th>' .'Average Cost'. '</th>';
            $printit .= '</tr>';
            foreach($restr as $key=>$value){
                $printit .= '<tr>';
                $printit .= '<td>' . $key." " . '</td>';
                $printit .= '<td>' . $value . '</td>';
                $printit .= '</tr>';
            }
            $printit .= '</table>';
            echo $printit;
        }
    
        function sortByPrice($restr){
            asort($restr);
            printTable($restr);
            
        }
        function sortByName($restr){
            ksort($restr);
            printTable($restr);
        }
        echo "<br>";
        echo "10 best Restaurants in Atlanta for 2016 are: " . "<br><br>";
            printTable($restr);

        echo "<br>"."10 best Restaurants in Atlanta ordered by Price:" . "<br><br>";
            sortByPrice($restr);

        echo "<br>"."10 best Restaurants in Atlanta ordered by Name:" . "<br><br>";
            sortByName($restr);

    
        echo "<br>";
        // Question 5
        $hamburger=4.95;
        $shake=1.95;
        $soda=0.85;
        $taxrate=0.075;
        $tiprate=0.16;

        $subtotal=($hamburger*2)+$shake+$soda;
        $tax=$subtotal*$taxrate;
        $tip=$subtotal*$tiprate;
        $total=$subtotal+$tip+$tax;
        print "Your total is = \$$total"; 
    
        echo "<br>";
    
        //echo $_GET["burger"];
        //echo $_GET["shake"];
        //echo $_GET["cola"];
        $burger = $_REQUEST['burger'];
        $shakes = $_REQUEST['shake'];
        $cola = $_REQUEST['cola'];
    
        $subtotal=($hamburger*$burger)+($shake*$shakes)+($soda*$cola);
        $tax=$subtotal*$taxrate;
        $tip=$subtotal*$tiprate;
        $total=$subtotal+$tip+$tax;
        print "Your total for this quantity is (enter input) = \$$total"; 
        
    ?>
        
        <form action="hw2.php" method="get">
        Hamburgers: <input type="text" name="burger">
        Shake: <input type="text" name="shake">
        Cola: <input type="text" name="cola">
        <input type="submit">
        </form>

    
</body>
</html>