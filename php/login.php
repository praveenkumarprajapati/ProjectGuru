<?php
    include_once('dbc.inc.php');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../style/main.css">
        <link rel="stylesheet" type="text/css" href="../style/login.css">
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
            <?php
            if(!isset($_SESSION['u_id'])){

            echo '<a href="signup.php">Sign up</a>';
            }
            else {
            echo '<a href="logout.inc.php">Log out</a>';
            }
            ?>
        </header>

        <nav id="main-nav">
            <div class="part1">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Caterories</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="about.php">About us</a></li>
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
        <?php
        if(!isset($_SESSION['u_id'])){
        echo '<section id="logsec">
            
            <form class="loginbox" method="post" action="login.inc.php">
                <h6>Username</h6>
                <input type="text" name="uname" placeholder="Username" required>

                <h6>Password</h6>
                <input type="password" name="pwd" placeholder="******" size="8" required>

                <input type="submit" value="Log in">
                <a href="signup.php">Don\'t have an account?</a>
                <br>
                <a href="#">Forgot Password?</a>
            </form>
    </section>
    ';

        }

    else {

        $sql = "select * from users where u_id='$_SESSION[u_id]'";
        $result = mysqli_query($conn,$sql);
        $res = mysqli_num_rows($result);
        if(isset($res)){
            while ($data = mysqli_fetch_assoc($result)){
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['lname'] = $data['lname'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['address'] = $data['address'];
                $_SESSION['dob'] = $data['dateofb'];   
                $_SESSION['contact'] = $data['contact'];
            }
        echo '<div id="logsec">
        <form action="update.inc.php" method="post" class="loginbox2 loginbox">
        <h1>Welcome! '.$_SESSION["fname"].' '.$_SESSION["lname"].'</h1>
        <h2>Your Personal Details</h2>


        <h3>First Name</h3>
        <input type="text" name="fname" value="'.$_SESSION["fname"].'" required>

        <h3>Last Name</h3>
        <input type="text" name="lname" value="'.$_SESSION["lname"].'" required>
        

        <h3>Email ID</h3>
        <input type="text" name="email" value="'.$_SESSION["email"].'" required>

        <h3>Contact</h3>
        <input type="text" name="contact" value="'.$_SESSION["contact"].'" required>
        

        <h3>Address</h3>
        <input type="text" name="address" value="'.$_SESSION["address"].'" required>
        

        <h3>Date of Birth</h3>
        <input type="date" name="dob" value="'.$_SESSION["dob"].'" required>


        <input type="submit" name="update" value="Update">
       

        </form>
        </div>'
        
        
        ;
        }
    }

    


        ?>
        
        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>
    </body>
</html>