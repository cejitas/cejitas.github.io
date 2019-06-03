<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.css">
    <title>Inicio de Sesion</title>
    <style type="text/css">
         body {

            font-family:Verdana;
            color: #999;
            background-color: #ccc; 
        }
    	.center{
    		text-align: center;
            margin: auto;

    	}
        .contenedor{
            background-image: url("fondo.jpg");
        }
    </style>
</head>
<body>
    


    <h1 align="center"> !!BIENVENIDO!! </h1>

 <div class="contenedor">
    <form class="col-sm-3 center form-control" align="center" action="registro.php" method="post" > 
        <center><img src="log.png" width="300" lang="300"></center>
        <div>
            <center>
            <label for="usuario">usuario</label>
            <input class="form-control col-3" type="text" name="usuario" id"21" placeholder="Usuario">
            </center>
        </div>
        <div>
            <center>
            <label for="clave">contraseña</label>
            <input class="form-control col-3" type="password" name="clave" id="21" placeholder="contraseña">
            </center>
        </div>
        <button class="btn btn-primary">login</button>
    </form>
 </div>
</body>
</html>