	<?php 
		
		$conexion=mysqli_connect("localhost","root","","dbcafeteria");
		$peticion = "update pedidos set estado=1 WHERE clavePedido = '".$_GET['id']."'";
		$resultado = mysqli_query($conexion, $peticion);

		mysqli_close($conexion);

	?>

	<script>
	window.location="../admin/pedidos.php";
	</script>