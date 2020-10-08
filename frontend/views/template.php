<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body style="font-size: 13px;">
</head>
<body>
<?php
//modal de inicio consulta nombre y correo
  include 'views/modulos/modales/modales-formularioinicio.php';
 ?>
<?php 
$id = $_GET['id']; 
//Obtendo id de balanza
//Consulto datos de balanza
$sql = ControllerUnidadesBalanza::listarUnidadesBalanzaCtr($id);
//Ejecuto sql
foreach ($sql as $key => $value){
    $cliente=$value["cliente"];
    $grader=$value["grader"];
    $id_unidad=$value["id_unidad_balanza"];
    $id_alimentacion=$value["id_unidad_al"];
    $id_pesaje=$value["id_pesaje"];
    $id_aceleracion=$value["id_unidad_acel"];
    $id_calidad=$value["id_calidad"];
    $id_descarga=$value["id_unidad_desc"];
}
?>
<style type="text/css">
  .table #bordetabla,.bordeunico{
    border:none;   
  }
</style>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><div class="text-center m-5">
  <img width="100%" src="views/img/fondo.png" alt="Scantech" class="responsive">
</div>
<div class="text-center">
  <h4><p class="font-weight-bold">Hola, <p id="nombreusuario"></p></p></h4>
  <p class="font-weight-light pl-3">Aquí podrás encontrar toda la información de la máquina.</p>
</div></th>
    </tr>
  </thead>
  <tbody>
  	 <tr>
      <td style="text-align: center;" class="bordeunico">
      	<h2> <?php echo $grader; ?></h2>
        <h5> <?php echo $cliente; ?></h2>
      	</td>
      	 </tr>   
<!--       verifico si obtengo id de estación de calidad -->
<?php if ($id_calidad =='') {?>
<?php
 }
else{ 
echo'<tr>
      <td id="bordetabla"><button type="button" class="w-100 btn btn-outline-dark shadow btn-lg btn-block" data-toggle="modal" data-target="#calidad">
  ESTACIÓN DE CALIDAD
</button>';
$sqlcalidad = ControllerUnidadesBalanza::listarUnidadCalidadCtr($id_calidad);
foreach ($sqlcalidad as $key => $valuecali) {  
  include 'views/modulos/modales/modales-estacioncalidad.php';
 ?>
  </td>
    </tr>
<?php
}
 }
 ?>     	
<?php if ($id_alimentacion =='') {?>
<?php
 }
else{
	echo ' <tr>
      <td id="bordetabla"><button type="button" class="w-100 btn btn-outline-dark shadow btn-lg btn-block" data-toggle="modal" data-target="#alimentacion">
  UNIDAD DE ALIMENTACIÓN
</button>';
$sqlalim = ControllerUnidadesBalanza::listarUnidadAlimentacionCtr($id_alimentacion);
foreach ($sqlalim as $key => $valuealim) { 
  include 'views/modulos/modales/modales-unidadalimentacion.php';
echo'
      </td>
    </tr>
';
}
}
?>  
<?php if ($id_aceleracion =='') {?>
<?php
 }
else{
echo ' <tr>    
<td id="bordetabla"><button type="button" class="w-100 btn btn-outline-dark shadow btn-lg btn-block" data-toggle="modal" data-target="#aceleracion">
  UNIDAD DE ACELERACIÓN
</button>';
$sqlacel = ControllerUnidadesBalanza::listarUnidadAceleracionCtr($id_aceleracion);
		foreach ($sqlacel as $key => $valueacel) { 
// ACELERACION
  include 'views/modulos/modales/modales-unidadaceleracion.php';
 }
}
 ?>
<?php if ($id_pesaje =='') {?>
<?php
 }
else{
echo'
    <tr>
      <td id="bordetabla"> <button type="button" class="w-100 btn btn-outline-dark shadow btn-lg btn-block" data-toggle="modal" data-target="#pesaje">
  UNIDAD DE PESAJE
</button>';
$sqlpesaje = ControllerUnidadesBalanza::listarUnidadPesajeCtr($id_pesaje);
	foreach ($sqlpesaje as $key => $valuepesa) { 
    //PESAJE
  include 'views/modulos/modales/modales-unidadpesaje.php';
echo'</td>
    </tr>';
}
 }
 ?>
<?php if ($id_descarga =='') {?>
<?php
 }
else{
      	echo '<tr>
      <td id="bordetabla"><button type="button" class="w-100 btn btn-outline-dark shadow btn-lg btn-block" data-toggle="modal" data-target="#descarga">
  UNIDAD DE DESCARGA
</button>';
$sqldes = ControllerUnidadesBalanza::listarUnidadDescargaCtr($id_descarga);
foreach ($sqldes as $key => $valuedes) { 
  //DESCARGA
include 'views/modulos/modales/modales-unidaddescarga.php';
echo'
</td>
    </tr>
';
}
 }
 ?>    	
  </tbody>
</table>
<button class="back-to-top" type="button"><i class="fas fa-arrow-up"></i></button>
  <script src="views/dist/js/acciones.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
