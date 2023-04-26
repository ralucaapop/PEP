<?php 
  require_once 'dbh.inc.php';
  require_once 'functiiP.inc.php';
if(isset($_POST['editeaza']))
{
    $numeClasa=$_POST['numeClasa'];
    $cnpDiriginte=$_POST['cnpDiriginte'];
      
    if(profExista($conn,  $cnpDiriginte)===false)
    {
      header("location: clasa.php?error=profNuExista");
    exit();
    }
  
    $query="UPDATE `clase` SET cnpDiriginte='$cnpDiriginte' where numeClasa='$numeClasa';";
    $query_run=mysqli_query($conn, $query);
    if($query_run)
        {
        
        header("location: editeazaClasa.php?error=edit");
        exit();
      } 
      else 
      {
        header("location: afiseazaClase.php?error=noEdit");
        exit();
    }
    mysqli_close($conn);
}
else {
    header("location:clasa.php");
    exit();
}