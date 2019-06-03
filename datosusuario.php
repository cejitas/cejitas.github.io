<?php
	
	$nombre_apellidos= $_POST['nombre_apellidos'];
    $cedula = $_POST['cedula'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_termino = $_POST['fecha_termino'];
    $colegio = $_POST['colegio'];
    $lugar_colegio = $_POST['lugar_colegio'];
    $nivel_escolaridad = $_POST['nivel_escolaridad'];

//conectar a la base 

$conexion=mysqli_connect("localhost", "root", "", "datos");

//$consulta="SELECT usuario FROM admin WHERE usuario='$usu' AND clave='$pass' ";
$consulta="INSERT INTO estudiantes(nombre_apellidos, cedula, fecha_inicio, fecha_termino,colegio, lugar_colegio, nivel_escolaridad) VALUE('$nombre_apellidos', '$cedula', '$fecha_inicio', '$fecha_termino', '$colegio', '$lugar_colegio', '$nivel_escolaridad')";
//$consulta="INSERT INTO estudiantes(nombre_apellidos,cedula,fecha_inicio) VALUE('$nombre_apellidos','$cedula','$fecha_inicio')";
//$resultado=mysqli_query($conexion, $consulta);

//$filas=mysqli_num_rows($resultado);

if ($resultado=mysqli_query($conexion, $consulta)) {
	header("location:hola.php");
}
else{
	echo "GRACIAS POR ENTRARR locA";
}
//smysqli_free_result($resultado);
mysqli_close($conexion);
?>