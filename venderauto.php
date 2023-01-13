<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM tbl_venta;");
$tbl_venta = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Vneta de Autos</h1>
		<div>
			<a class="btn btn-success" href="./formularioventa.php">Nueva Venta  <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Id_Vehiculo</th>
					<th>Id_Cliente</th>
					<th>Precio_Venta</th>
					<th>Km Venta</th>
					<th>Fecha</th>
					<th>Pagado</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($tbl_venta as $venta){ ?>
				<tr>
					<td><?php echo $venta->id ?></td>
					<td><?php echo $venta->id_vehiculo ?></td>
					<td><?php echo $venta->id_cliente ?></td>
					<td><?php echo $venta->precio_venta ?></td>
					<td><?php echo $venta->km_venta ?></td>
					<td><?php echo $venta->fecha ?></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminarVenta.php?id=" . $venta->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>