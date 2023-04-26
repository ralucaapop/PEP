<?php
if(isset($_POST['editeaza']))
 {

    $cnpElev=$_POST["cnpElev"];
    $numeElev=$_POST["numeElev"];
    $prenumeElev=$_POST["prenumeElev"];
    $adresaElev=$_POST["adresaElev"];
    $telefonElev=$_POST["telefonElev"];

    require_once 'dbh.inc.php';

    $sql=" UPDATE elevi SET  numeElev='$numeElev', prenumeElev='$prenumeElev', adresaElev='$adresaElev', telefonElev='$telefonElev' WHERE cnpElev='$cnpElev' ;";

    if (mysqli_query($conn, $sql))
 {
                            
 header("location: afiseazaEleviA.php?error=edit");
 exit();
    } 
  else 
  {
    header("location: editeazaElevA.php?error=stmtFailed");
 exit();
    }
    mysqli_close($conn);
                        
}

else {
    header("location: editeazaElevA.php");
    exit();
}        