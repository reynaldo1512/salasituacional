
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name ="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="stylesala.css">
    </head>
    <body> 
        <table>
            <tr>
            <td>idsala</td>
            <td>nombresala</td>
            <td>año</td>
            <td>archivosala</td>
            </tr>



        <?php
        include("cn.php");
        $salas="SELECT * FROM salasituacional1";
?>

            <?php $resultado=mysqli_query($conexion,$salas);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
            <tr> 
                <td><?php echo $row["idsala"];?></td>
                <td><?php echo $row["nombresala"];?></td>
                <td><?php echo $row["año"];?></td>
                
                
                <td><a href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/sala/' . $row["archivosala"];?>">ver archivo</a></td>

            </tr>
            <?php } mysqli_free_result($resultado); 
            ?>


        </table>
        <td><a href="sala.html">ir a registrar Sala salasituacional1  </a></td>

    </body>

</html>