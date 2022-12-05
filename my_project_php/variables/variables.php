<?php       

    // #global
    // $a = 5;

    // function test(){

    //     global $a;      //aqui llamo a la variable de afuera ya que si la declaramos dentro de la función solo toma esa
    //     $a = 10;    //almacenamos el valor
    // }
    // test();
    // echo $a;    //imprime  10 que es el nuevo valor

    #por referencia
    $a = 5;
    $b = 10;

    function test(&$n){     //& en el parametro dice que le estamos pasando toda la variable global
                            //NOTA: si le pasamos los valores sin el & solo toma la variable y ya
        $n += 10;       

    }
    test($a);
    test($b);
    echo $a . "<br>"; 
    echo $b;  