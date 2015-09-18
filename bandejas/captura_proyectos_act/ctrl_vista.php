<?php
/**
* @autor: Rodrigo Flota Jeronimo
**/

require_once("modelo_p_a.php");
//require_once("../seguridad/informacion_usuario.php");
session_start();

//$objeto = unserialize($_SESSION['pasaporte']);
//$nombre = $objeto->nombre_persona;

/*if(empty($_SESSION['pasaporte']))
	{
		echo "<script>alert('Usuario no Encontradon en el Sistema');</script>";
		echo'<script>window.location="../index.php"</script>';
	}
	else
	{*/
		$obj = new Modelo_proyectos_act;
		//$ComboxDirecc  = $obj->buscarComunidad();
		//$ComboxCurso   = $obj->buscarCursos();
		//$comboxMaestro = $obj->buscarMaestro();
		//$comboxGrado   = $obj->buscarGradoestudio();
		//$Comboxperiodo = $obj->buscarPeriodos();
		
		require("vista_captura_proy_act.php");
	//}
?>