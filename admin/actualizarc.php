<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");


	$peticion="
	update usuario set 

		nombre_us='".$_POST['nombre_us']."',
		apellido_p_us='".$_POST['apellido_p_us']."',
		apellido_m_us='".$_POST['apellido_m_us']."',
		password = '".$_POST['password']."',
		email = '".$_POST['email']."'

		where clave_us=".$_GET['id']."


	";


$resultado = mysqli_query($conexion, $peticion);

mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/clientes.php";
</script>