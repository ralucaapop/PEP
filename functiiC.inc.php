<?php

function clasaExista($conn, $numeClasa){

    $sql= "SELECT * FROM clase WHERE numeClasa = ? ;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: inregistrareClasa.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $numeClasa );
    mysqli_stmt_execute($stmt);

    
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)
        return $row;
    else 
        return false;
    
    mysqli_stmt_close($stmt);

}

function existaElevi($conn, $numeClasa)
{
    $sql="SELECT * FROM elevi WHERE clasaElev=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: editeazaClasa.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $numeClasa );
    mysqli_stmt_execute($stmt);

    
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)
        return false;
    else
        return true;
    mysqli_stmt_close($stmt);

}

function verificareclasaExistaPtEditare($conn, $numeClasa){

    $sql= "SELECT * FROM clase WHERE numeClasa = ? ;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: editeazaClasa.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $numeClasa );
    mysqli_stmt_execute($stmt);

    
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)
        return $row;
    else
        return false;
    mysqli_stmt_close($stmt);

}



function dirNuExista($conn, $cnpDiriginte){

    $sql= "SELECT * FROM profesori WHERE cnpProfesor = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: inregistrareClasa.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $cnpDiriginte);
    mysqli_stmt_execute($stmt);

    
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)
    {
       
     return false;///daca am gasit dir
    }
    else{
        
        return true;
    }
    mysqli_stmt_close($stmt);

}
function adaugaClasa($conn, $numeClasa, $cnpDiriginte)
{
   $sql = "INSERT INTO clase (numeClasa, cnpDiriginte)  VALUES(?, ?);";

   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)) {
       
       header("location: inregistrareClasa.php?error=stmtfailed");
       exit();
   }

   mysqli_stmt_bind_param ( $stmt, "ss" ,$numeClasa, $cnpDiriginte);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   
   header("location: adminClase.php?error=none");
   exit();

}

function conectareClasa($conn, $numeClasa){
    $clasaExista = clasaExista($conn, $numeClasa);

    if($clasaExista===false)
    {
        header("location: acceseazaClasa.php?error=clasaNuExista");
        exit();
    }
    else
    {
    
        session_start();
        
        $_SESSION["numeClasa"]=$clasaExista["numeClasa"];
       
       
        header("location: clasaProfesor.php?error=none");
        exit();

    }
}
function conectareClasaPtEditare($conn, $numeClasa){
    $clasaExista = verificareclasaExistaPtEditare($conn, $numeClasa);

    if($clasaExista===false)
    {
        header("location: editeazaClasa.php?error=clasaNuExista");
        exit();
    }
    else
    {
        session_start();
        $_SESSION["numeClasa"]=$clasaExista["numeClasa"];
      
       
        header("location: clasa.php?error=none");
        exit();

    }
}