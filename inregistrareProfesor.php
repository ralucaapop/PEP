<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Înregistrare-profesor</title>
    <link rel="stylesheet" href="inregistrare.css">
</head>
<body>
    <div class="pagina">
        <h1 class="pep">CATALOG</h1>
        <h2 class="titlu">Înregistare profesor</h2>
        <section>
            <div class="fundalFormular">
                <?php
                    if(isset($_GET["error"]))
                    {
                    
                        if($_GET["error"]=="contExista")
                        {
                            echo "<span style='color:red; font-size:30px;'> A fost deja înregistrat acest profesor care preda materia introdusă! </span>";
                        }
                        if($_GET["error"]=="cnpNuCoincide")
                        {
                            
                            echo "<span style='color:red; font-size:30px;'> Datele de la CNP nu coincid! </span>";
                        }
                        if($_GET["error"]=="CNPgresit")
                        {
                            
                            echo "<span style='color:red; font-size:30px;'> CNP-ul este greșit! </span>";
                        }
                        
                        if($_GET["error"]=="stmtfailed")
                        {
                            echo "<span style='color:red; font-size:30px;'>Eroare, încearcă iar!</span>";
                        } 
                    }
                ?>
                <div class="formular">
                    <h1 class="titluDeConectare">Introdu următoarele date:</h1>
                    <form action="inregistrareP.inc.php" method="post" autocomplete="on">
                        <input  class="rubrici" type="text" id="numeProfesor" name="numeProfesor" placeholder="Nume"required size="10">
                        <input  class="rubrici" type="text" id="prenumeProfesor" name="prenumeProfesor" placeholder="Prenume"required>
                        <input  class="rubrici" type="text" id="statutProfesor" name="statutProfesor" placeholder="Statutul profesorului în cadrul unității" required>
                        <input  class="rubrici" type="text" id="cnpProfesor" name="cnpProfesor" placeholder="CNP"required>
                        <input  class="rubrici" type="text" id="cnpProfesor1" name="cnpProfesor1" placeholder="CNP"required>
                        <input  class="rubrici" type="text" id="disciplinaProfesor" name="disciplinaProfesor" placeholder="Disciplina predată" required>
                        <input  class="buton" type="submit" name="submit1" value="Înainte">
                    </form>
                </div>
            </div>  
        </section>
    </div>
</body>
</html>