<?php
include_once 'dbc.inc.php';
session_start();


$pname = $_GET['pname']; 
$cat = $_GET['cat']; 
$dscp = $_GET['dscp']; 
$price = $_GET['price']; 
$stock = $_GET['stock']; 


    
        $sql = "insert into product
        (p_name, cat, dspt, price, stock) 
        values('$pname','$cat','$dscp',$price, $stock);";
        $result = mysqli_query($conn, $sql);
        if(isset($result)){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 

?>