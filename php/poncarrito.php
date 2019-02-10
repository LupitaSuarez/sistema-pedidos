

<?php
	
   session_start();
   $suma=0;
         
   if(isset($_GET['p'])){

   $_SESSION['producto'][$_SESSION['contador']]=$_GET['p'];
   $_SESSION['contador']++;

	}
	
   $conexion=mysqli_connect("localhost","root","","dbcafeteria");
   echo "<table>";
   
   	for ($i=0; $i < $_SESSION['contador'] ; $i++) { 
   		//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
        
        $peticion="select * from producto where claveProducto=".$_SESSION['producto'][$i]."" ;
        $resultado=mysqli_query($conexion,$peticion);
   		
        while ($fila=mysqli_fetch_array($resultado)) {//hay un error :v
        	echo "<tr><td>" .$fila['nombreProducto']."</td><td>".$fila['precioProducto']."</td></tr>";

        	$suma+=$fila['precioProducto'];
   	}
   }
   echo "<tr><td>Subtotal</td><td>". number_format($suma,2) ."</td><tr>";
echo "</table>";
   mysqli_close($conexion);
?>