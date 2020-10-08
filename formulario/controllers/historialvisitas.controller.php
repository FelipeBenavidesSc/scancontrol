<?php
error_reporting(0);

Class ControllerHistorialVisitas {
	public function listarHistorialVisitasCtr() {
		$tabla = "usuarios_web";
		$respuesta = ModeloHistorialVisitas::listarHistorialVisitasMdl($tabla);
		return $respuesta;
	}
}


?>