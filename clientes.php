<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM tbl_cliente;");
$tbl_cliente = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Clientes</h1>
		<div>
			<a class="btn btn-success" href="./formularioCliente.php">Nuevo Cliente <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>RFC</th>
					<th>CURP</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($tbl_cliente as $cliente){ ?>
				<tr>
					<td><?php echo $cliente->id ?></td>
					<td><?php echo $cliente->nombre ?></td>
					<td><?php echo $cliente->apellido_paterno ?></td>
					<td><?php echo $cliente->apellido_materno ?></td>
					<td><?php echo $cliente->rfc ?></td>
					<td><?php echo $cliente->curp ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editarcliente.php?id=" . $cliente->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminarCliente.php?id=" . $cliente->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>