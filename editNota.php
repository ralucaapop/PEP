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
    <title>Editeaza Materie</title>
</head>
<body>
<?php
include_once 'baraP.php';
?>

    <div class="pagina">
    <br><br><br>
       
        <h1 class="pep">CATALOG</h1>
        <?php
           
                
                    $numeClasa=$_SESSION["numeClasa"];
                    if(isset($_GET["error"]))
                    {
                        $idNota=$_GET["error"];
                    }
                   
                    $sql="SELECT * FROM note WHERE  idNota='$idNota';  ";
                    $result= mysqli_query($conn, $sql);
                    $resultCheck= mysqli_num_rows($result);
                    if($resultCheck > 0)
                    {  
                        $row=mysqli_fetch_assoc($result);
                        
                        ?>

                        <form action="editNota.inc.php" method="POST">
                        <input class="rubrici" type="hidden" name="idNota" id="idNota" value="<?php echo $idNota?>">
                        <input class="rubrici" type="hidden" name="cnpElev" id="emailElev" value="<?php echo $cnpElev?>">
                        
                        <label class="label" for="nota">Note:</label>
                        <input class="rubrici" type="text" name="nota" id="nota" value='<?php echo $row['nota'] ?>'>
                        <label class="label" for="nota">Absențe:</label>
                        <input class="rubrici" type="text" name="absente" id="absente" value="<?php echo $row['absente']. ' ' ?>">
                        
                        <input class="buton" type="submit" name="editeaza"  value="Editează">

                        </form>

                        <?php
                        
                    }
                    
                
            
        ?>
        <br><br><br><br><br>
    </div>
</body>
</html>