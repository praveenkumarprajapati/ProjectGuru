<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>praveen prajapati</title>
    <meta name="viewport" content="width=device-widh, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <link rel="stylesheet" type="text/css" href="../style/about.css">
    <script src="js/main.js">
    function backit(){
    document.getElementById('main-nav').style.left='-300px'
    }
    </script>
</head>
<body>
<header id="main-header">
    <div class="super" onclick="doit()">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <h1>Project World</h1>
    <a class="big" href="../index.php">Home</a>
    <a class="big" href="#">Caterories</a>
    <a class="big" href="#">Services</a>
    <a class="big" href="#">Cart</a>
    <a class="big" href="about.html"><u>About us</u></a>

    <input id="searchbar" type="search" name="search" placeholder="Search">
    <?php
            if(isset($_SESSION['u_id'])){
                echo '<a href="logout.inc.php">Log out</a>';  
            }
            else{
            echo ' <a href="login.php">Log in</a>
            <a href="signup.php">Sign up</a>';    
           
            }
            ?>
</header>

<nav id="main-nav">
    <div class="part1">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Caterories</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign up</a></li>
        </ul>
    </div>

    <div class="part2">
        <a href="https://m.facebook.com/pk.prajapati007?ref=bookmarks" target="_blank">
            <img src="images/fblogo.png" alt="facebook">
        </a>

        <a href="https://www.instagram.com/pkprajapati.007/" target="_blank">
            <img src="images/insta.png" alt="instagram">
        </a>

        <a href="https://www.sololearn.com/Profile/5223703/?ref=app" target="_blank">
            <img src="images/solo.jpg" alt="sololearn">
        </a>
    </div>
</nav>

<div id="gap">

</div>

    <section id="main-body">
        <div class="container">
            <h1>How to become a pro-programmer?</h1>
            <ul>
                <li>Be always ready to learn something new in computers and technology.</li>
                <li>Start creating projects from programming skills you learned</li>
                <li>be consistent in your work</li>
                <li>Do physical excercice everyday.healty body have healty mind</li>
                <li>Love your work/study</li>
                <li>At a time learn only one programming languages.</li>
                <li>Focus more on Algorithms insted of every syntex</li>
                <li>Bugs are part of programming do not be afraid of it.</li>
                <li>Eat Healty food</li>
            </ul>    
        </div>

        <div class="container">
            <h1>About Me</h1>
            <p>Hello guys.. My name is praveen. I am a software engineer. i have mastered in many technical skills like web development, web designing, desktop app development, android app development and many other. I also teach programming languages on online cources. and best part of my cources are you can learn almost anywhere you just need a pc or mobile and internet connection and also it has huge numbers of projects which can help you for better learning. corse price is very resonable so everyone can affort it. </p>
            <p>I take donation from people who are interested to support my efforts and who thinks that my cource helped them and ofcource there is no minimum amount. someone can even donate 10 Rs also.</p>
            <p class="bold">Note: Above all things are just for practice and fun.</p>
        </div>
    </section>

    <footer id="main-footer">
        <div class="footer-top">
           <a href="https://m.facebook.com/pk.prajapati007?ref=bookmarks"> <img class="profile-pic" src="../images/fblogo.png"></a>
            
            
            <a href="https://www.instagram.com/pkprajapati.007?r=nametag"><img src="../images/insta.png"></a>
            
            <img src="../images/solo.jpg">
            
            
        </div>
        <h3>copyright &copy 2019 Praveen Prajapati</h3>
    </footer>
</body>
</html>