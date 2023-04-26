<?php
if(isset($_POST['submit']))
{
    
    
    $cnpElev=$_POST['cnpElev'];
    $clasaElev=$_POST['clasaElev'];
    require_once 'dbh.inc.php';
    

    function elevExista($conn,$cnpElev){
        $sql= "SELECT * FROM elevi WHERE cnpElev=? ;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("loaction: alegeElevPtStergere.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s",  $cnpElev );
        mysqli_stmt_execute($stmt);
    
        $dateleReturnate = mysqli_stmt_get_result($stmt);
    
        $row= mysqli_fetch_assoc($dateleReturnate);  
        if($row)///daca am gasit elevu
        return $row ;  
        else return false;
        mysqli_stmt_close($stmt);
    }
    if(elevExista($conn, $cnpElev)!==false)
        {
           $sql= "DELETE FROM elevi WHERE cnpElev='$cnpElev';";
           if (mysqli_query($conn, $sql))
           {                     
              header("location: afiseazaEleviA.php?error=sters");
               exit();
           } 
          else 
           {
              header("location: alegeElevPtStergere.php?error=stmtFailed1");
               exit();
           }
         mysqli_close($conn);
                         

    }
    else{
        header("location: alegeElevPtStergere.php?error=elevulNuExista");
            exit();
    }
}