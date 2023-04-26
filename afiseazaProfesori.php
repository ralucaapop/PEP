<?php 
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afiseazaProfesori.css">
    <title>Lista Profesori</title>
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
             if($_GET["error"]=="sters")
             {
                 echo "<span style=' font-size:20px; display:flex; justify-content:center; padding-top:1rem; color:red;'>Profesorul a fost sters!</span>";
             }
         }
          
        ?>
    </div>
        <h1 class="titlu">PROFESORI</h1>;
        <table>
            <tr>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Disciplină</th>
                <th>Statut</th>
            </tr>
        
        <?php
            $sql="SELECT * FROM profesori;";
            $result= mysqli_query($conn, $sql);
            $resultCheck= mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                   
                    echo "<tr><td>". $row["numeProfesor"] ."</td><td>". $row["prenumeProfesor"] ."</td><td>". $row["disciplinaProfesor"] . "</td><td>" . $row["statutProfesor"] ."</td></tr>";
                       
                    
                }
            }
            
        ?>
        </table>
    </div>
    
</body>
</html>