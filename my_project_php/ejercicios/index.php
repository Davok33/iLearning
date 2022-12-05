<?php
    
    $base = 2;
    $exp = 5;

    $resultado = 1;

    $i = 1;

    while($i <= $exp){  //se repite el bucle total veces que $i sea igual a $exp
        $resultado = $resultado * $base;    //el valor de resultado, se reemplaze por el antiguo valor de resultado * por la base 
        $i++;
    }
    echo "el valor de $base elevado a la $exp es: $resultado";  