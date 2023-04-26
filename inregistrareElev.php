<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Înregistrare-elev</title>
    <link rel="stylesheet" href="inregistrare.css">
</head>
<body>
<?php
include_once 'bara.php';
?>
    <div class="pagina">
        <h1 class="pep">CATALOG</h1>
        <h2 class="titlu">Înregistrează elev</h2>
        <section>
            <div class="fundalFormular">
                <div class="formular">
                <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="cnpInvalid")
                {
                    echo "<span style='color:red; font-size:30px;'> CNP INVALID</span>";
                }
                if($_GET["error"]=="contulExista")
                {
                    echo "<span style='color:red; font-size:30px;'> Acest cont este deja existent! </span>";
                }
                
                if($_GET["error"]=="stmtfailed")
                {
                    echo "<span style='color:red; font-size:30px;'>Eroare, încearcă iar!</span>";
                } 
            }
            $numeClasa=$_SESSION['numeClasa'];
            ?>
                
                    <h1 class="titluDeConectare">Introdu următoarele date:</h1>
                    <form action="inregistrareE.inc.php" method="post" autocomplete="on">
                        <input  class="rubrici" type="text" id="numeElev" name="numeElev" placeholder="Nume"required >
                        <input  class="rubrici" type="text" id="prenumeElev" name="prenumeElev" placeholder="Prenume"required>
                        <input  class="rubrici" type="text" id="cnpElev" name="cnpElev" placeholder="CNP elev" required>
                        <input class="rubrici" type="hidden" name="numeClasa" value=<?php echo $numeClasa ?>>
                        <input  class="rubrici" type="text" id="telefonElev" name="telefonElev" placeholder="Nr. tel." required>
                        <input  class="rubrici" type="text" id="adresaElev" name="adresaElev" placeholder="Adresa" required>
                        
                        <input  class="buton" type="submit" name="submit" value="Înainte">
                    </form>
                </div>
            </div>  
        </section>
    </div>
</body>
</html>