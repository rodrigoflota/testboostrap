<?php

  function conectarse()
   {
	 if (!($conexion=mysql_connect("localhost","root","")))
     {
      echo "Conexi�n fallida";
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