
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_insertar_alimentos.css">
    <title>insertar alimento</title>
</head>
<body>
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$nombre_ropa = $_REQUEST["nombre_ropa"];
$talla_ropa= $_REQUEST["talla_ropa"];
$precio_ropa= $_REQUEST["precio_ropa"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_alimento = "INSERT INTO ropa_mascota(id_ropa,nombre_ropa,talla_ropa,
precio_ropa) values(:id_r,:nombre_r ,:talla_r ,:precio_r)";



$q = $conexion->prepare($sql_insertar_alimento);
$resultado = $q->execute(array(
    ':id_r' =>NULL,
    'nombre_r'=>$nombre_ropa,
    'talla_r' =>$talla_ropa,
    'precio_r' =>$precio_ropa));


if($resultado){
    ?> <strong> se a incertado la ropa a la bd</strong> <?php 
}
else{
    ?> <strong> error al incertar la ropa a la bd</strong> <?php

}


?>
    
</body>
</html>

