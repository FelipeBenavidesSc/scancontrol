<?php

require_once "../formulario/models/conexion.php";

Class ModeloUnidadesBalanza {
static public function listarUnidadesBalanzaMdl($tabla,$id) {
$sql = Conexion::conectar()->prepare("SELECT ba.cliente,ba.grader,ba.id_unidad_balanza,ba.id_balanza,ba.id_unidad_al,ba.id_pesaje,ba.id_unidad_acel,ba.id_unidad_desc,ba.id_calidad,ca.rutaImg imgcalidad,ca.numero_puestos puestosca,ca.tipo_sprockets sprocketca,ca.cantidad_sprockets sprocketscantidadca,ca.tipo_banda tipobandaca,ca.medida_banda medidabandaca,ca.eje ejeca,ca.cilindros cilindrosca,ca.tipo_botoneras tipobotonerasca,ca.cantidad_botoneras cantidadbotonerasca,ca.tipo_sensores tiposensoresca,ca.cantidad_sensores sensorescantidad,ca.racors racorsca,ca.tipo_motor tipomotorca,ca.tipo_descanso tipodescansoca,acel.rutaImg imgacel,alim.rutaImg imgalim,alim.largo_banda largobandaalim,alim.tipo_sprockets sprocketalim,alim.cantidad_sprockets cantidadsprocketsalim,alim.banda_tipo bandaalim,alim.banda_medidas bandamedidasalim,alim.eje ejealim,alim.tipo_motor motoralim,alim.tipo_descanso descansoalim,des.rutaImg imgdes,pes.id_unidad_pesaje,pes.tipo_sensores sensorespesajes,pes.tipo_sprocket sprocketpesajes,pes.cantidad_sprocket sprocketcantidadpesajes,pes.tipo_banda bandapesajes,pes.medida_banda bandamedidaspesajes,pes.eje ejepesajes,pes.tipo_motor motorpesajes,pes.tipo_rodamientos rodamientospesajes,pes.entradaalto,pes.entradaancho,pes.entradaespesor,pes.pesajealto,pes.pesajeancho,pes.pesajeespesor,pes.salidaalto,pes.salidaancho,pes.salidaespesor,pes.tableroelectrico electricopesajes,pes.tableroneumatico neumaticopesajes,pes.rutaImg imgpesajes,spro.serie seriespro,spro.modelo modelospro,spro.dientes dientesspro,spro.perforacion perforacionpspro, spro.descripcion descripcionspro,spro.precio preciospro,ban.ancho anchobanda,ban.material materialbanda,ban.descripcion descripcionbanda,ban.paso pasobanda,ban.superficie superficiebanda,ban.numero_serie seriebanda,ci.nombre nombreci,ci.diametro diametroci,ci.largo largoci,ci.materialcuerpo cuerpoci,ci.materialvastago vastagoci,ci.medidahilo hiloci,ci.precio precioci,se.modelo modelose,se.contacto contactose,se.distancia distanciase,se.marca marcase,se.precio preciose,se.tipo_sensor tipose,se.voltaje voltajese,mo.ancho anchomotor,mo.capacidad capacidadmotor,mo.marca marcamotor,mo.precio preciomotor,mo.rpm rpmmotor,mo.usillo usillomotor,spro2.modelo modelospro2,spro2.serie seriespro2,spro2.dientes dientesspro2,spro2.perforacion perforacionspro2,spro2.precio preciospro2,spro2.descripcion descripcionspro2,ban2.ancho anchobanda2,ban2.material materialbanda2,ban2.descripcion descripcionbanda2,ban2.paso pasobanda2,ban2.superficie superficiebanda2,ban2.numero_serie seriebanda2 FROM $tabla ba LEFT JOIN estacion_calidad ca on ca.id_calidad= ba.id_calidad LEFT JOIN unidad_acel acel on  acel.id_unidad_acel= ba.id_unidad_acel  LEFT JOIN unidad_alim alim on  alim.id_unidad_alim= ba.id_unidad_al  LEFT JOIN unidad_descarga des on  des.id_unidad_descarga= ba.id_unidad_desc LEFT JOIN unidad_pesaje pes on pes.id_unidad_pesaje=ba.id_pesaje LEFT JOIN sprockets spro on spro.id_sprockets=ca.tipo_sprockets LEFT JOIN bandas ban on ban.id_banda=ca.tipo_banda
		LEFT JOIN cilindros ci on ci.id_cilindros=ca.cilindros LEFT JOIN sensor se on se.id_sensor=ca.tipo_sensores LEFT JOIN motor mo on mo.id_motor=ca.tipo_motor LEFT JOIN sprockets spro2 on spro2.id_sprockets=alim.tipo_sprockets LEFT JOIN bandas ban2 on ban2.id_banda=alim.banda_tipo where id_unidad_balanza = $id
");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarUnidadCalidadMdl($tabla,$id_calidad) {
$sql = Conexion::conectar()->prepare("SELECT a.descripcion despcal,a.id_calidad,a.numero_puestos,a.cantidad_sprockets,a.tipo_banda,a.medida_banda,a.eje,a.tipo_botoneras,a.cantidad_botoneras,a.racors,a.rutaImg imgcalidad,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie,b.paso,b.numero_serie seriebanda,b.descripcion bandadescripcion,b.ancho anchobanda,b.material materialbanda,b.rutaImg imgbanda,ci.id_cilindros,ci.nombre nombrecilindros,ci.diametro diametrocilindros,ci.largo largocilindros,ci.materialcuerpo,ci.materialvastago,ci.medidahilo,ci.rutaImg imgcilindros,se.id_sensor,se.tipo_sensor sensortipo,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento rodamientodescanso,r.material descansomaterial,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,m.id_motor,m.rpm,m.marca marcamotor,m.usillo usillomotor,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor FROM estacion_calidad a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN cilindros ci on ci.id_cilindros=a.cilindros LEFT JOIN motor m on m.id_motor=a.tipo_motor WHERE id_calidad = $id_calidad
");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarUnidadAlimentacionMdl($tabla,$id_alimentacion) {
$sql = Conexion::conectar()->prepare("SELECT a.descripcion descrialim,a.id_unidad_alim,a.cantidad_sprockets,a.banda_medidas,a.eje,a.largo_banda,a.rutaImg alimentacionimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.precio preciospro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.precio preciobanda,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.precio descansoprecio,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.precio preciomotor,m.rutaImg motorimg  FROM unidad_alim a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor where id_unidad_alim = $id_alimentacion
");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarUnidadAceleracionMdl($tabla,$id_aceleracion) {
$sql = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_acel,a.cantidad_sprockets,a.banda_medidas,a.eje,a.rutaImg imgaceleracion,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.precio preciospro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.precio bandaprecio,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.precio descansoprecio,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.precio motorprecio,m.rutaImg motorimg  FROM unidad_acel a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprockets  LEFT JOIN bandas b on b.id_banda=a.banda_tipo LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor where id_unidad_acel = $id_aceleracion");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarUnidadPesajeMdl($tabla,$id_pesaje) {
$sql = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_pesaje,a.cantidad_sensores,a.cantidad_sprocket,a.medida_banda,a.eje,a.entradaalto,a.entradaancho,a.entradaespesor,a.pesajealto,a.pesajeancho,a.pesajeespesor,a.salidaalto,a.salidaancho,a.salidaespesor,a.rutaImg imgpesaje,se.id_sensor,se.tipo_sensor,se.marca marcasensor,se.modelo modelosensor,se.voltaje voltajesensor,se.distancia distanciasensor,se.contacto contactosensor,se.rutaImg imgsensor,s.id_sprockets,s.serie seriesprockets,s.modelo modelosprockets,s.dientes dientessprockets,s.perforacion perforacionsprockets,s.descripcion descripcionsprockets,s.rutaImg imgsprockets,b.id_banda,b.superficie superficiebanda,b.paso pasobanda,b.numero_serie numeroseriebanda,b.descripcion descripcionbanda,b.ancho anchobanda,b.material bandamaterial,b.rutaImg imgbanda,m.id_motor,m.rpm,m.marca marcamotor,m.usillo,m.ancho anchomotor,m.capacidad capacidadmotor,m.rutaImg imgmotor,r.id_rodamientos,r.modelo modelodescanso,r.rodamiento,r.material materialdescanso,r.fijaciones fijacionesdescanso,r.rutaImg imgdescanso,te.id_tableroelectrico,te.altura alturate,te.ancho anchote,te.fondo fondote,te.contactor contactorte,te.rutaImg imgte,tn.id_tableroneumatico,tn.altura alturatn,tn.ancho anchotn,tn.fondo fondotn,tn.rutaImg imgtn  FROM unidad_pesaje  a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN sensor se on se.id_sensor=a.tipo_sensores LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_rodamientos LEFT JOIN tableroelectrico te on te.id_tableroelectrico=a.tableroelectrico LEFT JOIN tablero_neumatico tn on tn.id_tableroneumatico=a.tableroneumatico WHERE id_unidad_pesaje = $id_pesaje");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarUnidadDescargaMdl($tabla,$id_descarga) {
$sql = Conexion::conectar()->prepare("SELECT a.descripcion,a.id_unidad_descarga,a.cantidad_sprocket,a.medida_banda,a.eje,a.altura,a.buffer,a.cantidad_paletas,a.rutaImg descargaimg,s.id_sprockets,s.serie spro_serie,s.modelo spro_modelo,s.dientes,s.perforacion,s.descripcion descr_spro,s.rutaImg sproimg,b.id_banda,b.superficie,b.paso,b.numero_serie serie_banda,b.descripcion banda_descripcion,b.ancho ancho_banda,b.material,b.rutaImg bandaimg,r.id_rodamientos,r.modelo modelo_descanso,r.rodamiento,r.material material_descanso,r.fijaciones,r.rutaImg descansoimg,m.id_motor,m.rpm,m.marca,m.usillo,m.ancho corriente,m.capacidad potencia,m.rutaImg motorimg,p.id_paletas,p.tipo_paleta,p.medida_paleta,p.decs,p.dics,p.acs,p.aci,p.dici,p.altura altura_paleta,p.ancho ancho_paleta,p.fondo fondo_paleta,p.perforacion perforacion_paleta,p.anclaje,p.alturaeje,p.diametroeje,p.medidas_brazo_leva,p.cilindrado cilindrado_paleta,p.racors,p.orientacion,p.rutaImg paletaimg,c.id_cilindros,c.nombre nombre_cilindro,c.diametro diametro_cilindro,c.largo largo_cilindro,c.materialcuerpo,c.materialvastago,c.medidahilo,c.rutaImg cilindroImg  FROM $tabla a LEFT JOIN sprockets s on s.id_sprockets=a.tipo_sprocket  LEFT JOIN bandas b on b.id_banda=a.tipo_banda LEFT JOIN rodamientos r on r.id_rodamientos=a.tipo_descanso LEFT JOIN motor m on m.id_motor=a.tipo_motor LEFT JOIN paletas p on p.id_paletas=a.tipo_paletas LEFT JOIN cilindros c on c.id_cilindros=a.tipo_cilindro where id_unidad_descarga = $id_descarga");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarTElectricoAutomaticoMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarTElectricoFuenteMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarTElectricoVdfMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN variador_frecuencia v ON v.id_vdf=t.tipo_vdf");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarTNeumaticoAutomaticoMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN automatico a ON a.id_automatico=t.tipo_automatico");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarTNeumaticoFuenteMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN fuentepoder f ON f.id_fuentepoder=t.tipo_fuente");

$sql -> execute();
		return $sql -> fetchAll();
}
static public function listarTNeumaticoManifoldMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN manifold v ON v.id_manifold=t.tipo_manifold");

$sql -> execute();
		return $sql -> fetchAll();
}

static public function listarTNeumaticoPlcMdl($tabla) {
$sql = Conexion::conectar()->prepare("SELECT * FROM $tabla t INNER JOIN plc v ON v.id_plc=t.tipo_plc");

$sql -> execute();
		return $sql -> fetchAll();
}
}


?>