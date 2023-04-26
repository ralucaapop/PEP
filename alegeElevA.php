<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilAdmin.css">
    <title>Alege Elev</title>
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
                if($_GET["error"]=="elevulNuExista")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>Elevul nu este în clasă!</span>";
                }
            
                if($_GET["error"]=="stmt")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>S-a produs o eroare, încearcă iar!</span>";
                }
            }
    
               
                $numeClasa=$_SESSION["numeClasa"];
                echo $numeClasa;
            
        ?>
            <form action="verificaElevA.inc.php" method="post" autocomplete="on">
            <input type="hidden" name="clasaElev" value=<?php echo $numeClasa ?>>
                <input class="rubrici" type="text" name="cnpElev" id="cnpElev" placeholder=" CNP Elev" required>
                <input  class="buton" type="submit" name="submit" value="Înainte">
            </form>
            </section>  
        <br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br>
    </div>
</body>
</html>