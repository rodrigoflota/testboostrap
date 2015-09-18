<?php

  function conectarse()
   {
	 if (!($conexion=mysql_connect("localhost","root","")))
     {
      echo "Conexión fallida";
      exit();
     }
    if (!mysql_select_db("casagestion",$conexion))
     {
      echo "La BD no existe";
      exit();
     }
    return $conexion;
   }
?>