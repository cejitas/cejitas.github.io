<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css\bootstrap.css">
	<title >VERGA</title>
	<style type="text/css">
         body {

            font-family:Verdana;
            color: #red;
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

	<h1> ¡¡REGISTRO DE DATOS!!</h1>
		
	<form   action="datosusuario.php" method="post">
	<div class="contenedot">
		<label for="text">nombre y apellidos</label>
		<input type="text" name="nombre_apellidos">
	</div>
	<div>
		<label for="text">cedula</label>
		<input type="text" name="cedula">
	</div>
	<div>
		<label for="text">fecha inicio</label>
		<input type="date" step="1" name="fecha_inicio">
	</div>
	<div>
		<label for="text">fecha termino</label>
		<input type="date" step="1" name="fecha_termino">
	</div>
	<div>
		<label for="text">colegio</label>
		<input type="text" name="colegio">
	</div>
	<div>
		<label for="text">lugar clegio</label>
		<input type="text" name="lugar_colegio">
	</div>
	<div>
		<label for="text">nivel escolaridad</label>
		<input type="text" name="nivel_escolaridad">
		<center>
		<button class="btn btn-primary">listo</button>
		</center>
		
	</div>
	</form>
	

</body>
</html>