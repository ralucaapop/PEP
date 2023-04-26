<?php

if(isset($_POST["submit"])){

    $numeClasa= $_POST["numeClasa"];
   
    require_once 'dbh.inc.php';
    require_once 'functiiC.inc.php';

    conectareClasa($conn, $numeClasa);
    
}

else{
    header("location: acceseazaClasa.php");
    exit();
}