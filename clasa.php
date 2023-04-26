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
    <title>Clasa</title>
</head>
<body>
    <?php
    include_once 'bara.php';
   
    ?>

    <div class="pagina">
    <br><br><br>
       
        <h1 class="pep">CATALOG</h1>
        <?php
                  
                  if(isset($_GET["error"]))
                  {
                      if($_GET["error"]=="profNuExista")
                      {
                          echo "<span style=' font-size:35px; display:flex; justify-content:center; padding-top:1rem;;'>Acest profesor nu există!</span>";
                      }
                    }      
                           $numeClasa=$_SESSION["numeClasa"];
                        
                            $sql="SELECT * FROM clase  where numeClasa='$numeClasa';";
                            $result= mysqli_query($conn, $sql);
                            $resultCheck= mysqli_num_rows($result);
                            if($resultCheck > 0)
                            {  
                                $row=mysqli_fetch_assoc($result);
                                echo $numeClasa .'<br>';
                                $cnpDiriginte=$row["cnpDiriginte"];
                            }
                        ?>

                        <form action="editeazaC.inc.php" method="POST">
                        <input class="rubrici" type="hidden" name="numeClasa" id="numeClasa" value="<?php echo $numeClasa?>">
                        
                        <label class="label" for="cnpDiriginte">CNP diriginte/dirigintă:</label>
                        <input class="rubrici" type="text" name="cnpDiriginte" id="cnpDiriginte" value="<?php echo $cnpDiriginte?>">
                        
                        <input class="buton" type="submit" name="editeaza" value="Editeaza">

                        </form>

                        <?php
                    
            
                 echo '<p class="elevi"><a href="adminEditeazaElevi.php"> Editează Elevi</a></p>';
                 echo '<p class="elevi"><a href="catalog.php">Catalog</a></p>';
        ?>

    </div>
</body>
</html>