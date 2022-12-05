<?php           

    $i = 1;

    while($i <= 10){
        echo "Hola mundo $i <br>";
        $i++;
    }

    echo "saliste del bucle";

    #do while

        $j = 8;     //se ejecuta las veces que sean necesarias para terminar la condicion de while
    do{
        echo "Hola mundo <br>";     //que se imprima lo que quiero
        $j++;
    }while ($j < 10);               //primero se ejecuta la sentencia, despues revisa la condicion, si la condicion se cumple se vuelve a ejecutar la sentencia

    echo "saliste del bucle";