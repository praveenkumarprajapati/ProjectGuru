<!DOCTYPE html>
<html>
    <head>
        <title>Project World</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../style/main.css">
        <link rel="stylesheet" type="text/css" href="../style/catmain.css">
        <script src="js/main.js"></script>
    </head>
    <body>
        <header id="main-header">
            <div class="super" onclick="doit()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <h1>Project World</h1>
            <a class="big" href="../index.html">Home</a>
            <a class="big" href="#">Caterories</a>
            <a class="big" href="#">Services</a>
            <a class="big" href="#">Cart</a>
            <a class="big" href="about.php">About us</a>

            <input id="searchbar" type="search" name="search" placeholder="Search">
            <a href="login.php">Log in</a>
            <a href="signup.php">Sign up</a>
        </header>

        <nav id="main-nav">
            <div class="part1">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Caterories</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                </ul>
            </div>

            <div class="part2">
                <a href="https://m.facebook.com/pk.prajapati007?ref=bookmarks" target="_blank">
                    <img src="../images/fblogo.png" alt="facebook">
                </a>

                <a href="https://www.instagram.com/pkprajapati.007/" target="_blank">
                    <img src="../images/insta.png" alt="instagram">
                </a>

                <a href="https://www.sololearn.com/Profile/5223703/?ref=app" target="_blank">
                    <img src="../images/solo.jpg" alt="sololearn">
                </a>
            </div>
        </nav>

        <section id="main-sec">
            <div class="product">
                <a href="product.php?p_id=1">
                    <img src="../images/resberry.jpg">
                    <h3>Resberry Pi</h3>
                    <h6>4GB Ram</h6>
                    <p class="disc">Rs.3550 only</p>
                </a>
            </div>

            <div class="product">
                <a href="product.php?p_id=2">
                <img src="../images/arduino.jpg">
                <h3>Ardiuno UNO</h3>
                <h6>IOT device</h6>
                <p class="disc">Rs.599 only</p>
                </a>
            </div>

            <div class="product">
                <a href="product.php?p_id=3">
                
                <img src="../images/Microc/ardinorev2.jpeg">
                <h3>Arduino Uno WiFi rev 2</h3>
                <h6>Inbuild Wifi Module</h6>
                <p class="disc">Rs.980 only</p>
                </a>
            </div>

            <div class="product">
                <a href="product.php?p_id=4">
                
                <img src="../images/Microc/nano.jpg">
                <h3>Arduino NANO</h3>
                <h6>Small and powerfull arduino board</h6>
                <p class="disc">RS: 299 only</p>
                </a>
            </div>

            <div class="product">
             <a href="product.php?p_id=5">
                
                <img src="../images/wifi.jpg">
                <h3>Arduino Leonardo</h3>
                <h6>IOT device for high level projects</h6>
                <p class="disc">Rs.690 only</p>
              </a>
            </div>
               
        </section>

        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>
    </body>
</html>