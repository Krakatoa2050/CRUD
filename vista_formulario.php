<?php
header("Content-type: application/json");
include("conexion.php");

$tabla = [];
$sql = 'SELECT * FROM formulario_principal';
$res = $conexion->query($sql);
while ($file = $res->fetch_assoc()) {
    $tabla[] = $file;
}

echo json_encode($tabla);
?>
