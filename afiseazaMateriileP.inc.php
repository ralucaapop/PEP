<?php
if(isset($_POST['editeaza']))
 {

    $cnpProfesor=$_POST["cnpProfesor"];
    $numeProfesor=$_POST["numeProfesor"];
    $prenumeProfesor=$_POST["prenumeProfesor"];
    $numeClasa=$_POST["numeClasa"];
  
    $nrDeOre=$_POST["nrDeOre"];
    
    require_once 'dbh.inc.php';

    $sql=" UPDATE cataloage SET  numeProfesor='$numeProfesor', prenumeProfesor='$prenumeProfesor', nrDeOre='$nrDeOre' WHERE cnpProfesor='$cnpProfesor' AND numeClasa='$numeClasa' ;";

    if (mysqli_query($conn, $sql))
   {                     
      header("location: afiseazaMateriileP.php?error=editat");
       exit();
   } 
  else 
   {
      header("location: editeazaMaterieP.php?error=stmtFailed");
       exit();
   }
 mysqli_close($conn);
                        
}

else {
    header("location: editeazaMaterieP.php");
    exit();
}        