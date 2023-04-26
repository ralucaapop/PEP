<?php

function materiaExistaDeja($conn, $numeClasa, $numeMaterie){

$sql= "SELECT * FROM cataloage WHERE numeClasa = ? AND numeMaterie = ? ;";
$stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: adaugaMaterie.php?error=stmtFailed");
    exit();
}
    
    mysqli_stmt_bind_param($stmt, "ss", $numeClasa, $numeMaterie,);
    mysqli_stmt_execute($stmt);
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)///daca am gasit materia
    {
       return $row ;  
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);

}

function profesorulNuExista($conn, $cnpProfesor, $numeMaterie){
    $sql= "SELECT * FROM profesori WHERE cnpProfesor= ? AND disciplinaProfesor=? ;";
$stmt= mysqli_stmt_init($conn);

if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: adaugaMaterie.php?error=stmtFailed");
    exit();
}
    
    mysqli_stmt_bind_param($stmt, "ss", $cnpProfesor, $numeMaterie);
    mysqli_stmt_execute($stmt);
    $dateleReturnate = mysqli_stmt_get_result($stmt);

    $row= mysqli_fetch_assoc($dateleReturnate);  
    if($row)///daca am gasit profesor
    {
       return $row ;  
    }
    else{
        return false;
    }
    mysqli_stmt_close($stmt);

}

function adaugaMaterie($conn, $numeClasa, $numeMaterie, $nrDeOre,$cnpProfesor)
{
    $sql=" INSERT INTO cataloage (numeClasa, numeMaterie,nrDeOre, cnpProfesor) VALUES(? , ?, ?, ?); ";
    $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)) {
       
       header("location: adaugaMaterie.php?error=stmtfailed");
       exit();
   }
   mysqli_stmt_bind_param ($stmt, "ssss", $numeClasa, $numeMaterie,$nrDeOre, $cnpProfesor);
   mysqli_stmt_execute($stmt);
   if(!$row) header("location: afiseazaMateriile.php?error=none");
        exit();
        mysqli_stmt_close($stmt);
  

}

/*function adaugaElevLaCatalogPtNote($conn, $idScoala, $numeClasa, $numeMaterie){
    $sql=" SELECT * FROM elevi WHERE idScoala= '$idScoala' AND  clasaElev= '$numeClasa'";
        $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: adaugaMaterie.php?error=stmtFailed");
        exit();
    }
        
      
        $dateleReturnate = mysqli_query($conn,$sql);
    
         
        while($row= mysqli_fetch_array($dateleReturnate))
        {
            $numeElev= $row['numeElev'];
            $prenumeElev= $row['prenumeElev'];
            $emailElev= $row['emailElev'];
            $sql1=" INSERT INTO  note (materie, numeElev, prenumeElev, emailElev, idScoala, numeClasa) VALUES (?, ?, ?, ? ,?,?);";
            $stmt1 = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt1, $sql1)) {
                
                header("location: adaugaMaterie.php?error=stmtfailedElev");
                exit();
            }
            mysqli_stmt_bind_param ($stmt1, "ssssss", $numeMaterie, $numeElev, $prenumeElev, $emailElev, $idScoala, $numeClasa);
            mysqli_stmt_execute($stmt1);
            mysqli_stmt_close($stmt1);
           
        }
        if(!$row) header("location: afiseazaMateriile.php?error=nonePtElev");
        exit();
        mysqli_stmt_close($stmt);
    

}*/