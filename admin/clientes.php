<?php include "../admin/php/cabecera.inc"; 

/* Conexion de bade Datos
<input type="submit" value="Actualizar"> otra forma de poner el boton actualizar 
*/
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");
$peticion = "select * from usuario" ;

?>

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Listado de Clientes
    <a href="../admin/nuevocliente.php"><button class="btn btn-success">Nuevo</button></a>
     <a href="../admin/actualizarcliente.php"><button class="btn btn-success">Modificar</button></a>
    
    </h3>
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

        <?php $resultado = mysqli_query($conexion, $peticion);
        while ($fila=mysqli_fetch_array($resultado)) {

         
          
          ?>

          <tr>

        <td><?php echo $fila['nombre_us'];?></td>
        <td><?php echo $fila['apellido_p_us']; ?></td>
        <td><?php echo $fila['apellido_m_us']; ?></td>
        <td><?php echo $fila['password'];?></td>
        <td><?php echo $fila['email'];?></td>
        <td><?php echo $fila['clavetipo'];?></td>
        


             <td>
             <a href="../admin/eliminarcliente.php?id=<?php echo $fila['clave_us'];?>"><button class="btn btn-danger">Eliminar</button></a>      
             
            </td>
           
           </tr>
          <?php }  //*** Termina While **/?>

        </tbody>
      </table>
    </div> 
    <hr>


  <?php

                
    mysqli_close($conexion);

  ?>
  


 <?php include "../admin/php/piedepagina.inc" ?>