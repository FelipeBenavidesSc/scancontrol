 
<div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Historial Visita Web
                                        <div class="page-title-subheading">Detalle de usuarios registrados en la web.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                    </div>
                                </div>    </div>
                        </div> 
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Suscripción</th>
                <th>Grader</th>
                <th>Fecha</th>       
            </tr>
        </thead>
        <tbody>
   <?php
          $tabla = ControllerHistorialVisitas::listarHistorialVisitasCtr();
          foreach ($tabla as $key => $value) {
            echo '
<tr>
<td>'.nl2br($value["nombre"]).'</td>
<td>'.nl2br($value["correo"]).'</td>';
if ($value["suscripcion"] =='true') {

echo '<td>Suscrito</td>';
}else{
  echo '<td>Sin Suscripción</td>';  
}
echo'
<td>'.nl2br($value["maquina"]).'</td>
<td>'.nl2br($value["fecha"]).'</td>
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