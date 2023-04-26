<?php
if(isset($_POST["submit"]))
{
    $statut= $_POST["statut"];
   
    if($statut == "profesor")
        {
        header("location: conectareProfesor.php");
        exit();
    }
    if($statut == "admin")
    {
        header("location: conectareAdmin.php");
        exit();
    }
    if($statut == "elev")
    {
        header("location: conectareElev.php");
        exit();
    }

}
else{
    header("location: index.php");
    exit();
}