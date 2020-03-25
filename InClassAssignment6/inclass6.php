<html>
<head>
    <title>In Class Assignment 6</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <form action="inclass6.php" method="post">
        <div>
            <p>Select a font:</p>
        <select name="font">
            <option value="">Select font..</option>
            <option value='Arial'>Arial</option>
            <option value="times new roman">Times New Roman</option>
            <option value='Courier'>Courier</option>
        </select>
        </div>
        <div>
            <p>Select a style:</p>
        <select name="style">
            <option value="">Select style..</option>
            <option value="normal">Normal</option>
            <option value="italic">Italics</option>
            <option value="oblique">Oblique</option>
        </select>
        </div>
        <div>
            <p>Color:</p> 
            <select name="color">
            <option value="">Select style..</option>
            <option value="#e0ac1d">Orange</option>
            <option value="#11c6d6">Aqua</option>
            <option value="#59d611">Green</option>
        </select>
        </div>
        <div>
            <p>Text box:</p>
            <input type="text" name="text">
        </div>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            $font = $_POST['font'];
            $style = $_POST['style'];
            $color= $_POST['color'];
            $text= $_POST['text'];

            echo "<div style='color:$color; font-family:$font; font-style:$style;'>".$text."</div>";
        }
    ?>
    
    <br>
    <a href="http://codd.cs.gsu.edu/~fhossain6/InClassAssignment6/calenders.php">Part2 of this assignment</a>
    <p><a href="http://codd.cs.gsu.edu/~fhossain6/Assignments/1/index.html">Assignment 1 Index</a></p>
    
</body>
</html>