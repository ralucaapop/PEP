<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Conectare-admin</title>
    <link rel="stylesheet" href="conectar.css">
</head>
<body>
    <div class="pagina">
        <h1 class="pep">CATALOG ELECTRONIC</h1>
        <h2 class="titlu">Conectează-te ca administrator</h2>
        <section>
            <div class="fundalFormular">
            <?php
            if(isset($_GET["error"]))
            {
                if($_GET["error"]=="parolaGresita")
                {
                    echo "<span style='color:red; font-size:30px;'> Parolă Gresită</span>";
                }
   
   
            }
            ?>
                <div class="formular">
                    <h1 class="titluDeConectare">Introdu următoarele date:</h1>
                    <form action="conectare.inc.php" method="post" autocomplete="on">
                        
                        <input  class="rubrici" type="password" id="parolaAdmin" name="parolaAdmin" placeholder="Parola"required>
                        <input  class="buton" type="submit" name="submit" value="Înainte">
                    </form>
                </div>
                
                <br><br><br><br><br><br><br></div>  
        </section>
        
    </div>
</body>
</html>