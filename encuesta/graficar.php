<?php 
include ("jpgraph-1.27.1/src/jpgraph.php");
include ("jpgraph-1.27.1/src/jpgraph_pie.php");
include ("diccionario.php");
// Some data

function array_recibe($url_array) { 
    $tmp = stripslashes($url_array); 
    $tmp = urldecode($tmp); 
    $tmp = unserialize($tmp); 
   return $tmp; 
} 

$leyenda = $_GET['arrayuno'];//array($_GET['a'],21,17,14,23,14,13,12,11);
//~ $data = array(13,12,11);
$data = $_GET['arraydos'];
$data=array_recibe($data);
//~ echo var_dump($data);
//~ echo "<br>";
//~ foreach($data as $indice => $valor){ 
	//~ echo "data[".$indice."] = ".$valor."<br>"; 
//~ } 
$leyenda=array_recibe($leyenda);
foreach($leyenda as $indice => $valor){ 
	$leyenda[$indice] = utf8_decode($valor); 
} 
$tamanyo=$_GET['tamanyo'];
$alto=$_GET['alto'];
if ($alto==''){
	$alto=400;
}
$nombre=utf8_decode($_GET['nombre']);

// Create the Pie Graph. 
$graph = new PieGraph($tamanyo,$alto,"auto");
$graph->SetShadow();

// Set A title for the plot
$graph->title->Set($nombre);
$graph->title->SetFont(FF_FONT1,FS_BOLD);

// Create
$p1 = new PiePlot($data);
$p1->SetLegends($leyenda);

$graph->Add($p1);
$graph->Stroke();

?>
