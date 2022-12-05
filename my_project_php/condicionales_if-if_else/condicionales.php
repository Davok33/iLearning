<?php

    $a = 10;
    $b = 9;

    if($a > $b){
        echo "El valor de a es mayor que b";
    }
    elseif($a < $b) {
        echo "el valor de a es menor que b";
    }
    else{
        echo "El valor a es igual que b";
    }
    $valor = $a > $b ? 'mayor' : 'menor';   #la interrogacion es lo que quiere que se imprima si se cumple la condicion, : si es menor
                                            #si quiero poner otra condicion despues de los : poner () ejm : ($a < $b ? 'mayor' : 'menor') en caso de q se cumpla imprima mayor sino menor
    echo $valor;


    
    $c = 4;
     
    if($c == 1){
        echo "Lunes <br>"; 
    }elseif($c == 2){
        echo "Martes <br>"; 
    }elseif($c == 3){
        echo "Miercoles <br>"; 
    }elseif($c == 4){
        echo "Jueves <br>"; 
    }elseif($c == 5){
        echo "Viernes <br>"; 
    }elseif($c == 6){
        echo "Sabado <br>"; 
    }elseif($c == 7){
        echo "Domingo <br>"; 
    };
