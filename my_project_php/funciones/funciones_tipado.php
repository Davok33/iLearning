<?php

    declare(strict_types =1);  //esto hace que no transforme el flotante sino que de error

    //tipos de datos: int, float, string, bool, array, object, null

    function sumarNumero(int $num1, int $num2): int | float //aqui especifico el tipo de dato que deseo recibir entero o flotante
    {     //le damos el dato que el valor tiene que ser entero 'int' php transforma el valor de flotante a entero
        return $num1 + $num2;   //si le pongo ($num1 + $num2)/2 me da error ya que es un valor flotante tambien

    }
    $resultado = sumarNumero(3, 4);
    echo $resultado;