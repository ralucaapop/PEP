<?php

function cnpInvalid($cnpElev){

    if(strlen($cnpElev)!=13)
    return false;
    for($i=0;$i<=12;$i++)
        if(ctype_digit($cnpElev[$i])==0)
        return false;
    return true;
    
    
}

function contulExista($conn, $cnpElev){
    $sql= " SELECT * FROM elevi WHERE cnpElev=?; ";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("loaction: inregistrareElev.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $cnpElev );
    mysqli_stmt_execute($stmt);

    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)///daca am gasit cnp
    return $row ;  
    else return false;
    mysqli_stmt_close($stmt);
}


function adaugaElev($conn, $numeElev, $prenumeElev, $cnpElev,$clasaElev, $telefonElev, $adresaElev){

    $sql= ' INSERT INTO elevi (numeElev, prenumeElev, cnpElev, clasaElev, telefonElev, adresaElev) VALUES (?, ?, ?, ?, ?,?); ';
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("loaction: inregistrareElev.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssss", $numeElev, $prenumeElev, $cnpElev,$clasaElev,$telefonElev, $adresaElev );
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
   
    
}

function adaugaElevLaCatalog($conn, $numeElev, $prenumeElev, $cnpElev,$clasaElev)
{
    $sql1=" SELECT * FROM cataloage WHERE  numeClasa= '$clasaElev';";
    $stmt1 = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt1, $sql1)){
        header("location: inregistrareElev.php?error=stmtFailedCatalog");
        exit();
    }
        $dateleReturnate = mysqli_query($conn,$sql1);
    
         
        while($row= mysqli_fetch_array($dateleReturnate))
        {
            $numeMaterie=$row['numeMaterie'];
            $sql2=" INSERT INTO  note (materie, numeElev, prenumeElev, cnpElev,  numeClasa) VALUES (?, ?, ?, ? ,?);";
            $stmt2 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt2, $sql2)) {
                
                header("location: inregistrareElev.php?error=stmtfailedElev");
                exit();
            }
            mysqli_stmt_bind_param ($stmt2, "sssss", $numeMaterie, $numeElev, $prenumeElev, $cnpElev, $clasaElev);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_close($stmt2);
           
        }
        if(!$row) header("location: afiseazaEleviA.php?error=none");
        exit();
    
        mysqli_stmt_close($stmt1);


}

function conectareElev($conn, $cnpElev){

    $contExista = contulExista($conn, $cnpElev);

    if($contExista===false)
    {
        header("location: conectareElev.php?error=contulNuExista");
        exit();
    }
    else
    {
        session_start();
        $_SESSION["idElev"]=$contExista["idElev"];
        $_SESSION["cnpElev"]=$contExista["cnpElev"];
       
    
        header("location: toateNoteleElevi.php?error=$cnpElev");
        exit();

    }
}