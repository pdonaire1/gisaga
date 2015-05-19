<?php
include ("conexion.php");
//~ $con=mysql_connect($host, $user, $pw)or die ("Problemas al conectar con MySQL-");
//~ mysql_select_db($db,$con) or die ("Problemas al conectar con la Base de Datos=");
//~ mysql_query("SET NAMES 'utf8'");
//~ $consulta = mysql_query("SELECT Code, Name FROM City WHERE Code=".$_GET['id']." order by Name ASC", $con)
			//~ or die("problemas en consulta".mysql_error());

$con = mysql_connect($host, $user, $pw) or die ("Problemas al conectar con el server?");
//~ mysql_select_db($db,$con) or die ("Problemas al conectar con la Base de Datos*");

$consulta = mysql_query("SELECT id_estados, estado FROM estados WHERE relacion='".$_GET['id']."' order by estado ASC",$con)or die ("Problemas al consultar con MySQL::: " + mysql_error());


echo "<select name='estado' id='estado'>";
while ($fila = mysql_fetch_array($consulta)) {
    echo "<option value='" . $fila[0] . "'>" . utf8_encode($fila[1]) . "</option>";
}
echo "</select>";
?>
