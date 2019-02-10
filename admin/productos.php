
<?php include "../admin/php/cabecera.inc"; 

/* Conexion de bade Datos
<input type="submit" value="Actualizar"> otra forma de poner el boton actualizar 
*/
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");
$peticion = "select * from producto" ;
?>   


?>


<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Listado de Productos
    <a href="../admin/nuevoproducto.php"><button class="btn btn-success">Nuevo</button></a>
     <!--<a href="../admin/actualizar.php"><button class="btn btn-success">Modificar</button></a>-->
    
    </h3>
  </div>
</div> 


  <div class="row">
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Existencias</th>
          <th>Estado</th>
          <th>Acciones</th>
          
        </thead>
          
        <tbody>

        <?php $resultado = mysqli_query($conexion, $peticion);
        while ($fila=mysqli_fetch_array($resultado)) {

          $color='';
          switch 
          ($fila['estado']) {
          
            case 0://NO DISPONIBLE
              $color='style="background:rgb(255,200,200);"';
            break;

            case 1://DISPONIBLE
              $color='style="background:rgb(200,255,200);"';
            break;

            }
          
          ?>

          <tr>

          <form action="../admin/actualizarproducto.php?id=<?php echo $fila['claveProducto'];?>" method="POST" >

           <td <?php echo $color ?>>
            <input type="text" name="nombreProducto" value="<?php echo $fila['nombreProducto']; ?>">
            </td>
          

            <td <?php echo $color ?>>
            <input type="text" name="precioProducto" value="<?php echo $fila['precioProducto']; ?>">
            </td>
            

            <td <?php echo $color ?>>
            <input type="text" name="existencias" value="<?php echo $fila['existencias']; ?>">
            </td>

            <td <?php echo $color ?>>
            <input type="text" name="estado" value="<?php echo $fila['estado']; ?>">
              <?php

              switch ($fila['estado']) {
                case 0:
                  echo "No disponible";
                  break;

                case 1:
                  echo "Disponible";
                  break;

               }

               

              ?>
            </td>
             <td>
                <button class="btn btn-info">Actualizar</button></a>

             
 </form>

            <?php
              //aqui va el codigo de eliminar producto
            ?>
           
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