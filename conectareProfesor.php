<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Conectare-profesor</title>
    <link rel="stylesheet" href="conectar.css">
</head>
<body>
    <div class="pagina">
        <h1 class="pep">CATALOG ELECTRONIC</h1>
        <h2 class="titlu">Conectează-te ca profesor</h2>
        <section>
            <div class="fundalFormular">
            <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="none")
                {
                    echo "<span style='color:red; font-size:30px;'>Te-ai înregistrat cu succes!</span>";
                }
                if($_GET["error"]=="cnpGresit")
                {
                    echo "<span style='color:red; font-size:30px;'>Acest cont nu exista!</span>";
                }
                
            }
            ?>
                <div class="formular">
                    <h1 class="titluDeConectare">Introdu următoarele date:</h1>
                    <form action="conectareP.inc.php"  method="post" autocomplete="on">
                        <input  class="rubrici" type="text" id="cnpProfesor" name="cnpProfesor" placeholder="introduce-ți CNP-ul" required> 
                        <input  class="buton" type="submit" name="submit" value="Înainte">
                    </form>
                </div>
                <br><br><br><br><br><br><br>
           
            </div>  
          
        </section>
        
    </div>
</body>
</html>