<?php
    include_once('dbc.inc.php');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Product</title>
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
        
        $pid = $_GET['p_id']; 
        $sql = "SELECT * FROM product WHERE p_id=$pid";
        $result = mysqli_query($conn,$sql);
        $res = mysqli_num_rows($result);

        if(!isset($res)){
       
        }
   
        else{
       while ($data = mysqli_fetch_assoc($result)){
        $_SESSION['pid'] = $data['p_id'];
           $_SESSION['pname'] = $data['p_name'];
           $_SESSION['cat'] = $data['cat'];
           $_SESSION['price'] = $data['price'];
           $_SESSION['stock'] = $data['stock'];
           $_SESSION['dspt'] = $data['dspt'];    
       }

       echo '<div id="logsec">
       <form action="buy.inc.php" method="post" class="loginbox loginbox2">
       <input type="hidden" name="p_id" value="'.$_SESSION['pid'].'">
       <input type="hidden" name="p_id" value="$_POST["currentDate"]">
       <h1>'.$_SESSION['pname'].'</h1>
       <h3>Price: '.$_SESSION['price'].'</h3>
       <h5>Category: '.$_SESSION['cat'].'</h5>
       <p>Description: '.$_SESSION['dspt'].'</p>
       <h5>Availability: '.$_SESSION['stock'].'</h5>
       <input type="submit" value="Buy Now" name="buynow">
       </form>
       </div>
       ';
    }
    


        ?>
        
        <footer id="main-foot">
            <h4>Copyright &copy 2019 A2P</h4>
        </footer>
    </body>
</html>









