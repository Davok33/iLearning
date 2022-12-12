<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
            
      <!-- creamos variable que nos redirecciones a http:// y utilizar una variable $_SERVER que me da info del host donde estoy, (local/host)-->
        <?php $url="http://". $_SERVER['HTTP_HOST']. "/website" ?>

        <!-- b4-nav-minimal-a   crea enlace minimo--> 
   <nav class="navbar navbar-expand navbar-light bg-light">
       <div class="nav navbar-nav">
           <a class="nav-item nav-link active" href="#">Admin website<span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/admin/home.php">Home</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/products.php">Books</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/sign_off.php">Sign off</a>
           <a class="nav-item nav-link" href="<?php echo $url;?>">Watch website</a>
       </div>
   </nav>

 <!-- agregamos contenedor de boostrap-->
    <div class="container"> 
    </br> 
        <div class="row">