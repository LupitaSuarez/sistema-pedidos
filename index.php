<?php include "php/cabecera.inc"; 

?>

<?php 
include 'conexion.php';

$resultado=mysql_query("select * from producto where existencias > 0") or die(mysql_error());
while ($fila=mysql_fetch_array($resultado)) {

	?>


					<div class="product">
					<div class="product__info">
						<img class="product__image" src="images/<?php echo $fila['imagen'];?>" alt="Product 2" />
                        <br>
						<h3 class="product__title"><?php echo $fila['nombreProducto'];?></h3>
						<br>
						<span class="product__price highlight">$<?php echo $fila['precioProducto'];?></span>
						<br>

						<button class="action action--button action--buy" value="<?php echo $fila['claveProducto']; ?>"><i class="fa fa-shopping-cart"></i><span class="action__text">Comprar</span>

						</button>
						<button ><span class="action__text">Para llevar</span></button>
						<button "><span class="action__text">Comer aqui</span></button>
						
					</div>
					
				</div>
            <?php

                }
           ?>
    
			



				
			
		<!-- product compare wrapper -->
		<section class="compare">
			<button class="action action--close"><i class="fa fa-remove"></i><span class="action__text action__text--invisible">Close comparison overlay</span></button>
		</section>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
	
<?php include "php/piedepagina.inc" ?>