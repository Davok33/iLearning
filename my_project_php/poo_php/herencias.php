<?php

require_once('clases/Persona.php'); 

 $colombiano = new Colombiano;

 $colombiano -> setNombre('David');
 $colombiano -> setApellidos('Cataño', 'Cardona');
 echo $español -> getApellido();    //imprime 'los apellidos son buenos'

//var_dump($colombiano);  vemos los valores 

 $español = new Español;

 $español -> setApellidos("Hernandez", "Soler");

 //echo $español -> getApellido();

//var_dump($colombiano);