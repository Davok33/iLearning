<?php

    #SWITCH

    $a = 3;

    switch($a){
        case '1':
            echo "Lunes <br>"; 
            break;

        case '2':
            echo "Martes <br>"; 
            break;

        case '3':
            echo "Miercoles <br>"; 
            break;

        case '4':
            echo "Jueves <br>"; 
            break;

        case '5':
            echo "Viernes <br>"; 
            break;

        case '6':
             "Sabado <br>"; 
            break;       

        case '7':
            echo "Domingo <br>"; 
            break;

        default:
            echo "el valor de la variable a no es un valor valido";     //si no esta en el rango de la variable
            break;
    } 



       #MATCH

        $b = 2;

        echo match($b){
            1 => "Lunes",    //dependiendo del valor de la variable se imprime,  (es la misma estructura del switch, tambien puedo poner default)
            2 => "Martes",
            3 => "Miercoles",
            4 => "Jueves",
            5 => "Viernes",
            6 => "Sabado",
            7 => "Domingo",
            default => "El valor no es legible"
        };                  