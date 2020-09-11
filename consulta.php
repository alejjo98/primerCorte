
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_consulta.css">
    <title>CONSULTAS</title>
</head>
<div class="div_consulta">
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$consulta = $_REQUEST["consulta"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

switch($consulta){
    case'mostrar_mascotas':
         $sql_consulta= "SELECT id_mascota, raza_mascota , edad_mascota, precio_mascota from mascota";   
         break;
    case'mostrar_alimentos': $nombre_alimento=null;
         $sql_consulta=  "SELECT id_alimento_mascota, mascota_alimento,precio_alimento, nombre_alimento from 
alimento_mascota"
         ?>  <form action="consulta_alimento.php" method="POST">
              
              ingrese el nombre del alimento a buscar = <input type="text" name= nombre_alimento>
              <input type="submit">

         </form>
              
         <?php
     ;
         break;
    case'mostrar_ropa':
         $sql_consulta= "SELECT nombre_ropa, precio_ropa, talla_ropa from ropa_mascota";
        break;
    case'mostrar_tipo_mascota': 
        $sql_consulta= "SELECT nombre_tipo_mascota from tipo_mascota"; 
        break;
}
$q = $conexion->prepare($sql_consulta);
$resultado = $q->execute();

$resultado_consulta=$q->fetchAll();




for($i=0;$i<count($resultado_consulta);$i ++){     
    if($sql_consulta=="SELECT id_mascota, raza_mascota , edad_mascota, precio_mascota from mascota"){
      ?><strong>ID = </strong> <?php  echo $resultado_consulta[$i]["id_mascota"]; ?> <br> <?php
      ?><strong>RAZA = </strong> <?php  echo $resultado_consulta[$i]["raza_mascota"]; ?> <br> <?php
      ?><strong>EDAD = </strong> <?php echo $resultado_consulta[$i]["edad_mascota"]; ?> <br> <?php
      ?><strong>PRECIO = </strong> <?php  echo $resultado_consulta[$i]["precio_mascota"]; ?> <br> <br> <?php
     }
     if( $sql_consulta== "SELECT nombre_tipo_mascota from tipo_mascota"){
      ?><strong>NOMBRE DEL TIPO DE MASCOTA =
           </strong> <?php  echo $resultado_consulta[$i]["nombre_tipo_mascota"]; ?> <br> <br> <?php
     }
     if( $sql_consulta=="SELECT nombre_ropa, precio_ropa, talla_ropa from ropa_mascota"){
        ?><strong> TIPO ROPA =
        </strong> <?php  echo $resultado_consulta[$i]["nombre_ropa"]; ?> <br><?php
         ?><strong> PRECIO ROPA =
         </strong> <?php  echo $resultado_consulta[$i]["precio_ropa"]; ?> <br> <?php
          ?><strong> TALLA ROPA =
          </strong> <?php  echo $resultado_consulta[$i]["talla_ropa"]; ?> <br><br> <?php
     }
}


?>



</div>


<body>
</body>
</html>