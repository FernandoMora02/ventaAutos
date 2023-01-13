<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo Cliente</h1>
	<form method="post" action="nuevoCliente.php">
		
			<label for="id">ID:</label>
			<input  class="form-control" name="id" required type="text" id="id" placeholder="Nuevo ID">

			<label for="nombre">Nombre:</label>
			<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el nombre">

			<label for="apellido_paterno">Apellido Paterno:</label>
			<input  class="form-control" name="apellido_paterno" required type="text" id="apellido_paterno" placeholder="Apellido paterno">

			<label for="apellido_materno">Apellido Materno:</label>
			<input  class="form-control" name="apellido_materno" required type="text" id="apellido_materno" placeholder="Apellido materno">

			<label for="rfc">RFC:</label>
			<input  class="form-control" name="rfc" required type="number" id="rfc" placeholder="Escribe el RFC">

			<label for="curp">CURP:</label>
			<input  class="form-control" name="curp" required type="text" id="curp" placeholder="Escribe el CURP">


			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./clientes.php">Cancelar</a>
		</form>
</div>
<?php include_once "pie.php" ?>