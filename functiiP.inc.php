<?php

function cnpNuCoincide($cnpProfesor, $cnpProfesor1){

    if($cnpProfesor !== $cnpProfesor1 )
    return true;
    else return false;
    
}
function verificareCNP($cnpProfesor){

    if(strlen($cnpProfesor)!=13)
    return false;
    for($i=0;$i<=12;$i++)
        if(ctype_digit($cnpProfesor[$i])===0)
        return false;
    return true;
    
}

function contExista($conn,  $cnpProfesor, $disciplinaProfesor){
    $sql= " SELECT * FROM profesori WHERE cnpProfesor=? AND disciplinaProfesor=? ; ";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: inregistrareProfesor.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss",  $cnpProfesor, $disciplinaProfesor );
    mysqli_stmt_execute($stmt);

    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)///daca am gasit 
    return $row ;  
    else return false;
    mysqli_stmt_close($stmt);
}

function adaugaProfesor($conn, $numeProfesor, $prenumeProfesor, $statutProfesor, $cnpProfesor, $disciplinaProfesor)
{
   $sql = "INSERT INTO profesori(numeProfesor, prenumeProfesor, statutProfesor ,cnpProfesor, disciplinaProfesor)  VALUES(? , ?, ? ,?, ?); ";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)) {
       
       header("location: inregistrareProfesor.php?error=stmtfailed1");
       exit();
   }
    
   mysqli_stmt_bind_param ($stmt, "sssss" ,$numeProfesor,$prenumeProfesor,  $statutProfesor, $cnpProfesor, $disciplinaProfesor);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);

}


function profExista($conn, $cnpProfesor){
    $sql= "SELECT * FROM profesori WHERE cnpProfesor=?;";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: alegeProfPtStergere.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $cnpProfesor);
    mysqli_stmt_execute($stmt);

    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)///daca am gasit prof
    return $row ;  
    else return false;
    mysqli_stmt_close($stmt);
}

function conectareProfesor($conn, $cnpProfesor){

    $contExista = profExista($conn, $cnpProfesor);

    if($contExista===false)
    {
        header("location: conectareProfesor.php?error=contulNuExista");
        exit();
    }
    else
    {   
    $cnpProf=$contExista["cnpProfesor"];
    //$parolaHashed= $contExista["parolaProfesor"];
    //$verificaParole =password_verify($parolaProfesor, $parolaHashed);

    if($cnpProf!=$cnpProfesor){
        header("location: conectareProfesor.php?error=parolaGresita");
        exit();
    }
    else {
        session_start();
        $_SESSION["cnpProfesor"]=$contExista["cnpProfesor"];
        $_SESSION["idProfesor"]=$contExista["idProfesor"];
    
        header("location: profesor.php?error=none");
        exit();

    }
}
}
