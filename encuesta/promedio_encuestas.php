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
<!--
<form action="" method="get">
  <select name="planificador" >
    <option value="1">Planificador</option>
    <option value="2">Experto</option>
  </select>
</form>-->
 


<?php

include ("conexion.php");
include ("diccionario.php");

echo "<a href='index.php' >Regresar</a><br>";

//Pregunta Perfil
$consulta_p=mysql_query("select * from encuesta;",$conexion);

$contador2 = 0;
$contador1 = 0;	
$grupo_objetivo1 = 0;
$grupo_objetivo2 = 0;
$grupo_objetivo3 = 0;
$grupo_objetivo4 = 0;
$total = 0;
while($row = mysql_fetch_array($consulta_p)){
  if ($row['perfil'] == 1){
    $contador1 += 1;
  }
  if ($row['perfil'] == 2){
    $contador2 += 1;
  }
  if ($row['grupo_objetivo'] == 1){
    $grupo_objetivo1 += 1;
  }
  if ($row['grupo_objetivo'] == 2){
    $grupo_objetivo2 += 1;
  }
  if ($row['grupo_objetivo'] == 3){
    $grupo_objetivo3 += 1;
  }
  if ($row['grupo_objetivo'] == 4){
    $grupo_objetivo4 += 1;
  }
  $total += 1;
}

echo "<p>Total encuestas: $total. <br></p>";
echo "<p><b>Perfil</b> <br> <b>Total:</b> <br>";
echo "Planificador: $contador1. Experto: $contador2. <br>";
echo "<b>Promedio:</b><br>Planificador: ". $contador1/$total .". Experto: ".$contador2/$total.".<br>";
echo "</p>";
$arr=array($q['p0_1'],$q['p0_2']);
$arrdos=array(
	$contador1,
	$contador2,
);
$tamanyo=500;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre="Perfil";
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br>";echo "<br>";


echo "<p><b>Grupo objetivo: </b><br><b>Total:</b><br>Organismo regional o internacional: $grupo_objetivo1";
echo "<br>Empresa petrolera estatal o multinacional: $grupo_objetivo2";
echo " <br>Actor nacional (Venezuela): $grupo_objetivo3";
echo " <br>País miembro de la OPEP: $grupo_objetivo4 </p>";
echo "<b>Promedio</b>:";
echo "<br>Organismo regional o internacional: ".$grupo_objetivo1/$total;
echo "<br>Empresa petrolera estatal o multinacional: ".$grupo_objetivo2/$total;
echo "<br>Actor nacional (Venezuela): ".$grupo_objetivo3/$total;
echo "<br>País miembro de la OPEP: ".$grupo_objetivo4/$total."</p>";
$arr=array($q['p0_4'],$q['p0_5'],$q['p0_6'],$q['p0_7']);
$arrdos=array(
	$grupo_objetivo1,
	$grupo_objetivo2,
	$grupo_objetivo3,
	$grupo_objetivo4,
);
$tamanyo=1000;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre="Grupo Objetivo";
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";
echo "<br><br>";
//Pregunta Grupo Objetivo
$consulta_p=mysql_query("select perfil from encuesta;",$conexion);

$contador2 = 0;
$contador1 = 0;
while($row = mysql_fetch_array($consulta_p)){
  if ($row[0] == 1){
    $contador1 += 1;
  }
  if ($row[0] == 2){
    $contador2 += 1;
  }
  
}

echo "<b>Economia y desarrollo económico</b><br>";

$consulta_p=mysql_query("select * from ver_todo;",$conexion);

$p1_a = 0;
$p1_b = 0;
$p1_c = 0;
$p1_d = 0;
$p1_e = 0;
$p1_nsnr = 0;
$p1_total = 0;

$p2_a = 0;
$p2_b = 0;
$p2_c = 0;
$p2_total = 0;

$p3_a = 0;
$p3_b = 0;
$p3_c = 0;
$p3_d = 0;
$p3_e = 0;
$p3_total = 0;

$p4_a = 0;
$p4_b = 0;
$p4_c = 0;
$p4_d = 0;
$p4_e = 0;
$p4_total = 0;

$p5_total = 0;
$p5_a = 0;
$p5_b = 0;
$p5_c = 0;

$p6_total = 0;
$p6_a = 0;
$p6_b = 0;
$p6_c = 0;

$p7_total = 0;
$p7_a = 0;
$p7_b = 0;
$p7_c = 0;


$p8_a = 0;
$p8_b = 0;
$p8_c = 0;
$p8_d = 0;
$p8_e = 0;
$p8t = 0;

$p9_a = 0;
$p9_b = 0;
$p9_c = 0;
$p9_d = 0;
$p9_e = 0;
$p9_f = 0;
$p9_g = 0;
$p9_h = 0;
$p9t = 0;

$p10_a = 0;
$p10_b = 0;
$p10_c = 0;
$p10_d = 0;
$p10_e = 0;
$p10t = 0;

$p11_a = 0;
$p11_b = 0;
$p11_c = 0;
$p11_d = 0;
$p11_e = 0;
$p11t = 0;
    
$p12_total = 0;
$p12_a = 0;
$p12_b = 0;
$p12_c = 0;

$p13_total = 0;
$p13_a = 0;
$p13_b = 0;
$p13_c = 0;
$p13_nsnr = 0;

$p15_total = 0;
$p15_a = 0;
$p15_b = 0;
$p15_c = 0;

$p16_total = 0;
$p16_a = 0;
$p16_b = 0;
$p16_c = 0;
$p16_d = 0;

$p17_total = 0;
$p17_a = 0;
$p17_b = 0;
$p17_c = 0;

$p18_a = 0;
$p18_b = 0;
$p18_c = 0;
$p18_d = 0;
$p18_e = 0;
$p18_f = 0;
$p18_g = 0;
$p18_h = 0;
$p18_i = 0;
$p18_j = 0;
$p18_k = 0;
$p18_l = 0;
$p18_m = 0;
$p18_nsnr = 0;
$p18_total = 0;

$p19_a = 0;
$p19_b = 0;
$p19_c = 0;
$p19_d = 0;
$p19_e = 0;
$p19_f = 0;
$p19_g = 0;
$p19_h = 0;
$p19t = 0;

$p20_total = 0;
$p20_a = 0;
$p20_b = 0;
$p20_c = 0;

$p21_total = 0;
$p21_a = 0;
$p21_b = 0;
$p21_c = 0;
$p21_d = 0;
$p21_e = 0;
$p21_f = 0;
//$p21_c = 0;
$p21_g = 0;

$p22_total = 0;
$p22_a = 0;
$p22_b = 0;
$p22_c = 0;

$p23_total = 0;
$p23_a = 0;
$p23_b = 0;
$p23_c = 0;

$p24_a = 0;
$p24_b = 0;
$p24_c = 0;
$p24_d = 0;
$p24_e = 0;
$p24_total = 0;

$p25_total = 0;
$p25_a = 0;
$p25_b = 0;
$p25_c = 0;

$p26_total = 0;
$p26_a = 0;
$p26_b = 0;
$p26_c = 0;

$p27_a = 0;
$p27_b = 0;
$p27_c = 0;
$p27_d = 0;
$p27_e = 0;
$p27_f = 0;
$p27t = 0;

$p28_total = 0;
$p28_a = 0;
$p28_b = 0;
$p28_c = 0;

$p29_total = 0;
$p29_a = 0;
$p29_b = 0;
$p29_c = 0;
$p29_d = 0;
$p29_e = 0;
$p29_f = 0;

$p31_total = 0;
$p31_a = 0;
$p31_b = 0;

function array_envia($array) { 
    $tmp = serialize($array); 
    $tmp = urlencode($tmp); 
    return $tmp; 
}
function invertir($valor, $valor2, $n){
    for ($i=0;$i<$n;$i++){
		$menor=$n;
		$posicion_menor=$n;
		$mayor=-1;
		$posicion_mayor=$n;
		$valor_invertido=array(0,0,0,0,0,0,0,0,0);//$valor2;//[$n]=array();
		//~ echo "<br>";
		//~ for ($k=0;$k<$n;$k++){
			//~ echo "(".$valor_invertido[$k]."),";
		//~ }
		for ($j=0;$j<$n;$j++){
			//if ($valor2[$j]==0){echo " (".$valor2[$j].") ";}
			if($valor2[$j]>0){
			if($menor>$valor2[$j]){
				$menor=$valor2[$j];
				$posicion_menor=$j;
			}
			if($mayor<$valor2[$j]){
				$mayor=$valor2[$j];
				$posicion_mayor=$j;
				//echo " posicion_mayor: $posicion_mayor";
			}
			}
		}
		//~ echo "Posicion: $posicion_menor";
		if($posicion_menor!=$n){
			$valor[$posicion_menor] = $mayor;
		}
		if($posicion_mayor!=$n){
			$valor[$posicion_mayor] = $menor;
		}
		$valor2[$posicion_menor] = 0;
		$valor2[$posicion_mayor] = 0;
		//~ echo "<br>";
		//~ for ($k=0;$k<$n;$k++){
			//~ echo "[".$valor2[$k]."],";
		//~ }
		//~ echo " <br>";
		//~ for ($k=0;$k<$n;$k++){
			//~ echo "{".$valor[$k]."}, ";
		//~ }
    }
    return $valor;
}

while($row = mysql_fetch_array($consulta_p)){
  if ($row['pregunta'] == 1){
    $valor=split(",",$row["respuesta"]);
    
    if($row['respuesta']!=101){
      if ($valor[0]==1)
	$p1_a += 1;
      if ($valor[1]==2)
	$p1_b += 1;
      if ($valor[2]==3)
	$p1_c += 1;
      if ($valor[3]==4)
	$p1_d += 1;
      if ($valor[4]==5)
	$p1_e += 1;
	
      $p1_total += 1;
    }
    else{
      $p1_nsnr += 1;
      $p1_total += 1;
    }
    
  }
  elseif ($row['pregunta'] == 2){
    $p2_total += 1;
    if ($row['respuesta'] == 1)
      $p2_a += 1;
    if ($row['respuesta'] == 2)
      $p2_b += 1;
    if ($row['respuesta'] == 3)
      $p2_c += 1;
  }
  elseif ($row['pregunta'] == 3){
    $valor=split(",",$row["respuesta"]);
    
    if ($valor[0]==1)
      $p3_a += 1;
    if ($valor[1]==2)
      $p3_b += 1;
    if ($valor[2]==3)
      $p3_c += 1;
    if ($valor[3]==4)
      $p3_d += 1;
    if ($valor[4]==5)
      $p3_e += 1;
      
    $p3_total += 1;
  }
  elseif ($row['pregunta'] == 4){
    $valor=split(",",$row["respuesta"]);
    
    if ($valor[0]==1)
      $p4_a += 1;
    if ($valor[1]==2)
      $p4_b += 1;
    if ($valor[2]==3)
      $p4_c += 1;
    if ($valor[3]==4)
      $p4_d += 1;
    if ($valor[4]==5)
      $p4_e += 1;
      
    $p4_total += 1;
  }
  elseif ($row['pregunta'] == 5){
    $p5_total += 1;
    if ($row['respuesta'] == 1)
      $p5_a += 1;
    if ($row['respuesta'] == 2)
      $p5_b += 1;
    if ($row['respuesta'] == 3)
      $p5_c += 1;
  }
  elseif ($row['pregunta'] == 6){
    $p6_total += 1;
    if ($row['respuesta'] == 1)
      $p6_a += 1;
    if ($row['respuesta'] == 2)
      $p6_b += 1;
    if ($row['respuesta'] == 3)
      $p6_c += 1;
  }
  elseif ($row['pregunta'] == 7){
    $p7_total += 1;
    if ($row['respuesta'] == 1)
      $p7_a += 1;
    if ($row['respuesta'] == 2)
      $p7_b += 1;
    if ($row['respuesta'] == 3)
      $p7_c += 1;
  }
  elseif ($row['pregunta'] == 8){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]);
      $p8_a += $valor[0];
      $p8_b += $valor[1];
      $p8_c += $valor[2];
      $p8_d += $valor[3];
      $p8_e += $valor[4];
      $p8t += 1;
    }
  }
  elseif ($row['pregunta'] == 9){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]);
      //~ echo "<br>antes: ";
      //~ for ($i=0;$i<8;$i++){
		//~ echo " ".$valor[$i].", ";
      //~ }
      $valor = invertir($valor, $valor, 8);
      //~ echo " ordenado: ";
      //~ for ($i=0;$i<8;$i++){
		//~ echo " ".$valor[$i].",";
      //~ }
      $p9__a = $valor[0];
      $p9__b = $valor[1];
      $p9__c = $valor[2];
      $p9__d = $valor[3];
      $p9__e = $valor[4];
      $p9__f = $valor[5];
      $p9__g = $valor[6];
      $p9__h = $valor[7];
      
      
      $p9_total_parcial = $p9__a + $p9__b + $p9__c + $p9__d + $p9__e + $p9__f + $p9__g + $p9__h;
      
      $p9_a += $p9__a/$p9_total_parcial;
      $p9_b += $p9__b/$p9_total_parcial;
      $p9_c += $p9__c/$p9_total_parcial;
      $p9_d += $p9__d/$p9_total_parcial;
      $p9_e += $p9__e/$p9_total_parcial;
      $p9_f += $p9__f/$p9_total_parcial;
      $p9_g += $p9__g/$p9_total_parcial;
      $p9_h += $p9__h/$p9_total_parcial;
      
      $p9t += 1;
    }
  }
  elseif ($row['pregunta'] == 10){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]);
      $valor = invertir($valor, $valor, 5);
      $p10__a = $valor[0];
      $p10__b = $valor[1];
      $p10__c = $valor[2];
      $p10__d = $valor[3];
      $p10__e = $valor[4];
      
      $p10_total_parcial = $p10__a + $p10__b + $p10__c + $p10__d + $p10__e;
      $p10_a += $p10__a/$p10_total_parcial;
      $p10_b += $p10__b/$p10_total_parcial;
      $p10_c += $p10__c/$p10_total_parcial;
      $p10_d += $p10__d/$p10_total_parcial;
      $p10_e += $p10__e/$p10_total_parcial;
      $p10t += 1;
    }
  }
  elseif ($row['pregunta'] == 11){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]);
      $valor = invertir($valor, $valor, 5);
      $p11__a = $valor[0];
      $p11__b = $valor[1];
      $p11__c = $valor[2];
      $p11__d = $valor[3];
      $p11__e = $valor[4];
      $p11_total_parcial = $p11__a + $p11__b + $p11__c + $p11__d + $p11__e;
      $p11_a += $p11__a/$p11_total_parcial;
      $p11_b += $p11__b/$p11_total_parcial;
      $p11_c += $p11__c/$p11_total_parcial;
      $p11_d += $p11__d/$p11_total_parcial;
      $p11_e += $p11__e/$p11_total_parcial;
      $p11t += 1;
    }
  }
  elseif ($row['pregunta'] == 12){
    $p12_total += 1;
    if ($row['respuesta'] == 1)
      $p12_a += 1;
    if ($row['respuesta'] == 2)
      $p12_b += 1;
    if ($row['respuesta'] == 3)
      $p12_c += 1;
  }
  elseif ($row['pregunta'] == 13){
    $p13_total += 1;
    if ($row['respuesta'] == 1)
      $p13_a += 1;
    if ($row['respuesta'] == 2)
      $p13_b += 1;
    if ($row['respuesta'] == 3)
      $p13_c += 1;
    if ($row['respuesta'] == 101)
      $p13_nsnr += 1;
  }
  elseif ($row['pregunta'] == 15){
    $p15_total += 1;
    if ($row['respuesta'] == 1)
      $p15_a += 1;
    if ($row['respuesta'] == 2)
      $p15_b += 1;
    if ($row['respuesta'] == 3)
      $p15_c += 1;
  }
  elseif ($row['pregunta'] == 16){
    $p16_total += 1;
    if ($row['respuesta'] == 1)
      $p16_a += 1;
    elseif ($row['respuesta'] == 2)
      $p16_b += 1;
    elseif ($row['respuesta'] == 3)
      $p16_c += 1;
    elseif ($row['respuesta'] == 4)
      $p16_d += 1;
  }
  elseif ($row['pregunta'] == 17){
    $p17_total += 1;
    if ($row['respuesta'] == 1)
      $p17_a += 1;
    elseif ($row['respuesta'] == 2)
      $p17_b += 1;
    elseif ($row['respuesta'] == 3)
      $p17_c += 1;
  }
  if ($row['pregunta'] == 18){
    $valor=split(",",$row["respuesta"]);
    if($row['respuesta']!=101){
      if ($valor[0]==1)
	$p18_a += 1;
      if ($valor[1]==2)
	$p18_b += 1;
      if ($valor[2]==3)
	$p18_c += 1;
      if ($valor[3]==4)
	$p18_d += 1;
      if ($valor[4]==5)
	$p18_e += 1;
      if ($valor[5]==6)
	$p18_f += 1;
      if ($valor[6]==7)
	$p18_g += 1;
      if ($valor[7]==8)
	$p18_h += 1;
      if ($valor[8]==9)
	$p18_i += 1;
      if ($valor[9]==10)
	$p18_j += 1;
      if ($valor[10]==11)
	$p18_k += 1;
      if ($valor[11]==12)
	$p18_l += 1;
      if ($valor[12]==13)
	$p18_m += 1;
	
      $p18_total += 1;
    }
    else{
      $p18_nsnr += 1;
      $p18_total += 1;
    } 
  }
  elseif ($row['pregunta'] == 19){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]); 
      $valor = invertir($valor, $valor, 8); 
      $p19__a = $valor[0];
      $p19__b = $valor[1];
      $p19__c = $valor[2];
      $p19__d = $valor[3];
      $p19__e = $valor[4];
      $p19__f = $valor[5];
      $p19__g = $valor[6];
      $p19__h = $valor[7];
      
      $p19_total_parcial = $p19__a + $p19__b + $p19__c + $p19__d + $p19__e + $p19__f + $p19__g + $p19__h;
      
      $p19_a += $p19__a/$p19_total_parcial;
      $p19_b += $p19__b/$p19_total_parcial;
      $p19_c += $p19__c/$p19_total_parcial;
      $p19_d += $p19__d/$p19_total_parcial;
      $p19_e += $p19__e/$p19_total_parcial;
      $p19_f += $p19__f/$p19_total_parcial;
      $p19_g += $p19__g/$p19_total_parcial;
      $p19_h += $p19__h/$p19_total_parcial;
      
      $p19t += 1;
    }
  }
  elseif ($row['pregunta'] == 20){
    $p20_total += 1;
    if ($row['respuesta'] == 1)
      $p20_a += 1;
    elseif ($row['respuesta'] == 2)
      $p20_b += 1;
    elseif ($row['respuesta'] == 3)
      $p20_c += 1;
  }
  elseif ($row['pregunta'] == 21){
    $p21_total += 1;
    if ($row['respuesta'] == 1)
      $p21_a += 1;
    elseif ($row['respuesta'] == 2)
      $p21_b += 1;
    elseif ($row['respuesta'] == 3)
      $p21_c += 1;
    elseif ($row['respuesta'] == 4)
      $p21_d += 1;
    elseif ($row['respuesta'] == 5)
      $p21_e += 1;
    elseif ($row['respuesta'] == 6)
      $p21_f += 1;
    elseif ($row['respuesta'] == 7)
      $p21_g += 1;
    //else
    //  $p21_g += 1;
  }
  elseif ($row['pregunta'] == 22){
    $p22_total += 1;
    if ($row['respuesta'] == 1)
      $p22_a += 1;
    elseif ($row['respuesta'] == 2)
      $p22_b += 1;
    elseif ($row['respuesta'] == 3)
      $p22_c += 1;
  }
  elseif ($row['pregunta'] == 23){
    $p23_total += 1;
    if ($row['respuesta'] == 1)
      $p23_a += 1;
    elseif ($row['respuesta'] == 2)
      $p23_b += 1;
    elseif ($row['respuesta'] == 3)
      $p23_c += 1;
  }
  elseif ($row['pregunta'] == 24){
    if ($row['respuesta']!=101 and $row['respuesta']!=''){
      $valor=split(",",$row["respuesta"]);
      
      $p24_a += $valor[0];
      $p24_b += $valor[1];
      $p24_c += $valor[2];
      $p24_d += $valor[3];
      $p24_e += $valor[4];
      $p24_total += 1;
    }
  }
  elseif ($row['pregunta'] == 25){
    $p25_total += 1;
    if ($row['respuesta'] == 1)
      $p25_a += 1;
    elseif ($row['respuesta'] == 2)
      $p25_b += 1;
    elseif ($row['respuesta'] == 3)
      $p25_c += 1;
  }
  elseif ($row['pregunta'] == 26){
    $p26_total += 1;
    if ($row['respuesta'] == 1)
      $p26_a += 1;
    elseif ($row['respuesta'] == 2)
      $p26_b += 1;
    elseif ($row['respuesta'] == 3)
      $p26_c += 1;
  }
  elseif ($row['pregunta'] == 27){
    if ($row['respuesta']!=101){
      $valor=split(",",$row["respuesta"]); 
      $valor = invertir($valor, $valor, 6); 
      $p27__a = $valor[0];
      $p27__b = $valor[1];
      $p27__c = $valor[2];
      $p27__d = $valor[3];
      $p27__e = $valor[4];
      $p27__f = $valor[5];
      $p27__g = $valor[6];
      $p27__h = $valor[7];
      
      $p27_total_parcial = $p27__a + $p27__b + $p27__c + $p27__d + $p27__e + $p27__f + $p27__g + $p27__h;
      
      $p27_a += $p27__a/$p27_total_parcial;
      $p27_b += $p27__b/$p27_total_parcial;
      $p27_c += $p27__c/$p27_total_parcial;
      $p27_d += $p27__d/$p27_total_parcial;
      $p27_e += $p27__e/$p27_total_parcial;
      $p27_f += $p27__f/$p27_total_parcial;
      $p27_g += $p27__g/$p27_total_parcial;
      $p27_h += $p27__h/$p27_total_parcial;
      
      $p27t += 1;
    }
  }
  elseif ($row['pregunta'] == 28){
    $p28_total += 1;
    if ($row['respuesta'] == 1)
      $p28_a += 1;
    elseif ($row['respuesta'] == 2)
      $p28_b += 1;
    elseif ($row['respuesta'] == 3)
      $p28_c += 1;
  }
  elseif ($row['pregunta'] == 29){
    $p29_total += 1;
    if ($row['respuesta'] == 1)
      $p29_a += 1;
    elseif ($row['respuesta'] == 2)
      $p29_b += 1;
    elseif ($row['respuesta'] == 3)
      $p29_c += 1;
    elseif ($row['respuesta'] == 4)
      $p29_d += 1;
    elseif ($row['respuesta'] == 5)
      $p29_e += 1;
    elseif ($row['respuesta'] == 6)
      $p29_f += 1;
  }
  elseif ($row['pregunta'] == 31){
    $p31_total += 1;
    if ($row['respuesta'] == 1)
      $p31_a += 1;
    elseif ($row['respuesta'] == 2)
      $p31_b += 1;
  }
  
}
//p1
echo "<br>";
$p1_total_de_promedio = $p1_a + $p1_b + $p1_c + $p1_d + $p1_e + $p1_nsnr;
echo "<b>$q[p1] <br>Total:</b><br>";
echo "$q[p1a]: $p1_a <br> $q[p1b]: $p1_b <br> $q[p1c]: $p1_c <br> $q[p1d]: $p1_d <br> $q[p1e]: $p1_e";
echo "<br>$q[p1f]: $p1_nsnr<br>";
echo "<b>Promedio:</b><br>";
echo "$q[p1a]: ".$p1_a/$p1_total_de_promedio." <br> $q[p1b]: ".$p1_b/$p1_total_de_promedio."";
echo "<br> $q[p1c]: ".$p1_c/$p1_total_de_promedio."<br> $q[p1d]: ".$p1_d/$p1_total_de_promedio." ";
echo "<br> $q[p1e]: ".$p1_e/$p1_total_de_promedio." <br>";
echo "$q[p1f]: ".$p1_nsnr/$p1_total_de_promedio."<br>";

$arr=array($q['p1a'],$q['p1b'],$q['p1c'],$q['p1d'],$q['p1e'],$q['p1f']);
$arrdos=array(
	$p1_a,
	$p1_b,
	$p1_c,
	$p1_d,
	$p1_e,
	$p1_nsnr,
);
$tamanyo=1300;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p1'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

//p2
echo "<br><br>";
echo "<b>$q[p2] <br>Total:</b><br>";
echo "$q[p2a]: $p2_a <br> $q[p2b]: $p2_b <br> $q[p2c]: $p2_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p2a]: ".$p2_a/$p1_total." <br> $q[p2b]: ".$p2_b/$p1_total."";
echo "<br> $q[p2c]: ".$p2_c/$p1_total."<br> ";
//~ echo "total $p2_total";
$arr=array($q['p2a'],$q['p2b'],$q['p2c']);
$arrdos=array(
	$p2_a,
	$p2_b,
	$p2_c,
);
$tamanyo=1300;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p2'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

//p3
$p3_total_de_promedio = $p3_a + $p3_b + $p3_c + $p3_d + $p3_e;
echo "<br><br>";//3
echo "<b>$q[p3] <br>Total:</b><br>";
echo "$q[p3a]: $p3_a <br> $q[p3b]: $p3_b <br> $q[p3c]: $p3_c <br> $q[p3d]: $p3_d <br> $q[p3e]: $p3_e";
echo "<br>";
echo "<b>Promedio:</b><br>";
echo "$q[p3a]: ".$p3_a/$p3_total_de_promedio." <br> $q[p3b]: ".$p3_b/$p3_total_de_promedio."";
echo "<br> $q[p3c]: ".$p3_c/$p3_total_de_promedio."<br> $q[p3d]: ".$p3_d/$p3_total_de_promedio." ";
echo "<br> $q[p3e]: ".$p3_e/$p3_total_de_promedio." <br>";
$arr=array($q['p3a'],$q['p3b'],$q['p3c'],$q['p3d'],$q['p3e']);
$arrdos=array(
	$p3_a,
	$p3_b,
	$p3_c,
	$p3_d,
	$p3_e,
);
$tamanyo=1200;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p3'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br>";


//p4
$p4_total_de_promedio = $p4_a + $p4_b + $p4_c + $p4_d + $p4_e;
echo "<br>";
echo "<b>$q[p4] <br>Total:</b><br>";
echo "$q[p4a]: $p4_a <br> $q[p4b]: $p4_b <br> $q[p4c]: $p4_c <br> $q[p4d]: $p4_d <br> $q[p4e]: $p4_e";
echo "<br>";
echo "<b>Promedio:</b><br>";
echo "$q[p4a]: ".$p4_a/$p4_total_de_promedio." <br> $q[p4b]: ".$p4_b/$p4_total_de_promedio."";
echo "<br> $q[p4c]: ".$p4_c/$p4_total_de_promedio."<br> $q[p4d]: ".$p4_d/$p4_total_de_promedio." ";
echo "<br> $q[p4e]: ".$p4_e/$p4_total_de_promedio." <br>";
$arr=array($q['p4a'],$q['p4b'],$q['p4c'],$q['p4d'],$q['p4e']);
$arrdos=array(
	$p4_a,
	$p4_b,
	$p4_c,
	$p4_d,
	$p4_e,
);
$tamanyo=1200;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p4'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";


//p5
echo "<b>$q[p5] <br>Total:</b><br>";
echo "$q[p5a]: $p5_a <br> $q[p5b]: $p5_b <br> $q[p5c]: $p5_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p5a]: ".$p5_a/$p5_total." <br> $q[p5b]: ".$p5_b/$p5_total."";
echo "<br> $q[p5c]: ".$p5_c/$p5_total."<br> ";
$arr=array($q['p5a'],$q['p5b'],$q['p5c']);
$arrdos=array(
	$p5_a,
	$p5_b,
	$p5_c,
);
$tamanyo=1100;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p5'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p6
echo "<br>";
echo "<b>Demanda y consumo</b><br><br>";
echo "<b>$q[p6] <br>Total:</b><br>";
echo "$q[p6a]: $p6_a <br> $q[p6b]: $p6_b <br> $q[p6c]: $p6_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p6a]: ".$p6_a/$p6_total." <br> $q[p6b]: ".$p6_b/$p6_total."";
echo "<br> $q[p6c]: ".$p6_c/$p6_total."<br> ";
$arr=array($q['p6a'],$q['p6b'],$q['p6c']);
$arrdos=array(
	$p6_a,
	$p6_b,
	$p6_c,
);
$tamanyo=700;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p6'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";


//p7
echo "<b>$q[p7] <br>Total:</b><br>";
echo "$q[p7a]: $p7_a <br> $q[p7b]: $p7_b <br> $q[p7c]: $p7_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p7a]: ".$p7_a/$p7_total." <br> $q[p7b]: ".$p7_b/$p7_total."";
echo "<br> $q[p7c]: ".$p7_c/$p7_total."<br> ";
$arr=array($q['p7a'],$q['p7b'],$q['p7c']);
$arrdos=array(
	$p7_a,
	$p7_b,
	$p7_c,
);
$tamanyo=1000;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p7'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";


//p8
echo "<br><br>";
echo "<b>$q[p8] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p8a]: ".$p8_a/$p8t."% <br> $q[p8b]: ".$p8_b/$p8t."%";
echo "<br> $q[p8c]: ".$p8_c/$p8t."%<br> ";
echo "$q[p8d]: ".$p8_d/$p8t."%<br> ";
echo "$q[p8e]: ".$p8_e/$p8t."%<br> ";
$arr=array($q['p8a'],$q['p8b'],$q['p8c'],$q['p8d'],$q['otras_fuentes']);
$arrdos=array(
	$p8_a,
	$p8_b,
	$p8_c,
	$p8_d,
	$p8_e,
);
$tamanyo=1650;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p8'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

////p9 
echo "<b>$q[p9] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p9a]: ".$p9_a/$p9t."<br> $q[p9b]: ".$p9_b/$p9t."";
echo "<br> $q[p9c]: ".$p9_c/$p9t."<br> ";
echo "$q[p9d]: ".$p9_d/$p9t."<br> ";
echo "$q[p9e]: ".$p9_e/$p9t."<br> ";
echo "$q[p9f]: ".$p9_f/$p9t."<br> ";
echo "$q[p9g]: ".$p9_g/$p9t."<br> ";
echo "$q[p9h]: ".$p9_h/$p9t."<br> ";
$arr=array($q['p9a'],$q['p9b'],$q['p9c'],$q['p9d'],$q['p9e'],$q['p9f'],$q['p9g'],$q['p9h']);
$arrdos=array(
	$p9_a,
	$p9_b,
	$p9_c,
	$p9_d,
	$p9_e,
	$p9_f,
	$p9_g,
	$p9_h,
);
$tamanyo=1250;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p9'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

////p10
echo "<b>$q[p10] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p10a]: ".$p10_a/$p10t." <br> $q[p10b]: ".$p10_b/$p10t."";
echo "<br> $q[p10c]: ".$p10_c/$p10t."<br> ";
echo "$q[p10d]: ".$p10_d/$p10t."<br> ";
echo "$q[p10e]: ".$p10_e/$p10t."<br> ";
$arr=array($q['p10a'],$q['p10b'],$q['p10c'],$q['p10d'],$q['otras_fuentes']);
$arrdos=array(
	$p10_a,
	$p10_b,
	$p10_c,
	$p10_d,
	$p10_e,
);
$tamanyo=1420;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p10'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";


////p11
echo "<b>$q[p11] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p11a]: ".$p11_a/$p11t." <br> $q[p11b]: ".$p11_b/$p11t."";
echo "<br> $q[p11c]: ".$p11_c/$p11t."<br> ";
echo "$q[p11d]: ".$p11_d/$p11t."<br> ";
echo "$q[p11e]: ".$p11_e/$p11t."<br> ";
$arr=array($q['p11a'],$q['p11b'],$q['p11c'],$q['p11d'],$q['otras_fuentes']);
$arrdos=array(
	$p11_a,
	$p11_b,
	$p11_c,
	$p11_d,
	$p11_e,
);
$tamanyo=1500;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p11'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";


//p12 
echo "<b>$q[p12] <br>Total:</b><br>";
echo "$q[p12a]: $p12_a <br> $q[p12b]: $p12_b <br> $q[p12c]: $p12_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p12a]: ".$p12_a/$p12_total." <br> $q[p12b]: ".$p12_b/$p12_total."";
echo "<br> $q[p12c]: ".$p12_c/$p12_total."<br> ";
$arr=array($q['p12a'],$q['p12b'],$q['p12c']);
$arrdos=array(
	$p12_a,
	$p12_b,
	$p12_c,
);
$tamanyo=900;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p12'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br><br>";

//p13 
echo "<b>Oferta</b><br><br>";
echo "<b>$q[p13] <br>Total:</b><br>";
echo "$q[p13a]: $p13_a <br> $q[p13b]: $p13_b <br> $q[p13c]: $p13_c <br>";
echo "$q[p13d]: $p13_nsnr <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p13a]: ".$p13_a/$p13_total." <br> $q[p13b]: ".$p13_b/$p13_total."";
echo "<br> $q[p13c]: ".$p13_c/$p13_total."<br> ";
echo "$q[p13d]: ".$p13_nsnr/$p13_total."<br>";
$arr=array($q['p13a'],$q['p13b'],$q['p13c'],$q['p13d']);
$arrdos=array(
	$p13_a,
	$p13_b,
	$p13_c,
	$p13_nsnr,
);
$tamanyo=900;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p13'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p15 
echo "<b>$q[p15] <br>Total:</b><br>";
echo "$q[p15a]: $p15_a <br> $q[p15b]: $p15_b <br> $q[p15c]: $p15_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p15a]: ".$p15_a/$p15_total." <br> $q[p15b]: ".$p15_b/$p15_total."";
echo "<br> $q[p15c]: ".$p15_c/$p15_total."<br> ";
$arr=array($q['p15a'],$q['p15b'],$q['p15c']);
$arrdos=array(
	$p15_a,
	$p15_b,
	$p15_c,
);
$tamanyo=1110;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p15'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p16 
echo "<b>$q[p16] <br>Total:</b><br>";
echo "$q[p16a]: $p16_a <br> $q[p16b]: $p16_b <br> $q[p16c]: $p16_c <br> $q[p16d]: $p16_d <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p16a]: ".$p16_a/$p16_total." <br> $q[p16b]: ".$p16_b/$p16_total."";
echo "<br> $q[p16c]: ".$p16_c/$p16_total;
echo "<br> $q[p16d]: ".$p16_d/$p16_total."<br> ";
$arr=array($q['p16a'],$q['p16b'],$q['p16c'],$q['p16d']);
$arrdos=array(
	$p16_a,
	$p16_b,
	$p16_c,
	$p16_d,
);
$tamanyo=1010;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p16'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p17 
echo "<b>$q[p17] <br>Total:</b><br>";
echo "$q[p17a]: $p17_a <br> $q[p17b]: $p17_b <br> $q[p17c]: $p17_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p17a]: ".$p17_a/$p17_total." <br> $q[p17b]: ".$p17_b/$p17_total."";
echo "<br> $q[p17c]: ".$p17_c/$p17_total."<br> ";
$arr=array($q['p17a'],$q['p17b'],$q['p17c']);
$arrdos=array(
	$p17_a,
	$p17_b,
	$p17_c,
);
$tamanyo=900;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p17'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p18
$p18_total_de_promedio = $p18_a + $p18_b + $p18_c + $p18_d + $p18_e + $p18_f + $p18_g;
$p18_total_de_promedio += $p18_h + $p18_i + $p18_j + $p18_k + $p18_l + $p18_m + $p18_nsnr; 
echo "<b>$q[p18] <br>Total:</b><br>";
echo "$q[p18a]: $p18_a <br> $q[p18b]: $p18_b <br> $q[p18c]: $p18_c <br> $q[p18d]: $p18_d <br> $q[p18e]: $p18_e";
echo "<br>$q[p18f]: $p18_f<br>";
echo "$q[p18g]: $p18_g<br>";
echo "$q[p18h]: $p18_h<br>";
echo "$q[p18i]: $p18_i<br>";
echo "$q[p18j]: $p18_j<br>";
echo "$q[p18k]: $p18_k<br>";
echo "$q[p18l]: $p18_l<br>";
echo "$q[p18m]: $p18_m<br>";
echo "$q[p18nsnr]: $p18_nsnr<br>";
echo "<b>Promedio:</b><br>";
echo "$q[p18a]: ".$p18_a/$p18_total_de_promedio." <br> $q[p18b]: ".$p18_b/$p18_total_de_promedio."";
echo "<br> $q[p18c]: ".$p18_c/$p18_total_de_promedio."<br> $q[p18d]: ".$p18_d/$p18_total_de_promedio." ";
echo "<br> $q[p18e]: ".$p18_e/$p18_total_de_promedio." <br>";
echo "$q[p18f]: ".$p18_f/$p18_total_de_promedio."<br>";
echo "$q[p18g]: ".$p18_g/$p18_total_de_promedio."<br>";
echo "$q[p18h]: ".$p18_h/$p18_total_de_promedio."<br>";
echo "$q[p18i]: ".$p18_i/$p18_total_de_promedio."<br>";
echo "$q[p18j]: ".$p18_j/$p18_total_de_promedio."<br>";
echo "$q[p18k]: ".$p18_l/$p18_total_de_promedio."<br>";
echo "$q[p18l]: ".$p18_l/$p18_total_de_promedio."<br>";
echo "$q[p18m]: ".$p18_m/$p18_total_de_promedio."<br>";
echo "$q[p18nsnr]: ".$p18_nsnr/$p18_total_de_promedio."<br>";
$arr=array(
	$q['p18a'],
	$q['p18b'],
	$q['p18c'],
	$q['p18d'],
	$q['p18e'],
	$q['p18f'],
	$q['p18g'],
	$q['p18h'],
	$q['p18i'],
	$q['p18j'],
	$q['p18k'],
	$q['p18l'],
	$q['p18m'],
	$q['p18nsnr']
);
$arrdos=array(
	$p18_a,
	$p18_b,
	$p18_c,
	$p18_d,
	$p18_e,
	$p18_f,
	$p18_g,
	$p18_h,
	$p18_i,
	$p18_j,
	$p18_k,
	$p18_l,
	$p18_m,
	$p18_nsnr,
);
$tamanyo=1300;
$alto=830;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p18'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre&alto=$alto'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

////p19 
echo "<b>$q[p19] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p19a]: ".$p19_a/$p19t."<br> $q[p19b]: ".$p19_b/$p19t."";
echo "<br> $q[p19c]: ".$p19_c/$p19t."<br> ";
echo "$q[p19d]: ".$p19_d/$p19t."<br> ";
echo "$q[p19e]: ".$p19_e/$p19t."<br> ";
echo "$q[p19f]: ".$p19_f/$p19t."<br> ";
echo "$q[p19g]: ".$p19_g/$p19t."<br> ";
$arr=array($q['p19a'],$q['p19b'],$q['p19c'],$q['p19d'],$q['p19e'],$q['p19f'],$q['p19g']);
$arrdos=array(
	$p19_a,
	$p19_b,
	$p19_c,
	$p19_d,
	$p19_e,
	$p19_f,
	$p19_g,
);
$tamanyo=1400;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p19'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p20 
echo "<b>$q[p20] <br>Total:</b><br>";
echo "$q[p20a]: $p20_a <br> $q[p20b]: $p20_b <br> $q[p20c]: $p20_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p20a]: ".$p20_a/$p20_total." <br> $q[p20b]: ".$p20_b/$p20_total."";
echo "<br> $q[p20c]: ".$p20_c/$p20_total."<br> ";
$arr=array($q['p20a'],$q['p20b'],$q['p20c']);
$arrdos=array(
	$p20_a,
	$p20_b,
	$p20_c,
);
$tamanyo=1520;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p20'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p21 
echo "<b>$q[p21] <br>Total:</b><br>";
echo "$q[p21a]: $p21_a <br> $q[p21b]: $p21_b <br> $q[p21c]: $p21_c <br>";
echo "$q[p21d]: $p21_d <br> $q[p21e]: $p21_e <br> $q[p21f]: $p21_f <br> $q[p21g]: $p21_g <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p21a]: ".$p21_a/$p21_total." <br> $q[p21b]: ".$p21_b/$p21_total."<br>";
echo "$q[p21c]: ".$p21_c/$p21_total."<br> ";
echo "$q[p21d]: ".$p21_d/$p21_total."<br> ";
echo "$q[p21e]: ".$p21_e/$p21_total."<br> ";
echo "$q[p21f]: ".$p21_f/$p21_total."<br> ";
echo "$q[p21g]: ".$p21_g/$p21_total."<br> ";
$arr=array($q['p21a'],$q['p21b'],$q['p21c'],$q['p21d'],$q['p21e'],$q['p21f'],$q['p21g']);
$arrdos=array(
	$p21_a,
	$p21_b,
	$p21_c,
	$p21_d,
	$p21_e,
	$p21_f,
	$p21_g,
);
$tamanyo=1600;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p21'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p22 
echo "<b>Políticas públicas ambientales y energéticas</b><br><br>";
echo "<b>$q[p22] <br>Total:</b><br>";
echo "$q[p22a]: $p22_a <br> $q[p22b]: $p22_b <br> $q[p22c]: $p22_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p22a]: ".$p22_a/$p22_total." <br> $q[p22b]: ".$p22_b/$p22_total."";
echo "<br> $q[p22c]: ".$p22_c/$p22_total."<br> ";
$arr=array($q['p22a'],$q['p22b'],$q['p22c']);
$arrdos=array(
	$p22_a,
	$p22_b,
	$p22_c,
);
$tamanyo=1100;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p22'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";
//p23 
echo "<b>$q[p23] <br>Total:</b><br>";
echo "$q[p23a]: $p23_a <br> $q[p23b]: $p23_b <br> $q[p23c]: $p23_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p23a]: ".$p23_a/$p23_total." <br> $q[p23b]: ".$p23_b/$p23_total."";
echo "<br> $q[p23c]: ".$p23_c/$p23_total."<br> ";
$arr=array($q['p23a'],$q['p23b'],$q['p23c']);
$arrdos=array(
	$p23_a,
	$p23_b,
	$p23_c,
);
$tamanyo=1500;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p23'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";
//p24 
echo "<b>$q[p24] </b><br>";
echo "<b>Total:</b><br>";
echo "$q[p24a]: ".$p24_a."% <br> $q[p24b]: ".$p24_b."%";
echo "<br> $q[p24c]: ".$p24_c."%<br> ";
echo "$q[p24d]: ".$p24_d."%<br> ";
echo "$q[p24e]: ".$p24_e."%<br> "; 
echo "<b>Promedio:</b><br>";
echo "$q[p24a]: ".$p24_a/$p24_total."% <br> $q[p24b]: ".$p24_b/$p24_total."%";
echo "<br> $q[p24c]: ".$p24_c/$p24_total."%<br> ";
echo "$q[p24d]: ".$p24_d/$p24_total."%<br> ";
echo "$q[p24e]: ".$p24_e/$p24_total."%<br> ";

$arr=array($q['p24a'],$q['p24b'],$q['p24c'],$q['p24d'],$q['otras_fuentes']);
$arrdos=array(
	$p24_a,
	$p24_b,
	$p24_c,
	$p24_d,
	$p24_e,
);
$tamanyo=1370;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p24'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p25 
echo "<b>$q[p25] <br>Total:</b><br>";
echo "$q[p25a]: $p25_a <br> $q[p25b]: $p25_b <br> $q[p25c]: $p25_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p25a]: ".$p25_a/$p25_total." <br> $q[p25b]: ".$p25_b/$p25_total."";
echo "<br> $q[p25c]: ".$p25_c/$p25_total."<br> ";
$arr=array($q['p25a'],$q['p25b'],$q['p25c']);
$arrdos=array(
	$p25_a,
	$p25_b,
	$p25_c,
);
$tamanyo=800;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p25'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p26 
echo "<b>$q[p26] <br>Total:</b><br>";
echo "$q[p26a]: $p26_a <br> $q[p26b]: $p26_b <br> $q[p26c]: $p26_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p26a]: ".$p26_a/$p26_total." <br> $q[p26b]: ".$p26_b/$p26_total."";
echo "<br> $q[p26c]: ".$p26_c/$p26_total."<br> ";
$arr=array($q['p26a'],$q['p26b'],$q['p26c']);
$arrdos=array(
	$p26_a,
	$p26_b,
	$p26_c,
);
$tamanyo=1300;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p26'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

////p27 
echo "<b>$q[p27] </b><br>";
echo "<b>Promedio:</b><br>";
echo "$q[p27a]: ".$p27_a/$p27t."<br> $q[p27b]: ".$p27_b/$p27t."";
echo "<br> $q[p27c]: ".$p27_c/$p27t."<br> ";
echo "$q[p27d]: ".$p27_d/$p27t."<br> ";
echo "$q[p27e]: ".$p27_e/$p27t."<br> ";
echo "$q[p27f]: ".$p27_f/$p27t."<br> ";
$arr=array($q['p27a'],$q['p27b'],$q['p27c'],$q['p27d'],$q['p27e'],$q['p27f']);
$arrdos=array(
	$p27_a,
	$p27_b,
	$p27_c,
	$p27_d,
	$p27_e,
	$p27_f,
);
$tamanyo=2000;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p27'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br><br>";

//p28 
echo "<b>Percepciones sobre la pertinencia del análisis prospectivo</b><br><br>";
echo "<b>$q[p28] <br>Total:</b><br>";
echo "$q[p28a]: $p28_a <br> $q[p28b]: $p28_b <br> $q[p28c]: $p28_c <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p28a]: ".$p28_a/$p28_total." <br> $q[p28b]: ".$p28_b/$p28_total."";
echo "<br> $q[p28c]: ".$p28_c/$p28_total."<br> ";
$arr=array($q['p28a'],$q['p28b'],$q['p28c']);
$arrdos=array(
	$p28_a,
	$p28_b,
	$p28_c,
);
$tamanyo=1300;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p28'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p29 
echo "<b>$q[p29] <br>Total:</b><br>";
echo "$q[p29a]: $p29_a <br> $q[p29b]: $p29_b <br> $q[p29c]: $p29_c <br>";
echo "$q[p29d]: $p29_d <br> $q[p29e]: $p29_e <br> $q[p29f]: $p29_f <br>";
echo "<b>Promedio:</b><br>";
echo "$q[p29a]: ".$p29_a/$p29_total." <br> $q[p29b]: ".$p29_b/$p29_total."";
echo "<br> $q[p29c]: ".$p29_c/$p29_total."<br> ";
echo "$q[p29d]: ".$p29_d/$p29_total."<br> ";
echo "$q[p29e]: ".$p29_e/$p29_total."<br> ";
echo "$q[p29f]: ".$p29_f/$p29_total."<br> ";
$arr=array($q['p29a'],$q['p29b'],$q['p29c'],$q['p29d'],$q['p29e'],$q['p29f']);
$arrdos=array(
	$p29_a,
	$p29_b,
	$p29_c,
	$p29_d,
	$p29_e,
	$p29_f,
);
$tamanyo=1300;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['p29'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";

//p31 
echo "<b>$q[ultimap] <br>Total:</b><br>";
echo "$q[ultimapa]: $p31_a <br> $q[ultimapb]: $p31_b <br>";
echo "<b>Promedio:</b><br>";
echo "$q[ultimapa]: ".$p31_a/$p31_total." <br> $q[ultimapb]: ".$p31_b/$p31_total."<br>";
 
$arr=array($q['ultimapa'],$q['ultimapb']);
$arrdos=array(
	$p31_a,
	$p31_b,
);
$tamanyo=700;
$arr=array_envia($arr); 
$arrdos=array_envia($arrdos); 
$nombre=$q['ultimap'];
echo "<a href='graficar.php?arrayuno=$arr&arraydos=$arrdos&tamanyo=$tamanyo&nombre=$nombre'
		target='_blank'> Ver Grafico</a>
";

echo "<br><br>";
 
 
 
 
 


?>
<?php
include("parte_abajo.html");
?>


