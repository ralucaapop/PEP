<?php
if(isset($_POST['submit']))
{
    $emailElev=$_POST['emailElev'];
    $clasaElev=$_POST["clasaElev"];
    $idScoala=$_POST['idScoala'];

    require_once 'dbh.inc.php';
    

    function contulExista($conn, $emailElev, $clasaElev, $idScoala){
        $sql= "SELECT * FROM elevi WHERE emailElev=? AND clasaElev=? AND  idScoala=?;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("loaction: alegeElev.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "sss", $emailElev, $clasaElev, $idScoala);
        mysqli_stmt_execute($stmt);
    
        $dateleReturnate = mysqli_stmt_get_result($stmt);
    
        $row= mysqli_fetch_assoc($dateleReturnate);  
        if($row)///daca am gasit contul
        return $row ;  
        else return false;
        mysqli_stmt_close($stmt);
    }
    if(contulExista($conn, $emailElev, $clasaElev, $idScoala)!==false)
        {
           
            header("location: editeazaElev.php?error=$emailElev");

            exit();

    }
    else{
        header("location: alegeElev.php?error=elevulNuExista");
            exit();
    }
}