<?php include ("head.php") ?>


<?php if (@$_GET["i"]=='ok') { // Quiere decir que el fundamento se envio correctamente?>
<center>
<h3> La informacion se genero correctamente , gracias!
  <br><br>  <div class="Reportes">
       <a href="new_perfil.php" class="btn btn-success pull-right" style="
       margin-left: 8px;
           padding-left: 272px;
           padding-right: 255px;

       "><span class="glyphicon glyphicon-export"></span>Crear mas perfiles</a>
    </div><br><br><br>

    </h3>
</center>
<?php
} else{
?>
<form id="manage_ticket" class="needs-validation"   action="./proceso_perfiles/proceso_guardar.php" enctype="multipart/form-data" method="post">
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label id="form_departamento" for="validationTooltip01">Perfil</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Perfil" name="perfil" value=""  >
    </div>
    <div class="col-md-3 mb-2">
      <label id="form_telefono"  for="validationCustom02">  Status  </label>
        <select type="text"   class="form-control" id="validationCustom02" placeholder="Status" name="status" value=""  >
            <option value="">Seleccinar</option>
            <option value="0">Desactivado</option>
            <option value="1">Activado</option>
        </select>
    </div>
    <div class="col-md-3 mb-2">
      <label id="form_fecha"  for="validationCustom02">  Fecha de creacion </label>
        <?php
  date_default_timezone_set('America/Mexico_City');
        $fechaActual = date('d/m/y H:i:s'); ?>
        <input type="text" readonly="readonly"   class="form-control" id="validationCustom02" placeholder="" name="fecha_crea" value="<?php echo $fechaActual ?>" >
    </div>





  </div> <!--Cierre-->
<br><br><br>
  <button class="btn btn-primary" type="submit">Crear Perfil</button>
</form>

<?php } ?>

<br><br><br>
<?php include("./proceso_perfiles/filtro_perfiles.php"); ?>
