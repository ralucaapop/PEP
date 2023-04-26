<?php

if(isset($_POST["submit"])){

    $cnpProfesor= $_POST["cnpProfesor"];


    require_once 'dbh.inc.php';
    require_once 'functiiP.inc.php';

    conectareProfesor($conn, $cnpProfesor);
}
else{
    header("location: conectareAdmin.php");
    exit();
}