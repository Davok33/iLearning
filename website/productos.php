<?php include("template/header.php"); ?>

<?php 
include("admin/config/bbdd.php"); //conexion a la base de datos

$sentenciaSQL = $conexion ->prepare("SELECT * FROM books");
$sentenciaSQL -> execute();
$bookList = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC);    //consulta la lista de libros disponibles en la base de datos
?>

<?php foreach($bookList as $book){ ?> <!-- foreach leera todos los registros y los va a traducir como $book -->
<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $book['image'];?>" alt=""> <!-- la imagen de los libros, ponemos la ruta donde  -->
<div class="card-body">
        <h4 class="card-title"><?php echo $book['name'];?> </h4> <!-- nombre del limbro -->
        <a name="" id="" class="btn btn-primary" href="https://es.babelio.com/liste/423/Historias-de-dragones" role="button"> Ver más </a>
</div>
</div>
</div>
<?php }?>
<!--  <div class="col-md-3">
   
<div class="card">
    <img class="card-img-top" src="https://i.etsystatic.com/6707552/r/il/9ff6b3/3583286131/il_570xN.3583286131_k70v.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Libros de Dragones</h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button"> Ver más </a>
        </div>
    </div>
</div>

<div class="col-md-3">
    
<div class="card">
    <img class="card-img-top" src="https://i.etsystatic.com/6707552/r/il/9ff6b3/3583286131/il_570xN.3583286131_k70v.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Libros de Dragones</h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button"> Ver más </a>
        </div>
    </div>
</div>

<div class="col-md-3">
    
<div class="card">
    <img class="card-img-top" src="https://i.etsystatic.com/6707552/r/il/9ff6b3/3583286131/il_570xN.3583286131_k70v.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Libros de Dragones</h4>
        <a name="" id="" class="btn btn-primary" href="#" role="button"> Ver más </a>
        </div>
    </div>
</div> -->




<?php include("template/footer.php"); ?>