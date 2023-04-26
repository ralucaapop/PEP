<?php
require_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilAdminProfesoriSiClase.css">
    <title>Clase</title>
</head>
<body>
<?php
include_once 'bara.php';
?>

    <div class="pagina">
    <br><br><br>
        <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="none")
                {
                    echo "<span style='color:black; font-size:30px; font-weight:bold;'>Clasa a fost adăugată cu succes!</span>";
                }
            }
        ?>
        <h1 class="pep">P.E.P.</h1>
        
    
        <p class="optiuni"><a href="inregistrareClasa.php">Adaugă o Clasă</a></p>
        <p class="optiuni"><a href="afiseazaClase.php">Afișează Clase</a></p>
        <p class="optiuni"><a href="alegeClasaPtStergere.php">Șterge o Clasă</a></p>
        <p class="optiuni"><a href="editeazaClasa.php">Editează o Clasă</a></p>
        
    </div>
    
</body>
</html>