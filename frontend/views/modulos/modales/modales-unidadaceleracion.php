<?php 
echo'


<div class="modal" id="aceleracion" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLabel">Información Unidad Aceleración</h5>
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
      <td> <a href="../formulario/'.substr($value["imgacel"], 3).'"><img  width="100%" src="../formulario/'.substr($value["imgacel"], 3).'" ></a></td>
    </tr>
  </tbody>
</table>


      </div>
                  <div class="col-sm-6">

<h5>Información Unidad de Aceleración</h5>
 <table class="table table-bordered" style=" background: #075672;color:white;">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Descripción: </th>
      <td>'.nl2br($valueacel["descripcion"]).'</td>
    </tr> <tr>
      <th scope="row">Cantidad Sprockets : </th>
      <td>'.nl2br($valueacel["cantidad_sprockets"]).'</td>
    </tr>
    <tr>
      <th scope="row">Banda Medidas: </th>
      <td>'.nl2br($valueacel["banda_medidas"]).'</td>
    </tr>
    <tr>
      <th scope="row">Eje:</th>
      <td>'.nl2br($valueacel["eje"]).'</td>
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

  if ($valueacel["id_sprockets"]=='') {
}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionsprocket" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>

    <div id="aceleracionsprocket" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
      <th scope="row">Serie: </th>
      <td>'.nl2br($valueacel["spro_serie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valueacel["spro_modelo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Dientes:</th>
      <td>'.nl2br($valueacel["dientes"]).'</td>
    </tr>
     <tr>
      <th scope="row">Perforación:</th>
      <td>'.nl2br($valueacel["perforacion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valueacel["descr_spro"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["sproimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["sproimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
      </div>';


}


      if ($valueacel["id_banda"]=='') {

}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionbanda" aria-expanded="true" aria-controls="calidadsprockets">
          Banda
        </button>
      </h5>
    </div>

    <div id="aceleracionbanda" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>

      <th scope="row">Superficie: </th>
      <td>'.nl2br($valueacel["superficie"]).'</td>
    </tr>
    <tr>
      <th scope="row">Paso: </th>
      <td>'.nl2br($valueacel["paso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Serie:</th>
      <td>'.nl2br($valueacel["serie_banda"]).'</td>
    </tr>
      <tr>
      <th scope="row">Ancho:</th>
      <td>'.nl2br($valueacel["ancho_banda"]).'</td>
    </tr>

      <tr>
      <th scope="row">Descripción:</th>
      <td>'.nl2br($valueacel["banda_descripcion"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["bandaimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["bandaimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table>   
      </div>
      </div>
      </div>';


}



if ($valueacel["id_motor"]=='') {
}else{

echo'

  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#aceleracionmotor" aria-expanded="true" aria-controls="calidadsprockets">
          Motor
        </button>
      </h5>
    </div>

    <div id="aceleracionmotor" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
<table class="table table-bordered">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">RPM: </th>
      <td>'.nl2br($valueacel["rpm"]).'</td>
    </tr>
    <tr>
      <th scope="row">Diametro Usillo: </th>
      <td>'.nl2br($valueacel["usillo"]).'</td>
    </tr>
    <tr>
      <th scope="row">Corriente:</th>
      <td>'.nl2br($valueacel["corriente"]).'</td>
    </tr>
      <tr>
      <th scope="row">Potencia:</th>
      <td>'.nl2br($valueacel["potencia"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["motorimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["motorimg"], 3).'"></a></td>
    </tr>
  </tbody>
</table> 
      </div>
      </div>
      </div>';
}
if ($valueacel["id_rodamientos"]=='') {
}else{
echo'
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#aceleraciondescanso" aria-expanded="true" aria-controls="calidadsprockets">
          Descanso
        </button>
      </h5>
    </div>

    <div id="aceleraciondescanso" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
 <table class="table table-bordered">
  <thead>
    <tr>
   
    </tr>
  </thead>
  <tbody>
   <tr>
      <th scope="row">Modelo: </th>
      <td>'.nl2br($valueacel["modelo_descanso"]).'</td>
    </tr>
    <tr>
      <th scope="row">Rodamiento : </th>
      <td>'.nl2br($valueacel["rodamiento"]).'</td>
    </tr>
    <tr>
      <th scope="row">Material:</th>
      <td>'.nl2br($valueacel["material_descanso"]).'</td>
    </tr>
      <tr>
      <th scope="row">Fijaciones:</th>
      <td>'.nl2br($valueacel["fijaciones"]).'</td>
    </tr>
      <tr>
      <th scope="row">Imagen:</th>
      <td> <a href="../formulario/'.substr($valueacel["descansoimg"], 3).'"><img  width="50%" src="../formulario/'.substr($valueacel["descansoimg"], 3).'"></a></td>
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
</div>
</td>
    </tr>';

     ?>