<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");

/*Capttura de envio*/
$nombre_us = $_POST['nombre_us'];
$apellido_p_us = $_POST['apellido_p_us'];
$apellido_m_us = $_POST['apellido_m_us'];
$password = $_POST['password'];
$email = $_POST['email'];
$clavetipo = $_POST['clavetipo'];

$peticion="insert into usuario (nombre_us,apellido_p_us,password,email,clavetipo) values('$nombre_us','$apellido_p_us','$apellido_m_us','$password','$email','$clavetipo')";
$resultado = mysqli_query($conexion, $peticion);

 mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/clientes.php";
</script>