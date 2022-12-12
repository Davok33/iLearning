<?php
if($_POST){     //si hay un metodo POST 
    header('Location:home.php');    //enviar a dicha localizacion
}
?>
 <!-- b4-$ esctructura del html -->
<!doctype html>
<html lang="en">
  <head>
    <title>Admin Website</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                
            </div>
   
            <div class="col-md-4">
        </br></br></br>
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">

                 <!-- !crt-form crea formulario-->
                    <form method="POST">

                    <div class = "form-group">                      
                    <label> User </label>
                    <input type="text" class="form-control" name="user"  placeholder="Enter user">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
               
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    </form>
                    
                    

                </div>
             
            </div>
                
            </div>
            
        </div>
    </div>

  </body>
</html>