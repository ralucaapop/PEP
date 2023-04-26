<?php

if(isset($_POST["submit"])){

    $cnpElev= $_POST["cnpElev"];
    
    require_once 'dbh.inc.php';
    require_once 'functiiE.inc.php';

    conectareElev($conn, $cnpElev);
}
else{
    header("location: conectareElev.php");
    exit();
}