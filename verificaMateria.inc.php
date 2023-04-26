<?php
if(isset($_POST['submit']))
{
    $cnpProfesor=$_POST['cnpProfesor'];
    $numeClasa=$_POST["numeClasa"];
    $numeMaterie=$_POST['numeMaterie'];

    require_once 'dbh.inc.php';
    

    function materiaExista($conn, $cnpProfesor, $numeClasa, $numeMaterie){
        $sql= "SELECT * FROM cataloage WHERE cnpProfesor=? AND numeClasa=? AND numeMaterie=?;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("loaction: alegeMateriePtEditare.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "sss", $cnpProfesor, $numeClasa, $numeMaterie);
        mysqli_stmt_execute($stmt);
    
        $dateleReturnate = mysqli_stmt_get_result($stmt);
    
        $row= mysqli_fetch_assoc($dateleReturnate);  
        if($row)///daca am gasit materia
        return $row ;  
        else return false;
        mysqli_stmt_close($stmt);
    }
    if(materiaExista($conn, $cnpProfesor, $numeClasa, $numeMaterie)!==false)
        {
             header("location: editeazaMaterie.php?error=$cnpProfesor");
             exit();
    }
    else{
        header("location: alegeMateriePtEditare.php?error=materiaNuExista");
            exit();
    }
}