<?php
include "./conexion.php";
//echo

$sql  = "CREATE TABLE `formulario_principal` (
  `id` int primary key auto_increment,
  `numero_cuenta` int(11) NOT NULL,
  `estado_cuenta` varchar(255) NOT NULL,
  `moneda` varchar(255) NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `monto_actual` int(11) NOT NULL,
  `companhia` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(11) NOT NULL
)";

$conexion->query($sql);

echo "Tablas creadasss....";