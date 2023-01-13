<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM tbl_auto WHERE id = ?;");
$sentencia->execute([$id]);
$tbl_auto = $sentencia->fetch(PDO::FETCH_OBJ);
if($tbl_auto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar Auto con el ID <?php echo $tbl_auto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $tbl_auto->id; ?>">
	
			<label for="marca">Marca:</label>
			<input value="<?php echo $tbl_auto->marca ?>" class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe la marca">

			<label for="modelo">Modelo:</label>
			<input value="<?php echo $tbl_auto->modelo ?>" class="form-control" name="modelo" required type="text" id="modelo" placeholder="Escribe el modelo">

			<label for="version">Version:</label>
			<input value="<?php echo $tbl_auto->version ?>" class="form-control" name="version" required type="text" id="version" placeholder="Version">

			<label for="annio">Annio:</label>
			<input value="<?php echo $tbl_auto->annio ?>" class="form-control" name="annio" required type="number" id="annio" placeholder="Escribe el anio">

			<label for="precio">Costo$$:</label>
			<input value="<?php echo $tbl_auto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Escribe el Costo del auto">

			<label for="no_serie">Numero de serie:</label>
			<input value="<?php echo $tbl_auto->no_serie ?>" class="form-control" name="no_serie" required type="number" id="no_serie" placeholder="escribe el Numero de serie">

			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
