<?php
//clases con metodos estaticos: php podemos declarar funciones de una clase que no utilizen metodos o propiedades de la misma

class Humano{
    public static $nombre = "David C";  //propiedad le ponemos el static

    public static function saludar(){ //definimos que es metodo estatico con static
        echo "hola mundo";
    }

    public function saludoPersonalizado(){
        echo "Hola " . self::$nombre;   //con self:: php interpreta que se hae refencia a la propiedad de la clase Humano
    }
}

//Humano::saludar();  //ejecutamos saludar indicandole la clase y el metodo con 2 puntos seguidos
//echo Humano::$nombre; //asi ejecutamos la propiedad nombre sin necesidad de instanciar objeto

class Colombiano extends Humano{
    public function saludoColombiano(){
        echo "Hola desde Colombia " . parent::$nombre; //con parent hacemos referencia a la clase Humano ya que self es a la misma clase 
    }
}


$humano = new Humano;
$humano -> saludoPersonalizado();