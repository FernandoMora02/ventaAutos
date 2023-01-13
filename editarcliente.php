<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM tbl_cliente WHERE id = ?;");
$sentencia->execute([$id]);
$tbl_cliente = $sentencia->fetch(PDO::FETCH_OBJ);
if($tbl_cliente === FALSE){
	echo "¡No existe algún Cliente con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar Cliente con el ID <?php echo $tbl_cliente->id; ?></h1>
		<form method="post" action="guardarDatosEditadosCliente.php">
			<input type="hidden" name="id" value="<?php echo $tbl_cliente->id; ?>">
	
			<label for="nombre">Nombre:</label>
			<input value="<?php echo $tbl_cliente->nombre ?>" class="form-control" name="nombre" required type="text" id="nommbre" placeholder="Escribe el nombre del cliente">

			<label for="apellido_paterno">Apellido Paterno:</label>
			<input value="<?php echo $tbl_cliente->apellido_paterno ?>" class="form-control" name="apellido_paterno" required type="text" id="apellido_paterno" placeholder="Escribe el Apellido paterno">

			<label for="apellido_materno">Apellido Materno:</label>
			<input value="<?php echo $tbl_cliente->apellido_materno ?>" class="form-control" name="apellido_materno" required type="text" id="apellido_materno" placeholder="Escribe el Apellido materno">

			<label for="rfc">RFC:</label>
			<input value="<?php echo $tbl_cliente->rfc ?>" class="form-control" name="rfc" required type="text" id="rfc" placeholder="Escribe el RFC">

			<label for="curp">CURP:</label>
			<input value="<?php echo $tbl_cliente->curp ?>" class="form-control" name="curp" required type="text" id="curp" placeholder="Escribe el CURP">


			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./clientes.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>