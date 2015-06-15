<?php
    
    
include ("conexion.php");

$id_encuesta = $_GET['id'];
$consulta_p=mysql_query("select * from ver_todo WHERE id_encuesta = $id_encuesta;");
$id_viejo = -1;
//echo $consulta_p['fecha'][0];

?>

<center>
<table border="1" >
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


<?php

while ($fila = mysql_fetch_array($consulta_p)) {
    
    if ($id_viejo != $fila['id_encuesta']){
        echo "<td> $fila[fecha].</td>";
        echo "<td> $fila[pais].</td>";
        
        if($fila['perfil'] == 1)
            echo "<td>Planificador.</td> ";
        elseif($fila['perfil'] == 2)
            echo "<br>Perfil: <strong>Experto. </strong>";
            
        if($fila['grupo_objetivo']==1){
            echo "<td>Organismo regional o internacional.</td>";
        }
        elseif ($fila['grupo_objetivo']==2){
            echo "<td>Empresa petrolera estatal o multinacional.</td>";
        }
        elseif ($fila['grupo_objetivo']==3){
            echo "<td>Actor nacional (Venezuela).</td>";
        }
        elseif ($fila['grupo_objetivo']==4){
            echo "<td>País miembro de la OPEP.</td>";
        }
        
        ?>
    </table>
    <br>
    <table border="1" >
        <tr>
            <td>
                Pregunta
            </td>
            <td>
                respuesta
            </td>
            <td>
                Respuesta opcional 1
            </td>
            <td>
                Respuesta opcional 2
            </td>
        </tr>
        <?php
    }
    $id_viejo = $fila['id_encuesta'];
    
    
    /**************COMIENZO CON LAS REPUESTAS **************/
    if ($fila['pregunta'] == 1){
        echo "";
    }
    //echo "<p>fecha: $fila[fecha] respuesta: $fila[respuesta]</p>";
}
    



?>
</table>
</center>