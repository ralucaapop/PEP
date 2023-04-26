<?php
if(isset($_POST["editeaza"]))
{
    $numeMaterie=$_POST["numeMaterie"];
    $cnpProfesor=$_POST["cnpProfesor"];
    $numeClasa=$_POST["numeClasa"];
    $cnpProfNou=$_POST["cnpProfNou"];
    $nrDeOre=$_POST["nrDeOre"];
    require_once 'dbh.inc.php';
    //require_once 'functiiP.inc.php';
    require_once 'functiiM.inc.php';
   
    
    if(profesorulNuExista($conn, $cnpProfNou, $numeMaterie)===false)
    {
        header ("location: alegeMateriePtEditare.php?error=profNouNuExista");
            exit();
    }
    else
    {
        $sql= "DELETE FROM cataloage WHERE cnpProfesor='$cnpProfesor' AND numeClasa='$numeClasa';";
        if(mysqli_query($conn, $sql))
        {
            adaugaMaterie($conn, $numeClasa, $numeMaterie,$nrDeOre, $cnpProfNou);
            
        }
        
    }
}     
else {
    header("location: schimbaProf.php");
    exit(); 
}
     


