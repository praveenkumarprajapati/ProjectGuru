<?php
include_once 'dbc.inc.php';

if(!isset($_SESSION['u_id'])){
    header ("Location: login.php");

}
else{
$p_id = $_POST['p_id'];
$uf_id = $_SESSION['u_id'];
echo $p_id;



$sql = "INSERT INTO orders(p_name,p_date,cat,price,dspt,uf_id)
VALUES ('$fname',now(),'$cat','$price','$dspt','$uf_id');";

$result = mysqli_query($conn,$sql);


//header ("Location: login.php?signup=success");

?>