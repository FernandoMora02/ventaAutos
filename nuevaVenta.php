<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["id"]) || !isset($_POST["id_vehiculo"]) || !isset($_POST["id_cliente"]) || !isset($_POST["precio_venta"]) || !isset($_POST["km_venta"]) || !isset($_POST["fecha"]) ) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";

$id = $_POST["id"];
$id_vehiculo = $_POST["id_vehiculo"];
$id_cliente = $_POST["id_cliente"];
$precio_venta = $_POST["precio_venta"];
$km_venta = $_POST["km_venta"];
$fecha = $_POST["fecha"];

$sentencia = $base_de_datos->prepare("INSERT INTO tbl_venta(id, id_vehiculo, id_cliente, precio_venta, km_venta, fecha) VALUES (?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$id, $id_vehiculo, $id_cliente, $precio_venta, $km_venta, $fecha]);

if($resultado === TRUE){
	header("Location: ./venderauto.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>