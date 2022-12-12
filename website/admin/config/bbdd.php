<?php
    $host="localhost";  //host donde nos conectamos
    $bd="sitio";    //el nombre del sitio
    $user="root"; //por default es este
    $password=""; //vacio
    
    //try catch 
    try {
        $conexion = new PDO("mysql:host=$host; dbname=$bd", $user, $password);
        //if($conexion){
           // echo "Conectado a sistema. <br>"; //se valida e imprime que si se conectó con la bbdd
        //}
    } catch (Exception $ex) {      //en caso dado que exista error, nos muestra con getMessage()
        echo $ex ->getMessage();    
    }
?>