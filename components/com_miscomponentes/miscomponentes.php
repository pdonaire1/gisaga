<?php
$usuario =& JFactory::getUser();
$miID = $usuario->get('id');
if ($miID != 0) {
echo "Mi id de usuario es <strong>$miID</strong>";
$host = "localhost";
$user = "root";
$pw = "123456";
$db   = "gisaga1";

$conexion=mysql_connect($host,$user,$pw);
$db=mysql_select_db("gisaga1")or die ("Problemas al conectar con la Base de Datos----");


$data =mysql_query("select username, usertype from pfg_session WHERE userid 	= $miID;", $conexion);
//~ echo $data['usertype'];
/*while ($rows=mysql_fetch_array($data)
{
	echo $rows[0];
}*/

} else {
echo "No eres un usuario registrado..";
}
?>
