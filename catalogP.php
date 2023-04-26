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
    <title>Catalog</title>
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
                        
                            $sql="SELECT * FROM clase WHERE numeClasa='$numeClasa';";
                            $result= mysqli_query($conn, $sql);
                            $resultCheck= mysqli_num_rows($result);
                            if($resultCheck > 0)
                            {  
                                $row=mysqli_fetch_assoc($result);
                                echo $numeClasa .'<br>';
                                
                            }
                            
                            echo '<p class="elevi"><a href="afiseazaMateriileP.php">Afișează Materiile</a></p>';
                            echo '<p class="elevi"><a href="alegeMateria.php">Afișează și adaugă Note</a></p>';
                            echo '<p class="elevi"><a href="alegeElevPtAfisareNote.php">Toate Notele*</a></p>';
                        
                    
            ?>
        </div>
        <br><br><br><br><br><br><br>
    </div>
</body>
</html>