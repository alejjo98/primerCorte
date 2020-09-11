
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_insertar_alimentos.css">
    <title>insertar tipo mascota</title>
</head>
<body>
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$nombre_tipo_mascota = $_REQUEST["tipo_mascota"];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_tipo_mascota = "INSERT INTO tipo_mascota(id_tipo_mascota,nombre_tipo_mascota)
 values(:id_t,:nombre_t)";



$q = $conexion->prepare($sql_insertar_tipo_mascota);
$resultado = $q->execute(array(
    ':id_t' =>NULL,
    ':nombre_t'=>$nombre_tipo_mascota));


if($resultado){
    ?> <strong> se a incertado el tipo de mascota</strong> <?php 
}
else{
    ?> <strong> error al incertar tipo de mascota</strong> <?php

}


?>
    
</body>
</html>

