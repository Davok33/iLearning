<?php

    #list
    $array = [1, 2, 3];

    list($a, $b, $c) = $array;   //php funcion list nos deja almacenar en cada una de las variables que asignemos los elementos del array al cual accedemos 

    echo $c;  //imprime 3

    #range
    $array2 = range(10, 20);       //completa los numeros del 10 al 20

    var_dump($array2); //nos muestra los numeros que imprime y cual es su indice

    #count
    $array3 = range(10, 20);

    echo count($array3);  //count nos permite imprimir el total de elementos del array

    #in_array   
    //nos permite buscar en un array un dato, indicandole si es verdadero o falso -- condicional
    $array4 = ['David', 'Juan', 'Mariana', 'Nico'];

    if (in_array('Nico', $array4)){     
        echo "Si está Nicolas";
    }else{
        echo "El nombre no está en el array";
    }

    #unset --  borrar   NOTA importante!! poner siempre el indice que se va a borrar si no se borra todo el array.
    $array5 = ['David', 'Juan', 'Mariana', 'Nico'];

    unset($array5[2]);  //se borra el indice 2, 'Mariana'

    if (in_array('Mariana', $array5)){      
        echo "Si está Mariana"; 
    }else{  
        echo "El nombre no está en el array";
    }
    //en este caso como el valor fue borrado y no esta, imprime la condicion de false

    #