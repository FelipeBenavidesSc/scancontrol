<?php  
echo'<div class="modal" id="pesaje" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 2300px;">
    <div class="modal-content">
      <div class="modal-header"  style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Pesaje</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      <div class="row">
          <div class="col-sm-6">


<h5>Imagen </h5>
<table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> <a href="../formulario/'.substr($valuepesa["imgpesaje"], 3).'"><img  width="100%" src="../formulario/'.substr($valuepesa["imgpesaje"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>
      </div>

 <div class="col-sm-6">

<h5>Información Unidad de Pesaje</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valuepesa["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sensores : </th>
      <td>'.nl2br($valuepesa["cantidad_sensores"]).'</td>
    </tr>
    <tr>
      <th scope="row">Cantidad Sprockets: </th>
      <td>'.nl2br($valuepesa["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Banda:</th>
      <td>'.nl2br($valuepesa["medida_banda"]).'</td>
    </tr>
  <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valuepesa["eje"]).'</td>
    </tr>
    <tr>

      <td colspan="2">
      <h4 style="text-align:center">Plataforma</h4>  
<table class="table" style="background-color: #25a9d9;">
  <thead class="thead-light">
    <tr>
      <th scope="col"></th>
      <th scope="col">Alto</th>
      <th scope="col">Ancho</th>
      <th scope="col">Espesor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Entrada</th>
      <td>'.nl2br($valuepesa["entradaalto"]).'</td>
      <td>'.nl2br($valuepesa["entradaancho"]).'</td>
      <td>'.nl2br($valuepesa["entradaespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Pesaje</th>
      <td>'.nl2br($valuepesa["pesajealto"]).'</td>
      <td>'.nl2br($valuepesa["pesajeancho"]).'</td>
      <td>'.nl2br($valuepesa["pesajeespesor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Salida</th>
      <td>'.nl2br($valuepesa["salidaalto"]).'</td>
      <td>'.nl2br($valuepesa["salidaancho"]).'</td>
      <td>'.nl2br($valuepesa["salidaespesor"]).'</td>
    </tr>
  </tbody>
</table>
       </td>
    </tr>

  </tbody>
</table>
</div>
      </div>

<h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>


<div class="row"  style="margin-top: 20px;    font-size: 12px;">

<div class="col-sm-12"><div id="accordion">';
      



if ($valuepesa["id_sensor"]=='') {

}else{
      echo'



  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="bw-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#pesajesensor" aria-expanded="true" aria-controls="calidadsprockets">
          Sensor
        </button>
      </h5>
    </div>

    <div id="pesajesensor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Tipo : </th>
      <td>'.nl2br($valuepesa["tipo_sensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Marca: </th>
      <td>'.nl2br($valuepesa["marcasensor"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo:</th>
      <td>'.nl2br($valuepesa["modelosensor"]).'</td>
    </tr>
     <tr>
      <th scope="row">Voltaje:</th>
      <td>'.nl2br($valuepesa["voltajesensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Distancia:</th>
      <td>'.nl2br($valuepesa["distanciasensor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Contacto:</th>
      <td>'.nl2br($valuepesa["contactosensor"]).'</td>
    </tr>
 
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgsensor"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgsensor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
       </div>
        </div>



         </div>';
}


if ($valuepesa["id_sprockets"]=='') {


}else{
      echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#pesajesprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="pesajesprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">


 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuepesa["seriesprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuepesa["modelosprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuepesa["dientessprockets"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuepesa["perforacionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuepesa["descripcionsprockets"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgsprockets"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgsprockets"], 3).'"></a></td>
    </tr>
  </tbody>
</table>

       </div>

        </div>
         </div>';
}
if ($valuepesa["id_banda"]=='') {

}else{
echo'



           <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#pesajebanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="pesajebanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuepesa["superficiebanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuepesa["pasobanda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuepesa["numeroseriebanda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuepesa["anchobanda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuepesa["descripcionbanda"]).'</td>
    </tr>
     <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuepesa["bandamaterial"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgbanda"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgbanda"], 3).'"></a></td>
    </tr>
  </tbody>
</table>


       </div>
       
        </div>
         </div>';
}

if ($valuepesa["id_motor"]=='') {
  # code...
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#pesajemotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="pesajemotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuepesa["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuepesa["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuepesa["anchomotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuepesa["capacidadmotor"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgmotor"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgmotor"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
       </div>
       
        </div>
         </div>


</div>
';
}
      if ($valuepesa["id_rodamientos"]=='') {
        # code...
      }else{
echo'
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descansomotor" aria-expanded="true" aria-controls="calidadsprockets">
          Descanso
        </button>
      </h5>
    </div>

    <div id="descansomotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuepesa["modelodescanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuepesa["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuepesa["materialdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuepesa["fijacionesdescanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuepesa["imgdescanso"], 3).'"><img  width="50%" src="../formulario/'.substr($valuepesa["imgdescanso"], 3).'"></a></td>
    </tr>
  </tbody>
</table>

      </div>
      </div>
      </div>';

}
echo '<h3 style="    background: #565454;
    color: white;
    padding: 5px;">Tableros</h3>
';
if ($valuepesa["id_tableroelectrico"]=='') {

}else{

echo'
<div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#calidadelectrico" aria-expanded="true" aria-controls="calidadsprockets">
          Tablero Electrico
        </button>
      </h5>
    </div>

    <div id="calidadelectrico" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Altura-Ancho-Fondo: </th>
      <td>'.nl2br($valuepesa["alturate"]).'x'.nl2br($valuepesa["anchote"]).'x'.nl2br($valuepesa["fondote"]).'</td>
    </tr>
    <tr>
      <th scope="row">Contactor : </th>
      <td>'.nl2br($valuepesa["contactorte"]).'</td>
    </tr>
    <tr>
      <th scope="row">Automaticos:</th>
      <td>';  
$sqltaumatico = ControllerUnidadesBalanza::listarTElectricoAutomaticoCtr();
foreach ($sqltaumatico as $key => $teautomatico) {
$idtablaautomatico=$teautomatico["id_tablero_electrico"];
if ($idtablaautomatico==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$teautomatico["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$teautomatico["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$teautomatico["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$teautomatico["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$teautomatico["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($teautomatico["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($teautomatico["rutaImg"], 3).'"></a></div></div></div>';
}
};
echo'</td>
    </tr>
      <tr>
      <th scope="row">Fuente de Poder:</th>
      <td>';
$sqltfuente = ControllerUnidadesBalanza::listarTElectricoFuenteCtr();
foreach ($sqltfuente as $key => $valorfuente) {
$idtablafuente=$valorfuente["id_tablero_electrico"];
if ($idtablafuente==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded"  style="background:#ffefef;margin-bottom:5px;"><div class="row"><div cl<div class="col-sm-12"><label style="font-weight: bold;"> Marca:</label> '.$valorfuente["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorfuente["amperaje"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Corriente: </label> '.$valorfuente["corriente"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Descripción: </label> '.$valorfuente["descripcion"].'  </div><div class="col-sm-12">  <a href="../formulario/'.substr($valorfuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorfuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo'</td>
    </tr>
      <tr>
      <th scope="row">Variador Frecuencia:</th>
      <td>';
$sqltvdf = ControllerUnidadesBalanza::listarTElectricoVdfCtr();
foreach ($sqltvdf as $key => $valorvdf) {
$idtablavdf=$valorvdf["id_tablero_electrico"];
if ($idtablavdf==$valuepesa["id_tableroelectrico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded style="background:#eaeaea;margin-bottom:5px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorvdf["cantidad"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> P:</label> '.$valorvdf["potencia"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">M:</label> '.$valorvdf["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción:</label> '.$valorvdf["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($valorvdf["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorvdf["rutaImg"], 3).'"></a></div></div> </div>';
}
};
echo'</td>
    </tr>
        <tr>
      <th scope="row">Imagen:</th>
      <td><img width="100%" src="../formulario/'.substr($valuepesa["imgte"], 3).'"> </td>
    </tr>
  </tbody>
</table>



      </div>
      </div>
      </div>';
}




if ($valuepesa["id_tableroneumatico"]=='') {
 
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#pesajeneumatico" aria-expanded="true" aria-controls="calidadsprockets">
          Tablero Neumatico
        </button>
      </h5>
    </div>

    <div id="pesajeneumatico" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">

 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Altura-Ancho-Fondo: </th>
      <td>'.nl2br($valuepesa["alturatn"]).'x'.nl2br($valuepesa["anchotn"]).'x'.nl2br($valuepesa["fondotn"]).'</td>
    </tr> <tr>
      <th scope="row">Automaticos: </th>
      <td>';
$sqltneumaticoautomatico = ControllerUnidadesBalanza::listarTNeumaticoAutomaticoCtr();
foreach ($sqltneumaticoautomatico as $key => $valorneumaticoautomatico) {
$idtablaautomatico=$valorneumaticoautomatico["id_tablero_neumatico"];
if ($idtablaautomatico==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f3f6fb;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorneumaticoautomatico["cantidad"].' </div><div class="col-sm-12"><label style="font-weight: bold;">Amperaje: </label> '.$valorneumaticoautomatico["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Marca:</label> '.$valorneumaticoautomatico["marca"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Tipo:</label> '.$valorneumaticoautomatico["tipo"].'</div><div class="col-sm-12"> <label style="font-weight: bold;"> Descripción: </label> '.$valorneumaticoautomatico["descripcion"].'</div><div class="col-sm-12">  <a href="../formulario/'.substr($valorneumaticoautomatico["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorneumaticoautomatico["rutaImg"], 3).'"></a></div></div></div>';
}
}
echo '</td>
    </tr>
    <tr>
      <th scope="row">Fuente de Poder: </th>
      <td>';
$sqlneumaticofuente = ControllerUnidadesBalanza::listarTNeumaticoFuenteCtr();

foreach ($sqlneumaticofuente as $key => $valorneumafuente) {
$idtablafuente=$valorneumafuente["id_tablero_neumatico"];
if ($idtablafuente==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#ffe3e3;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Cantidad:</label> '.$valorneumafuente["cantidad"].' </div><div class="col-sm-12"> <label style="font-weight: bold;">Amperaje:</label> '.$valorneumafuente["amperaje"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Corriente: </label> '.$valorneumafuente["corriente"].'</div><div class="col-sm-12">  <label style="font-weight: bold;">Descripción: </label> '.$valorneumafuente["descripcion"].'</div><div class="col-sm-12">   <a href="../formulario/'.substr($valorneumafuente["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valorneumafuente["rutaImg"], 3).'"></a></div></div></div>';

}
}
echo '</td>
    </tr>
    <tr>
      <th scope="row">Manifold:</th>
      <td>';
$tablamanifold = ControllerUnidadesBalanza::listarTNeumaticoManifoldCtr();
foreach ($tablamanifold as $key => $valormanifold) {
$idtablamanifold=$valormanifold["id_tablero_neumatico"];
if ($idtablamanifold==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Marca:</label> '.$valormanifold["marca"].' </div><div class="col-sm-12"> <label style="font-weight: bold;"> Hilo:</label> '.$valormanifold["medidas"].'</div><div class="col-sm-12"> <label style="font-weight: bold;">Cantidad Estaciones:</label> '.$valormanifold["sockets"].'</div><div class="col-sm-12"> <a href="../formulario/'.substr($valormanifold["rutaImg"], 3).'"> <label style="font-weight: bold;"></label> <img id="img" width="50" src="../formulario/'.substr($valormanifold["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>
    </tr>
      <tr>
      <th scope="row">PLC:</th>
      <td>';
$sqlplc = ControllerUnidadesBalanza::listarTNeumaticoPlcCtr();
foreach ($sqlplc as $key => $valorplc) {
$idtablavdf=$valorplc["id_tablero_neumatico"];
if ($idtablavdf==$valuepesa["id_tableroneumatico"]) {
   echo '<div class="shadow-lg p-3 mb-5 rounded" style="background:#f5f5f5;margin-bottom:2px;"><div class="row"><div class="col-sm-12"><label style="font-weight: bold;">Modelo:</label> '.$valorplc["modelo"].'</div><div class="col-sm-12"><label style="font-weight: bold;"> Descripción:</label> '.$valorplc["descripcion"].'</div><div class="col-sm-12"> <a href="../formulario/'.substr($valorplc["rutaImg"], 3).'"> <label style="font-weight: bold;">ver imagen</label> <img id="img" width="50" src="../formulario/'.substr($valorplc["rutaImg"], 3).'"></a></div></div></div>';
}
}

echo '</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <img width="100%" src="../formulario/'.substr($valuepesa["imgtn"], 3).'"></td>
    </tr>
  </tbody>
</table>
       </div>
       
        </div>
         </div>


</div>
';
}

 
echo'
   
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>';
?>