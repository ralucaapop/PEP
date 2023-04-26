<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilAdmin.css">
    <title>Alege clasa de sters</title>
</head>
<body>

<?php
include_once 'bara.php';
?>
<br><br>
    <div class="pagina">
    <h1 class="pep">CATALOG</h1>
        <section>
        <?php
            if(isset($_GET["error"]))
            {
                
                if($_GET["error"]=="clasaNuExista")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;'>Nu există această clasă</span>";
                }
                if($_GET["error"]=="existaElevi")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;'>Nu poți stereg o clasa daca sunt elevi in calasa respectiva</span>";
                }
            
                if($_GET["error"]=="stmt")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>S-a produs o eroare, încearcă iar!</span>";
                }
            }
    
               
            
        ?>
            <form action="verificaClasaPtStergere.inc.php" method="post" autocomplete="on">
            
            <input class="rubrici" type="text" name="numeClasa" id="numeClasa" placeholder="Numele Clasei" required>
                <input  class="buton" type="submit" name="submit" value="Înainte">
            </form>
            </section>  
        <br><br><br><br><br>
    </div>
</body>
</html>