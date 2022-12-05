<?php

    $fila = 10;

    for ($i = 0; $i <= $fila; $i++){
        for($j = 1; $j <= $i; $j++){    //este for corresponde a la cantidad de asteriscos por linea
            echo "*";
        }
        echo "<br>";          // y este la cantidad por fila dependiendo de la linea
    }


    #for each

    $nombre = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

    // echo $nombre[0] . "<br>"; imprime victor

    foreach($nombre as $nombres){       //almacena los nombres en la variable $nombres
        echo $nombres . "<br>";          //imprime todo los nombres debido que estan almacenado en la variable y concatena ' . ' salto de linea
    }

    foreach($nombre as $linea => $nombres){       
        echo $nombres . " se encontraba en la linea $linea <br>";          
    }


    #break

    for($k = 0; $k <= 20; $k++){        //imprime los numeros del 0 al 20
        if($k == 18){
            break;                      //esta condicion y el break hace que cuando llegue al 18 se salga del bucle
        }
        echo $k . "<br>";
    }
    echo "saliste del bucle";

    #continue

    for($k = 0; $k <= 20; $k++){        //imprime los numeros del 0 al 20
        if($k == 11 || $k ==13){
            continue;                      //el continue hace que cuando llegue al 11 o al 13 se salte y no se ejecute esa interaccion sino que pase a la siguiente
        }
        echo $k . "<br>";
    }
    echo "saliste del bucle";

    #exit -- die
        //estas sentencias hace que termine del todo el programa y se sale del todo