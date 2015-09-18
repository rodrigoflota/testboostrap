<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Versión compilada y comprimida del CSS de Bootstrap -->
<link rel="stylesheet" href="../../librerias/bootstrap-3.3.5/css/bootstrap.min.css">
<!-- Tema opcional -->
<link rel="stylesheet" href="../../librerias/bootstrap-3.3.5/css/bootstrap-theme.min.css">
</head>

<body>
 <div class="form-group">
        <label class="control-label col-xs-3">Email:</label>
        <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Confirmar Password:</label>
        <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Telefono:</label>
        <div class="col-xs-9">
            <input type="tel" class="form-control" placeholder="Telefono">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">F. Nacimiento:</label>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Dia</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Mes</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Año</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Dirección:</label>
        <div class="col-xs-9">
            <textarea rows="3" class="form-control" placeholder="Dirección"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Genero:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="male"> Maculino
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="genderRadios" value="female"> Femenino
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="news"> Enviar noticias.
            </label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
                <input type="checkbox" value="agree">  Accepto <a href="#">Terminos y condiciones</a>.
            </label>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>
</form>


<div class="form-group">
    <div class="col-lg-offset-1 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> No cerrar sesión
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-1 col-lg-10">
      <button type="submit" class="btn btn-default">Entrar</button>
    </div>
  </div>

</div>
</form>

<div class="checkbox col-lg-offset-1">
  <label>
    <input type="checkbox" value="">
    Esta es una opción muy interesante que tienes que pinchar
  </label>
</div>
 
<div class="radio col-lg-offset-1">
  <label>
    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
    Esta es una opción muy interesante que tienes que pinchar
  </label>
</div>
<div class="radio col-lg-offset-1">
  <label>
    <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
    Esta otra opción también es muy interesante y al pincharla, deseleccionas la opción anterior
  </label>
</div>




<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="ejemplo_email_3" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="email" class="form-control" id="ejemplo_email_3"
             placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="ejemplo_password_3" class="col-lg-2 control-label">Contraseña</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="ejemplo_password_3" 
             placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> No cerrar sesión
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-xs">Entrar</button>
      <input type="submit" class="btn btn-primary" value="Enviar"/>
    </div>
  </div>
</form>
</body>
</html>