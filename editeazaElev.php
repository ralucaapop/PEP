<?php
require_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clasaStil.css">
    <title>Editeaza Elev</title>
</head>
<body>
<?php
include_once 'baraP.php';
?>

    <div class="pagina">
    <br><br><br>
       
        <h1 class="pep">CATALOG</h1>
        <?php
            if(isset($_SESSION["idScoala"]))
            {
                    $idScoala=$_SESSION["idScoala"];
                
                    $numeClasa=$_SESSION["numeClasa"];
                    if(isset($_GET["error"]))
                    {
                        $emailElev=$_GET["error"];
                    }
                   
                    $sql="SELECT * FROM elevi WHERE  emailElev='$emailElev';  ";
                    $result= mysqli_query($conn, $sql);
                    $resultCheck= mysqli_num_rows($result);
                    if($resultCheck > 0)
                    {  
                        $row=mysqli_fetch_assoc($result);
                        
                        ?>

                        <form action="editeazaElev.inc.php" method="POST">
                        <input class="rubrici" type="hidden" name="emailElev" id="emailElev" value="<?php echo $emailElev?>">
                        <label class="label" for="numeElev">Nume elev:</label>
                        <input class="rubrici" type="text" name="numeElev" id="numeElev" value="<?php echo $row['numeElev']?>">
                        <label class="label" for="prenumeElev">Preume elev:</label>
                        <input class="rubrici" type="text" name="prenumeElev" id="prenumeElev" value="<?php echo $row['prenumeElev']?>">
                        <label class="label" for="telefonElev">Telefon elev:</label>
                        <input class="rubrici" type="text" name="telefonElev" id="telefonElev" value="<?php echo $row['telefonElev']?>">
                        <label class="label" for="adresaElev">Adresa elev:</label>
                        <input class="rubrici" type="text" name="adresaElev" id="adresaElev" value="<?php echo $row['adresaElev']?>">
                        
                        <input class="buton" type="submit" name="editeaza"  value="Editează">

                        </form>

                        <?php
                        
                    }
                    
                }
            
        ?>

    </div>
</body>
</html>