<?php
require_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clasaProfesor.css">
    <title>Clasa</title>
</head>
<body>
<?php
include_once 'baraP.php';
?>

    <div class="pagina">
        <br><br><br>
        <h1 class="pep">CATALOG</h1>
        <div class="dateDespreClasa">
            <?php
                
                            $numeClasa=$_SESSION["numeClasa"];
                        
                            $sql="SELECT * FROM clase  where numeClasa='$numeClasa';";
                            $result= mysqli_query($conn, $sql);
                            $resultCheck= mysqli_num_rows($result);
                            if($resultCheck > 0)
                            {  
                                $row=mysqli_fetch_assoc($result);
                                echo $numeClasa .'<br>';
                                $cnpDiriginte=$row["cnpDiriginte"];
                                $sql1= "SELECT * FROM profesori WHERE cnpProfesor='$cnpDiriginte';";
                                $result1= mysqli_query($conn, $sql1);
                                $resultCheck1= mysqli_num_rows($result1);
                                if($resultCheck1> 0)
                                {    if($row1=mysqli_fetch_assoc($result1)){   
                                        echo "Diriginte/Dirigintă" . $row1["numeProfesor"] ." " . $row1["prenumeProfesor"] ;}
                                }
                             }
                            echo '<p class="elevi"><a href="afiseazaElevi.php"> Afișează Elevi</a></p>';
                            
                            echo '<p class="elevi"><a href="catalogP.php"> Catalog</a></p>';
                            
                        
                    
            ?>
        </div>
        <br><br><br><br><br><br><br><br>
    </div>
</body>
</html>