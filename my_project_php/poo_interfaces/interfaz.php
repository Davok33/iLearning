<?php

interface iTemplate     //la definimos asi
{
    public function setVariable();      //estas interfaz la consrtuyen los analistas del proyecto
    public function getHtml();  //siempre que se modifique acá tbn lo deben de hacer los metodos
}

class Template implements iTemplate
{
    public function setVariable(){      //se declaran en las clases

    }
    public function getHtml(){

    }
}

//lo que hacen las interfaces es que por lo menos existan los metodos declarados en la interface


interface a {
    public function prueba1();

}

interface b {
    public function prueba2();

}
interface c extends a, b {
    public function prueba3();

}

class d implements c{
    public function prueba1(){

    }
    public function prueba2(){
        
    }
    public function prueba3(){
        
    }
}
