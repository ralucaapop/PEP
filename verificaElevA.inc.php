<?php
if(isset($_POST['submit']))
{
    $cnpElev=$_POST['cnpElev'];
    $clasaElev=$_POST["clasaElev"];
  
    require_once 'dbh.inc.php';
    require_once 'functiiE.inc.php';

        
    if(contulExista($conn, $cnpElev)!==false)
        {
           
            header("location: editeazaElevA.php?error=$cnpElev");

            exit();

    }
    else{
        header("location: alegeElevA.php?error=elevulNuExista");
            exit();
    }
}