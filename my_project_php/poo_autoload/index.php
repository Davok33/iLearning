<?php

use Controllers\CourseControllers;  //con el simple hecho de indicarle que voy a utlizar esta clase 
use Models\Course;
    //especificamos que queremos utilizar 

//importar automaticamente
//funcion que detenta cada vez que nosotros llamamos una clase

spl_autoload_register(function($clase){ //le pasamos dentro una funcion y asu vez un parametro que este seria la clase
    // echo str_replace('\\', '/', $clase) . '.php'; //ponemos dos slash para que escape de caracter especial, reemplazamos el slash invertido por el normal
    require_once str_replace('\\', '/', $clase) . '.php';   //importamos la clase desde la carpeta Models
});

$course = new Course;
$course ->saludar();