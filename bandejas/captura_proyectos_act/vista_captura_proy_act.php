<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>captura proy act</title>
<link rel="stylesheet" href="../../librerias/jquery-ui.css">
<link rel="stylesheet" href="../../librerias/jquery.datetimepicker.css">
<link rel="stylesheet" href="../../librerias/bootstrap-3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="../../librerias/bootstrap-3.3.5/css/bootstrap-theme.min.css">
<script src="../../librerias/jquery-1.11.3.js"></script>
<script src="../../librerias/jquery-ui.js"></script>
<script src="../../librerias/jquery.datetimepicker.js"></script>
<script src="../../librerias/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="vista_captura_proy_act.js"></script>
</head>
<body>

<form class="form-horizontal" role="form" name="frm_pa" id="frm_pa">
<div style="border: 1px solid #CCC; padding: 1em; margin: 1em 0 1em 4em; width: 88%;">
  <div class="form-group">
    <label for="ejemplo_fecha_3" class="col-lg-3 control-label">Registro de Proyectos/Actividades</label>
  		<div class="col-lg-10">
    	</div>
  </div>
  
  <div class="form-group">
    <label for="ejemplo_fecha_3" class="col-lg-3 control-label">Fecha:</label>
    	<div class="col-lg-3">
      		<input type="fecha" class="form-control" id="fecha" name="fecha" placeholder="Fecha" style="width:150px">
    	</div>
  </div>
  <div class="form-group">
    <label for="ejemplo_hora_3" class="col-lg-3 control-label">Hora:</label>
    	<div class="col-lg-3">
     	 	<input type="hora" class="form-control" id="hora" name="hora" placeholder="Hora evento" style="width:150px">
    	</div>
   </div>
   <div class="form-group">
    <label for="ejemplo_tipo_ap_3" class="col-lg-3 control-label">Tipo:</label>
    	<div class="col-lg-3">
     	 	<select class="form-control" name="tipo_ap" id="tipo_ap">
              <option value="">Seleccione[]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
    	</div>
   </div>
  <div class="form-group">
        <label class="control-label col-xs-3">Descripci&oacute;n Act/Proy:</label>
        <div class="col-xs-9">
            <textarea rows="1" name="desc_tipo_ap"  id="desc_tipo_ap" class="form-control" placeholder="Descripci&oacute;n Actividada o Proyecto"></textarea>
        </div>
  </div>
   <div class="form-group">
    <label for="ejemplo_tipo_lugar_ap_3" class="col-lg-3 control-label">Tipo lugar:</label>
    	<div class="col-lg-3">
     	 	<select class="form-control" name="tipo_lugar_ap" id="tipo_lugar_ap">
              <option value="">Seleccione[]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
    	</div>
   </div>
  <div class="form-group">
        <label class="control-label col-xs-3">Descripci&oacute;n lugar:</label>
        <div class="col-xs-9">
            <textarea rows="1" name="desc_tipo_lugar_ap"  id="desc_tipo_lugar_ap" class="form-control" placeholder="Descripci&oacute;n del lugar del evento"></textarea>
        </div>
  </div>
     <div class="form-group">
    <label for="ejemplo_municipio_3" class="col-lg-3 control-label">Municipio:</label>
    	<div class="col-lg-3">
     	 	<select class="form-control" name="municipio" id="municipio">
              <option value="">Seleccione[]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
    	</div>
   </div>
   <div class="form-group">
    <label for="ejemplo_localidad_3" class="col-lg-3 control-label">Localidad:</label>
    	<div class="col-lg-3">
     	 	<select class="form-control" name="localidad" id="localidad">
              <option value="">Seleccione[]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
    	</div>
   </div>
   <div class="form-group">
        <label class="control-label col-xs-3">Calle:</label>
        <div class="col-xs-9">
            <input type="text" id="desc_calle" name="desc_calle"  class="form-control" placeholder="Descripci&oacute;n Calle o Secto">
        </div>
   </div>
   <div class="form-group">
    <label for="ejemplo_dirigido_3" class="col-lg-3 control-label">Dirigido a:</label>
    	<div class="col-xs-3">
     	 	<select class="form-control" name="dirigido" id="dirigido">
              <option value="">Seleccione[]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
    	</div>
   </div>
   <div class="form-group">
    <label for="ejemplo_hombres_3" class="col-lg-3 control-label">Total hombres:</label>
    	<div class="col-lg-3">
     	 	<input type="text" class="form-control" id="hombres" name="hombres" placeholder="G&eacute;nero masculino beneficiados" style="width:250px">
    	</div>
   </div>
   <div class="form-group">
    <label for="ejemplo_mujeres_3" class="col-lg-3 control-label">Total mujeres:</label>
    	<div class="col-lg-3">
     	 	<input type="text" class="form-control" id="mujeres" name="mujeres" placeholder="G&eacute;nero femenino beneficiadas" style="width:250px">
    	</div>
   </div>
   <div class="form-group">
    <label for="ejemplo_rango_3" class="col-lg-3 control-label">Rango de edades:</label>
    	<div class="col-lg-3">
     	 	<input type="text" class="form-control" id="rango" name="rango" placeholder="Rango de edades" style="width:250px">
    	</div>
   </div>
   <div class="form-group">
        <label class="control-label col-xs-3">Observaciones:</label>
        <div class="col-xs-9">
            <textarea rows="1" name="observaciones"  id="observaciones" class="form-control" placeholder="Observaciones"></textarea>
        </div>
  </div>
 <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <input type="submit" class="btn btn-primary" id="limpiar" name="limpiar" value="Limpiar"/>
      <input type="submit" class="btn btn-primary" id="guardar" name="guardar" value="Guardar"/>
    </div>
  </div>
 </form>

</body>
</html>