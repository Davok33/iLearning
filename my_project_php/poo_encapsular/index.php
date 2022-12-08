<?php

    class MyClass{
        public $public = "Public";
        protected $protected = "Protected"; //las propiedades privadas y protegidas no podemos acceder directamente a su valor
        private $private = "Private";       //para acceder a ellas es con metodo, se le conoce como encapsulamiento
        //diferencia: protected solo se puede ser accedida desde la propia clase, pero tbn desde la clase que se extiende.
        //privada solo puede ser accedida desde la clase, no de nigun otro lugar, en este caso solo la clase MyClass


        function printHello(){
            echo $this -> public . "<br>";
            echo $this -> protected . "<br>";
            echo $this -> private . "<br>";
        }
    }

    $objeto = new MyClass;

    //echo $objeto -> public; //accedemos a public he imprime
    //echo "<br>";
    
    $objeto -> printHello();

    class MyClass2 extends MyClass{
        function printHello(){
            echo $this -> public . "<br>";
            echo $this -> protected . "<br>";
            echo $this -> private . "<br>";
        }

    }

    $objeto2 = new MyClass

    $objeto -> printHello();