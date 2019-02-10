<?php include "../admin/php/cabecera.inc"; ?>

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Nuevo Producto</h3>
  </div>
</div> 


  <div class="row">
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Estado</th>
          <th>Existencias</th>
          <th>Acciones</th>
        </thead>
          
        <tbody>
          <tr>

            <form action="../admin/validarproducto.php" method="POST">
              <td><input type="text" name="nombreProducto"></td>
              <td><input type="text" name="precioProducto"></td>
              <td><input type="text" name="estado"></td>
              <td><input type="text" name="existencias"></td>
              <td><input type="submit"></td>
            </form>

          </tr>
          

        </tbody>
      </table>
    </div> 
    <hr>




 

 <?php include "../admin/php/piedepagina.inc" ?>
 