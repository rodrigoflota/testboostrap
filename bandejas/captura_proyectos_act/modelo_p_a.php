<?php 
require_once("../../db/conec2.php");
class Modelo_proyectos_act
{
		
	function insertarActProy($fecha,$hora,$tipAtencion,
						    $direccion,$cel,$asunto,
							$reseta,$sexo,$edad,
							$nombre,$apellidos,$calle,
							$asesorado,$Observaciones)
	{
		
		try{
			
		    $enlace =conectarse();
			
			$query = mysql_query("INSERT INTO proyectos_acciones(
											cve_proyecto_actividad,
											fecha_actividad,
											hora_actidad_proy,
											cve_tipo_activid_proyecto,
											desc_actividad_proyecto,
											cve_tipo_lugar_act_pro,
											desc_lugar_act_pro,
											persona_responsable,
											cve_municipio,
											desc_calle,
											desc_dirigido_a,
											mujeres_beneficiadas,
											hombres_beneficiados,
											rango_edades,
											observaciones,
											cve_localidad)
									VALUES( 11,
											STR_TO_DATE('2015/09/13','%Y/%m/%d'),
											'12:11',
											22,
											'test desc_de actividad proyecto',
											33,
											'test desc_de lugar',
											'nombre de persona responsable',
											1,
											'test desc_calle',
											'desc dirigido a',
											100,
											200,
											'20-30',
											'test observaciones',
											2
											 )",$enlace);

			if($query){
				return true;
			}else
			{
				return false;
			}
			
		}catch(Exception $e){
			echo $e->getMessage();
		}
	}
}
?>