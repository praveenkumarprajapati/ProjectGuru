<?php
    $server_name = "localhost";
    $dbuser = "root";
    $dbname = "pro_store";
    $dbpass = "";
    $conn = mysqli_connect($server_name,$dbuser,$dbpass,$dbname);

    header ('signup.php');
?>