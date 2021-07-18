<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Project World</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style/main.css">
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
            <a class="big" href="index.php"><u>Home</u></a>
            <a class="big" href="#">Caterories</a>
            <a class="big" href="#">Services</a>
            <a class="big" href="#">Cart</a>
            <a class="big" href="php/about.php">About us</a>

            <input id="searchbar" type="search" name="search" placeholder="Search">
            <?php
            if(isset($_SESSION['u_id'])){
                echo '<a href="php/logout.inc.php">Log out</a>';  
            }
            else{
            echo ' <a href="php/login.php">Log in</a>
            <a href="php/signup.php">Sign up</a>';    
           
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
                    <li><a href="php/about.php">About us</a></li>
                    <li><a href="php/login.php">Login</a></li>
                    <li><a href="php/signup.php">Sign up</a></li>
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

        <div id="main-slid">
            <div class="slider">
                <div class="images">
                    <img src="images/slid1.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid2.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid3.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid4.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid5.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid6.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid7.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid8.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid9.jpg" alt="alide">
                </div>

                <div class="images">
                    <img src="images/slid1.jpg" alt="alide">
                </div>
            </div>
        </div>

        <section id="main-sec">
            <div class="product">
                <a href="php/cat1.php">
                    <h3>Micro Controller</h3>
                    <img src="images/resberry.jpg">
                    <p class="disc">Get your favourit micro controllers at best prices, Arduno Uno|Resberry pie|Atmega8A</p>
                </a>
            </div>

            <div class="product">
                <a href="#">
                <h3>Integrated circuit(s)</h3>
                <img src="images/ic.jpg">
                <p class="disc">All kinds of IC's for your amazing project</p>
                </a>
            </div>

            <div class="product">
                <a href="#">
                <h3>DC Motors</h3>
                <img src="images/dcmotors.jpg">
                <p class="disc">Let your project run on the floor or in the air. All kind of DC motors for robots</p>
                </a>
            </div>

            <div class="product">
                <a href="#">
                <h3>Electronic Components</h3>
                <img src="images/restracap.jpg">
                <p class="disc">Resistors | Transistors | Capacitors| Transformer | Diodes | LED</p>
                </a>
            </div>

            <div class="product">
             <a href="#">
                <h3>Modules</h3>
                <img src="images/wifi.jpg">
                <p class="disc">Wifi Module ESP-01|Bluetooth Module|Audio Amplifier|Voice Recording Module|GPS Module|RF encoder decoder Module| and many more available</p>
              </a>
            </div>
               

            <div class="product">
                    <a href="#">
                <h3>Solar Panels</h3>
                <img src="images/solarpanel.jpg">
                <p class="disc">offer! Flat 30% off on solar Panels above Rs.200</p>
                </a>
            </div>

            <div class="product">
                    <a href="#">
                <h3> Batteries </h3>
                <img src="images/b.jpg">
                <p class="disc">Buy 2 Rechargable Batteries and get 1 Bettery charger free</p>
                </a>
            </div>

            <div class="product">
                    <a href="#">
                <h3>Camera</h3>
                <img src="images/camera.jpg">
                <p class="disc">All size of cameras available 0.5MP to 40 MP avalable.</p>
                 </a>
            </div>

            <div class="product">
                    <a href="#">
                <h3> Sensors </h3>
                <img src="images/sensors.jpg">
                <p class="disc">Temperature Sensor| Proximity | Accelerometer | IR Sensor | Pressure Sensor| Light Sensor and many more.</p>
                 </a>
            </div>

            <div class="product">
                    <a href="#">
                <h3> Ac to Dc adpters </h3>
                <img src="images/adpter.jpg">
                <p class="disc">40-80volt | 24-40volt | 12-24volt | 12volt | 9volt | 7volt | 5 volt| </p>
                </a>
            </div>

            <div class="product">
                <a href="#">
                <h3> Tools </h3>
                <img src="images/tools.jpg">
                <p class="disc">Make your work easy buy perimim quilaty tools at unbelivable pice</p>
                 </a>
            </div>
            
        </section>

        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>

    </body>

</html>