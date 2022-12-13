<?php include('../template/header.php');?>
<?php 
//print_r($_POST);
//print_r($_FILES);
//condicion ternaria, si se valida la condicion o no se cumple

$txtID=(isset($_POST['txtID'])) ? $_POST['txtID'] : "";     //isset nos indica si hay datos, //Si hay datos en txt esta va a valer txtID si no está vacío
$txtName=(isset($_POST['txtName'])) ? $_POST['txtName'] : "";
$txtImage=(isset($_FILES['image']['name'])) ? $_FILES['image']['name'] : "";
$action=(isset($_POST['action'])) ? $_POST['action'] : "";

include('../config/bbdd.php');

// echo $txtID ."<br>";
// echo $txtName ."<br>";
// echo $txtImage;
// echo $action ."<br>";                //para saber si nos llega la info

//conectarse a la bbdd





switch($action){

    case"Add":

        //INSERT INTO `books` (`id`, `name`, `image`) VALUES (NULL, 'Books of Dragons', 'dragon.jpg');
        $sentenciaSQL = $conexion -> prepare("INSERT INTO books (name, image) VALUES (:name, :image);"); //ya tenemos la sentencia de ejecucion
        $sentenciaSQL -> bindParam(':name', $txtName);  //pasamos los parametros de lo que vamos a almacenar
        
        $date = new DateTime();
        $fileName = ($txtImage != "") ? $date -> getTimestamp(). "_". $_FILES['txtImage']['name']:"image.jpg"; //si hay una imagen tomamos tbn la hora
        
        $tmpImage = $_FILES['txtImage']['tmp_name'];    //esa imagen la almacenamos imagenes temporales
        
        if($tmpImage != ""){
            move_uploaded_file($tmpImage, "../../img/" . $fileName);  //si la imagen esta vacia, muevela a la carpeta img + nombre del archivo
        }       //NOTA: no sube las imagenes a dicha carpeta
        
        $sentenciaSQL -> bindParam(':image', $fileName);
        $sentenciaSQL -> execute(); //aquí la ejecutamos
        //echo "Presionado botón agregar";  Acá hacemos una insersion, ahora vamos a redireccionar a productos cuando se ejecute con:
        header("Location:productos.php");
        break;
    case"Modify":
        $sentenciaSQL = $conexion -> prepare("UPDATE books SET name=:name WHERE id = :id");
        $sentenciaSQL -> bindParam(':name', $txtName);
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();

        if($txtImage != ""){

            $date = new DateTime();
            $fileName = ($txtImage != "") ? $date -> getTimestamp(). "_". $_FILES['txtImage']['name']:"image.jpg";

            $tmpImage = $_FILES['txtImage']['tmp_name'];
            move_uploaded_file($tmpImage, "../../img/" . $fileName);        //adjunta la imagen y la mete a la carpeta img
            
            $sentenciaSQL = $conexion -> prepare("SELECT image FROM books WHERE id = :id"); //buscamos la imagen con ese id
            $sentenciaSQL -> bindParam(':id', $txtID);  //si la encontramos con ese ID
            $sentenciaSQL -> execute();     //ejecutamos ese parametro
            $book = $sentenciaSQL -> fetch(PDO::FETCH_LAZY); //buscamos el libro
    
            if(isset($book['image']) &&($book['image'] != "image.jpg") ){   //lo reemplazamos
                if(file_exists("../../img/" . $book['image'])){     
                    unlink("../../img/" . $book['image']);  
                }
            }
                //la instrucción es primero borrar y despues actualizar 
            
            $sentenciaSQL = $conexion -> prepare("UPDATE books SET image=:image WHERE id = :id");   //acá se actualiza
            $sentenciaSQL -> bindParam(':image', $fileName);
            $sentenciaSQL -> bindParam(':id', $txtID);
            $sentenciaSQL -> execute();
        }
        header("Location:productos.php"); //si no se redirecciona me vuelve a enviar los datos cada que yo actualize la web
        break;
    case"Cancel":
        header("Location:productos.php"); //reedireccionamos a productos cuando presionemos cancelar
        //echo "Presionado botón cancelar";
        break;
    case"Select":
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM books WHERE id = :id"); //seleccionamos de la tabla libros id
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();
        $book = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);    //pueda cargar los datos y rellenarlos 1 a 1
        
        $txtName = $book['name'];
        $txtImage = $book['image'];

        // echo "Presionado botón seleccionar";
        break;
    case"Delete":

        $sentenciaSQL = $conexion -> prepare("SELECT image FROM books WHERE id = :id"); //seleccionamos la imagen de books
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();
        $book = $sentenciaSQL -> fetch(PDO::FETCH_LAZY); 

        if(isset($book['image']) &&($book['image'] != "image.jpg") ){ //buscamos si existe la imagen y si es diferente a imagen.jpg que es la imagen vacía
            if(file_exists("../../img/" . $book['image'])){     //vemos si existe la imagen en la ruta 
                unlink("../../img/" . $book['image']);  //y si existe la borramos
            }
        }

        $sentenciaSQL = $conexion -> prepare("DELETE FROM books WHERE id = :id");   //borramos todo con el botòn delete
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();
        header("Location:productos.php");
       // echo "Presionado botón borrar";
        break;
    }

$sentenciaSQL = $conexion -> prepare("SELECT * FROM books");
$sentenciaSQL -> execute();
$bookList = $sentenciaSQL -> fetchAll(PDO::FETCH_ASSOC); //seleccioname todos los libros de la tabla libros, ejecuta la instrucción con execute(), cuando la ejectutes, con fetchall recuperas todos los registros para que yo los pueda mostrar en la variable bookList, con FETCH_ASSOC
        

?>

<div class="col-md-5">
    
<div class="card">
    <div class="card-header">
        Data Books
    </div>

    <div class="card-body">
    <form method="POST" enctype="multipart/form-data"> <!-- Metodo POST para enviar y enctype para activar el envio de archivos -->

        <div class = "form-group">
        <label for="txtID"> ID: </label>
        <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID"> <!-- required readonly para que el ID solo sea leido y no se pueda modificar -->
        </div>
        <div class = "form-group">
        <label for="txtName"> Name: </label>
        <input type="text" required class="form-control" value="<?php echo $txtName; ?>" name="txtName" id="txtName" placeholder="Book name">
        </div><!-- required: que sea requerido u obligatorio -->
        <div class = "form-group">
        <label for="txtName"> Image: </label>

        <!--<?php //echo $txtImage; ?> Texto de impresion -->

        <?php
            if($txtImage != ""){    ?>
                <img class="img-thumbnail rounded" src="../../img/ <?php echo $txtImage ?>" width="50" alt=""> <!-- class="img-thumbnail rounded" redondea la imagen y le pone marco -->
        <?php } ?>

        <input type="file" required class="form-control" name="image" id="image" placeholder="Image name">
        </div>

<!-- b4-bgroup.default -->
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="action" <?php echo ($action =='Select')?"disabled":"" ?> value="Add" class="btn btn-success">Add</button>
        <button type="submit" name="action" <?php echo ($action !='Select')?"disabled":"" ?> value="Modify" class="btn btn-warning">Modify</button>
        <button type="submit" name="action" <?php echo ($action !='Select')?"disabled":"" ?> value="Cancel" class="btn btn-info">Cancel</button>
    </div>
    </form>

</div>
    </div>
   
</div>




<div class="col-md-7">
    
<!-- b4-table-default -->
    <table class="table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($bookList as $book){  ?>
            <tr>
                <td><?php echo $book['id']; ?></td>      <!-- estos datos tienen que coincidir con la base de datos, name y image de la tabla books -->
                <td><?php echo $book['name']; ?></td>
                <td>                 
                <img class="img-thumbnail rounded" src="../../img/<?php echo $book['image']; ?>" width="50" alt="">  <!-- buscamos la imagen y como se ve -->
                </td>


                <td>

                    <form  method="POST">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $book['id']; ?>">
                        <input type="submit" name="action" value="Select" class="btn btn-primary"/>
                        <input type="submit" name="action" value="Delete" class="btn btn-danger"/>

                    </form>

                </td>

            </tr>
         <?php } ?>
        </tbody>
    </table>

</div>



<?php include('../template/footer.php');?>