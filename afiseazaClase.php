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
    <title>Lista Clase</title>
</head>
<body>
    <?php
    include_once 'bara.php';
    ?>       
    <div class="pagina">
       
       
                    <h1 class="titlu">Clase</h1>;
                    <table>
                        <tr>
                            <th>Clasa</th>
                            <th>Diriginte</th>
                        </tr>
                        <?php
                            $sql="SELECT * FROM clase";
                            $result= mysqli_query($conn, $sql);
                            $resultCheck= mysqli_num_rows($result);
                            if($resultCheck > 0)
                            {
                                while($row=mysqli_fetch_assoc($result))
                                {
                                    echo "<tr><td>". $row["numeClasa"] ."</td><td>";
                                    $cnpDiriginte=$row["cnpDiriginte"];
                                    $sql1= "SELECT * FROM profesori WHERE cnpProfesor='$cnpDiriginte';";
                                    $result1= mysqli_query($conn, $sql1);
                                    $resultCheck1= mysqli_num_rows($result1);
                                    if($resultCheck1> 0)
                                    {    if($row1=mysqli_fetch_assoc($result1)){   
                                            echo $row1["numeProfesor"] ." " . $row1["prenumeProfesor"] ;}
                                    }
                                }
                            }
                        ?>
                    </table>
    </div>
    
</body>
</html>