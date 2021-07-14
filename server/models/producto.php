<?php
//Todos los modelos son consultas a la base de datos para crear actualizar leer y elimnar informacion
//Mostrar seria nuestro leer (SELECT)
function mostrar_producto($id) {
    //Esta creacion del producto deben reemplazarla con una consulta a la base de datos y traer la correspondiente segun el id
    $producto = new stdClass();
    $producto->id = $id;
    $producto->nombre = "Coca cola";
    $producto->cantidad = 10;

    return json_encode($producto);
}
//Modificar seria nuestro UPDATE
function modificar_producto($datos) {
    $producto = new stdClass();
    $producto->id = $datos->id;
    $producto->nombre = $datos->nombre;
    $producto->cantidad = $datos->cantidad;

    return json_encode($producto);
}

// Falta crear las funciones para eliminar y crear un nuevo registro