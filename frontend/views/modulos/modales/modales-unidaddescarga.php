<?php 
echo'
<div class="modal" id="descarga" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 2300px;">
    <div class="modal-content">
      <div class="modal-header"  style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Descarga</h5>
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
      <td> <a href="../formulario/'.substr($valuedes["descargaimg"], 3).'"><img  width="100%" src="../formulario/'.substr($valuedes["descargaimg"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>

      </div>
                    <div class="col-sm-6">

<h5>Información Unidad de Descarga</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">ID: </th>
      <td>'.nl2br($valuedes["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($valuedes["cantidad_sprocket"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($valuedes["medida_banda"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valuedes["eje"]).'</td>
    </tr>
  <tr>
      <th scope="row">Altura:</th>
      <td>'.nl2br($valuedes["altura"]).'</td>
    </tr>
    <tr>
      <th scope="row">Buffer:</th>
      <td>'.nl2br($valuedes["buffer"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cantidad Paletas:</th>
      <td>'.nl2br($valuedes["cantidad_paletas"]).'</td>
    </tr>
  </tbody>
</table>
</div>
      </div>
                  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row"  style="margin-top: 20px;    font-size: 12px;">



<div class="col-sm-12">
<div id="accordion">';

if ($valuedes["id_sprockets"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargasprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="descargasprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuedes["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuedes["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuedes["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuedes["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuedes["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


if ($valuedes["id_banda"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargabanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="descargabanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuedes["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuedes["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuedes["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuedes["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuedes["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["bandaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



if ($valuedes["id_motor"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargamotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargamotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
<tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuedes["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuedes["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuedes["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuedes["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



 if ($valuedes["id_rodamientos"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargadescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargadescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
  <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuedes["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuedes["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuedes["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuedes["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



      if ($valuedes["id_paletas"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargapaletas" aria-expanded="true" aria-controls="calidadsprockets">
          Paletas
        </button>
      </h5>
    </div>

    <div id="descargapaletas" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered table-sm" style="font-size: 12px;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">Tipo: </th>
      <td>'.nl2br($valuedes["tipo_paleta"]).'</td>


    </tr>

    <tr>
      <th scope="row">Medida Paleta : </th>
      <td>'.nl2br($valuedes["medida_paleta"]).'</td>
    </tr>
     <tr>
  
      <th class="bg-info" scope="row" colspan="2">Medida Bujes</th>
  
    </tr>
    <tr class="table-info">
      <th  scope="row">Diametro Exterior Cuerpo Superior: </th>
      <td>'.nl2br($valuedes["decs"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["dics"]).'</td>
    </tr>
       <tr class="table-info">
      <th scope="row">Altura Cuerpo Superior:</th>
      <td>'.nl2br($valuedes["acs"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Altura Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["aci"]).'</td>
    </tr>
     <tr class="table-info">
      <th scope="row">Diametro Interior Cuerpo Inferior:</th>
      <td>'.nl2br($valuedes["dici"]).'</td>
    </tr>
      <tr>
       <tr>
      <th class="bg-danger" scope="row" colspan="2">Medida Housing</th>
    </tr>
  <tr class="table-danger">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($valuedes["altura_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Ancho: </th>
      <td>'.nl2br($valuedes["ancho_paleta"]).'</td>
    </tr>
      <tr class="table-danger">
      <th  scope="row">Fondo: </th>
      <td>'.nl2br($valuedes["fondo_paleta"]).'</td>
    </tr>
     <tr class="table-danger">
      <th  scope="row">Perforación: </th>
      <td>'.nl2br($valuedes["perforacion_paleta"]).'</td>
    </tr>
    <tr class="table-danger">
      <th  scope="row">Anclaje: </th>
      <td>'.nl2br($valuedes["anclaje"]).'</td>
    </tr>
      <tr>
      <th class="bg-success" scope="row" colspan="2">Medida Eje</th>
    </tr>
 <tr class="table-success">
      <th  scope="row">Altura: </th>
      <td>'.nl2br($valuedes["alturaeje"]).'</td>
    </tr>
     <tr class="table-success">
      <th  scope="row">Diametro: </th>
      <td>'.nl2br($valuedes["diametroeje"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Brazo Leva:</th>
      <td>'.nl2br($valuedes["medidas_brazo_leva"]).'</td>
    </tr>
     <tr>
      <th scope="row">Cilindrado:</th>
      <td>'.nl2br($valuedes["cilindrado_paleta"]).'</td>
    </tr>
      <tr>
      <th scope="row">Racors:</th>
      <td>'.nl2br($valuedes["racors"]).'</td>
    </tr>
      <tr>
      <th scope="row">Orientacion:</th>
      <td>'.nl2br($valuedes["orientacion"]).'</td>
    </tr>
        <tr>
      <th scope="row">Imagen:</th>
      <td>';
if($valuedes["paletaimg"]==''){

}else{
      echo'
<a href="../formulario/'.substr($valuedes["paletaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["paletaimg"], 3).'"></a>';
}
echo'</td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}




      if ($valuedes["id_cilindros"]=='') {


}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#descargacilindro" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="descargacilindro" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Nombre: </th>
      <td>'.nl2br($valuedes["nombre_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro : </th>
      <td>'.nl2br($valuedes["diametro_cilindro"]).'</td>
    </tr>
    <tr>
      <th scope="row">Largo:</th>
      <td>'.nl2br($valuedes["largo_cilindro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo:</th>
      <td>'.nl2br($valuedes["materialcuerpo"]).'</td>
    </tr>
<tr>
      <th scope="row">Material Vastago:</th>
      <td>'.nl2br($valuedes["materialvastago"]).'</td>
    </tr>
    <tr>
      <th scope="row">Medida Hilo:</th>
      <td>'.nl2br($valuedes["medidahilo"]).'</td>
    </tr>

      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuedes["cilindroImg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuedes["cilindroImg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}



echo'

      </div>

      </div>';

  
      echo '
      
  

      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>';
 ?>