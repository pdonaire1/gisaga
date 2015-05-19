<?php

$host = "localhost";
$user = "root";
$pw = "123456";
$db   = "encuesta_final1";

$conexion=mysql_connect($host,$user,$pw);
$db=mysql_select_db("encuesta_final1")or die ("Problemas al conectar con la Base de Datos----");

?>
