<div
class="modal" id="calidad" data-easein="flipXIn"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 1600px;">
    <div class="modal-content">
      <div class="modal-header" style="    color: white;
    background: #075672;">
        <h5 class="modal-title" id="exampleModalLongTitle">Información Estación Calidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row">
      <div class="col-sm-6 ">
<h5>Imagen </h5>
       <table class="table table-bordered" style="background: #d3d3ff; text-align:center;">
  <thead>
    <tr>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> <div class="col-sm-12 "> <a href="../formulario/<?php substr($valuecali["imgcalidad"], 3) ?>"><img  width="100%" src="../formulario/<?php echo substr($valuecali["imgcalidad"], 3) ?>" ></a></div></td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="col-sm-6 ">
<h5>Información Estación de Calidad</h5>
       <table class="table table-bordered" style=" background: #075672;color:white;">
  <tbody>
    <tr>
      <th scope="row">Descripción</th>
      <td><?php echo $valuecali["despcal"];; ?></td>
    </tr>
    <tr>
      <th scope="row">Número de puestos</th>
      <td><?php echo $valuecali["numero_puestos"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Cantidad Sprockets</th>
      <td><?php echo $valuecali["cantidad_sprockets"]; ?></td>
    </tr>
<tr>
      <th scope="row">Medida Banda</th>
      <td><?php echo $valuecali["medida_banda"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Eje</th>
      <td><?php echo $valuecali["eje"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Tipo Botoneras</th>
      <td><?php echo $valuecali["tipo_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Cantidad Botoneras</th>
      <td><?php echo $valuecali["cantidad_botoneras"]; ?></td>
    </tr>
       <tr>
      <th scope="row">Racors</th>
      <td><?php echo $valuecali["racors"]; ?></td>
    </tr>
  </tbody>
</table>
 </div>
 </div>
  <h3 style="    background: #565454;
    color: white;
    padding: 5px;">Componentes</h3>
 <div class="row" style="margin-top: 20px;    font-size: 12px;">
 <div class="col-sm-2 col-md-12">
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#calidadsprockets" aria-expanded="true" aria-controls="calidadsprockets">
          Sprockets
        </button>
      </h5>
    </div>
    <div id="calidadsprockets" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">Serie Sprockets</th>
      <td><?php echo $valuecali["seriesprockets"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Modelo Sprockets</th>
      <td><?php echo $valuecali["modelosprockets"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Dientes Sprockets</th>
      <td><?php echo $valuecali["dientessprockets"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Perforación Sprockets</th>
      <td><?php echo $valuecali["perforacionsprockets"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción Sprockets</th>
      <td><?php echo $valuecali["descripcionsprockets"]; ?></td>
    </tr>
   <tr>  
      <th scope="row">Imagen Sprockets </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgsprockets"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgsprockets"], 3); ?>" ></a></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bandas
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">     
<?php
if ($valuecali["id_banda"]=='') {
}else{
?>
       <table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">Superficie</th>
      <td><?php echo $valuecali["superficie"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Paso</th>
      <td><?php echo $valuecali["paso"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Serie</th>
      <td><?php echo $valuecali["seriebanda"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $valuecali["anchobanda"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Descripción </th>
      <td><?php echo $valuecali["bandadescripcion"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material </th>
      <td><?php echo $valuecali["materialbanda"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Imagen Banda </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgbanda"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgbanda"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Cilindros
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       <?php
if ($valuecali["id_cilindros"]=='') {
}else{
?>
       <table class="table table-bordered">
  <tbody>
    <tr>
      <th scope="row">Nombre</th>
      <td><?php echo $valuecali["nombrecilindros"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Diametro</th>
      <td><?php echo $valuecali["diametrocilindros"]; ?></td>
    </tr>
    <tr>
      <th scope="row">Largo</th>
      <td><?php echo $valuecali["largocilindros"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Material Cuerpo</th>
      <td><?php echo $valuecali["materialcuerpo"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Material Vastago </th>
      <td><?php echo $valuecali["materialvastago"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Medida Hilo </th>
      <td><?php echo $valuecali["medidahilo"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Imagen Cilindro </th>
      <td> <a href="../formulario/<?php substr($valuecali["imgcilindros"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgcilindros"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
?>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingSensor">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseSensor" aria-expanded="false" aria-controls="collapseSensor">
          Sensores
        </button>
      </h5>
    </div>
    <div id="collapseSensor" class="collapse" aria-labelledby="headingSensor" data-parent="#accordion">
      <div class="card-body">
     <?php
if ($valuecali["id_sensor"]=='') {
}else{

?>
 <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Tipo Sensor</th>
      <td><?php echo $valuecali["sensortipo"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $valuecali["marcasensor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Modelo</th>
      <td><?php echo $valuecali["modelosensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Voltaje</th>
      <td><?php echo $valuecali["voltajesensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Distancia </th>
      <td><?php echo $valuecali["distanciasensor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Contacto </th>
      <td><?php echo $valuecali["contactosensor"]; ?></td>
    </tr>
     <tr>
      <th scope="row">Imagen Sensor</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgsensor"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgsensor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>

<?php
}
 ?>

      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingDescanso">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseDescanso" aria-expanded="false" aria-controls="collapseDescanso">
          Descanso
        </button>
      </h5>
    </div>
    <div id="collapseDescanso" class="collapse" aria-labelledby="headingDescanso" data-parent="#accordion">
      <div class="card-body">
   <?php
if ($valuecali["id_rodamientos"]=='') {
}else{

?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Modelos</th>
      <td><?php echo $valuecali["modelodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Rodamiento</th>
      <td><?php echo $valuecali["rodamientodescanso"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Material</th>
      <td><?php echo $valuecali["descansomaterial"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Fijaciones</th>
      <td><?php echo $valuecali["fijacionesdescanso"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Descanso</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgdescanso"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgdescanso"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
      <div class="card">
    <div class="card-header" id="headingMotor">
      <h5 class="mb-0">
        <button class="w-100 btn btn-outline-dark btn-lg btn-block collapsed" data-toggle="collapse" data-target="#collapseMotor" aria-expanded="false" aria-controls="collapseMotor">
          Motor
        </button>
      </h5>
    </div>
    <div id="collapseMotor" class="collapse" aria-labelledby="headingMotor" data-parent="#accordion">
      <div class="card-body">
    <?php
if ($valuecali["id_motor"]=='') {
}else{

?>
       <table class="table table-bordered">
  <tbody>


    <tr>
      <th scope="row">Marca</th>
      <td><?php echo $valuecali["marcamotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Usillo</th>
      <td><?php echo $valuecali["usillomotor"]; ?></td>
    </tr>

    <tr>
      <th scope="row">Ancho</th>
      <td><?php echo $valuecali["anchomotor"]; ?></td>
    </tr>
      <tr>
      <th scope="row">Capacidad</th>
      <td><?php echo $valuecali["capacidadmotor"]; ?></td>
    </tr>
   

     <tr>
  
      <th scope="row">Imagen Motor</th>
      <td> <a href="../formulario/<?php substr($valuecali["imgmotor"], 3) ?>"><img  width="50%" src="../formulario/<?php echo substr($valuecali["imgmotor"], 3); ?>" ></a></td>
    </tr>

  </tbody>
</table>
<?php
}
?>
      </div>
    </div>
  </div>
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