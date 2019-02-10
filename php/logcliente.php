		<?php 
		include "cabecera.inc";
		$contador=0;
		$conexion=mysqli_connect("localhost","root","","dbcafeteria");
		$peticion = "select * FROM usuario WHERE nombre_us = '".$_POST['usuario']."' AND password = '".$_POST['contrasena']."'";
		$resultado = mysqli_query($conexion, $peticion);


		while ($fila=mysqli_fetch_array($resultado)) {
			$contador++;
			$_SESSION['cliente']=$fila['clave_us'];
		}
				if ($contador>0) {
					$peticion = "insert into pedidos VALUES (NULL, ".$_SESSION['cliente'].",now(),'0')";
					$resultado = mysqli_query($conexion, $peticion);
					$peticion = "select * from pedidos WHERE clave_us = '".$_SESSION['cliente']."' ORDER BY fechaPedido DESC LIMIT 1";
					$resultado = mysqli_query($conexion, $peticion);

					   while ($fila=mysqli_fetch_array($resultado)) {
									
							$_SESSION['clavepedido']=$fila['clavePedido'];
								
						}
									
			echo $_SESSION['clavepedido'];

			for ($i = 0;$i< $_SESSION['contador'];$i++) { 

           $peticion = "insert into lineaspedido VALUES (NULL,'".$_SESSION['clavepedido']."','".$_SESSION['producto'][$i]."','1')";
				$resultado = mysqli_query($conexion, $peticion);

				$peticion = "select * from producto WHERE claveProducto='".$_SESSION['producto'][$i]."'";
				$resultado = mysqli_query($conexion, $peticion);

				while ($fila=mysqli_fetch_array($resultado)) {
						$existencias=$fila['existencias'];
						$peticion2 ="update producto set existencias='".($existencias-1)."' WHERE claveProducto='".$_SESSION['producto'][$i]."'";
						$resultado2 = mysqli_query($conexion, $peticion2);
				}

			}

				
				echo "<br>Tu pedido se ha realizado satisfactoriamente. Redirigiendo a la página principal en 5 segundos...";
				session_destroy();
				echo '
					
					<meta http-equiv="refresh" content="10; url=../index.php">
				';
				
			}else{
					echo "el usuario no existe. Volviendo a la tienda en 5 segundos...";
					echo '
					
					<meta http-equiv="refresh" content="5; url=../confirmar.php">
				';
				}
				mysqli_close($conexion);
				include "piedepagina.inc";

			?>


					