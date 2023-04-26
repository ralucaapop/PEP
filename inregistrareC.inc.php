<?php

if(isset($_POST["submit"]))
{
    $numeClasa=$_POST["numeClasa"];
    
    $cnpDiriginte=$_POST["cnpDiriginte"];

    require_once 'dbh.inc.php';
    require_once 'functiiC.inc.php';


    if(clasaExista($conn, $numeClasa)!==false){
        header("location: inregistrareClasa.php?error=clasaExista");
        exit();
    }
    
    if(dirNuExista($conn, $cnpDiriginte)===true){
        header("location: inregistrareClasa.php?error=dirNuExista");
        exit();
    }
    adaugaClasa($conn, $numeClasa,$cnpDiriginte);

}

else{
    header("location: inregistrareClasa.php");
    exit();
}