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
// echo $txtImage ."<br>";
// echo $action ."<br>";                //para saber si nos llega la info

//conectarse a la bbdd





switch($action){

    case"Add":

        //INSERT INTO `books` (`id`, `name`, `image`) VALUES (NULL, 'Books of Dragons', 'dragon.jpg');
        $sentenciaSQL = $conexion -> prepare("INSERT INTO books (name, image) VALUES (:name, :image);"); //ya tenemos la sentencia de ejecucion
        $sentenciaSQL -> bindParam(':name', $txtName);  //pasamos los parametros de lo que vamos a almacenar
        
        $date = new DateTime();
        $fileName = ($txtImage != "") ? $date -> getTimestamp(). "_". $_FILES['image']['name']:"image.jpg"; //si hay una imagen tomamos tbn la hora
        
        $tmpImage = $_FILES['image']['tmp_name'];    //esa imagen la almacenamos imagenes temporales
        
        if($tmpImage != ""){
            move_uploaded_file($tmpImage, "../../img/" . $fileName);  //si la imagen esta vacia, muevela a la carpeta img + nombre del archivo
        }
        
        $sentenciaSQL -> bindParam(':image', $fileName);
        $sentenciaSQL -> execute(); //aquí la ejecutamos

        //echo "Presionado botón agregar";
        break;
    case"Modify":
        $sentenciaSQL = $conexion -> prepare("UPDATE books SET name=:name WHERE id = :id");
        $sentenciaSQL -> bindParam(':name', $txtName);
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();

        if($txtImage != ""){
            $sentenciaSQL = $conexion -> prepare("UPDATE books SET image=:image WHERE id = :id");
            $sentenciaSQL -> bindParam(':image', $txtImage);
            $sentenciaSQL -> bindParam(':id', $txtID);
            $sentenciaSQL -> execute();
        }
        break;
    case"Cancel":
        echo "Presionado botón cancelar";
        break;
    case"Select":
        $sentenciaSQL = $conexion -> prepare("SELECT * FROM books WHERE id = :id");
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();
        $book = $sentenciaSQL -> fetch(PDO::FETCH_LAZY);    //pueda cargar los datos y rellenarlos 1 a 1
        
        $txtName = $book['name'];
        $txtImage = $book['image'];

        // echo "Presionado botón seleccionar";
        break;
    case"Delete":
        $sentenciaSQL = $conexion -> prepare("DELETE FROM books WHERE id = :id");
        $sentenciaSQL -> bindParam(':id', $txtID);
        $sentenciaSQL -> execute();
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
    <form method="POST" enctype="multipart/form-data">

        <div class = "form-group">
        <label for="txtID"> ID: </label>
        <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
        </div>
        <div class = "form-group">
        <label for="txtName"> Name: </label>
        <input type="text" class="form-control" value="<?php echo $txtName; ?>" name="txtName" id="txtName" placeholder="Book name">
        </div>
        <div class = "form-group">
        <label for="txtName"> Image: </label>
        <?php echo $txtImage; ?>
        <input type="file" class="form-control" name="image" id="image" placeholder="Image name">
        </div>

<!-- b4-bgroup.default -->
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="action" value="Add" class="btn btn-success">Add</button>
        <button type="submit" name="action" value="Modify" class="btn btn-warning">Modify</button>
        <button type="submit" name="action" value="Cancel" class="btn btn-info">Cancel</button>
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
                <td><?php echo $book['image']; ?></td>


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