<?php
	
	$usu= $_POST['usuario'];
	$pass = $_POST['clave'];

//conectar a la base de dato

$conexion=mysqli_connect("localhost", "root", "", "datos");

$consulta="SELECT usuario FROM admin WHERE usuario='$usu' AND clave='$pass' ";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:hola.php");
}
else{
	echo "GRACIAS POR ENTRARR locA";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>