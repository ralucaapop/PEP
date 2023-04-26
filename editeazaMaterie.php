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
include_once 'bara.php';
?>

    <div class="pagina">
    <br><br><br>
       
        <h1 class="pep">CATALOG</h1>
        <?php
        
                
                    $numeClasa=$_SESSION["numeClasa"];
                    if(isset($_GET["error"]))
                    {
                        $cnpProfesor=$_GET["error"];
                    }
                   
                    $sql="SELECT * FROM cataloage WHERE  cnpProfesor='$cnpProfesor'  AND numeClasa='$numeClasa';  ";
                    $result= mysqli_query($conn, $sql);
                    $resultCheck= mysqli_num_rows($result);
                    if($resultCheck > 0)
                    {  
                        $row=mysqli_fetch_assoc($result);
                        echo $row["numeMaterie"];
                        ?>

                        <form action="editeazaMaterie.inc.php" method="POST">
                        
                        <input class="rubrici" type="hidden" name="numeClasa" id="numeClasa" value="<?php echo $numeClasa?>">
                        <input class="rubrici" type="hidden" name="cnpProfesor" id="cnpProfesor" value="<?php echo $cnpProfesor?>">
                        <input class="rubrici" type="hidden" name="numeMaterie" id="numeMaterie" value="<?php echo $numeMaterie?>">
                        
                        <label class="label" for="nrOre">Nr.de ore pe săptămână:</label>
                        <input class="rubrici" type="text" name="nrDeOre" id="nrDeOre" value="<?php echo $row['nrDeOre']?>">
                        
                        
                        <input class="buton" type="submit" name="schimba"  value="Schimba profesorul">
                        <input class="buton" type="submit" name="editeaza"  value="Editează">
                        </form>
                       
                        
                        <?php
                        
                    }
                    
                
            
        ?>

    </div>
</body>
</html>