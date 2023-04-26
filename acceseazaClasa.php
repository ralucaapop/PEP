<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilAdmin.css">
    <title>Acceseaza Clasa</title>
</head>
<body>

<?php
include_once 'baraP.php';
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
                 echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>Clasa nu există!</span>";
             }
         }   
        ?>

            <form action="conectareC.inc.php" method="post" autocomplete="on">
                
                <input class="rubrici" type="text" name="numeClasa" id="numeClasa" placeholder="Introdu Numele Clasei ex:9C" required>
                <input class="buton" type="submit" name="submit" value="Înainte">
            </form>
            </section>  
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</body>
</html>