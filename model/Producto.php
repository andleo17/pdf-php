<?php

class Producto {

    public function listado() {
        $productos = Array(
            [
                "id_producto" => 1,
                "nombre" => "Yogurt Fresa 1 LT"
            ],
            [
                "id_producto" => 2,
                "nombre" => "Pavo San Fernando x 1 Kg"
            ],
            [
                "id_producto" => 3,
                "nombre" => "Caja de Doña Pepa x 50 U"
            ]
        );

        return $productos;
    }
}
