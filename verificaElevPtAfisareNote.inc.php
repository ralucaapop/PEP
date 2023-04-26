<?php
if(isset($_POST['submit']))
{
    
    $cnpElev=$_POST['cnpElev'];
    require_once 'dbh.inc.php';
    require_once 'functiiE.inc.php';

    if(contulExista($conn,$cnpElev)!==false)
        {
           header("location: toateNotele.php?error=$cnpElev");
           exit();
    }
    else{
        header("location: alegeElevPtAfisareNote.php?error=elevulNuExista");
            exit();
    }
}