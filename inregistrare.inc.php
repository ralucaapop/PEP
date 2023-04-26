<?php

if (isset($_POST["submit"])) {
   
    $numeAdmin=$_POST["numeAdmin"];
    $prenumeAdmin=$_POST["prenumeAdmin"];
    $emailAdmin=$_POST["emailAdmin"];
    $parolaAdmin=$_POST["parolaAdmin"];
    $parolaAdmin1=$_POST["parolaAdmin1"];

    require_once 'dbh.inc.php';
    require_once 'functii.inc.php';

    if(emailInvalid($emailAdmin)===true){
        header("location: inregistrareAdmin.php?error=EmailInvalid");
        exit();
    }
   if(paroleleNuCoincid($parolaAdmin, $parolaAdmin1)===true){
        header("location: inregistrareAdmin.php?error=ParoleleNuCoincid");
        exit();
    }

    if(emailExista($conn, $emailAdmin) !==false){
        header("location: inregistrareAdmin.php?error=EmailulEsteDejaFolosit");
        exit();
    }
    adaugaAdministrator($conn, $numeAdmin,$prenumeAdmin, $emailAdmin, $parolaAdmin);
    
}
else {
    header("location: inregistrareAdmin.php");
    exit();
}
