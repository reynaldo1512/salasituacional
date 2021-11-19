

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name ="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="stylesala.css">
    </head>
    <body>
    <?php
        include("cn.php");
        $salas="SELECT * FROM salasituacional1 WHERE idsala=". $_GET['idsala'];
    ?>

            <?php $resultado=mysqli_query($conexion,$salas);
            while($row=mysqli_fetch_assoc($resultado)) { ?> 

           <iframe src="archivos/<?php echo $row['archivosala']; ?>"></iframe>
            
        <?php } mysqli_free_result($resultado); 
        ?>
 

        </div>
    </body>

</html>