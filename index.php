<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
    
    $conexion=new mysqli("localhost","root","","cooperativa");
    if ($conexion->connect_errno){
        die("error de conexion ".$mysqli->connect_error);
    }else{
        echo "Conexion exitosa!";
    }

    $registros=mysqli_query($conexion,"select id,nombres,apellidos from colaboradores");

/*     while(list($id,$nombres,$apellidos)=mysqli_fetch_array($registros)){
        
        echo "<br>";
        echo "$id";
        echo "<br>";
        echo "$nombres";
        echo "<br>";
        echo "$apellidos";
    } */
    ?>
        <table class="table">
            <?php
            while($row=$registros->fetch_array(MYSQLI_NUM)){
                echo "<tr>";

                    echo "<td>";
                        echo $row[0];
                    echo "</td>";
                    echo "<td>";
                        echo $row[1];
                    echo "</td>";
                    echo "<td>";
                        echo $row[2];
                    echo "</td>";
                echo "</tr>";
            }
            
            mysqli_close($conexion);
            ?>
    </table>
</body>
</html>

