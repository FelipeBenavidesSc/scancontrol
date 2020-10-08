<?php
 session_start();  
require_once "../../models/conexion.php";
$cont=count($_POST['pvp']);
$registro = $_POST['pvp'];
$id = $_POST['id'];
for ($i=0; $i < $cont; $i++) { 
if (strpos($id[$i], 'Calidad') !== false) {
$resultadocalidad = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Alimentacion') !== false) {
$resultadoalimentacion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Aceleracion') !== false) {
$resultadoaceleracion = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Pesaje') !== false) {
$resultadopesaje = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
if (strpos($id[$i], 'Descarga') !== false) {
$resultadodescarga = intval(preg_replace('/[^0-9]+/', '', $id[$i]), 10); 
}
}
if (!isset($resultadocalidad)) {
	$resultadocalidad='NULL';
}
if (!isset($resultadoalimentacion)) {
	$resultadoalimentacion='NULL';
}
	if (!isset($resultadoaceleracion)) {
	$resultadoaceleracion='NULL';
}
	if (!isset($resultadodescarga)) {
	$resultadodescarga='NULL';
}
	if (!isset($resultadopesaje)) {
	$resultadopesaje='NULL';
}
$grader = $_POST['grader'];
$cliente = $_POST['cliente'];
$query = Conexion::conectar()->prepare("INSERT INTO unidades_balanza(cliente,grader,id_unidad_al,id_unidad_acel,id_unidad_desc,id_calidad,id_pesaje) VALUES('".$cliente."','".$grader."',".$resultadoalimentacion.",".$resultadoaceleracion.",".$resultadodescarga.",".$resultadocalidad.",".$resultadopesaje.")");
if (isset($resultadoaceleracion)) {
$sql = Conexion::conectar()->prepare("UPDATE unidad_acel SET id_unidad ='1' WHERE id_unidad_acel = '$resultadoaceleracion'");
$sql -> execute();
}
if (isset($resultadoalimentacion)) {
$queryalim = Conexion::conectar()->prepare("UPDATE unidad_alim SET id_unidad_al = '1' WHERE id_unidad_alim = '$resultadoalimentacion'");
$queryalim -> execute();
}
if (isset($resultadodescarga)) {
	$querydes = Conexion::conectar()->prepare("UPDATE unidad_descarga SET id_unidad = '1' WHERE id_unidad_descarga = '$resultadodescarga'");
$querydes -> execute();
}
if (isset($resultadopesaje)) {
		$querypes = Conexion::conectar()->prepare("UPDATE unidad_pesaje SET id_unidad = '1' WHERE id_unidad_pesaje = '$resultadopesaje'");
$querypes -> execute();
}
if (isset($resultadocalidad)) {
		$queryca = Conexion::conectar()->prepare("UPDATE estacion_calidad
SET id_unidad = '1'
WHERE id_calidad = '$resultadocalidad'");
$queryca -> execute();
}		
 if ($query -> execute()) { 
   unset($_SESSION["shopping_cart"]);
     echo "ok";        
}else{
	echo "no guardo";
}
?>