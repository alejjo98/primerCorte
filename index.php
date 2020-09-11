<?php 

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql ="SELECT id_administrador, contraseña_administrador,nombre_administrador from administrador";

$q =$conexion->prepare($sql);
$resultado =$q->execute();

$administrador=$q->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="estli_login.css" >
    <title>ingresar al sitio web</title>
</head>
<body>
<div  class="div_login">
<strong>INGRESAR DATOS</strong> <br>
<form action="login.php" method="POST" >

NOMBRE DEL USUARIO <br> <input type="text"name="nombre_administrador_ingresado" ><br>
CONTRASEÑA USUARIO <br> <input type="text" name="contraseña_administrador_ingresado"><br>
<input type="submit" name="ingresar">
    


</div>
</form>
</body>
</html>