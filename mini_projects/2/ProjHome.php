<?php
session_start();
$infoPath = "AccountInfo.html";
if(isset($_COOKIE['username'])){
    $user = $_COOKIE['username'];
}
?>
<html>
    <head>
        <Title>Clickit.com</Title>
        <link rel="stylesheet" href="ProjSheet.css">
        
    <script>
      var countDown = new Date("April 27, 2020 12:45:00").getTime(); 
      var x = setInterval(function() {

      var current = new Date().getTime();
      var distance = countDown - current;

      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s " + "until the end of this semester";

      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>
        
    </head>
    <body>
        
<!--I don't know if you want to use images or just link names for the tabs-->
        <div id="header">
            <a href=""><img id="amazonlogo" alt="Amazon Logo" src="amazonlogo.png"></a>
            <a href="Cart.html"><img alt="cart" src="shopcart.png"></a>
            <a href="AccountInfo.html"><img alt="account" src="user.png"></a>
            <span id="headerAbout">
            <h1>Welcome to Clickit.com<?php echo ", $user" ?>!</h1>
            </span>
        </div>
        
        <div id="categories">
            <h3>Categories</h3>
            <ul class="a">
                <li>Clothing, Shoes, Jewelry, and Watches</li>
                <li>Movies, Music, and Games</li>
                <li>Electronics, Computers, and Office</li>
                <li>Food and Grocery</li>
                <li>Beauty and Health</li>
                <li>Sports and Outdoors</li>
                <li>Gift Cards</li>
                <li>Toys, Kids, and Baby</li>
                <li>Pet Supplies</li>
                <li>Handmade</li>
                <li>Smart Home</li>
                <li>Automotive and Industrial</li>
            </ul>
        </div>
        
        
        <div id="search">
            <input id="searchBar" type ="text" placeholder="Search..." name="SearchBar">
        </div>
        
        <div id="autoSuggestion">
            <h2>Auto Suggestion</h2>
            Based on your purchase history here are some reccomendations for you:
            <br><br>
            <div class="autoContent"><img class="imgAuto" src="phone.jpg" alt="iPhone"> Cell Phones</div>
            <div class="autoContent"><img class="imgAuto" src="macbook.jpg" alt="Macbook">Laptops</div>
            <br>
            <div class="autoContent"><img class="imgAuto" src="tv.jpg" alt="TV">TV's</div>
            <div class="autoContent"><img class="imgAuto" src="airpods.jpg" alt="Airpods">Earphones</div>
            <br> <br>
            <a href="https://www.youtube.com/channel/UC5CR9_jcd61z9T-mRGZ30ew">Mini Project 2, Video</a>
            <p id="countdown"></p>
        </div>
    </body>
</html>