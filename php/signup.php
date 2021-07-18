
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up</title>
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

        <section id="logsec">
            
                <form class="loginbox" method="post" action="signup.inc.php">
                    <h6>First Name</h6>
                    <input type="text" name="first_name" placeholder="Alexa" required>

                    <h6>Last Name</h6>
                    <input type="text" name="last_name" placeholder="Singh" required>

                    <h6>Email id</h6>
                    <input type="text" name="email" placeholder="example@gmail.com" required>

                    <h6>Contact</h6>
                    <input type="text" name="contact" placeholder="+91 9999999999" required>

                    <h6>Date of Birth</h6>
                    <input type="date" name="DoB" required>

                    <h6>Address</h6>
                    <input type="text" name="addr" placeholder="Eg. Virar" required>

                    <h6>Password</h6>
                    <input type="password" name="pwd"size="8" required>

                    <h6>Re-Enter Password</h6>
                    <input type="password" name="repwd" size="8" required>

                    <input type="submit" value="Sign up">
                    <a href="login.php">Already have an account?</a>
                </form>
        </section>

        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>
    </body>
</html>