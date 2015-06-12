<?php

//include("../configuration.php");

$host = "localhost";
$host_puerto = "localhost:3036";
$user = 'root';
$pw   = '123';
$db   = 'gisaga';


$conexion=mysql_connect($host,$user,$pw)or die(mysql_error());
$db=mysql_select_db($db)or die ("Problemas al conectar con la Base de Datos----")or die(mysql_error());

?>
