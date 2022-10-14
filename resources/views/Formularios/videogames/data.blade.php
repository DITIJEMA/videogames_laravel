<?php
$registros = $->read_all();
if (isset($_GET['estatus'])) {
  $estatus = $_GET['estatus'];
?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong><?php echo $estatus ?>!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php
}
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO PATERNO</th>
      <th scope="col">APELLIDO MATERNO</th>
      <th scope="col">TIPO USUARIO</th>
      <th scope="col">FECHA DE CREACION</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">ESTADO</th>
      <th scope="col">ESTATUS</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTRASEÑA</th>
      <th scope="col">TELEFONO</th>
      </tr>
  </thead>

  <tbody>

    <?php
    $registros = $->read_all();
    foreach ($registros as $) {
    ?>

  <tbody>
    <tr>
      <td><?php echo $->id; ?></td>
      <td><?php echo $->nombre; ?></td>
      <td><?php echo $->desarrolladora; ?></td>
      <td><?php echo $->publicadora; ?></td>
      <td><?php echo $->fecha_estreno; ?></td>
      <td><?php echo $->descripcion; ?></td>
      <td><?php echo $->codigo; ?></td>
      <td><?php echo $->id_clasificacion; ?></td>
      <td><?php echo $->id_region; ?></td>
      <td><?php echo $->id_genero; ?></td>
      <td><?php echo $->id_consola; ?></td>
      <td><?php echo $->stock; ?></td>
      <td><?php echo $->presio; ?></td>
      <td><a href="index.php?editar&id=<?php echo $->id ?>">Editar</a></td>
      <td><a href="index.php?borrar&id=<?php echo $->id ?>">Borrar</a></td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>