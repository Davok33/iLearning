<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

        <<form method="GET" action="procesar.php" enctype="multipart/form-data">
            <label> 
                Name: 
                    <input type="text" name="name">
            </label>   

            <br>
            <br>

            <label >
                Age:
                <input type="number" name="age"></input>

            </label>
            
            <br>
            

            <p> Sex: </p>

            <select name="sex">

                <option value="Male"> Male</option>
                <option value="Female" selected> Female</option>
                <option value="Other"> Other</option>

            </select>
            
            <!-- <label>
               
            <input type="radio" name="sex" value="male"> Male

            </label>

            <label>
               
            <input type="radio" name="sex" value="female"> Female

            </label>

            <label>
               
            <input type="radio" name="sex" value="other"> Other

            </label> -->

            <p>Rols: </p>

            <input type="checkbox" name="rols[]" value="Administrator"> Administrator

            </label>

            <input type="checkbox" name="rols[]" value="Editor"> Editor

            </label>

            <input type="checkbox" name="rols[]" value="Moderator"> Moderator

            </label>
            <br>
            <br>
            <label>
                    Imagen:
                    <br>
                    <input type="file" name="image">

            </label>

            <br>
            <br>

            <p>Mesage</p>
            <textarea name="mesage" cols="30" rows="10"></textarea>

            <br>
            <br>

            <button type="submit">Enviar</button>

        </form>

    
</body>
</html>