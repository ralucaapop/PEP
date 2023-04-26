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
    <title>Materii</title>
</head>
<body>
<?php
include_once 'bara.php';
?>

    <div class="pagina">
    <div class="numeleScolii">
        <?php
          
            $numeClasa=$_SESSION["numeClasa"];
            
            $sql="SELECT * FROM clase WHERE numeClasa='$numeClasa';";
            $result= mysqli_query($conn, $sql);
            $resultCheck= mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                if($row=mysqli_fetch_assoc($result)){
                    echo $row["numeClasa"];
                    
                }
            }
        
        ?>
    </div>
        <h1 class="titlu">Materii</h1>;
        <table>
            <tr>
                <th>Materie</th>
                <th> NR. de ore predate pe săptămână</th>
                <th>Profesor</th>
                
            </tr>
        
        <?php
           
            
            $sql="SELECT * FROM cataloage WHERE numeClasa='$numeClasa';";
            $result= mysqli_query($conn, $sql);
            $resultCheck= mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                   
                    $cnpProfesor=$row["cnpProfesor"];
                                    $sql1= "SELECT * FROM profesori WHERE cnpProfesor='$cnpProfesor';";
                                    $result1= mysqli_query($conn, $sql1);
                                    $resultCheck1= mysqli_num_rows($result1);
                                    if($resultCheck1> 0)
                                     if($row1=mysqli_fetch_assoc($result1)){   
                                        echo "<tr><td>". $row["numeMaterie"] ."</td><td>". $row["nrDeOre"].  "</td><td>". $row1["numeProfesor"]." ". $row1["prenumeProfesor"]  . "</td></tr>";
                                    }

                }
            }
        
        ?>
        </table>
    </div>
    
</body>
</html>