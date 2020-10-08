
   <?php
          $tabla = Controllerregistros::listarregistrosCtr();
          foreach ($tabla as $key => $value) {
            ?>
<div class="modal fade " id="modal-ver-grader_<?php echo $value["id_unidad_balanza"];  ?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document" style="max-width: 1800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row general" style="height:400px;">
<style type="text/css">
  .btngrader:hover{
  -moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
-o-transform: scale(1.1);
-ms-transform: scale(1.1);
transform: scale(1.1);
  }
  .infocalidad{
display:none;
  }
   .imgcalidad{
display:none;
  }
     .tabladatoscalidad{
display:none;
  }
       .btnvolvercalidad{
display:none;
  }
    .infoalimentacion,.btnvolveralimentacion,.imgalimentacion,.infoalimentacion{
display:none;
  }
</style>
  <button  class=" btngrader btn btn-dark col-sm-2"><?php echo $value["grader"];?> </button>
  <button id="calidad" class="calidad btngrader btn btn-success col-sm-2"><h6 class="col-sm-12">Estacion de Calidad</h6>    <?php 
    if($value["imgcalidad"]==''){
echo'<img width="100%" src="views/img/sinimagen.jpg">';
    }else{
echo'<img width="100%" src="'.substr($value["imgcalidad"], 3).'">';
    }
    ?></button>
  <button id="alimentacion" class="alimentacion btngrader btn btn-warning col-sm-2"><h6 class="col-sm-12">Unidad Alimentación</h6>
    <?php 
    if($value["imgalim"]==''){
echo'<img width="100%" src="views/img/sinimagen.jpg">';
    }else{
echo'<img width="100%" src="'.substr($value["imgalim"], 3).'">';
    }
    ?>  </button>
  <button id="aceleracion" class="aceleracion btngrader btn btn-info col-sm-2"><h6 class="col-sm-12">Unidad Aceleración</h6>
    <?php 
    if($value["imgacel"]==''){
echo'<img width="100%" src="views/img/sinimagen.jpg">';
    }else{
echo'<img width="100%" src="'.substr($value["imgacel"], 3).'">';
    }
    ?> </button>
  <button id="pesaje" class="pesaje btngrader btn  btn-danger col-sm-2"><h6 class="col-sm-12">Unidad de Pesaje</h6>
    <?php 
    if($value["imgpesajes"]==''){
echo'<img width="100%" src="views/img/sinimagen.jpg">';
    }else{
echo'<img width="100%" src="'.substr($value["imgpesajes"], 3).'">';
    }
    ?></button>
  <button id="descarga" class="descarga btngrader btn btn-primary col-sm-2"><h6 class="col-sm-12">Unidad de Descarga</h6>
    <?php 
    if($value["imgdes"]==''){
echo'<img width="100%" src="views/img/sinimagen.jpg">';
    }else{
echo'<img width="100%" src="'.substr($value["imgdes"], 3).'">';
    }
    ?></button>
        </div>
<div class="infocalidad">
<div class="row">
  <div class="col-sm-6"><h3>Información Estación de Calidad</h3></div>
 
  <div class="col-sm-6"> <button class="btnvolvercalidad btn btn-success ">Volver</button></div>
</div>


<div class="row">
  <div class="col-sm-3">
<img class="imgcalidad" width="100%" src="<?php echo substr($value["imgcalidad"], 3); ?>">
    
  </div>
  <div class="col-sm-9 tabladatoscalidad">
    <div class="row">      <div class="col-sm-6">Puestos</div>
      <div class="col-sm-6"><?php if($value["puestoca"]==''){echo "<strong>sin datos</strong>";}else{echo '<strong>'.$value["puestoca"].'<strong>';}?></div>
     <div class="col-sm-6">Sprockets</div>
      <div class="col-sm-6"><strong>
<?php  if($value["sprocketca"]==''){echo "sin datos";}else{ echo $value["sprocketca"];}?></strong></div>
     <div class="col-sm-6">Cantidad Sprockets</div>
      <div class="col-sm-6"><strong>
<?php if($value["sprocketscantidadca"]==''){echo "sin datos";}else{ echo $value["sprocketscantidadca"];}?></strong></div>
     <div class="col-sm-6">Tipo Banda</div>
      <div class="col-sm-6"><strong>
<?php if($value["tipobandaca"]==''){echo "sin datos";}else{  echo $value["tipobandaca"];}?></strong></div>
           <div class="col-sm-6">Medida Banda</div>
      <div class="col-sm-6"><strong>
<?php if($value["medidabandaca"]==''){echo "sin datos";}else{  echo $value["medidabandaca"];}?></strong></div>
           <div class="col-sm-6">Eje</div>
      <div class="col-sm-6"><strong><?php if($value["ejeca"]==''){echo "sin datos";}else{  echo $value["ejeca"];}?></strong></div>
       <div class="col-sm-6">Cilindros</div>
      <div class="col-sm-6"><strong><?php if($value["cilindrosca"]==''){echo "sin datos";}else{  echo $value["cilindrosca"];}?></strong></div>
   <div class="col-sm-6">Tipo Botoneras</div>
      <div class="col-sm-6"><strong><?php if($value["tipobotonerasca"]==''){echo "sin datos";}else{ echo $value["tipobotonerasca"];}?></strong></div>
   <div class="col-sm-6">Cantidad Botoneras</div>
      <div class="col-sm-6"><strong><?php if($value["cantidadbotonerasca"]==''){echo "sin datos";}else{echo $value["cantidadbotonerasca"];}?></strong></div>
<div class="col-sm-6">Tipo Sensores</div>
      <div class="col-sm-6"><strong><?php if($value["tiposensoresca"]==''){echo "sin datos";}else{ echo $value["tiposensoresca"];}?></strong></div>
      <div class="col-sm-6">Cantidad Sensores</div>
      <div class="col-sm-6"><strong><?php if($value["sensorescantidad"]==''){echo "sin datos";}else{ echo $value["sensorescantidad"];}?></strong></div>
       <div class="col-sm-6">Racors</div>
      <div class="col-sm-6"><strong><?php if($value["racorsca"]==''){echo "sin datos";}else{ echo $value["racorsca"];}?></strong></div>
   <div class="col-sm-6">Tipo Motor</div>
      <div class="col-sm-6"><strong><?php if($value["tipomotorca"]==''){echo "sin datos";}else{ echo $value["tipomotorca"];}?></strong></div>
 <div class="col-sm-6">Tipo Descanso</div>
      <div class="col-sm-6"><strong><?php if($value["tipodescansoca"]==''){echo "sin datos";}else{ echo $value["tipodescansoca"];}?></strong></div>


    </div>
  </div>


</div>
</div>

<div class="infoalimentacion">
<div class="row">
  <div class="col-sm-6"><h3>Información Unidad de Alimentación</h3></div>
 
  <div class="col-sm-6"> <button class="btnvolveralimentacion btn btn-success ">Volver</button></div>
</div>


<div class="row">
  <div class="col-sm-3">
<img class="imgalimentacion" width="100%" src="<?php echo substr($value["imgalim"], 3); ?>">
    
  </div>
  <div class="col-sm-9 tabladatosalimentacion">
    <div class="row">      <div class="col-sm-6">Largo Banda</div>
      <div class="col-sm-6"><?php if($value["largobandaalim"]==''){echo "<strong>sin datos</strong>";}else{echo '<strong>'.$value["largobandaalim"].'</strong>';}?></div>
     <div class="col-sm-6">Sprockets</div>
      <div class="col-sm-6"><strong>
<?php  if($value["sprocketalim"]==''){echo "sin datos";}else{ echo $value["sprocketalim"];}?></strong></div>
     <div class="col-sm-6">Cantidad Sprockets</div>
      <div class="col-sm-6"><strong>
<?php if($value["cantidadsprocketsalim"]==''){echo "sin datos";}else{ echo $value["cantidadsprocketsalim"];}?></strong></div>
     <div class="col-sm-6">Tipo Banda</div>
      <div class="col-sm-6"><strong>
<?php if($value["bandaalim"]==''){echo "sin datos";}else{  echo $value["bandaalim"];}?></strong></div>
           <div class="col-sm-6">Medida Banda</div>
      <div class="col-sm-6"><strong>
<?php if($value["bandamedidasalim"]==''){echo "sin datos";}else{  echo $value["bandamedidasalim"];}?></strong></div>
           <div class="col-sm-6">Eje</div>
      <div class="col-sm-6"><strong><?php if($value["ejealim"]==''){echo "sin datos";}else{  echo $value["ejealim"];}?></strong></div>
       
   <div class="col-sm-6">Tipo Motor</div>
      <div class="col-sm-6"><strong><?php if($value["motoralim"]==''){echo "sin datos";}else{ echo $value["motoralim"];}?></strong></div>
 <div class="col-sm-6">Tipo Descanso</div>
      <div class="col-sm-6"><strong><?php if($value["descansoalim"]==''){echo "sin datos";}else{ echo $value["descansoalim"];}?></strong></div>


    </div>
  </div>


</div>
</div>


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<script type="text/javascript">
$(document).ready(function(){  
            $(".calidad").click(function () {
            $(".general").css("display", "none");
            $( ".infocalidad" ).fadeIn( 4500 );
            $( ".imgcalidad" ).fadeIn( 5500 );
            $( ".tabladatoscalidad" ).fadeIn( 6000 );
            $( ".btnvolvercalidad" ).fadeIn( 10000 );
        });
           $(".alimentacion").click(function () {
           $(".general").css("display", "none");
            $( ".infoalimentacion" ).fadeIn( 4500 );
            $( ".imgalimentacion" ).fadeIn( 5500 );
            $( ".tabladatosalimentacion" ).fadeIn( 6000 );
            $( ".btnvolveralimentacion" ).fadeIn( 10000 );
        });
});

  $(".btnvolvercalidad").click(function () {
    $(".infocalidad").css("display", "none");
    $(".imgcalidad").css("display", "none");
    $(".tabladatoscalidad").css("display", "none");

            $( ".general" ).fadeIn( 2000 );

  })

  $(".btnvolveralimentacion").click(function () {
    $(".infoalimentacion").css("display", "none");
    $(".imgalimentacion").css("display", "none");
    $(".tabladatosalimentacion").css("display", "none");

            $( ".general" ).fadeIn( 2000 );

  })


  $(document).on('hidden.bs.modal', function (event) {
     if ($('.modal:visible').length) {
       $('body').addClass('modal-open');
     }
});
</script>

