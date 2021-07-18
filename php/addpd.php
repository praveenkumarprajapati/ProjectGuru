<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ADD product</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../style/main.css">
        <link rel="stylesheet" type="text/css" href="../style/login.css">
        <link rel="stylesheet" type="text/css" href="../style/signup.css">
        <script src="../js/main.js"></script>
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
            <a class="big" href="about.php">About us</a>

            <input id="searchbar" type="search" name="search" placeholder="Search">
            <a href="login.php">Log in</a>
        </header>

        <nav id="main-nav">
            <div class="part1">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Caterories</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="login.php">Login</a></li>
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

        <?php

        if($_SESSION['u_id']==1){

        echo '<section id="logsec">
            
                <form class="loginbox" method="get" action="addpd.inc.php">
                    <h6>Product Name</h6>
                    <input type="text" name="pname" placeholder="Eg. Transistor" required>

                    <h6>Description of Product</h6>
                    <input type="text" name="dscp" placeholder="Features of product" required>

                    <h6>Category</h6>
                    <select name="cat">
                        <option>
                        SELECT
                        </option>
                        <option>
                        Micro Controller
                        </option>
                        <option>
                        Integrated Circuit
                        </option>
                        <option>
                        Motor
                        </option>

                        <option>
                        Electronic Components
                        </option>
                        <option>
                        Modules
                        </option>
                        <option>
                        Solar Panel
                        </option>

                        <option>
                        Batteries
                        </option>
                        <option>
                        Camera
                        </option>
                        <option>
                        Sensor
                        </option>

                        <option>
                        Adapter
                        </option>
                        <option>
                        Tools
                        </option>
                        <option>
                        Other
                        </option>




                    </select>

                    <h6>Produt Price</h6>
                    <input type="number" name="price" placeholder="Rs" required>

                    <h6>Stock</h6>
                    <input type="number" name="stock" required>

                    <h6>Image</h6>
                    <input type="file" name="image">

                    <input type="submit" value="Add Product">
    
                </form>
        </section>';

        }else {
            echo '"<section id="logsec">
            
            <form class="loginbox" method="get" action="addpd.inc.php">
            <h3>You are not admin Login as admin</h3>
            </form>
    </section>"';


        }

        ?>

        

        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>
    </body>
</html>