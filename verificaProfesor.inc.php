<?php
if(isset($_POST['submit']))
{
    $cnpProfesor=$_POST['cnpProfesor'];
    $disciplinaProfesor=$_POST['disciplinaProfesor'];
    require_once 'dbh.inc.php';
    require_once 'functiiP.inc.php';
    if(contExista($conn, $cnpProfesor, $disciplinaProfesor)!==false)
        {
           $sql= "DELETE FROM profesori WHERE cnpProfesor='$cnpProfesor' AND disciplinaProfesor='$disciplinaProfesor' ;";
           if (mysqli_query($conn, $sql))
           {                     
              header("location: afiseazaProfesori.php?error=sters");
               exit();
           } 
          else 
           {
              header("location: alegeProfPtStergere.php?error=stmtFailed");
               exit();
           }
         mysqli_close($conn);
    }
    else{
        header("location: alegeProfPtStergere.php?error=profNuExista");
            exit();
    }
}