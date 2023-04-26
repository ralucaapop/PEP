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
include_once 'baraP.php';
?>
<br><br>
    <div class="pagina">
    <h1 class="pep">CATALOG</h1>
        <section>
        <?php
        $numeClasa=$_SESSION["numeClasa"];
        $cnpProfesor=$_SESSION["cnpProfesor"];
            if(isset($_GET["error"]))
            {
                
    
                if($_GET["error"]=="nuExistaMateria")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:2rem;'>Acest profesor nu predă materia introdusă</span>";
                }
            
                if($_GET["error"]=="stmt")
                {
                    echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>S-a produs o eroare, încearcă iar!</span>";
                }
            }
    
               
            
        ?>
            <form action="alegeMateria.inc.php" method="post" autocomplete="on">
                <input type="hidden" name="numeClasa" value=<?php echo $numeClasa ?>>
                <input type="hidden" name="cnpProfesor" value=<?php echo $cnpProfesor?>>
                <input class="rubrici" type="text" name="disciplinaProfesor" id="disciplinaProfesor" placeholder="Alege disciplina" required>
                <input  class="buton" type="submit" name="submit" value="Înainte">
             </form>
             <br><br><br><br><br>     <br><br><br><br><br><br><br><br><br><br><br><br><br>
            </section>  
   
    </div>
</body>
</html>