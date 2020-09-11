


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_insertar_alimentos.css">
    <title>insertar alimento</title>
</head>
<body>
    <div class="div_insertar_alimento">
    <?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$nombre_alimento = $_REQUEST["nombre_alimento"];
$mascota_alimento= $_REQUEST["mascota_alimento"];
$precio_alimento = $_REQUEST["precio_alimento"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_alimento = "INSERT INTO alimento_mascota(id_alimento_mascota,nombre_alimento,mascota_alimento,
precio_alimento) values(:id_a,:nombre_a ,:mascota_a ,:precio_a)";



$q = $conexion->prepare($sql_insertar_alimento);
$resultado = $q->execute(array(
    ':id_a' =>NULL,
    'nombre_a'=>$nombre_alimento,
    'mascota_a' =>$mascota_alimento,
    'precio_a' =>$precio_alimento));


if($resultado){
    ?> <strong> se a incertado el alimento</strong> <?php 
}
else{
    ?> <strong> error al incertar el alimento</strong> <?php

}


?>


    </div>

    
</body>
</html>