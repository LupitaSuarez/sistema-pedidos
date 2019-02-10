<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");


	$peticion="
	update producto set 

		nombreProducto='".$_POST['nombreProducto']."',
		precioProducto='".$_POST['precioProducto']."',
		existencias='".$_POST['existencias']."',
		estado = '".$_POST['estado']."'

		where claveProducto=".$_GET['id']."


	";


$resultado = mysqli_query($conexion, $peticion);

mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/productos.php";
</script>