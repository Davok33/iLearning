<?php

    $array = [33, 22, 90];

    $array[4] = 17;     //agregamos al indice 4 el 17, php asigna tbn el indice automaticamente si dejamos este vacio

    echo $array[4];

    //php deja almacenar diferentes tipos de datos en un array $array[10, "david", 21.1, false]
    //utilizar indices tipo string en un array

    $array2 = [
        'nombre' => 'David Cardona',
        'email' => 'david@gmail.com',
        'telefono' => '3323423'
    ];
    echo $array2['telefono'];       //imprime telefono
    