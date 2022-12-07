<?php

$datos = [
    [
    'nombre' => 'David Cardona',
    'email' => 'david@gmail.com',
    'telefono' => '3323423',        //separar por coma
    'direccion' => [
        'pais' => 'España', 
        'ciudad' => 'Tudela'
    ]
    ],
    [
    'nombre' => 'Juan Alejandro',
    'email' => 'juan@gmail.com',
    'telefono' => '3323423'
    ],
    [
    'nombre' => 'Mariana',
    'email' => 'mariana@gmail.com',
    'telefono' => '3323423'
    ],
];
//poner varios arrays dentro de otro 

// echo $datos[0]['nombre'], '<br>';  //imprimo el nombre del primer usuario, ingrese al indice 0 que es el primero
// echo $datos[0]['direccion']['ciudad'], '<br>';

foreach ($datos as $item) {     //iterar con el array datos y lo almacene en una variable de $item
    echo $item['nombre'] . '<br>';  //concatenamos con salto de linea
    echo $item['email'] . '<br>';
    echo $item['telefono'] . '<br>';

    echo "<hr>"; //linea de separacion
    
}