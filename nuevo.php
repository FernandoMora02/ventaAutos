<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["id"]) || !isset($_POST["marca"]) || !isset($_POST["modelo"]) || !isset($_POST["version"]) || !isset($_POST["annio"]) || !isset($_POST["km"]) || !isset($_POST["no_serie"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$version = $_POST["version"];
$annio = $_POST["annio"];
$km = $_POST["km"];
$no_serie = $_POST["no_serie"];

$sentencia = $base_de_datos->prepare("INSERT INTO tbl_auto(id, marca, modelo, version, annio, km, no_serie) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$id, $marca, $modelo, $version, $annio, $km, $no_serie ]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>