<?php
include_once 'dbc.inc.php';


$fname = $_POST['first_name']; 
$lname = $_POST['last_name']; 
$email = $_POST['email']; 
$contact = $_POST['contact']; 
$DoB = $_POST['DoB']; 
$address = $_POST['addr']; 
$pwd = $_POST['pwd'];


$sql = "INSERT INTO users(fname,lname,email,contact,dateofb,address,psw)
 VALUES ('$fname','$lname','$email','$contact','$DoB','$address','$pwd');";
$result = mysqli_query($conn,$sql);


header ("Location: login.php?signup=success");

?>