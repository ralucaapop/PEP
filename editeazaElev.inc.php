<?php
if(isset($_POST['editeaza']))
 {

    $emailElev=$_POST["emailElev"];
    $numeElev=$_POST["numeElev"];
    $prenumeElev=$_POST["prenumeElev"];
    $adresaElev=$_POST["adresaElev"];
    $telefonElev=$_POST["telefonElev"];

    require_once 'dbh.inc.php';

    $sql=" UPDATE elevi SET  numeElev='$numeElev', prenumeElev='$prenumeElev', adresaElev='$adresaElev', telefonElev='$telefonElev' WHERE emailElev='$emailElev' ;";

    if (mysqli_query($conn, $sql))
 {
                            
 header("location: afiseazaElevi.php?error=edit");
 exit();
    } 
  else 
  {
    header("location: editeazaElev.php?error=stmtFailed");
 exit();
    }
    mysqli_close($conn);
                        
}

else {
    header("location: editeazaElev.php");
    exit();
}        