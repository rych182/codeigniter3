<div class="breadcrumb">
   <h2>Mostrar todos los datos de la tabla usuarios</h2>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Edad</th>
               </tr>
            </thead>
            <tbody>
               <?php foreach($usuarios as $usuario) {?>
               <tr>
                  <td><?php echo $usuario->id; ?></td>
                  <td><?php echo $usuario->nombre; ?></td>
                  <td><?php echo $usuario->apellido; ?></td>
                  <td><?php echo $usuario->correo; ?></td>
                  <td><?php echo $usuario->edad; ?></td>
               </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="breadcrumb">
   <h2>Mostrar un usuario específico, de la tabla el id 1</h2>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Correo</th>
                  <th>Edad</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><?php echo $usuarioPorId[0]->id; ?></td>
                  <td><?php echo $usuarioPorId[0]->nombre; ?></td>
                  <td><?php echo $usuarioPorId[0]->apellido; ?></td>
                  <td><?php echo $usuarioPorId[0]->correo; ?></td>
                  <td><?php echo $usuarioPorId[0]->edad; ?></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="breadcrumb">
   <h2>Total de registros en la tabla usuarios</h2>
</div>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <pre>
	     <?php echo 'El total de registros en la tabla usuarios: ' . $total;?>
	 </pre>
      </div>
   </div>
</div>