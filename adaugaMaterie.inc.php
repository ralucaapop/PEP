<?php

if (isset($_POST["submit"])) {
   
    
    $numeClasa=$_POST['numeClasa'];
    $numeMaterie=$_POST['numeMaterie'];
    $nrDeOre=$_POST['nrDeOre'];
    $cnpProfesor=$_POST['cnpProfesor'];
    

    require_once 'dbh.inc.php';
    require_once 'functiiM.inc.php';

    if(materiaExistaDeja($conn, $numeClasa, $numeMaterie)!==false){
        header("location: adaugaMaterie.php?error=materiaExistaDeja");
        exit();
    }
    
    if(profesorulNuExista($conn, $cnpProfesor, $numeMaterie)===false){
        header("location: adaugaMaterie.php?error=profesorulNuExista");
        exit();
    }
    adaugaMaterie($conn, $numeClasa, $numeMaterie,$nrDeOre, $cnpProfesor);
    
}
else {
    header("location: adaugaMaterie.php");
    exit();
}
