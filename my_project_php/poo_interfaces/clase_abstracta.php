<?php

abstract class ClaseAbstracta{                  //clases abstractas pueden desarrollar los metodos y podemos definir metodos protegidos
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this ->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta{

    protected function getValor(){
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separando = ' . ') //la lógica del metodo
    {
        return $prefijo . "Clase concreta";
    }

}

$clase1 = new ClaseConcreta;
$clase -> imprimir();
echo "<br>";
echo $clase1 -> valorPrefijo('David Cardona');