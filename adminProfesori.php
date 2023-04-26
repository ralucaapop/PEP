<?php 
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilAdminProfesoriSiClase.css">
    <title>Profesori</title>
</head>
<body>
<?php
include_once 'bara.php';
?>

    <div class="pagina">
    <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="none")
                {
                    echo "<span style='color:black; font-size:30px; font-weight:bold;'>Ai înregistrat un nou profesor!</span>";
                }
            }
        ?>
   
   <br><br>
        <h1 class="pep">CATALOG</h1>
       
        <br><br>
            <p class="optiuni"><a href="inregistrareProfesor.php">Adaugă Profesor</a></p>
            <p class="optiuni"><a href="afiseazaProfesori.php">Afișează Profesori</a></p>
            <p class="optiuni"><a href="alegeProfPtStergere.php">Șterge Profesor</a></p> 
            <br><br><br><br>
        </div>
        
        
    </div>
    
</body>
</html>