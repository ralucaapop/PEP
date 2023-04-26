<?php
if(isset($_POST['editeaza']))
 {

    $emailProfesor=$_POST["emailProfesor"];
    $numeProfesor=$_POST["numeProfesor"];
    $prenumeProfesor=$_POST["prenumeProfesor"];
    $numeClasa=$_POST["numeClasa"];
    $idScoala=$_POST['idScoala'];
    $nrDeOre=$_POST["nrDeOre"];
    
    require_once 'dbh.inc.php';

    $sql=" UPDATE cataloage SET  numeProfesor='$numeProfesor', prenumeProfesor='$prenumeProfesor', nrDeOre='$nrDeOre' WHERE emailProfesor='$emailProfesor' AND idScoala='$idScoala' AND numeClasa='$numeClasa' ;";

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