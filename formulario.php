<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo Auto</h1>
	<form method="post" action="nuevo.php">
		
			<label for="id">ID:</label>
			<input  class="form-control" name="id" required type="text" id="id" placeholder="Nuevo ID">

			<label for="marca">Marca:</label>
			<input class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe la marca">

			<label for="modelo">Modelo:</label>
			<input  class="form-control" name="modelo" required type="text" id="modelo" placeholder="Escribe el modelo">

			<label for="version">Version:</label>
			<input  class="form-control" name="version" required type="text" id="version" placeholder="Version">

			<label for="annio">Annio:</label>
			<input  class="form-control" name="annio" required type="number" id="annio" placeholder="Escribe el anio">

			<label for="km">KM:</label>
			<input  class="form-control" name="km" required type="text" id="km" placeholder="Escribe el KM">

			<label for="no_serie">Numero de serie:</label>
			<input  class="form-control" name="no_serie" required type="number" id="no_serie" placeholder="escribe el Numero de serie">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
</div>
<?php include_once "pie.php" ?>