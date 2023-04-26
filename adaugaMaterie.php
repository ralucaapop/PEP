<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Adauga Materie</title>
    <link rel="stylesheet" href="inregistrare.css">
</head>
<body>

    <div class="pagina">
        <h1 class="pep">CATALOG</h1>
        <h2 class="titlu">Adaugă o materie</h2>
        
        <section>
            <div class="fundalFormular">
            <?php
           
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="materiaExistaDeja")
                {
                    echo "<span style='color:red; font-size:30px;'>Această materie a fost deja introdusă</span>";
                }
                if($_GET["error"]=="profesorulNuExista")
                {
                    echo "<span style='color:red; font-size:30px;'>Acest profesor nu este înregistrat sau nu preda materia respectiva</span>";
                }
                
                if($_GET["error"]=="stmtfailed")
                {
                    echo "<span style='color:red; font-size:30px;'>Eroare, încearcă iar!</span>";
                } 
            }
            
                $numeClasa=$_SESSION["numeClasa"];
            ?>
                <div class="formular">
                    <h1 class="titluDeConectare">Introdu următoarele date:</h1>
                    <form action="adaugaMaterie.inc.php"  method="post" autocomplete="on">
                        
                        <input class="rubrici" type="hidden" name="numeClasa" value=<?php echo $numeClasa ?>>
                        <input  class="rubrici" type="text" id="numeMaterie" name="numeMaterie" placeholder="Disciplina" required>
                        <input  class="rubrici" type="text" id="nrDeOre" name="nrDeOre" placeholder="Nr. de ore pe săptămână" required>
                        <input  class="rubrici" type="text" id="cnpProfesor" name="cnpProfesor" placeholder="cnpProfesor"required>
                      
                       <input  class="buton" type="submit" name="submit" value="Înainte">
                    </form>
                </div>
                <br><br><br><br>
            </div>  
        </section>

    </div>
</body>
</html>