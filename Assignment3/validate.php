<html>
<head>
    <title>Assignment 3</title>
    <link rel="stylesheet" type="text/css" href="validatecss.css"/>
</head>
<body>
    <h1>Form Validation</h1>
    <h4>HTML 5 and server-side validation</h4>
    
    <form action="validateConfirm.php" method="get">
    Email: <input type="email" name="email"><br>
    First Name: <input type="text" name="fname"><br>
    Birthday: <input type="date" name="birthday"><br>
    Age: <input type="text" name="age"><br>
    State: <input type="text" name="state"><br>
    Zip: <input type="text" name="zip"><br>
    <input type="submit" name="Submit form">
    <input type="submit" formnovalidate="formnovalidate" name="notvalid" value="Submit without validation">
    <div><a href="?">Reload page</a></div>
    </form>
</body>
</html>