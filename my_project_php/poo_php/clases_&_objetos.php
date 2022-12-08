<?php

require_once('clases/Persona.php');    //importamos de clases la carpeta Persona de 


//se pasan los valores del metodo contructor tal cual como lo tiene, $nombre, $apellido, $edad
$persona1 = new Persona("DaVId", "Cardona", 34);            //generamos nuevo objeto, con la instancia de la clase Persona, "$nombre, $apellido, $edad"

// $persona1 -> setNombre("DaVId");       //no es necesario poner siempre set, con set controlamos los datos, aqui estamos transformando el $nombre en minuscula
// $persona1 -> apellido = "Cardona";
// $persona1 -> edad = 34;

//si creamos un nuevo objeto con las mismas propiedades del primero no repercute por que pertenece a otro objeto
$persona2 = new Persona("Juan Alejandro", "Cataño", 20);

// $persona2 -> nombre = "Juan Alejandro";
// $persona2 -> apellido = "Cataño";
// $persona2 -> edad = 20;

echo "El nombre de la persona 1 es: " . $persona1 ->getNombre();  //acá accedemos con el get que es para returnar lo que le dimos, siempre con ()
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2 ->getNombre();

//var_dump($persona1);

//echo $persona1;



#Herencias







