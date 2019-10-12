<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listado de productos</title>
</head>
<body class="container">
    <div class="row">
        <div class="col">
            <h1>Listado de productos</h1>
            <ul>
                <?php
                foreach($productos as $producto) {
                    echo "<li>{$producto['id_producto']} - {$producto['nombre']}</li>";
                }
                ?>
            </ul>
            <hr>
            <a href="pdf.php">Convertir esta página a PDF.</a>
        </div>
    </div>
</body>
</html>