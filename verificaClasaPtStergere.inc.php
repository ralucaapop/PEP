<?php
if(isset($_POST['submit']))
{
    $numeClasa=$_POST['numeClasa'];


    require_once 'dbh.inc.php';
    require 'functiiC.inc.php';

   
    if(clasaExista($conn, $numeClasa)!==false)
        {
            if(existaElevi($conn, $numeClasa)===false)
            {                     
                header("location: alegeClasaPtStergere.php?error=existaElevi");
                 exit();
             } 
        
           $sql= " DELETE FROM clase WHERE numeClasa='$numeClasa';";
           if (mysqli_query($conn, $sql))
           {                     
              header("location: afiseazaClase.php?error=sters");
               exit();
           } 
          else 
           {
              header("location: alegeClasaPtStergere.php?error=stmtFailed");
               exit();
           }
         mysqli_close($conn);
                         
        }
    else{
        header("location: alegeClasaPtStergere.php?error=clasaNuExista");
            exit();
    }
}