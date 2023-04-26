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
include_once 'bara.php';
?>

    <div class="pagina">
        <br><br><br>
        <h1 class="pep">CATALOG</h1>
        <div class="dateDespreClasa">
            <?php
                
                    {
                        
                        $numeClasa=$_SESSION["numeClasa"];
                        
                            echo $numeClasa;
                            echo '<p class="elevi"><a href="inregistrareElev.php">Adaugă Elev</a></p>';
                            echo '<p class="elevi"><a href="afiseazaEleviA.php">Afișează Elevi</a></p>';
                            
                            echo '<p class="elevi"><a href="alegeElevPtStergere.php"> Șterge Elev</a></p>';
                            echo '<p class="elevi"><a href="alegeElevA.php"> Editează Elev</a></p>';
                        
                    }
            ?>
        </div>
        <br><br>
    </div>
</body>
</html>