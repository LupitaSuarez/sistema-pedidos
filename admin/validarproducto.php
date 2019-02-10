<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
/*$peticion = "insert into producto values(NULL,'".$_POST['nombreProducto']."','".$_POST['precioProducto']."','','',".$_POST['estado']."','".$_POST['existencias']."')" ;

$resultado = mysqli_query($conexion, $peticion);*/

/*Capttura de envio*/
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
//$descripcion = $_POST['descripcion'];
//$imagen = $_POST['imagen'];
$estado = $_POST['estado'];

$existencias = $_POST['existencias'];

$peticion="insert into producto (nombreProducto,precioProducto,estado,existencias) values('$nombreProducto',$precioProducto,$estado,$existencias)";
$resultado = mysqli_query($conexion, $peticion);


//echo ($peticion); exit();

 mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/productos.php";
</script>

