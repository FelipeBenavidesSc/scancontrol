<?php 

class ControllerUnidadesBalanza {

	public function listarUnidadesBalanzaCtr($id) {
		$tabla = "unidades_balanza";
		$respuesta = ModeloUnidadesBalanza::listarUnidadesBalanzaMdl($tabla,$id);
		return $respuesta;
	}
	public function listarUnidadCalidadCtr($id_calidad) {
		$tabla = "estacion_calidad";
		$respuesta = ModeloUnidadesBalanza::listarUnidadCalidadMdl($tabla,$id_calidad);
		return $respuesta;
	}
		public function listarUnidadAlimentacionCtr($id_alimentacion) {
		$tabla = "unidad_alim";
		$respuesta = ModeloUnidadesBalanza::listarUnidadAlimentacionMdl($tabla,$id_alimentacion);
		return $respuesta;
	}
	public function listarUnidadAceleracionCtr($id_aceleracion) {
		$tabla = "unidad_acel";
		$respuesta = ModeloUnidadesBalanza::listarUnidadAceleracionMdl($tabla,$id_aceleracion);
		return $respuesta;
	}
		public function listarUnidadPesajeCtr($id_pesaje) {
		$tabla = "unidad_pesaje";
		$respuesta = ModeloUnidadesBalanza::listarUnidadPesajeMdl($tabla,$id_pesaje);
		return $respuesta;
	}
		public function listarUnidadDescargaCtr($id_descarga) {
		$tabla = "unidad_descarga";
		$respuesta = ModeloUnidadesBalanza::listarUnidadDescargaMdl($tabla,$id_descarga);
		return $respuesta;
	}
	public function listarTElectricoAutomaticoCtr() {
		$tabla = "telectrico_automatico";
		$respuesta = ModeloUnidadesBalanza::listarTElectricoAutomaticoMdl($tabla);
		return $respuesta;
	}
		public function listarTElectricoFuenteCtr() {
		$tabla = "telectrico_fuente";
		$respuesta = ModeloUnidadesBalanza::listarTElectricoFuenteMdl($tabla);
		return $respuesta;
	}
		public function listarTElectricoVdfCtr() {
		$tabla = "telectrico_vdf";
		$respuesta = ModeloUnidadesBalanza::listarTElectricoVdfMdl($tabla);
		return $respuesta;
	}
		public function listarTNeumaticoAutomaticoCtr() {
		$tabla = "tneumatico_automatico";
		$respuesta = ModeloUnidadesBalanza::listarTNeumaticoAutomaticoMdl($tabla);
		return $respuesta;
	}
		public function listarTNeumaticoFuenteCtr() {
		$tabla = "tneumatico_fuente";
		$respuesta = ModeloUnidadesBalanza::listarTNeumaticoFuenteMdl($tabla);
		return $respuesta;
	}
		public function listarTNeumaticoManifoldCtr() {
		$tabla = "tneumatico_manifold";
		$respuesta = ModeloUnidadesBalanza::listarTNeumaticoManifoldMdl($tabla);
		return $respuesta;
	}
		public function listarTNeumaticoPlcCtr() {
		$tabla = "tneumatico_plc";
		$respuesta = ModeloUnidadesBalanza::listarTNeumaticoPlcMdl($tabla);
		return $respuesta;
	}
}

?>