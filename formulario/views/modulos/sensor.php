 <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Sensores
                                        <div class="page-title-subheading">Descripción de la pagina.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-insertar-sensor">Agregar Sensor <i class="fas fa-plus"></i></button>
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo Sensor</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Voltaje</th>
                <th>Distancia Máxima</th>
                <th>Contacto</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    <?php
          $tabla = ControllerSensor::listarSensorCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["id_sensor"]).'</td>
<td>'.nl2br($value["tipo_sensor"]).'</td>
<td>'.nl2br($value["marca"]).'</td>
<td>'.nl2br($value["modelo"]).'</td>
<td>'.nl2br($value["voltaje"]).'</td>
<td>'.nl2br($value["distancia"]).'</td>
<td>'.nl2br($value["contacto"]).'</td>
<td> $ '.number_format($value["precio"],'0', ',',',').'</td>

<td><img width="200" src="'.substr($value["rutaImg"], 3).'"></td>
<td width="100"> <button class="btn btn-sm btn-info btnEditarSensor" idSensor="'.$value["id_sensor"].'" data-toggle="modal" data-target="#modal-editar-sensor">
                    <i class="far fa-edit"></i>
                  </button>
    <button class="btn btn-sm btn-danger btnEliminarSensor" idSensor="'.$value["id_sensor"].'" rutaImagen="'.$value["rutaImg"].'">
                    <i class="far fa-trash-alt"></i>
    </button>
    </td>
</tr>
            ';
          }

?>      
        </tbody>
    </table>
    <script type="text/javascript"> 
  function miles($m){
$m=number_format($m, 0, ',', '.');
return $m;

}</script>