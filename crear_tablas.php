<?php
include "./conexion.php";
//echo

$sql  = "CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL
)";

$conexion->query($sql);

echo "Tablas creadasss....";

$sql  = 'INSERT INTO `datos` (`id`, `usuario`, `correo`, `contra`) VALUES
(1, "angie", "angie@gmail.com", "$2y$10$tO324zLgUqLq3ax19G.qVeetL6yBHvmkpVsOGGIBwJ2vQLK8arfWK"),
(2, "roberto", "roberto@gmail.com", "$2y$10$bmvbUaGmtjrahjIjlJgdjeDMjdRWTOy6S0rlhWIV30Bqi7pMes01q"),
(3, "fabricio", "fabricio@gmail.com", "$2y$10$tQHVvOrs2jRIh3rEnXhsJeu0eOf7SH5ImUU8dKvt2c6fVu.RlOZcG"),
(4, "juan", "juan@gmail.com", "$2y$10$bx9H/njUMZ8zd9fwDyotReegHBJNtVs8Fv6GSMXKTPRh9bLC/XbW6"),
(5, "santi", "santi@gmail.com", "$2y$10$HJm6JbXDYQ.XsxaxfSWpBupfi9y6LrsShP7A4xNF4t5U/AoP0.Zw2"),
(6, "hola", "21213321@gmail.com", "$2y$10$hfRcJL3j2fm0dkVuefYPMuD/nPvUJp6.h3zMs7h0c74smWhjwMD8S")"
';

$conexion->query($sql);

echo "Datos insertadoss....";
