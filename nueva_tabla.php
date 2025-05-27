<?php
include "./conexion.php";
//echo

/* $sql  = "CREATE TABLE `formulario_principal` (
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

$conexion->query($sql); */

echo "Tablas creadasss....";

$sql  =  "INSERT INTO `formulario_principal` (`id`, `numero_cuenta`, `estado_cuenta`, `moneda`, `fecha_apertura`, `fecha_vencimiento`, `monto_actual`, `companhia`, `direccion`, `telefono`) VALUES
(12, 0, 'activo', 'sdfsd', '0000-00-00', '0000-00-00', 0, 'sdfsdf', 'sdfsdf', 0),
(13, 0, '', '', '0000-00-00', '0000-00-00', 0, '', '', 0)";

$conexion->query($sql);

echo "datos creadosss....";

