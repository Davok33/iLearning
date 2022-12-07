<?php

//con set y get la function puede llevar el mismo nombre
class Persona{
    public $nombre, $apellido, $edad;

    //contructores              --- recibimos el nombre, apellido y edad
    public function __construct($nombre, $apellido, $edad){     //todo lo que escribamos acá se va a ejecutar a la hora de instanciar el objeto de index $persona1  
        $this -> nombre = strtolower($nombre); 
        $this -> apellido = strtolower($apellido);
        $this -> edad = strtolower($edad);
        
    }



    public function setNombre($nombre){        //controlamos la informacion del nombre, en este caso guardar todo en minuscula y que el user no pueda controlarlo
            $this -> nombre = strtolower($nombre);                  //lo que le indicamos es que pasamos por parametro $nombre, que lo tranforme en minuscula y que despues pase ese valor a propiedad
    }

    public function getNombre(){   //como nos devuelve los datos
            return ucwords($this -> nombre);    //ucwords mantiene las primeras letras en mayusculas despues de un espacio
    }
}