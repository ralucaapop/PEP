<?php

if(isset($_POST["submit"])){

    $cnpProfesor= $_POST["cnpProfesor"];


    $numeClasa=$_POST["numeClasa"];
    $disciplinaProfesor=$_POST["disciplinaProfesor"];

    require_once 'functiiP.inc.php';
    require_once 'dbh.inc.php';
    if(contExista($conn,  $cnpProfesor, $disciplinaProfesor))
    {
        session_start();
        $_SESSION["disciplinaProfesor"]=$disciplinaProfesor;
        header("location: afiseazaNotele.php");
    exit();
    }
    else 
    {header("location: alegeMateria.php?error=nuExistaMateria");
        exit();}

}
    
else{
    header("location: alegeMateria.php?");
    exit();
}
