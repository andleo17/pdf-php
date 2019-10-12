<?php
require_once '../vendor/autoload.php';
$objProducto = new Producto();
$productos = $objProducto -> listado();
include '../view/lista.php';