<?php
#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido_paterno"]) || 
	!isset($_POST["apellido_materno"]) || 
	!isset($_POST["rfc"]) || 
	!isset($_POST["curp"]) ||
	!isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$rfc = $_POST["rfc"];
$curp = $_POST["curp"];

$sentencia = $base_de_datos->prepare("UPDATE tbl_cliente SET nombre = ?, apellido_paterno = ?, apellido_materno = ?, rfc = ?, curp = ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $apellido_paterno, $apellido_materno, $rfc, $curp, $id]);

if($resultado === TRUE){
	header("Location: ./clientes.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>