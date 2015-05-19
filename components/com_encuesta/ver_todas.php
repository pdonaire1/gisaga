<?php
    
    
include ("conexion.php");

$consulta_p=mysql_query("select * from ver_todo;");
$id_viejo = 0;
while ($fila = mysql_fetch_array($consulta_p)) {
    
    if ($id_viejo != $fila['id_encuesta'])
        echo "<strong>Pregunta numero: $fila[pais]</strong>";
    $id_viejo = $fila['id_encuesta'];
    echo "<p>fecha: $fila[fecha] respuesta: $fila[respuesta]</p>";
}
    



?>