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
    <h3>Modificar Clientes
   
    
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
          <th>Acciones</th>
          
        </thead>
          
        <tbody>

        <?php $resultado = mysqli_query($conexion, $peticion);
        while ($fila=mysqli_fetch_array($resultado)) {

         
          
          ?>

          <tr>

           <form action="../admin/actualizarc.php?id=<?php echo $fila['clave_us'];?>" method="POST" >
           <td>
             <input type="text" name="nombre_us" value="<?php echo $fila['nombre_us'];?>">
           </td>

           <td>
             <input type="text" name="apellido_p_us" value="<?php echo $fila['apellido_p_us']; ?>">
           </td>

           <td>
             <input type="text" name="apellido_m_us" value="<?php echo $fila['apellido_m_us']; ?>">
           </td>

            <td>
             <input type="text" name="password" value="<?php echo $fila['password'];?>">
           </td>

            <td>
             <input type="text" name="email" value="<?php echo $fila['email'];?>">
           </td>

            
        


             <td>     
             <button class="btn btn-info">Actualizar</button></a>
            </td>
           
           </tr>
            </form>
          <?php }  //*** Termina While **/?>

        </tbody>
      </table>
    </div> 
    <hr>


  <?php

                
    mysqli_close($conexion);

  ?>
  


 <?php include "../admin/php/piedepagina.inc" ?>