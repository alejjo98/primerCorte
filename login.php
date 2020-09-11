<?php 
$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$nombre_ingresado= $_REQUEST["nombre_administrador_ingresado"];
$contraseña_ingresada = $_REQUEST["contraseña_administrador_ingresado"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql ="SELECT id_administrador, contraseña_administrador,nombre_administrador from administrador";

$q =$conexion->prepare($sql);
$resultado =$q->execute();

$administrador=$q->fetchAll();

if($administrador[0]["nombre_administrador"] == $nombre_ingresado){    
if($administrador[0]["contraseña_administrador"]!=$contraseña_ingresada){
    echo "los datos ingresados no se pueden validar";
}
else{ ?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_login.css">
    <title>INICIO</title>
</head>
<body>
</body>
</html><br></div>
<div name="div_insert" class="div_insert"> 
<strong> SELECCIONE LA ACCION A REALIZAR </strong> <br> <br>
    <strong>INSERTAR DATOS</strong><br>

<form action="insert.php" name="form_insert" method="POST" >
<input type="radio" name="insert" value="insertar_mascota">
<label for="insertar_mascota">insertar mascota</label><br>
<input type="radio" name="insert" value="insertar_alimento">
<label for="insertar_alimento">insertar alimento</label><br>
<input type="radio" name="insert" value="insertar_ropa">
<label for="insertar_ropa">insertar ropa</label><br>
<input type="radio" name="insert" value="insertar_tipo_mascota">
<label for="insertar_tipo_mascota">insertar tipo mascota</label><br>
<input type="submit" value="insertar">
</form>
</div> <br>
<div name="div_consulta" class="div_consulta"><br>
    <strong> REALIZAR CONSULTAS </strong><br> 

<form action="consulta.php" name="form_consultas" method="POST">
    <input type="radio"name="consulta" value ="mostrar_mascotas">
    <label for="mostrar_mascotas">mostrar mascotas</label><br>
    <input type="radio"name="consulta" value ="mostrar_alimentos">
    <label for="mostrar_alimentos">mostrar alimentos</label><br>
    <input type="radio"name="consulta" value ="mostrar_ropa">
    <label for="mostrar_ropa">mostrar ropa</label>    <br>
    <input type="radio"name="consulta" value ="mostrar_tipo_mascota">
    <label for="mostrar_tipo_mascota">mostrar tipo mascota</label><br>
    <input type="submit" value="consultar">
</form>
</div>




<?php


}
}
else{
    echo "los datos ingresados no se pueden validar";
}
?>