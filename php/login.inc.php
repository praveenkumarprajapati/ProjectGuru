<?php
include_once 'dbc.inc.php';
session_start();

$email = $_POST['uname']; 
$pwd = $_POST['pwd']; 

$sql = "SELECT u_id FROM users WHERE email='$email' AND psw='$pwd' ";
$result = mysqli_query($conn,$sql);
$res = mysqli_num_rows($result);
if(!isset($res)){
    header ("Location: login.php?login=unsucess");
}
else{
    while ($data = mysqli_fetch_assoc($result)){
        $_SESSION['u_id'] = $data['u_id'];
        echo "Your are logged in";
    }
}

header ("Location: login.php");

?>