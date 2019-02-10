<?php include "../admin/php/cabecera.inc"; ?>

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Nuevo Cliente</h3>
  </div>
</div> 


  <div class="row">
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Contraseña</th>
          <th>Correo</th>
          <th>Tipo</th>
          <th>Acciones</th>
        </thead>
          
        <tbody>
          <tr>

            <form action="../admin/validarcliente.php" method="POST">
              <td><input type="text" name="nombre_us"></td>
              <td><input type="text" name="apellido_p_us"></td>
              <td><input type="text" name="apellido_m_us"></td>
              <td><input type="text" name="password"></td>
              <td><input type="text" name="email"></td>
              <td><input type="text" name="clavetipo"></td>
             

              <td><input type="submit"></td>
            </form>

          </tr>
          

        </tbody>
      </table>
    </div> 
    <hr>




 

 <?php include "../admin/php/piedepagina.inc" ?>