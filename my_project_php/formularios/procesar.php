<?php

    $nombre = $_REQUEST['name'];                        //el metodo y lo que quiero traer se llama con $_   []   mas el metodo
    $edad = $_REQUEST['age'];                           //si no utilizamos POST o GET para recibir la info podemos utilizar REQUEST
    $sexo = $_REQUEST['sex'];     
    $roles = $_REQUEST['rols']; 
    $mensaje = $_REQUEST['mesage'];

    $imagenes = $_FILES['image'];                         //el envio de imagenes se hace con el metodo FILES
    $path = $_SERVER['DOCUMENT_ROOT'] . '/my_project_php/formularios/images' . '/' . $imagenes['name']; //seleccionamos primero la carpeta raiz y alli lo concatenamos para la nueva carpeta que se creo y despues el nombre de la imagen 
    
    
    echo "<p> El nombre del usuario es: $nombre </p>";
    echo "<p> La edad del usuario es: $edad </p>";
    echo "<p> El sexo del usuario es: $sexo </p>";
    echo "<p> Roles: </p>";

    echo "<ul>";                    
        foreach ($roles as $rol){           //almacenamos los roles en rol y muestra los roles seleecionados 
            echo "<li> $rol </li>";     
        }

    echo "</u>";

    //echo $path;
    //  var_dump($imagenes);
    move_uploaded_file($imagenes[tmp_name], $path); //movemos la imagen en este caso se encuentra en tmp_name a la variable $path que ya tiene la ruta donde se almacena
    
    echo "<p> Mensaje enviado: </p>";
    echo "<p>$mensaje</p>";




    
