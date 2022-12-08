<?php

    class Persona{
        public $nombre;

        public function setNombre($nombre){
            $this -> nombre = strtolower($nombre);

        }

        public function getNombre(){
            return ucwords($this -> nombre);
        }

    }

    trait Latinoamericano{                  //una clase solo puede heredar de una unica y sola clase padre --- php no deja
        public function saludoLatino(){     //herencia multiple, los definimos como trait en vez de class
            echo "esto es un saludo desde latinoamerica";
        }

    }

    trait Europeo{
        public function saludoEurope(){
            echo "esto es un saludo europeo";
        }
    }

    class Colombiano extends Persona{       //con use utilizamos esos traits, los trait no se pueden instanciar ejm $latinoamericano = new Latinoamericano, error no se puede instanciar
        use Latinoamericano;
    }                                   
    //los trait tbn soobrescriben cualquier metodo de la clase padre ejm
    /* public function saludo(){ ----ponemos el metodo en la clase persona
        echo "hola";
    }

    trait Latinoamericano{
        public function saludo(){       ---- se imprime este 
            echo "hola mundo";
        }
    }
    este trait soobrescribe el metodo de la clase padre
    */
    class Español extends Persona{
        use Europeo;
    }

    $colombiano = new Colombiano;

    $colombiano -> saludoLatino();



    trait A{
        public function saludo(){       //si el metodo fuera protected
            echo "hola mundo trait A";
        }

    }

    // trait B{
    //     public function saludo(){
    //         echo "hola mundo trait B";
    //     }

    // }

    class Traits extends Persona{

        use A;      //con use A{ saludo as publi; } cambiamos su visibilidad a publica si fuera protected
        // use A, B{
        //     A::saludo insteadOf B;  //asi le indicamos al metodo que trait va a utilizar
        // }

    }

    $traits = new Traits;

    $traits ->saludo();         //si simprimos entran en conflicto porque ambos traits llevan el mismo metodo