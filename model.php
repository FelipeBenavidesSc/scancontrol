<?php 

require_once "formulario/models/conexion.php";

Class ModeloSesion {

	static public function iniciarSesionMdl($tabla, $usuario) {
		$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE nombre = '$usuario'");
		$sql -> execute();
		return $sql->fetch();
	}

}

?>