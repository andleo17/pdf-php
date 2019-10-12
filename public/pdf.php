<?php
require_once '../vendor/autoload.php';

ob_start();

$objProducto = new Producto();
$productos = $objProducto -> listado();
include '../view/lista.php';

$pdf = new Dompdf\Dompdf();
$pdf -> loadHtml(ob_get_clean());
$pdf -> render();
$pdf -> stream();