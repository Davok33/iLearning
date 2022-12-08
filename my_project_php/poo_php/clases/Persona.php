<?php

//con set y get la function puede llevar el mismo nombre
class Persona{
    public $nombre, $edad;
    public $apellido1, $apellido2;

    /*             --- recibimos el nombre, apellido y edad
    public function __construct($nombre, $apellido, $edad){     //todo lo que escribamos acá se va a ejecutar a la hora de instanciar el objeto de index $persona1  
        $this -> nombre = strtolower($nombre); //el nombre siempre sera en minuscula
        $this -> apellido = strtolower($apellido);  //apellido siempre sera en minuscula
        $this -> edad = strtolower($edad);
        
    }*/

    public function setNombre($nombre){        //controlamos la informacion del nombre, en este caso guardar todo en minuscula y que el user no pueda controlarlo
            $this -> nombre = strtolower($nombre);                  //lo que le indicamos es que pasamos por parametro $nombre, que lo tranforme en minuscula y que despues pase ese valor a propiedad
    }

    public function getNombre(){   //como nos devuelve los datos
            return ucwords($this -> nombre);    //ucwords mantiene las primeras letras en mayusculas despues de un espacio
    }

    public function setApellidos($apellido1, $apellido2){  //nuevo metodo con los parametros apellido 1 y 2
            $this -> apellido1 = $apellido1;        //almaceno las variables
            $this -> apellido2 = $apellido2;
    }

    public function getApellido(){
        return $this -> apellido1 . " " . $this -> apellido2; //que me returne los dos apellidos y los concatene
    }
}


class Colombiano extends Persona{               //hacemos que esta clases se hereden de la clase padre que es Persona
    public $departamento, $ciudad;   

    public function setApellidos($apellido1, $apellido2){

        parent::setApellidos($apellido1, $apellido2);    //extendemos el metodo de setApellidos del padre, -- lo mismo que copiar y pegar
    
        echo "los apellidos son buenos";
    }

}

class Español extends Persona{
    public $provincia, $ciudad;

    public function setApellidos($apellido1, $apellido2){  //soobrescrimos y nos envia los apellidos a la inversa
        $this -> apellido1 = $apellido2;
        $this -> apellido2 = $apellido1;          //cada que hagamos referencia al getApellido de la clase Español hace referencia a este 
    }
}