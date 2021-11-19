<?php

$mysqli= mysqli_connect("localhost","root","","sala_situacional");


$nombresala=$_POST["nombresala"];
$año=$_POST["año"];
  
if ($_FILES["archivosala"]){
    $nombre_base=basename($_FILES["archivosala"]["name"]);
    $nombre_final=date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta="archivos/" . $nombre_final;
    $subirarchivo=move_uploaded_file($_FILES["archivosala"]["tmp_name"],$ruta); 
    if($subirarchivo){
        $insertarSQL="INSERT INTO salasituacional1(nombresala,año,archivosala) VALUES('$nombresala','$año','$ruta')";
        $resultado=mysqli_query($mysqli,$insertarSQL);
        if($resultado){
            echo "<script>alert('se ha enviado el archivo');window.location='lista.php' </script>";
        }
        else {
            printf("Errormessage: %s\n",mysqli_error($mysqli));
            }   

}
}
else {
    echo "error al subir el archivo";

} 

?>