<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă o nouă clasă</title>
    <link rel="stylesheet" href="inregistrare.css">
</head>
<body>


<div class="pagina">
    <h1 class="pep">CATALOG</h1>
    <h2 class="titlu">Adaugă o nouă clasă</h2>
        <section>
       
            <div class="fundalFormular">
            <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="idurileNuCoincid")
                {
                    echo "<span style='color:red; font-size:30px;'> ID-urile nu coincid!</span>";
                }
                if($_GET["error"]=="idScoalaNuExista")
                {
                    echo "<span style='color:red; font-size:30px;'>Nu există nici o unitate de învățământ cu acest id!</span>";
                }
                if($_GET["error"]=="clasaExista")
                {
                    echo "<span style='color:red; font-size:30px;'>Acea clasă a fost deja înregistrată</span>";
                }
                if($_GET["error"]=="dirNuExista")
                {
                    echo "<span style='color:red; font-size:30px;'>Acest profesor nu predă în această unitate de învățământ</span>";
                }
                
                if($_GET["error"]=="stmtfailed")
                {
                    echo "<span style='color:red; font-size:30px;'>Eroare, încearcă iar!</span>";
                } 
            }
            ?>
            <h1 class="titluDeConectare">Introduceți următoarele date:</h1>
                <form action="inregistrareC.inc.php" method="post" autocomplete="on">
                    <input class="rubrici" type="text" name="numeClasa" id="numeClasa" placeholder="Numele clasei  ex:9C" required>
                    <input class="rubrici" type="text" name="cnpDiriginte" id="cnpDiriginte" placeholder="CNP-ul dirigentelui/dirigintei" required>

                    <input  class="buton" type="submit" name="submit" value="Înainte">
                </form >
            </div>
        </section>  
</div>
</body>
</html>