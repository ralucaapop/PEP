<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PEP</title>
</head>
<body>
    
    <div class="pagina">
    <br><br>
        <h1 class="pep">CATALOG  ȘCOLAR ELECTRONIC</h1>
       
       <br><br><br>
        <section>
            <div class="fundalFormular">
                <div class="formular">
                    <h2 class="titluDeConectare">Conectează-te ca...<h2>
                    <form action="index.inc.php"class="PrimulFormular" method="post">
                        <label for="profesor">Profesor</label>
                        <input type="radio" id="profesor" name="statut" value="profesor" checked="checked"><br>
                        <label for="elev">Elev</label>
                        <input type="radio" id="elev" name="statut" value="elev"><br>
                        <label for="admin">Administrator</label>
                        <input type="radio" id="admin" name="statut" value="admin"><br>
                        <input class="buton" type="submit" name="submit" value="Înainte">
                    </form>
                </div>
                <br><br><br><br><br>
            </div>
        </section>
        <br><br><br>
    </div>
</body>
</html>