<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");
$peticion="delete from usuario where clave_us=".$_GET['id']."";
$resultado = mysqli_query($conexion, $peticion);

mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/clientes.php";
</script>