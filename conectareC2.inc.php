<?php

if(isset($_POST["submit"])){

    $numeClasa= $_POST["numeClasa"];
   
    require_once 'dbh.inc.php';
    require_once 'functiiC.inc.php';

    conectareClasaPtEditare($conn, $numeClasa);
    
}
else{
    header("location: editeazaClasa.php");
    exit();
}