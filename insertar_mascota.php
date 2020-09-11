


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_insertar_alimentos.css">
    <title>insertar mascota</title>
</head>
<body>
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$raza_mascota = $_REQUEST["raza_mascota"];
$edad_mascota = $_REQUEST["edad_mascota"];
$precio_mascota = $_REQUEST["precio_mascota"];
$id_tipo_mascota = $_REQUEST["id_tipo_mascota"];
$sexo_mascota = $_REQUEST ["sexo_mascota"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_mascota = "INSERT INTO mascota(id_mascota,raza_mascota,edad_mascota,sexo_mascota, 
precio_mascota,id_tipo_mascota_mascota) values(:id_m,:raza_m ,:edad_m ,:sexo_m ,:precio_m,:id_tipo_m)";



$q = $conexion->prepare($sql_insertar_mascota);
$resultado = $q->execute(array(
    ':id_m' =>NULL,
    'raza_m'=>$raza_mascota,
    'edad_m' =>$edad_mascota,
    'sexo_m' =>$sexo_mascota,
    'precio_m' =>$precio_mascota,
    'id_tipo_m' =>$id_tipo_mascota));


if($resultado){
    ?> <strong> se a incertado la mascota</strong> <?php 
}
else{
    ?> <strong> error al incertar mascota</strong> <?php

}


?>
    
</body>
</html>