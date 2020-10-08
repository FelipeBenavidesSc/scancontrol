
<?php  
echo'
<div  class="modal" id="alimentacion" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Alimentación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
      <td> <div class="col-sm-12"> <a href="../formulario/'.substr($value["imgalim"], 3).'"><img  width="100%" src="../formulario/'.substr($value["imgalim"], 3).'" ></a> </div></td>
    </tr>
  </tbody>
</table>
      </div>

      <div class="col-sm-6">

<h5>Información Unidad de Alimentación</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valuealim["descrialim"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($value["cantidadsprocketsalim"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($value["bandamedidasalim"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($value["ejealim"]).'</td>
    </tr>
     <tr>
      <th scope="row">Largo Banda:</th>
      <td>'.nl2br($value["largobandaalim"]).'</td>
    </tr>
   
  </tbody>
</table>
</div>
      </div>
      <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
      <div class="row" style="margin-top: 20px;    font-size: 12px;">
     <div class="col-sm-12">
<div id="accordion">
';

if ($value["sprocketalim"]=='') {
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionsprocket" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="alimentacionsprocket" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valuealim["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuealim["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valuealim["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valuealim["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuealim["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>
';
}
if ($value["bandaalim"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionbanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="alimentacionbanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Superficie: </th>
      <td>'.nl2br($valuealim["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valuealim["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valuealim["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valuealim["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valuealim["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["bandaimg"], 3).'"><img width="50%" src="../formulario/'.substr($valuealim["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';
}
if ($value["motoralim"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#alimentacionmotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="alimentacionmotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
 <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valuealim["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valuealim["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valuealim["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valuealim["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';
}
if ($value["descansoalim"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#alimentaciondescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="alimentaciondescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valuealim["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valuealim["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valuealim["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valuealim["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valuealim["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valuealim["descansoimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';
}

echo'
      </div>
      </div>
      </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>';
