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
    <title>Note Elevi</title>
</head>
<body>
<?php
include_once 'baraP.php';
?>

    <div class="pagina">
    <div class="numeleScolii">
        <?php
            
                     if(isset($_GET["error"]))
                     {
                         $cnpElev=$_GET["error"];
                     }
 
            $sql="SELECT * FROM note WHERE cnpElev='$cnpElev';";
            $result= mysqli_query($conn, $sql);
            $resultCheck= mysqli_num_rows($result);
            if($resultCheck > 0)
            {
                if($row=mysqli_fetch_assoc($result)){
                
                    echo $row["numeElev"] ." " . $row["prenumeElev"] ;
                    
                }
            }
        ?>
    </div>
        <h1 class="titlu">Note </h1>;
        <table>
            <tr>
                <th>Materie</th>
                <th>Note</th>
                <th> Absențe </th>
               
            </tr>
        
        <?php

        
                $sql1="SELECT * FROM note WHERE cnpElev='$cnpElev';";
                $result1= mysqli_query($conn, $sql1);
                $resultCheck1= mysqli_num_rows($result1);
                if($resultCheck1 > 0)
                {
                    while($row1=mysqli_fetch_assoc($result1))
                    {
                       ?>
                        <tr>
                        <td><?php echo $row1["materie"];?></td>
               
                        <td><?php echo $row1["nota"];?></td>
                        <td><?php echo $row1["absente"];?></td>
                        
                        </tr>
                      <?php
                         
                        
                    }
                }
                
            
        

            
            
        ?>
        </table>
    </div>
    
</body>
</html>