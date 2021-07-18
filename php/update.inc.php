<?php
include_once 'dbc.inc.php';
session_start();


$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$email = $_POST['email']; 
$contact = $_POST['contact']; 
$DoB = $_POST['dob']; 
$address = $_POST['address']; 
$u_id = $_SESSION["u_id"]; 

$sql = "UPDATE users 
SET fname='$fname', lname='$lname', email='$email', contact='$contact', dateofb='$DoB', address='$address'
WHERE u_id=$u_id; ";

$result = mysqli_query($conn,$sql);



header ("Location: login.php");

?>