<?php
//Este archivo contiene una funcion que va a tomar la uri y traer los datos cargados en la closure. para generar un enrutamiento dinamico. Closure es una funcion como argumento de otra funcion. en este caso es el tercer argumento de la funcion router
include_once("./router.php");

//Utilizamos un metodo GET para traer todos los productos.
router("GET", "/productos", function(){
    include_once("./models/productos.php");
    header("Content-type:application/json");
        echo mostrar_productos();

});
//Tambien utilizamos un metodo get para traer solo un producto por el id
router("GET","/producto/:id", function($id){
    include_once("./models/producto.php");
    echo mostrar_producto($id);

});
//En este caso utilizamos un metodo POST para enviar informacion que se actualizara en la base de datos. 
router("POST","/producto", function(){
    include_once("./models/producto.php");
    // En el caso de un metodo POST debemos hacer una actualizacion del registro. Vendran datos por metodo POST con los cuales haremos un UPDATE en la base de datos. 
    //El objeto $datos almacena la info que viene por post y la manda como argumento en la funcion modificar_producto()
    $datos = new stdClass();
    $datos->id = 1;
    $datos->nombre = $_POST['nombre'];
    $datos->cantidad = $_POST['cantidad'];
    echo modificar_producto($datos);
});