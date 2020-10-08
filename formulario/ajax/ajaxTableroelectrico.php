<?php
require_once "../controllers/tableroelectrico.controller.php";
require_once "../models/tableroelectrico.modelo.php";
error_reporting(0);

Class ajaxTableroelectrico {
	public function crearTableroelectrico(){
		$datos = array(
			            "altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"cantidadautomaticos"=>$this->cantidadautomaticos,
						"tipoautomaticos"=>$this->tipoautomaticos,
						"tipofuentepoder"=>$this->tipofuentepoder,
						"descripcionautomaticos"=>$this->descripcionautomaticos,
						"descripcionvdf"=>$this->descripcionvdf,
						"descripcionfuente"=>$this->descripcionfuente,
						"cantidadvdf"=>$this->cantidadvdf,
						"tipovdf"=>$this->tipovdf,
						"contactor"=>$this->contactor,
						"enchufemodelo"=>$this->enchufemodelo,
						"enchufeamperaje"=>$this->enchufeamperaje,
						"prensasmodelo"=>$this->prensasmodelo,
						"prensascantidad"=>$this->prensascantidad,
						"marcaswitch"=>$this->marcaswitch,
						"puertoswitch"=>$this->puertoswitch,
						"modeloemergencia"=>$this->modeloemergencia,
						"botoneras"=>$this->botoneras,
				"mainswitch"=>$this->mainswitch,
						"imagen"=>$this->imagen_tableroelectrico
				
					);


		$respuesta = ControllerTableroelectrico::ctrCrearTableroelectrico($datos);
		echo $respuesta;
	}
	public function editarTableroelectrico(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTableroelectrico($id_tableroelectrico);
		$datos = array("id_tableroelectrico"=>$respuesta["id_tableroelectrico"],
						"altura"=>$respuesta["altura"], 
						  "ancho"=>$respuesta["ancho"],
				          "fondo"=>$respuesta["fondo"],
				          "contactor"=>$respuesta["contactor"],
						"marcaswitch"=>$respuesta["marcaswitch"],
						"puertoswitch"=>$respuesta["puertoswitch"],
						"modeloemergencia"=>$respuesta["modeloemergencia"],
						"botoneras"=>$respuesta["botoneras"],
						"mainswitch"=>$respuesta["mainswitch"],
			
				        "imagen"=>substr($respuesta["rutaImg"], 3)
						);


		echo json_encode($datos);
	}
	public function editarTableroautomaticos(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTableroautomaticos($id_tableroelectrico);

	echo json_encode($respuesta);
	}
		public function editarTablerofuente(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTablerofuente($id_tableroelectrico);

	echo json_encode($respuesta);
	}
		public function editarTablerovdf(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTablerovdf($id_tableroelectrico);

	echo json_encode($respuesta);
	}
			public function editarTableroenchufe(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTableroenchufe($id_tableroelectrico);

	echo json_encode($respuesta);
	}
				public function editarTableroprensas(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEditarTableroprensas($id_tableroelectrico);

	echo json_encode($respuesta);
	}
	public function actualizarTableroelectrico(){
		$datos = array( "id_tableroelectrico"=>$this->id_tableroelectrico,
				        "idautomatico"=>$this->idautomatico,
				        "idfuente"=>$this->idfuente,
				        "idvdf"=>$this->idvdf,
				        "idprensas"=>$this->idprensas,
				        "idenchufe"=>$this->idenchufe,
				        "altura"=>$this->altura,
						"ancho"=>$this->ancho,
						"fondo"=>$this->fondo,
						"cantidadautomaticos"=>$this->cantidadautomaticos,
						"tipoautomaticos"=>$this->tipoautomaticos,
						"tipofuentepoder"=>$this->tipofuentepoder,
						"cantidadvdf"=>$this->cantidadvdf,
						"tipovdf"=>$this->tipovdf,
						"tipoautomaticoseditar"=>$this->tipoautomaticoseditar,
						"cantidadautomaticoseditar"=>$this->cantidadautomaticoseditar,
						"tipofuentepodereditar"=>$this->tipofuentepodereditar,
						"cantidadvdfeditar"=>$this->cantidadvdfeditar,
						"tipovdfeditar"=>$this->tipovdfeditar,
	                     "descripcionautomaticos"=>$this->descripcionautomaticos,
						"descripcionvdf"=>$this->descripcionvdf,
                         "descripcionautomaticoseditar"=>$this->descripcionautomaticoseditar,
						"descripcionvdfeditar"=>$this->descripcionvdfeditar,
						"descripcionfuenteeditar"=>$this->descripcionfuenteeditar,
						"descripcionfuente"=>$this->descripcionfuente,
						"contactor"=>$this->contactor,
						"enchufemodeloeditar"=>$this->enchufemodeloeditar,
						"enchufemodelo"=>$this->enchufemodelo,
						"enchufeamperajeeditar"=>$this->enchufeamperajeeditar,
						"enchufeamperaje"=>$this->enchufeamperaje,
						"prensasmodeloeditar"=>$this->prensasmodeloeditar,
						"prensasmodelo"=>$this->prensasmodelo,
						"prensascantidadeditar"=>$this->prensascantidadeditar,
						"prensascantidad"=>$this->prensascantidad,
						"marcaswitch"=>$this->marcaswitch,
						"puertoswitch"=>$this->puertoswitch,
						"modeloemergencia"=>$this->modeloemergencia,
						"botoneras"=>$this->botoneras,
				        "mainswitch"=>$this->mainswitch,
				

						"imagen"=>$this->imagen_tableroelectrico,
						"rutaActual"=>$this->rutaActual

						);
		$respuesta = ControllerTableroelectrico::ctrActualizarTableroelectrico($datos);
		echo $respuesta;
	}
	public function eliminarTableroelectrico(){
		$id_tableroelectrico = $this->id_tableroelectrico;
		$ruta = $this->imagen_tableroelectrico;
		$respuesta = ControllerTableroelectrico::ctrEliminarTableroelectrico($id_tableroelectrico,$ruta);
		echo $respuesta;
	}
		public function eliminarTautomatico(){
		$id_tautomatico = $this->id_tautomatico;
		$respuesta = ControllerTableroelectrico::ctrEliminarTautomatico($id_tautomatico);
		echo $respuesta;
	}
		public function eliminarTfuente(){
		$id_tfuente = $this->id_tfuente;
		$respuesta = ControllerTableroelectrico::ctrEliminarTfuente($id_tfuente);
		echo $respuesta;
	}
		public function eliminarTvdf(){
		$id_tvdf = $this->id_tvdf;
		$respuesta = ControllerTableroelectrico::ctrEliminarTvdf($id_tvdf);
		echo $respuesta;
	}
		public function eliminarTenchufe(){
		$id_tenchufe = $this->id_tenchufe;
		$respuesta = ControllerTableroelectrico::ctrEliminarTenchufe($id_tenchufe);
		echo $respuesta;
	}
		public function eliminarTprensas(){
		$id_tprensas = $this->id_tprensas;
		$respuesta = ControllerTableroelectrico::ctrEliminarTprensas($id_tprensas);
		echo $respuesta;
	}

}
$tipoOperacion = $_POST["tipoOperacion"];
if($tipoOperacion == "insertartableroelectrico") {
	$crearNuevoTableroelectrico = new ajaxTableroelectrico();
	$crearNuevoTableroelectrico -> altura = $_POST["Altura"];
	$crearNuevoTableroelectrico -> ancho = $_POST["Ancho"];
	$crearNuevoTableroelectrico -> fondo = $_POST["Fondo"];
	$crearNuevoTableroelectrico -> cantidadautomaticos = $_POST["Cantidadautomaticos"];
	$crearNuevoTableroelectrico -> tipoautomaticos = $_POST["Tipoautomaticos"];
	$crearNuevoTableroelectrico -> descripcionautomaticos = $_POST["DescripcionAutomatico"];
	$crearNuevoTableroelectrico -> descripcionvdf = $_POST["DescripcionVdf"];
	$crearNuevoTableroelectrico -> descripcionfuente = $_POST["DescripcionFuente"];
	$crearNuevoTableroelectrico -> tipofuentepoder = $_POST["TipoFuentePoder"];
	$crearNuevoTableroelectrico -> cantidadvdf = $_POST["CantidadVdf"];
	$crearNuevoTableroelectrico -> tipovdf = $_POST["TipoVdf"];
	$crearNuevoTableroelectrico -> enchufemodelo = $_POST["EnchufeModelo"];
	$crearNuevoTableroelectrico -> enchufeamperaje = $_POST["EnchufeAmperaje"];
	$crearNuevoTableroelectrico -> prensasmodelo = $_POST["PrensasModelo"];
	$crearNuevoTableroelectrico -> prensascantidad = $_POST["PrensasCantidad"];
	$crearNuevoTableroelectrico -> contactor = $_POST["Contactor"];
	$crearNuevoTableroelectrico -> mainswitch = $_POST["MainSwitch"];
	$crearNuevoTableroelectrico -> botoneras = $_POST["Botoneras"];
	$crearNuevoTableroelectrico -> marcaswitch = $_POST["MarcaSwitch"];
	$crearNuevoTableroelectrico -> puertoswitch = $_POST["PuertoSwitch"];
	$crearNuevoTableroelectrico -> modeloemergencia = $_POST["ModeloEmergencia"];
    $crearNuevoTableroelectrico -> imagen_tableroelectrico = $_FILES["imagenTableroelectrico"];
	$crearNuevoTableroelectrico ->crearTableroelectrico();
}

if ($tipoOperacion == "editarTableroelectrico") {
	$editarTableroelectrico = new ajaxTableroelectrico();
	$editarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTableroelectrico -> editarTableroelectrico();
}
if ($tipoOperacion == "editarTableroautomaticos") {
	$editarTableroautomaticos = new ajaxTableroelectrico();
	$editarTableroautomaticos -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTableroautomaticos -> editarTableroautomaticos();
}
if ($tipoOperacion == "editarTablerofuente") {
	$editarTablerofuente = new ajaxTableroelectrico();
	$editarTablerofuente -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTablerofuente -> editarTablerofuente();
}
if ($tipoOperacion == "editarTablerovdf") {
	$editarTablerovdf = new ajaxTableroelectrico();
	$editarTablerovdf -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTablerovdf -> editarTablerovdf();
}
if ($tipoOperacion == "editarTableroenchufe") {
	$editarTableroenchufe = new ajaxTableroelectrico();
	$editarTableroenchufe -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTableroenchufe -> editarTableroenchufe();
}
if ($tipoOperacion == "editarTableroprensas") {
	$editarTableroprensas = new ajaxTableroelectrico();
	$editarTableroprensas -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$editarTableroprensas -> editarTableroprensas();
}
if ($tipoOperacion == "actualizarTableroelectrico") {
	$actualizarTableroelectrico = new ajaxTableroelectrico();
	$actualizarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$actualizarTableroelectrico -> idautomatico = $_POST["idAutomatico"];
	$actualizarTableroelectrico -> idfuente = $_POST["idFuente"];
	$actualizarTableroelectrico -> idvdf = $_POST["idVdf"];
	$actualizarTableroelectrico -> idenchufe = $_POST["idEnchufe"];
	$actualizarTableroelectrico -> idprensas = $_POST["idPrensas"];
	$actualizarTableroelectrico -> altura = $_POST["Altura"];
    $actualizarTableroelectrico -> ancho = $_POST["Ancho"];
	$actualizarTableroelectrico -> fondo = $_POST["Fondo"];
	$actualizarTableroelectrico -> cantidadautomaticos = $_POST["Cantidadautomaticos"];
	$actualizarTableroelectrico -> tipoautomaticos = $_POST["Tipoautomaticos"];
	$actualizarTableroelectrico -> tipofuentepoder = $_POST["TipoFuentePoder"];
	$actualizarTableroelectrico -> cantidadvdf = $_POST["CantidadVdf"];
	$actualizarTableroelectrico -> tipovdf = $_POST["TipoVdf"];
	$actualizarTableroelectrico -> contactor = $_POST["Contactor"];
	$actualizarTableroelectrico -> descripcionvdf = $_POST["DescripcionVdf"];
	$actualizarTableroelectrico -> descripcionautomaticos = $_POST["DescripcionAutomatico"];
	$actualizarTableroelectrico -> descripcionfuente = $_POST["DescripcionFuente"];
	$actualizarTableroelectrico -> descripcionfuenteeditar = $_POST["DescripcionFuenteEditar"];
	$actualizarTableroelectrico -> cantidadautomaticoseditar = $_POST["CantidadautomaticosEditar"];
	$actualizarTableroelectrico -> tipoautomaticoseditar = $_POST["TipoautomaticosEditar"];
	$actualizarTableroelectrico -> tipofuentepodereditar = $_POST["TipoFuentePoderEditar"];
	$actualizarTableroelectrico -> cantidadvdfeditar = $_POST["CantidadVdfEditar"];
	$actualizarTableroelectrico -> tipovdfeditar = $_POST["TipoVdfEditar"];
	$actualizarTableroelectrico -> descripcionvdfeditar = $_POST["DescripcionVdfEditar"];
	$actualizarTableroelectrico -> descripcionautomaticoseditar = $_POST["DescripcionAutomaticoEditar"];
	$actualizarTableroelectrico -> enchufemodelo = $_POST["EnchufeModelo"];
	$actualizarTableroelectrico -> enchufemodeloeditar = $_POST["EnchufeModeloEditar"];
	$actualizarTableroelectrico -> enchufeamperaje = $_POST["EnchufeAmperaje"];
	$actualizarTableroelectrico -> enchufeamperajeeditar = $_POST["EnchufeAmperajeEditar"];
	$actualizarTableroelectrico -> prensasmodeloeditar = $_POST["PrensasModeloEditar"];
	$actualizarTableroelectrico -> prensasmodelo = $_POST["PrensasModelo"];
	$actualizarTableroelectrico -> prensascantidadeditar = $_POST["PrensasCantidadEditar"];
	$actualizarTableroelectrico -> prensascantidad = $_POST["PrensasCantidad"];
	$actualizarTableroelectrico -> mainswitch = $_POST["MainSwitch"];
	$actualizarTableroelectrico -> botoneras = $_POST["Botoneras"];
	$actualizarTableroelectrico -> marcaswitch = $_POST["MarcaSwitch"];
	$actualizarTableroelectrico -> puertoswitch = $_POST["PuertoSwitch"];
	$actualizarTableroelectrico -> modeloemergencia = $_POST["ModeloEmergencia"];
    $actualizarTableroelectrico -> imagen_tableroelectrico = $_FILES["imagenTableroelectrico"];
	$actualizarTableroelectrico -> rutaActual = $_POST["rutaActual"];
	$actualizarTableroelectrico -> actualizarTableroelectrico();
}
if ($tipoOperacion == "eliminarTableroelectrico") {
	$eliminarTableroelectrico = new ajaxTableroelectrico();
	$eliminarTableroelectrico -> id_tableroelectrico = $_POST["id_tableroelectrico"];
	$eliminarTableroelectrico -> imagen_tableroelectrico = $_POST["rutaImagen"];
	$eliminarTableroelectrico -> eliminarTableroelectrico();
}
if ($tipoOperacion == "eliminarTautomatico") {
	$eliminarTautomatico = new ajaxTableroelectrico();
	$eliminarTautomatico -> id_tautomatico = $_POST["id_automatico"];
	$eliminarTautomatico -> eliminarTautomatico();
}

if ($tipoOperacion == "eliminarTfuente") {
	$eliminarTfuente = new ajaxTableroelectrico();
	$eliminarTfuente -> id_tfuente = $_POST["id_fuente"];
	$eliminarTfuente -> eliminarTfuente();
}

if ($tipoOperacion == "eliminarTvdf") {
	$eliminarTvdf = new ajaxTableroelectrico();
	$eliminarTvdf -> id_tvdf = $_POST["id_vdf"];
	$eliminarTvdf -> eliminarTvdf();
}
if ($tipoOperacion == "eliminarTenchufe") {
	$eliminarTenchufe = new ajaxTableroelectrico();
	$eliminarTenchufe -> id_tenchufe = $_POST["id_enchufe"];
	$eliminarTenchufe -> eliminarTenchufe();
}
if ($tipoOperacion == "eliminarTprensas") {
	$eliminarTprensas = new ajaxTableroelectrico();
	$eliminarTprensas -> id_tprensas = $_POST["id_prensas"];
	$eliminarTprensas -> eliminarTprensas();
}
?>