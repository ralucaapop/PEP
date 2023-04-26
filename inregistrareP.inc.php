<?php

if(isset($_POST["submit1"])){

    $numeProfesor=$_POST["numeProfesor"];
    $prenumeProfesor=$_POST["prenumeProfesor"];
    $statutProfesor=$_POST["statutProfesor"];
    $cnpProfesor=$_POST["cnpProfesor"];
    $cnpProfesor1=$_POST["cnpProfesor1"];
    $disciplinaProfesor=$_POST["disciplinaProfesor"];

    require_once 'dbh.inc.php';
    require_once 'functiiP.inc.php';

   
    if(cnpNuCoincide($cnpProfesor, $cnpProfesor1)!==false){
       header("location: inregistrareProfesor.php?error=cnpNuCoincide");
        exit();}
   
    if(verificareCNP($cnpProfesor)===false){
        header("location: inregistrareProfesor.php?error=CNPgresit");
      exit();}

    if(contExista($conn, $cnpProfesor,$disciplinaProfesor)!==false){
      header("location: inregistrareProfesor.php?error=contExista");
    exit();}

   adaugaProfesor($conn, $numeProfesor, $prenumeProfesor, $statutProfesor, $cnpProfesor, $disciplinaProfesor);
    header("location: adminProfesori.php?error=none");
    exit();
}
else {
    header("location: inregistrareProfesor.php");
    exit();
}