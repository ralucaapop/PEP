<?php 
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afiseazaClase.css">
    <title>Lista Elevi</title>
</head>
<body>
<?php
include_once 'bara.php';
?>

    <div class="pagina">
    <div class="numeleScolii">
        <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"]=="edit")
            {
                echo "<span style=' font-size:20px; display:flex; justify-content:center; padding-top:1rem;;'>Modificarea a fost făcută!</span>";
            }
            if($_GET["error"]=="elevAdaugat")
            {
                echo "<span style=' font-size:20px; display:flex; justify-content:center; padding-top:1rem;;'>Elevul a fost adaugat!</span>";
            }
            if($_GET["error"]=="sters")
            {
                echo "<span style=' font-size:20px; display:flex; justify-content:center; padding-top:1rem;'>Elevul a fost șters!</span>";
            }
        }
            
                $clasaElev=$_SESSION["numeClasa"];
            
        echo $clasaElev;
        ?>
    </div>
        <h1 class="titlu">Elevi</h1>;
        <table>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Nr Tel.</th>
                <th>Adresa</th>
            </tr>
        
        <?php
            $sql="SELECT * FROM elevi WHERE clasaElev='$clasaElev';";
            $result= mysqli_query($conn, $sql);
            $resultCheck= mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr><td>". $row["numeElev"] ."</td><td>". $row["prenumeElev"] ."</td><td>". $row["telefonElev"] ."</td><td>". $row["adresaElev"] ."</td></tr>";

                }
            }
                ?>
        </table>
    </div>
    
</body>
</html>