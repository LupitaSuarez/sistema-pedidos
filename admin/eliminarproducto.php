<?php 
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
//echo $_GET['claveProducto'];

$peticion="delete from producto where claveProducto=".$_GET['id']."";
$resultado = mysqli_query($conexion, $peticion);
//echo ($peticion); exit(); Consulta
mysqli_close($conexion);

?>
<script type="text/javascript">
  window.location = "../admin/productos.php";
</script>