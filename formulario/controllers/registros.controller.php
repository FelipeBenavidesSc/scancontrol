<?php
Class Controllerregistros {
	public function listarCliCtr() {
		$registros = "clientes";
		$respuesta = Modeloregistros::listarCliMdl($registros);
		return $respuesta;
	}
	public function listarregistrosCtr() {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::listarregistrosMdl($registros);
		return $respuesta;
	}
		public function listarregistrosCalidadCtr() {
		$registros = "estacion_calidad";
		$respuesta = Modeloregistros::listarregistrosCalidadMdl($registros);
		return $respuesta;
	}
			public function listarregistrosAlimentacionCtr() {
		$registros = "unidad_alim";
		$respuesta = Modeloregistros::listarregistrosAlimentacionMdl($registros);
		return $respuesta;
	}
			public function listarregistrosAceleracionCtr() {
		$registros = "unidad_acel";
		$respuesta = Modeloregistros::listarregistrosAceleracionMdl($registros);
		return $respuesta;
	}
			public function listarregistrosPesajeCtr() {
		$registros = "unidad_pesaje";
		$respuesta = Modeloregistros::listarregistrosPesajeMdl($registros);
		return $respuesta;
	}
			public function listarregistrosDescargaCtr() {
		$registros = "unidad_descarga";
		$respuesta = Modeloregistros::listarregistrosDescargaMdl($registros);
		return $respuesta;
	}
	static public function ctrCrearRegistros($datos) {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlCrearregistros($registros, $datos);
		return $respuesta;
	}

	static public function ctrEliminarregistros($id_registros) {
		$registros = "unidades_balanza";
$respuesta = Modeloregistros::mdlEliminarregistros($registros, $id_registros);
		return $respuesta;
	}
	static public function ctrEditarregistros($id_registros) {
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlEditarregistros($registros, $id_registros);
		return $respuesta;
	}
	static public function ctrActualizarregistros($datos) {
		//Validamos si no viene imagen para actualizar solo la registros
		$registros = "unidades_balanza";
		$respuesta = Modeloregistros::mdlActualizarregistros($registros, $datos);
		return $respuesta;
	}
}
?>