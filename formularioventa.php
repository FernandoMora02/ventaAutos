<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nueva Venta</h1>
	<form method="post" action="nuevaVenta.php">
		
			<label for="id">ID:</label>
			<input  class="form-control" name="id" required type="text" id="id" placeholder="Nuevo ID">

			<label for="id_vehiculo">Id del Vehiculo:</label>
			<input class="form-control" name="id_vehiculo" required type="text" id="id_vehiculo" placeholder="Id Vehiculo">

			<label for="id_cliente">Id del cliente:</label>
			<input  class="form-control" name="id_cliente" required type="text" id="id_cliente" placeholder="Id Cliente">

			<label for="precio_venta">Precio Venta:</label>
			<input  class="form-control" name="precio_venta" required type="text" id="precio_venta" placeholder="Precio de la venta">

			<label for="km_venta">KM Venta:</label>
			<input  class="form-control" name="km_venta" required type="text" id="km_venta" placeholder="Km Venta">

			<label for="fecha">Fecha:</label>
			<input  class="form-control" name="fecha" required type="date" id="fecha" placeholder="Fecha">


			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./venderauto.php">Cancelar</a>
		</form>
</div>
<?php include_once "pie.php" ?>