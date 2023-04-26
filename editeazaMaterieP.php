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
            if(isset($_SESSION["idScoala"]))
            {
                    $idScoala=$_SESSION["idScoala"];
                
                    $numeClasa=$_SESSION["numeClasa"];
                    if(isset($_GET["error"]))
                    {
                        $emailProfesor=$_GET["error"];
                    }
                   
                    $sql="SELECT * FROM cataloage WHERE  emailProfesor='$emailProfesor' AND  idScoala='$idScoala' AND numeClasa='$numeClasa';  ";
                    $result= mysqli_query($conn, $sql);
                    $resultCheck= mysqli_num_rows($result);
                    if($resultCheck > 0)
                    {  
                        $row=mysqli_fetch_assoc($result);
                        echo $row["numeMaterie"];
                        ?>

                        <form action="editeazaMaterieP.inc.php" method="POST">
                        <input class="rubrici" type="hidden" name="idScoala" id="idScoala" value="<?php echo $idScoala?>">
                        <input class="rubrici" type="hidden" name="numeClasa" id="numeClasa" value="<?php echo $numeClasa?>">
                        <input class="rubrici" type="hidden" name="emailProfesor" id="emailProfesor" value="<?php echo $emailProfesor?>">
                        
                        <label class="label" for="numeElev">Nume profesor:</label>
                        <input class="rubrici" type="text" name="numeProfesor" id="numeProfesor" value="<?php echo $row['numeProfesor']?>">
                        <label class="label" for="prenumeElev">Prenume profesor:</label>
                        <input class="rubrici" type="text" name="prenumeProfesor" id="prenumeProfesor" value="<?php echo $row['prenumeProfesor']?>">
                        <label class="label" for="telefonElev">Nr.de ore pe săptămână:</label>
                        <input class="rubrici" type="text" name="nrDeOre" id="nrDeOre" value="<?php echo $row['nrDeOre']?>">
                       
                        <input class="buton" type="submit" name="editeaza"  value="Editează">

                        </form>

                        <?php
                        
                    }
                    
                }
            
        ?>

    </div>
</body>
</html>