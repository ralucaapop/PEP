<?php
if(isset($_POST['editeaza']))
 {

    $idNota=$_POST["idNota"];
    $cnpElev=$_POST["cnpElev"];
    $nota=$_POST["nota"];
    $absente=$_POST['absente'];
   
    
    require_once 'dbh.inc.php';

    $sql=" UPDATE note SET  nota='$nota', absente='$absente'  WHERE idNota='$idNota' ;";

    if (mysqli_query($conn, $sql))
   {                     
      header("location: afiseazaNotele.php?error=editat");
       exit();
   } 
  else 
   {
      header("location: editNota.php?error=stmtFailed");
       exit();
   }
 mysqli_close($conn);
                        
}

else {
    header("location: editNota.php");
    exit();
}        