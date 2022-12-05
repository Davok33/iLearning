<?php

    $cadena = "aeiou";  //indices la 'a' empieza en 0 ejm echo $cadena[2]
    $cadena2 = "Hola mundo soy yo";

    //strlen me dice los bits, ejemplo e es un bit pero é son dos bits-- echo strlen($cadena)
    //mb_strlen = cantidad de caracteres
    //indices de las letras: strops($cadena, 'i'); me retorna el indice donde se encuentra i de izquierda a derecha
    //strrpos lo mismo pero de derecha a izquierda 
    //ver cadena de char si esta una cadena str_contains($cadena2, 'mundo') ? "si se encuentra" : "no está"; --- si encuentra mundo imprime si se encuentra si no imprime no esta
    //buscar cadena y si la palabra se encuentra al inicio str_starts_with($cadena, 'hola') y si finaliza str_end_with()
    //

    $cadena3 = "prueba";
    $cadena4 = "prueba";
    //lo que se evalua es que sean iguales
    if(strcmp($cadena3, $cadena4) == 0){        //compara el total de la cadena 3 y la 4 si me devuelven 0 me imprimen
        echo "Las dos cadenas son iguales";
    }
    else{
        echo "no son iguales";      //si no devuelve 0 imprime esto
    }
//case strcasecmp mayuscula

    $cadena5 = "hola mundo";

    echo substr($cadena5, 1); //se le indica el indice desde cual quiere comience y si le pongo 1, 5 es desde el indice 1 al 5

    //str_replace("mundo", "david", $cadena5).. remplaza el mundo por david
    //minuscula strtolower
    //mayuscula strtoupper
    //solo la primera en mayus ucfirst y palabras es ucwords
    