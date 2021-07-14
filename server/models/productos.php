<?php
function mostrar_productos() {
    return json_encode([
        [
            "nombre"=> "Coca cola", 
            "precio" => 50, 
            "Cantidad"=>10
        ],
        [
            "nombre"=> "Coca cola", 
            "precio" => 50, 
            "Cantidad"=>5 
        ]
    ]    
    );

}
