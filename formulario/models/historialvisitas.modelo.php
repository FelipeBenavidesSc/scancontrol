<?php
require_once "conexion.php";
Class ModeloHistorialVisitas {
static public function listarHistorialVisitasMdl($tabla) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla order by fecha asc");
		$sql -> execute();
		return $sql -> fetchAll();
	}
}


?>