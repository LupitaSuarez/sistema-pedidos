<?php
  session_start();

  		if(!isset($_SESSION['contador'])){
  		$_SESSION['contador']=0;
  		}
?>

<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Productos</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Lupita Studios" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<!-- Modernizr is used for flexbox fallback -->
		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/codigo.js"></script>
		<script type="text/javascript" src="js/alerta.js"></script>
	</head>
	<body>
		<!-- Compare basket -->
		<div class="compare-basket">
			<button class="action action--button action--compare"><i class="fa fa-check"></i><span class="action__text">Compare</span></button>
		</div>
		<!-- Main view -->
		<div class="view">
			<!-- header -->
			<header class="bp-header cf">
           
          
				<span>Cafeteria ITSC<span class="bp-icon bp-icon-about" data-content="Tienda Online"></span></span>
				<h1>Elige nuestros platillos</h1>

              <div > <form action="php/logcliente.php" method="POST">
		<input type="text" name="usuario" placeholder="@"><br>
		<button>enviar</button>
		</div>

     
        
   

				<div class="contienecarrito">
				<div id="carrito" style="background: white; color:black;">
				Carrito
			</div>

			<a href="php/destruir.php">
				<button>Vaciar Carrito</button>
			</a>

			<a href="confirmar.php">
				<button>Confirmar Compra</button>
			</a>
			</div>
				
			</header>
			<section class="grid">
            <div id="detalle"></div>
			