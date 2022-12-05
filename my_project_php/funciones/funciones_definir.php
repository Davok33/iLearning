<?php

    // $resultado = 1;

    // for($i = 1; $i <= 9; $i++){
    //     $resultado = $resultado * $i;       //que la variable $resultado lo multiplique por la variable $i cada vez que hace el bucle
    // }
    // echo "el factor de 9 es: " . $resultado;


    function factorial(){
        $resultado = 1;

        for($i = 1; $i <= 9; $i++){
            $resultado = $resultado * $i;       //lo mismo que el primer ejemplo solo que definimos una funcion.
        }
        echo "el factor de 9 es: " . $resultado;
    }
    factorial();


    #con parametros
    function factorial($n){     //se pone la variable del parametro 
        $resultado = 1;

        for($i = 1; $i <= $n; $i++){        //se cambia al nombre del parametro que se está pasando
            $resultado = $resultado * $i;       
        }

        return $resultado;      //retornar el resulado

        // echo "el factor de $n es: $resultado";
    }
    $resultado = factorial(2);       //se pasa el parametro y tambien se almacena $resultado en funcion
    echo el factorial de 2 es $resultado;