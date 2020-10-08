  <!-- Modal -->
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
<div class="modal fade shadow" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">¡Bienvenido!</h5>
      </div>
      <div class="modal-body">
        <form  method="POST"  id="myform">
          <div class="form-group">
            <label for="exampleInputPassword1">Por favor, dínos tu nombre:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre" name="nombre" required="">
          </div>
          <input type="hidden" value="<?php echo $grader;?>"name="grader">

          <div class="form-group">
            <label for="exampleInputEmail1">Y tu correo electrónico:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" name="correo" required="">
            <small id="emailHelp" class="form-text text-muted">Información confidencial.</small>
          </div>  
                  <div class="form-group">      
          <div class="form-check">
    <input type="checkbox" class="form-check-input" value="true" id="exampleCheck1" name="suscripcion">
    <label class="form-check-label" for="exampleCheck1">Recibir Boletines </label>
  </div>
          </div>  

        <p>Te envíaremos nuestro catálogo online a este e-mail.</p>
        <p>¡Gracias!</p>
         <div id="loading"></div>
      </div> 

      <div class="modal-footer" id="sub">
            <button type="submit" name="mysubmit" id="enviar"  class="btn btn-primary">Enviar Catálogo</button>
            <button type="hidden" id="cerrar"  class="btn btn-danger" data-dismiss="modal" value="Cerrar">Cerrar</button>
        </form>
<div id="result"></div>
      </div>
    </div>
  </div>
</div>