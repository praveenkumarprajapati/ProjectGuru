<?php
    include_once('dbc.inc.php');
    session_start();

    $_SESSION['u_id'] = null;

    header ("Location: login.php");
