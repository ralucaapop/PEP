<?php

if(isset($_POST['submit'])){

    $numeElev=$_POST["numeElev"];
    $prenumeElev=$_POST["prenumeElev"];
    $cnpElev=$_POST["cnpElev"];
    $clasaElev=$_POST["numeClasa"];
    $adresaElev=$_POST["adresaElev"];
    $telefonElev=$_POST["telefonElev"];

    require_once 'dbh.inc.php';
    require_once 'functiiE.inc.php';

    if(cnpInvalid($cnpElev)===false){
        header("location: inregistrareElev.php?error=cnpInvalid");
        exit();
    }

    if(contulExista($conn, $cnpElev)!==false)
    {
        header("location: inregistrareElev.php?error=contulExista");
        exit();
    }
   
    adaugaElev($conn, $numeElev, $prenumeElev, $cnpElev, $clasaElev, $telefonElev, $adresaElev);
    adaugaElevLaCatalog($conn, $numeElev, $prenumeElev, $cnpElev,$clasaElev);
}
else {
    header("location: inregistrareElev.php");
    exit();
}