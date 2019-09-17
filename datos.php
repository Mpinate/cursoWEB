<html>

<head>
    <meta charset="UTF-8">
</head>
<body>
<?php

$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$pass = $_REQUEST["clave"];


// echo "<html><head><meta charset='UTF-8'></head><body>";
echo "<p><b>Bienvenido: $nombre $apellido y tu clave es: $pass </b></p>";
// echo "</body>";

?>
</body>