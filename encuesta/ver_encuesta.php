<?php
include("parte_arriba.html");
// en las preguntas nsnr toman un valor numerico de 3 o 6 excepto en el caso de un
// checkbox que toma el valor de 101
include('../ecojoom15.php');
$user = JFactory::getUser();

if ($user->usertype == "Super Administrator")
{
    echo "Resultados<br>";
}
else
{
	echo "Error 404";
	exit();
}

?>

<?php

include ("conexion.php");
include ("diccionario.php");

echo "<a href='listar_encuestas.php' >Regresar</a><br>";

$id_encuesta = $_GET['id'];
$consulta_p=mysql_query("select * from ver_todo WHERE id_encuesta = $id_encuesta;",$conexion);
$id_viejo = -1;
//echo $consulta_p['fecha'][0];

$consulta=mysql_query("select * from encuesta WHERE id_encuesta = $id_encuesta;",$conexion);
while ($row=mysql_fetch_array($consulta)){
  echo "<a href='eliminar_encuesta.php?encuesta=".$row["id_encuesta"]."'>Eliminar Encuesta</a>";
}

?>

<center>
<table border="1" class="TablaVerde" >
    <tr>
        <td>
            Fecha
        </td>
        <td>
            Pais
        </td>
        <td>
            Perfil
        </td>
        <td>
            Grupo objetivo
        </td>
        <td>
            Estado
        </td>
        <td>
            Observaciones
        </td>
    </tr>
	<tr>

<?php

while ($fila = mysql_fetch_array($consulta_p)) {
    
    
    if ($id_viejo != $fila['id_encuesta']){
        echo "<td> $fila[fecha].</td>";
        echo "<td> $fila[pais].</td>";
        
        if($fila['perfil'] == 1)
            echo "<td>Planificador.</td> ";
        elseif($fila['perfil'] == 2)
            echo "<td>Experto.</td>";
           
           
        if($fila['grupo_objetivo']==1){
            echo "<td>Organismo regional o internacional.</td>";
        }
        elseif ($fila['grupo_objetivo']=="2"){
            echo "<td>Empresa petrolera estatal o multinacional.</td>";
        }
        elseif ($fila['grupo_objetivo']==3){
            echo "<td>Actor nacional (Venezuela).</td>";
        }
        elseif ($fila['grupo_objetivo']==4){
            echo "<td>País miembro de la OPEP.</td>";
        }
        echo "<td>$fila[estado]</td>";
        echo "<td>$fila[observaciones]</td>";
        /*
        $consulta_estado=mysql_query("select * from estados WHERE id_estados = $fila['estado'];",$conexion)or die(mysql_error());
        
        /*while ($estado = mysql_fetch_array($consulta_estado))
		{
			echo $estado['estado'];
			
		}*/
	
        
        ?>
        </tr>
    </table>
    <br>
    <table border="1" >
        <tr>
            <td>
                Pregunta
            </td>
            <td>
                Respuesta
            </td>
            <td>
                Respuesta opcional
            </td>
        </tr>
        <?php
    }
    $id_viejo = $fila['id_encuesta'];
    
    
    /**************COMIENZO CON LAS REPUESTAS **************/
    
    //~ echo $q["p".$fila["pregunta"]."a"];
    //~ echo "<br>";
    //~ if ($fila['pregunta'] == 1){
		
		if ($fila['pregunta']== 31)
		{
			echo "<tr>";	
			echo "<td>".$q['ultimap']."</td>";
			if ($fila['respuesta'] == 1)
				echo "<td>- Si.</td>";
			if ($fila['respuesta'] == 2)
				echo "<td>- No.</td>";
			echo "<td></td>";
			echo "</tr>";
			
			
		}
		elseif ($fila['pregunta']==9 or $fila['pregunta']==10 or $fila['pregunta']==11
		    or $fila['pregunta']==19 or $fila['pregunta']==27
		){
			echo "</tr><tr><td>".$q['p'.$fila['pregunta']]."</td>";
			if ($fila["respuesta"] == 101)
			{
				echo "<td>- NsNr.</td>";
			}
			else
			{
				 /***************************************************************************/
				$valor=split(",",$fila["respuesta"]);
				//~ $valor=split("|",$respuesta);
				/************************************************************************/
				//~ echo $valore[1];
				echo "<td>";
				//~ echo "ID: $fila[pregunta]";
				//~ foreach ($valore as $valor){
					//~ echo $valor."<br>";
					
				
					if ($valor[0] =="" or $valor[0] ==" ")
						echo "- ".$q["p".$fila["pregunta"]."a"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."a"].": ".$valor[0]."<br>";
					
					if ($valor[1] =="" or $valor[1] ==" ")
						echo "- ".$q["p".$fila["pregunta"]."b"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."b"].": ".$valor[1]."<br>";
					
					if ($valor[2] =="" or $valor[2] ==" ")
						echo "- ".$q["p".$fila["pregunta"]."c"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."c"].": ".$valor[2]."<br>";
					
					if ($valor[3] =="" or $valor[3] ==" ")
						echo "- ".$q["p".$fila["pregunta"]."d"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."d"].": ".$valor[3]."<br>";
					
					if ($valor[4] =="" or $valor[4] ==" ")
						echo "- ".$q["p".$fila["pregunta"]."e"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."e"].": ".$valor[4]."<br>";
					

					if ($fila['pregunta'] != 10 and $fila['pregunta'] != 11)
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
						if ($valor[5] ==" " or $valor[5] =="")
							echo "- ".$q["p".$fila["pregunta"]."f"].": 0<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."f"].": ".$valor[5]."<br>";
					}
					if (
					    $fila['pregunta'] != 10 and $fila['pregunta'] != 11
					    and $fila['pregunta'] != 27
					)
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
						if ($valor[6] ==" " or $valor[6] =="")
							echo "- ".$q["p".$fila["pregunta"]."g"].": 0<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."<br>";
					}
					if ($q["p".$fila["pregunta"]."h"])
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."h"].": ".$valor[7]."%<br>";
						if ($valor[7] ==" " or $valor[7] =="")
							echo "- ".$q["p".$fila["pregunta"]."h"].": 0<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."h"].": ".$valor[7]."<br>";
					}
				//~ echo "<td>".$fila["respuesta"]."</td>";
			}
			
			echo "<td></td>";
		}
		elseif ($fila['pregunta']==8 or $fila['pregunta']==24){
			echo "</tr><tr><td>".$q['p'.$fila['pregunta']]."</td>";
			if ($fila["respuesta"] == 101)
			{
				echo "<td>- NsNr.</td>";
			}
			else
			{
				 /***************************************************************************/
				$valor=split(",",$fila["respuesta"]);
				//~ $valor=split("|",$respuesta);
				/************************************************************************/
				//~ echo $valore[1];
				echo "<td>";
				//~ echo "ID: $fila[pregunta]";
				//~ foreach ($valore as $valor){
					//~ echo $valor."<br>";
					
				
					
				
					if ($valor[0] =="")
						echo "- ".$q["p".$fila["pregunta"]."a"].": 0%<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."a"].": ".$valor[0]."%<br>";
					
					if ($valor[1] =="")
						echo "- ".$q["p".$fila["pregunta"]."b"].": 0%<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."b"].": ".$valor[1]."%<br>";
					
					if ($valor[2] =="")
						echo "- ".$q["p".$fila["pregunta"]."c"].": 0%<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."c"].": ".$valor[2]."%<br>";
					
					if ($valor[3] =="")
						echo "- ".$q["p".$fila["pregunta"]."d"].": 0%<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."d"].": ".$valor[3]."%<br>";
					
					if ($valor[4] =="")
						echo "- ".$q["p".$fila["pregunta"]."e"].": 0%<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."e"].": ".$valor[4]."%<br>";
					

					if (
						$fila['pregunta'] != 8 and $fila['pregunta'] != 10 and $fila['pregunta'] != 11 and $fila['pregunta'] != 24 and
						$q["p".$fila["pregunta"]."f"]
					)
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
						if ($valor[5] ==" ")
							echo "- ".$q["p".$fila["pregunta"]."f"].": 0%<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."f"].": ".$valor[5]."%<br>";
					}
					if (
						$fila['pregunta'] != 24 and $fila['pregunta'] != 27 and
						$q["p".$fila["pregunta"]."g"]
						)
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
						if ($valor[6] ==" ")
							echo "- ".$q["p".$fila["pregunta"]."g"].": 0%<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
					}
					if ($q["p".$fila["pregunta"]."h"])
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."h"].": ".$valor[7]."%<br>";
						if ($valor[7] ==" ")
							echo "- ".$q["p".$fila["pregunta"]."h"].": 0%<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."h"].": ".$valor[7]."%<br>";
					}
				//~ echo "<td>".$fila["respuesta"]."</td>";
			}
			
			echo "<td></td>";
		}
		elseif ($fila['pregunta']== 6)
		{
			echo "</tr><tr><td>".$q['p'.$fila['pregunta']]."</td>";
			if ($fila['respuesta']== 1)
			{
				echo "<td>- ".$q["p".$fila["pregunta"]."a"]."</td>";
				echo "<td><strong>".$q["p".$fila["pregunta"]."d"].":</strong><br>";
				echo $fila["respuesta2"]."</td>";
			}
			elseif ($fila['respuesta'] == 2)
			{
				echo "<td>- ".$q["p".$fila["pregunta"]."b"]."</td>";
				echo "<td></td>";
			}
			else{
				echo "<td>- NsNr.<br></td>";
				echo "<td></td>";
			}
			
			
					
					
					
					//~ echo $fila["respuesta2"]."</td>";
			
			
				
			echo "</tr>";
		}
		elseif ($fila['pregunta']== 14)
		{
		  
			echo "<tr>";	
			echo "<td>".$q['p'.$fila['pregunta']]."</td>";
			if ($fila['respuesta'] == 101)
				echo "<td>- NsNr.</td>";
			//elseif ($fila['pregunta'] == '101')
			//	echo "<tr>- NsNr.</tr>";
			else
				echo "<td>".$fila['respuesta']."</td>";
			
			echo "<td></td>";
			echo "</tr>";
			
			
		}
		elseif ($fila['pregunta']== 18)
		{
		  echo "</tr><tr><td>".$q['p'.$fila['pregunta']]."</td>";
		  $valore=split(",",$fila['respuesta']);
		  echo "<td>";
		  //echo $fila['respuesta'];
		  //echo var_dump($valore);
		  $no_sabe = 1;
		  
		  foreach ($valore as $valor){
		    if ($valor == 1){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."a"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 2){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."b"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 3){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."c"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 4){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."d"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 5){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."e"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 6){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."f"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 7){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."g"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 8){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."h"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 9){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."i"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 10){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."j"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 11){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."k"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 12){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."l"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		    if ($valor == 13){
		      echo "- ";
		      echo $q["p".$fila['pregunta']."m"];
		      echo "<br>";
		      $no_sabe = 0;
		    }
		  }
		  
		  if($no_sabe == 1){
		    echo "- NsNr.";
		  }
		  echo "</td>";
		  echo "<td></td></tr>";
		}
		elseif ($fila['pregunta']!= 30)
		{
			
		
		
			echo "<tr>";	
			echo "<td>".$q['p'.$fila['pregunta']]."</td>";
			//~ echo $fila['respuesta'];
			$respuesta = $fila['respuesta'];
			
			
			
			/***************************************************************************/
			$valore=split(",",$respuesta);
			//~ $valore=split("|",$respuesta);
			/************************************************************************/
			//~ echo $valore[1];
			echo "<td>";
			foreach ($valore as $valor){
				//~ echo $valor."<br>";
				if ($valor == 1){
					echo "- ".$q["p".$fila["pregunta"]."a"]."<br>";
				}
				if ($valor == 2){
					echo "- ".$q["p".$fila["pregunta"]."b"]."<br>";
				}
				if ($valor == 3){
					echo "- ".$q["p".$fila["pregunta"]."c"]."<br>";
				}
				if ($valor == 4){
					echo "- ".$q["p".$fila["pregunta"]."d"]."<br>";
				}
				if ($valor == 5){
					echo "- ".$q["p".$fila["pregunta"]."e"]."<br>";
				}
				if ($valor == 6){
					echo "- ".$q["p".$fila["pregunta"]."f"]."<br>";
				}
				if ($valor == 7){
					echo "- ".$q["p".$fila["pregunta"]."g"]."<br>";
				}
				if ($valor == 8){
					echo "- ".$q["p".$fila["pregunta"]."h"]."<br>";
				}
				if ($valor == 9){
					echo "- ".$q["p".$fila["pregunta"]."i"]."<br>";
				}
				if ($valor == 101){
					echo "- NsNr.<br>";
				}
				if ($valor == "NsNr"){
					echo "- NsNr.<br>";
				}
				//~ if ($valor == ""){
					//~ echo "- NsNr.<br>";
				//~ }
				//~ echo "</td><td>";
				
				
				//~ echo "</td>";
				
				
				/*
				 * falta 14 y porcentaje
				 * 17
				 * 18
				 * */
			}
			echo "</td>";
			if (
				($fila['pregunta']==2 or $fila['pregunta']==17 
				or $fila['pregunta']==21 or $fila['pregunta']==25 or $fila['pregunta']==26)
				//~ and $id_viejo != $fila['id_encuesta']
			)
			{
					echo "<td><strong>".$q["p".$fila["pregunta"]."d"].":</strong><br>";
					
					echo $fila["respuesta2"]."</td>";
			}
			
			else
			{
				echo "<td></td>";
			}
        
        }// fin pregunta es diferente de 30
        else
		{
			echo "<tr><td>".$q['p30']."</td>";
			echo "<td><strong>a.</strong> ".$fila["respuesta"].".<br><strong>b.</strong> ";
			echo $fila["respuesta2"].".<br><strong>c.</strong> ";
			echo $fila["respuesta3"].".</td>";
			echo "<td></td>";
			
		}
		echo "</tr>";
    //~ }
    //echo "<p>fecha: $fila[fecha] respuesta: $fila[respuesta]</p>";
    
}
    



?>
</table>
</center>

      

<?php


include("parte_abajo.html");


?>



