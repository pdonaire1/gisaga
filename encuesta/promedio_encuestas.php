<?php
include("parte_arriba.html");
// en las preguntas nsnr toman un valor numerico de 3 o 6 excepto en el caso de un
// checkbox que toma el valor de 101
?>



<form action="" method="get">
  <select name="planificador" >
    <option value="1">Planificador</option>
    <option value="2">Experto</option>
  </select>
</form>
<?php
    
    
include ("conexion.php");
include ("diccionario.php");


/*##################################################################################*/
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
  $total +=1;
}

echo "<p>Total encuestas: $total. <br></p>";
echo "<p><strong>Perfil</strong> <br> Cantidad: <br>";
echo "Planificador: $contador1. Experto: $contador2. <br>";
echo "Promedio:<br>Planificador: ". $contador1/$total .". Experto: ".$contador2/$total.".<br>";
echo "</p>";
echo "<p><strong>Grupo objetivo: </strong><br>Organismo regional o internacional: $grupo_objetivo1";
echo "<br>Empresa petrolera estatal o multinacional: $grupo_objetivo2";
echo " <br>Actor nacional (Venezuela): $grupo_objetivo3";
echo " <br>País miembro de la OPEP: $grupo_objetivo4 </p>";


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

echo "<strong>Economia y desarrollo económico</strong><br>";

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
    
$p12_total = 0;
$p12_a = 0;
$p12_b = 0;
$p12_c = 0;

$p15_total = 0;
$p15_a = 0;
$p15_b = 0;
$p15_c = 0;

$p16_total = 0;
$p16_a = 0;
$p16_b = 0;
$p16_c = 0;

$p17_total = 0;
$p17_a = 0;
$p17_b = 0;
$p17_c = 0;

$p20_total = 0;
$p20_a = 0;
$p20_b = 0;
$p20_c = 0;

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

$p28_total = 0;
$p28_a = 0;
$p28_b = 0;
$p28_c = 0;


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
  elseif ($row['pregunta'] == 12){
    $p12_total += 1;
    if ($row['respuesta'] == 1)
      $p12_a += 1;
    if ($row['respuesta'] == 2)
      $p12_b += 1;
    if ($row['respuesta'] == 3)
      $p12_c += 1;
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
  elseif ($row['pregunta'] == 20){
    $p20_total += 1;
    if ($row['respuesta'] == 1)
      $p20_a += 1;
    elseif ($row['respuesta'] == 2)
      $p20_b += 1;
    elseif ($row['respuesta'] == 3)
      $p20_c += 1;
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
  elseif ($row['pregunta'] == 28){
    $p28_total += 1;
    if ($row['respuesta'] == 1)
      $p28_a += 1;
    elseif ($row['respuesta'] == 2)
      $p28_b += 1;
    elseif ($row['respuesta'] == 3)
      $p28_c += 1;
  }
  
}


//p1
$p1_total_de_promedio = $p1_a + $p1_b + $p1_c + $p1_d + $p1_e + $p1_nsnr;

echo "<strong>$q[p1] <br>Total:</strong><br>";
echo "$q[p1a]: $p1_a <br> $q[p1b]: $p1_b <br> $q[p1c]: $p1_c <br> $q[p1d]: $p1_d <br> $q[p1e]: $p1_e";
echo "<br>$q[p1f]: $p1_nsnr<br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p1a]: ".$p1_a/$p1_total_de_promedio." <br> $q[p1b]: ".$p1_b/$p1_total_de_promedio."";
echo "<br> $q[p1c]: ".$p1_c/$p1_total_de_promedio."<br> $q[p1d]: ".$p1_d/$p1_total_de_promedio." ";
echo "<br> $q[p1e]: ".$p1_e/$p1_total_de_promedio." <br>";
echo "$q[p1f]: ".$p1_nsnr/$p1_total_de_promedio."<br>";
echo "total: $p1_total";

//p2
echo "<br>";
echo "<strong>$q[p2] <br>Total:</strong><br>";
echo "$q[p2a]: $p2_a <br> $q[p2b]: $p2_b <br> $q[p2c]: $p2_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p2a]: ".$p2_a/$p1_total." <br> $q[p2b]: ".$p2_b/$p1_total."";
echo "<br> $q[p2c]: ".$p2_c/$p1_total."<br> ";
echo "total $p2_total";


//p3
$p3_total_de_promedio = $p3_a + $p3_b + $p3_c + $p3_d + $p3_e;
echo "<br><br>";//3
echo "<strong>$q[p3] <br>Total:</strong><br>";
echo "$q[p3a]: $p3_a <br> $q[p3b]: $p3_b <br> $q[p3c]: $p3_c <br> $q[p3d]: $p3_d <br> $q[p3e]: $p3_e";
echo "<br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p3a]: ".$p3_a/$p3_total_de_promedio." <br> $q[p3b]: ".$p3_b/$p3_total_de_promedio."";
echo "<br> $q[p3c]: ".$p3_c/$p3_total_de_promedio."<br> $q[p3d]: ".$p3_d/$p3_total_de_promedio." ";
echo "<br> $q[p3e]: ".$p3_e/$p3_total_de_promedio." <br>";
echo "<br>";

//p4
$p4_total_de_promedio = $p4_a + $p4_b + $p4_c + $p4_d + $p4_e;
echo "<br>";
echo "<strong>$q[p4] <br>Total:</strong><br>";
echo "$q[p4a]: $p4_a <br> $q[p4b]: $p4_b <br> $q[p4c]: $p4_c <br> $q[p4d]: $p4_d <br> $q[p4e]: $p4_e";
echo "<br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p4a]: ".$p4_a/$p4_total_de_promedio." <br> $q[p4b]: ".$p4_b/$p4_total_de_promedio."";
echo "<br> $q[p4c]: ".$p4_c/$p4_total_de_promedio."<br> $q[p4d]: ".$p4_d/$p4_total_de_promedio." ";
echo "<br> $q[p4e]: ".$p4_e/$p4_total_de_promedio." <br>";
echo "<br>";

/////////////////////////////////////////7777

//p5
echo "<strong>$q[p5] <br>Total:</strong><br>";
echo "$q[p5a]: $p5_a <br> $q[p5b]: $p5_b <br> $q[p5c]: $p5_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p5a]: ".$p5_a/$p5_total." <br> $q[p5b]: ".$p5_b/$p5_total."";
echo "<br> $q[p5c]: ".$p5_c/$p5_total."<br> ";
echo "total $p5_total";

//p6
echo "<br><br>";
echo "<strong>$q[p6] <br>Total:</strong><br>";
echo "$q[p6a]: $p6_a <br> $q[p6b]: $p6_b <br> $q[p6c]: $p6_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p6a]: ".$p6_a/$p6_total." <br> $q[p6b]: ".$p6_b/$p6_total."";
echo "<br> $q[p6c]: ".$p6_c/$p6_total."<br> ";
echo "total $p6_total";

//p7
echo "<br><br>";
echo "<strong>$q[p7] <br>Total:</strong><br>";
echo "$q[p7a]: $p7_a <br> $q[p7b]: $p7_b <br> $q[p7c]: $p7_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p7a]: ".$p7_a/$p7_total." <br> $q[p7b]: ".$p7_b/$p7_total."";
echo "<br> $q[p7c]: ".$p7_c/$p7_total."<br> ";
echo "total $p7_total";

//p8
echo "<br><br>";
echo "<strong>$q[p8] </strong><br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p8a]: ".$p8_a/$p8t."% <br> $q[p8b]: ".$p8_b/$p8t."%";
echo "<br> $q[p8c]: ".$p8_c/$p8t."%<br> ";
echo "$q[p8d]: ".$p8_d/$p8t."%<br> ";
echo "$q[p8e]: ".$p8_e/$p8t."%<br> ";
echo "total $p8t";


//p12
echo "<br><br>";
echo "<strong>$q[p12] <br>Total:</strong><br>";
echo "$q[p12a]: $p12_a <br> $q[p12b]: $p12_b <br> $q[p12c]: $p12_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p12a]: ".$p12_a/$p12_total." <br> $q[p12b]: ".$p12_b/$p12_total."";
echo "<br> $q[p12c]: ".$p12_c/$p12_total."<br> ";
echo "total $p12_total";

//p15
echo "<br><br>";
echo "<strong>$q[p15] <br>Total:</strong><br>";
echo "$q[p15a]: $p15_a <br> $q[p15b]: $p15_b <br> $q[p15c]: $p15_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p15a]: ".$p15_a/$p15_total." <br> $q[p15b]: ".$p15_b/$p15_total."";
echo "<br> $q[p15c]: ".$p15_c/$p15_total."<br> ";
echo "total $p15_total";

//p16
echo "<br><br>";
echo "<strong>$q[p16] <br>Total:</strong><br>";
echo "$q[p16a]: $p16_a <br> $q[p16b]: $p16_b <br> $q[p16c]: $p16_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p16a]: ".$p16_a/$p16_total." <br> $q[p16b]: ".$p16_b/$p16_total."";
echo "<br> $q[p16c]: ".$p16_c/$p16_total."<br> ";
echo "total $p16_total";

//p17
echo "<br><br>";
echo "<strong>$q[p17] <br>Total:</strong><br>";
echo "$q[p17a]: $p17_a <br> $q[p17b]: $p17_b <br> $q[p17c]: $p17_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p17a]: ".$p17_a/$p17_total." <br> $q[p17b]: ".$p17_b/$p17_total."";
echo "<br> $q[p17c]: ".$p17_c/$p17_total."<br> ";
echo "total $p17_total";

//p20
echo "<br><br>";
echo "<strong>$q[p20] <br>Total:</strong><br>";
echo "$q[p20a]: $p20_a <br> $q[p20b]: $p20_b <br> $q[p20c]: $p20_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p20a]: ".$p20_a/$p20_total." <br> $q[p20b]: ".$p20_b/$p20_total."";
echo "<br> $q[p20c]: ".$p20_c/$p20_total."<br> ";
echo "total $p20_total";

//p22
echo "<br><br>";
echo "<strong>$q[p22] <br>Total:</strong><br>";
echo "$q[p22a]: $p22_a <br> $q[p22b]: $p22_b <br> $q[p22c]: $p22_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p22a]: ".$p22_a/$p22_total." <br> $q[p22b]: ".$p22_b/$p22_total."";
echo "<br> $q[p22c]: ".$p22_c/$p22_total."<br> ";
echo "total $p22_total";

//p23
echo "<br><br>";
echo "<strong>$q[p23] <br>Total:</strong><br>";
echo "$q[p23a]: $p23_a <br> $q[p23b]: $p23_b <br> $q[p23c]: $p23_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p23a]: ".$p23_a/$p23_total." <br> $q[p23b]: ".$p23_b/$p23_total."";
echo "<br> $q[p23c]: ".$p23_c/$p23_total."<br> ";
echo "total $p23_total";

//p24
echo "<br><br>";
echo "<strong>$q[p24] </strong><br>";
echo "<strong>Total:</strong><br>";
echo "$q[p24a]: ".$p24_a."% <br> $q[p24b]: ".$p24_b."%";
echo "<br> $q[p24c]: ".$p24_c."%<br> ";
echo "$q[p24d]: ".$p24_d."%<br> ";
echo "$q[p24e]: ".$p24_e."%<br> ";
echo "<br>";

echo "<strong>Promedio:</strong><br>";
echo "$q[p24a]: ".$p24_a/$p24_total."% <br> $q[p24b]: ".$p24_b/$p24_total."%";
echo "<br> $q[p24c]: ".$p24_c/$p24_total."%<br> ";
echo "$q[p24d]: ".$p24_d/$p24_total."%<br> ";
echo "$q[p24e]: ".$p24_e/$p24_total."%<br> ";
echo "total $p24_total";


//p25
echo "<br><br>";
echo "<strong>$q[p25] <br>Total:</strong><br>";
echo "$q[p25a]: $p25_a <br> $q[p25b]: $p25_b <br> $q[p25c]: $p25_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p25a]: ".$p25_a/$p25_total." <br> $q[p25b]: ".$p25_b/$p25_total."";
echo "<br> $q[p25c]: ".$p25_c/$p25_total."<br> ";
echo "total $p25_total";

//p26
echo "<br><br>";
echo "<strong>$q[p26] <br>Total:</strong><br>";
echo "$q[p26a]: $p26_a <br> $q[p26b]: $p26_b <br> $q[p26c]: $p26_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p26a]: ".$p26_a/$p26_total." <br> $q[p26b]: ".$p26_b/$p26_total."";
echo "<br> $q[p26c]: ".$p26_c/$p26_total."<br> ";
echo "total $p26_total";

//p28
echo "<br><br>";
echo "<strong>$q[p28] <br>Total:</strong><br>";
echo "$q[p28a]: $p28_a <br> $q[p28b]: $p28_b <br> $q[p28c]: $p28_c <br>";
echo "<strong>Promedio:</strong><br>";
echo "$q[p28a]: ".$p28_a/$p28_total." <br> $q[p28b]: ".$p28_b/$p28_total."";
echo "<br> $q[p28c]: ".$p28_c/$p28_total."<br> ";
echo "total $p28_total";


// corregir la pregunta 1
/*
 *FALTA:
 * 9, 10, 11, 13, 14, 18, 19, 21, 27, 29, 30, 31, 32
 **/
/*##################################################################################*/
$id_encuesta = $_GET['id'];
$consulta_p=mysql_query("select * from ver_todo;",$conexion);
$id_viejo = -1;
//echo $consulta_p['fecha'][0];

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
$total_encuestas = 0;
while ($fila = mysql_fetch_array($consulta_p)) {
    
    if ($id_viejo != $fila['id_encuesta']){
        echo "<td> $fila[fecha].</td>";
        echo "<td> $fila[pais].</td>";
        $total_encuestas = $total_encuestas + 1;
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
					
				
					if ($valor[0] =="")
						echo "- ".$q["p".$fila["pregunta"]."a"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."a"].": ".$valor[0]."<br>";
					
					if ($valor[1] =="")
						echo "- ".$q["p".$fila["pregunta"]."b"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."b"].": ".$valor[1]."<br>";
					
					if ($valor[2] =="")
						echo "- ".$q["p".$fila["pregunta"]."c"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."c"].": ".$valor[2]."<br>";
					
					if ($valor[3] =="")
						echo "- ".$q["p".$fila["pregunta"]."d"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."d"].": ".$valor[3]."<br>";
					
					if ($valor[4] =="")
						echo "- ".$q["p".$fila["pregunta"]."e"].": 0<br>";
					else
						echo "- ".$q["p".$fila["pregunta"]."e"].": ".$valor[4]."<br>";
					

					if ($fila['pregunta'] != 10 and $fila['pregunta'] != 11)
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."%<br>";
						if ($valor[5] ==" ")
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
						if ($valor[6] ==" ")
							echo "- ".$q["p".$fila["pregunta"]."g"].": 0<br>";
						else
							echo "- ".$q["p".$fila["pregunta"]."g"].": ".$valor[6]."<br>";
					}
					if ($q["p".$fila["pregunta"]."h"])
					{
						//~ echo "- ".$q["p".$fila["pregunta"]."h"].": ".$valor[7]."%<br>";
						if ($valor[7] ==" ")
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
<?php echo "Total $total_encuestas"; ?>
</center>

      
      
<!--
      /**************************************************************************************************
-->
      </div>   
  </div>
    <div class="clr"></div>
  </div>
<!--end of wrap-->
</div>

<!--end of allwrap-->
</div>
<div id="footerwrap" class="gainlayout" style="width:960px;"> 
  <div id="footer" class="gainlayout">  
       <div class="moduletable">
					<div>Copyright © 2014 GISAGA. All Rights Reserved.</div>
       <div><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a>
</div>		        </div>
