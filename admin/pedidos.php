<?php include "../admin/php/cabecera.inc"; 

/* Conexion de bade Datos*/
$conexion=mysqli_connect("localhost","root","","dbcafeteria");
mysqli_set_charset($conexion, "utf8");
$peticion = "select  pedidos.clavePedido as clavePedido, fechaPedido, estado, nombre_us, apellido_p_us from pedidos left join usuario on pedidos.clave_us=usuario.clave_us order by estado,fechaPedido ASC" ;

?>

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3>Listado de Pedidos </h3>
  </div>
</div> 


  <div class="row">
  
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table id="example1" class="table table-striped table-bordered table-condensed table-hover">
        <thead>
          <th>Cliente</th>
          <th>Pedido</th>
          <th>Fecha/Hora</th>
          <th>Estado</th>
          <th>Opciones</th>
        </thead>
          
        <tbody>

        <?php $resultado = mysqli_query($conexion, $peticion);
        while ($fila=mysqli_fetch_array($resultado)) {

          $color='';
          switch ($fila['estado']) {
          
            case 0://NO SERVIDO
              $color='style="background:rgb(255,200,200);"';
            break;

            case 1://SERVIDO
              $color='style="background:rgb(200,255,200);"';
            break;

            case 2://PEDIDO CANCELADO
              $color='style="background:rgb(255,255,200);"';
            break;  }
          
          ?>

          <tr>

            <td <?php echo $color ?>><?php echo $fila['nombre_us']." " .$fila['apellido_p_us']; ?></td>
            <td <?php echo $color ?>>Combo Hamburguesa</td>
            <td <?php echo $color ?>><?php echo $fila['fechaPedido']; ?></td>

            <td <?php echo $color ?>>
              <?php

              switch ($fila['estado']) {
                case 0:
                  echo "No servido";
                  break;

                case 1:
                  echo "Servido";
                  break;

                case 2:
                  echo "Anulado";
                  break; }

              ?>
            </td>

            <td>
              <a href="../php/gestionpedido.php?id=<?php echo $fila['clavePedido'];?>"><button class="btn btn-info">Gestionar</button></a>
            <a href="../php/pedidoservido.php?id=<?php echo $fila['clavePedido'];?>"><button class="btn btn-warning">Pedido Servido</button></a>
            <a href="../php/cancelarpedido.php?id=<?php echo $fila['clavePedido'];?>" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Cancelar Pedido</button></a>
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