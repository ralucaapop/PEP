<?php

if(isset($_POST["submit"])){

    
    $parolaAdmin=$_POST["parolaAdmin"];
    

    
    if($parolaAdmin!="acces_privatAdmin1")
        {
            header("location: conectareAdmin.php?error=parolaGresita");
            exit();
        }

    header("location: administrator.php");
         exit();
}
else{
    header("location: conectareAdmin.php");
    exit();
}