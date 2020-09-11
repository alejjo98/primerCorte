
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_consulta_alimento.css">
    <title>consulta de alimento</title>
</head>
<body>
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$nombre_alimento = $_REQUEST["nombre_alimento"];
$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_consulta_alimento = "SELECT id_alimento_mascota, mascota_alimento,precio_alimento, nombre_alimento from 
alimento_mascota where nombre_alimento = '$nombre_alimento'";

$q = $conexion->prepare($sql_consulta_alimento);
$resultado= $q->execute();

$resultado_consulta_alimento = $q->fetchAll();
for($i=0;$i<count($resultado_consulta_alimento);$i ++){ 
    ?> <strong> ID DEL ALIMENTO BUSCADO =</strong>  <?php echo $resultado_consulta_alimento[$i]["id_alimento_mascota"]; ?> <br><br><?php
    ?> <strong> MASCOTA QUE CONSUME EL ALIMENTO BUSCADO = </strong> <?php echo $resultado_consulta_alimento[$i]["mascota_alimento"]; ?> <br><br><?php
    ?> <strong> PRECIO DEL ALIMENTO BUSCADO = </strong>  <?php echo $resultado_consulta_alimento[$i]["precio_alimento"]; ?><br> <br><?php    
    ?><strong>  NOMBRE DEL ALIMENTO BUSCADO = </strong> <?php echo $resultado_consulta_alimento[$i]["nombre_alimento"]; ?><br> <br><?php
 }

?>
    
    
</body>
</html>