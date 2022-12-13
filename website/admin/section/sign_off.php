<?php
session_start(); //si vamos a trabajar con sesiones siempre se inicializa así
session_destroy(); //'destruye' todas las sesiones 
header('Location:../index.php'); //redirecciona a index.php admin

?>