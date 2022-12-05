<?php

// function valoracion($nombre, $rating = 3){
//     echo "El $nombre tiene un rating de $rating";
// }
// valoracion("Curso de PHP tomado por David");    //por defecto toma el valor de rating que es 3
//                                                 //valoracion("Curso de PHP tomado por David", 4); toma el valor del parametro "4"


function concatenar(...$palabras){  
                                        
    $resultado = "";    //conforme vayan apareciendo los registros se vayan concatenando en la variable $resultado
                                                    //ponemos los 3 puntos y poner el nombre de la variable, los 3 puntos es para juntar todos 
    foreach($palabras as $palabra){ //recorrer el array $palabras y que encuentre nuevos registros almacenar en una variable llamada $palabra
        $resultado = $resultado . $palabra . " ";   //almacena en la antigua variable la nueva concatenacion seguido de un espacio.. se puede reemplazar tbn por .= que es concatenar
    }                                        //los nombres de las variables que le pasemos a la funcion y lo va a juntar todo dentro dentro de un array
                                        //y cuando se tenga ese array, ir concatenando cada 1 de las variables del mismo
echo $resultado;    //imprime resultado de la funcion

}
concatenar("con", "todos los", "animos", "para", "el curso");
