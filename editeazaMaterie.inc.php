<?php
$cnpProfesor=$_POST["cnpProfesor"];
if(isset($_POST['editeaza']))
 {
    $numeClasa=$_POST["numeClasa"];
    $nrDeOre=$_POST["nrDeOre"];
    
    require_once 'dbh.inc.php';

    $sql=" UPDATE cataloage SET nrDeOre='$nrDeOre' WHERE cnpProfesor='$cnpProfesor'  AND numeClasa='$numeClasa' ;";

    if (mysqli_query($conn, $sql))
   {                     
      header("location: afiseazaMateriile.php?error=editat");
       exit();
   } 
  else 
   {
      header("location: editeazaMaterie.php?error=stmtFailed");
       exit();
   }
 mysqli_close($conn);
                        
}
else 
if(isset($_POST['schimba']))
 {
    
    header("location: schimbaProf.php?error=$cnpProfesor");
    exit();
 }
else {
    header("location: editeazaMaterie.php");
    exit();
}        