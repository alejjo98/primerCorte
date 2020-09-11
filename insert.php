


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_insertar_alimentos.css">
    <title>INSERTAR</title>
</head>
<body>
<?php

$dbhost= "localhost";
$dbname= "tienda_mascotas_bd";
$dbuser="root";
$dbpass="";

$insert = $_REQUEST["insert"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

switch($insert){
    case'insertar_mascota': 
        ?> <form action="insertar_mascota.php" method="POST">
        <strong>Ingrese la raza de la mascota = </strong>  <input type="text" name="raza_mascota"><br>
        <strong>Ingrese la edad de la mascota = </strong> <input type="text" name="edad_mascota" ><br>
        <label for="sexo_mascota">Seleccione el sexo de la mascota=</label>
        <select name="sexo_mascota">
            <option value="macho">MACHO</option>
            <option value="hembra">HEMBRA</option>
        </select><br>
        <strong> Ingresar el precio de la mascota =  </strong> <input type="text" name="precio_mascota"><br>
        <label for="id_tipo_mascota"><strong> Seleccione el tipo de mascota =</strong> </label>
        <select name="id_tipo_mascota">
            <option value="1">PERRO</option>
            <option value="2">GATO</option>
            <option value="3">PEZ</option>
            <option value="4">TIBURON</option>
        </select><br>
       
        <input type="submit" value="ingresar mascota">
        </form>
        <?php ;
    break;
    case 'insertar_alimento':
           ?> <form action="insertar_alimento.php" method="POST">
        <strong>Ingrese el nombre del alimento = </strong>  <input type="text" name="nombre_alimento"><br>
        <label for="mascota_alimento"><strong> Seleccione el tipo de mascota respectivo al alimento=</strong> </label>
        <select name="mascota_alimento">
            <option value="1">PERRO</option>
            <option value="2">GATO</option>
            <option value="3">PEZ</option>
            <option value="4">TIBURON</option>
        </select><br>
            <strong> Ingrese el precio del alimento =  </strong> <input type="text" name="precio_alimento"><br>
       <input type="submit" value="ingresar alimento">
        </form>
        <?php ;
    
    break;
    case 'insertar_ropa':        
        ?> <form action="insertar_ropa.php" method="POST">
        <strong>Ingrese el nombre de la ropa= </strong>  <input type="text" name="nombre_ropa"><br>
        <strong> Ingrese la talla de la ropa = </strong> <input type="text" name="talla_ropa" ><br>
        <strong> Ingrese el precio de la ropa =  </strong> <input type="text" name="precio_ropa"><br>
       <input type="submit" value="ingresar ropa">
        </form>
        <?php ;
    break;
    case'insertar_tipo_mascota':
        ?> <form action="insertar_tipo_mascota.php" method="POST">
        <strong>Ingrese el nombre del tipo de mascota= </strong>  <input type="text" name="tipo_mascota"><br>
        <input type="submit" value="ingresar tipo mascota">
        </form>
        <?php ;
    break;






}

?>


    
</body>
</html>