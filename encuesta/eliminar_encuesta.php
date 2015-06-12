<?php

include('parte_arriba.html');



include('../ecojoom15.php');

$user = JFactory::getUser();
//~ echo "Usuario " . $user->username . " con id: " . $user->id . " conectado a Joomla";  
//~ include('../joomla/ecojoom15.php');
//~ if (JFactory::getUser()->usertype == NULL)
    //~ JError::raiseError(1,"No puede acceder a esta página sin estar logueado en Joomla.");
$user = JFactory::getUser();
//~ echo "Usuario " . $user->username . " con id: " . $user->id . " conectado a Joomla ::: ROL". $user->usertype;  

if ($user->usertype == "Super Administrator")
{
	//~ JError::raiseError(3,"No puede acceder a esta página sin estar logueado en Joomla.");
	echo "<center><strong>Eliminar Encuesta</strong></center>";
	//~ exit();
}
else
{
	echo "Error 404";
	exit();
}



?>

<center>

<?php
    
    
include ("conexion.php");

$id_encuesta = $_GET["encuesta"];
$consulta = "select * from encuesta WHERE id_encuesta=$id_encuesta;";
$consulta_p=mysql_query($consulta, $conexion);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "DELETE FROM encuesta WHERE id_encuesta=$id_encuesta;";
    if (mysql_query($sql, $conexion)) {
        echo "La encuesta fue eliminada con éxito.\n";
        echo "<a href='listar_encuestas.php' >Regresar</a>";
        include("parte_abajo.html");
        exit();
    } else {
        echo 'Error al eliminar la encuesta: ' . mysql_error() . "\n";
    }
} else  {
    echo "<br><b>¿Seguro que desea eliminar la encuesta?:</b>";
    while ($fila = mysql_fetch_array($consulta_p)) {
        //echo var_dump($fila);
        echo "<br>";
        echo "<b>Fecha:</b> $fila[fecha]. ";
        echo "<b>Pais:</b> ";
        $consulta = "select * from paises WHERE id_pais=$fila[id_pais];";
        $consulta_d=mysql_query($consulta, $conexion);
        while ($pais= mysql_fetch_array($consulta_d)) {
            echo $pais['pais']." ";
        }
        echo "<b>Estado: </b>";
        
        $consulta = "select * from estados WHERE id_estados=$fila[id_estados];";
        $consulta_e=mysql_query($consulta, $conexion);
        while ($pais= mysql_fetch_array($consulta_e)) {
            echo $pais['estado']." ";
        }
        
        echo "<b>Perfil: </b>";
        if($fila['perfil'] == 1)
            echo "Planificador.";
        elseif($fila['perfil'] == 2)
            echo "Experto.</td>";
        
        echo "<b> Grupo Objetivo: </b>";       
        if($fila['grupo_objetivo']==1){
            echo "Organismo regional o internacional.</td>";
        }
        elseif ($fila['grupo_objetivo']=="2"){
            echo "Empresa petrolera estatal o multinacional.</td>";
        }
        elseif ($fila['grupo_objetivo']==3){
            echo "Actor nacional (Venezuela).</td>";
        }
        elseif ($fila['grupo_objetivo']==4){
            echo "País miembro de la OPEP.</td>";
        }
        echo "<br   >";
        echo "<b>Observaciones: </b>";
        if ($fila['observaciones']== "")
            echo "Ninguna";
        else
            echo "$fila[observaciones]<br>";
    
    }
}


?>
    <form action="#" method="post" >
        <input type="submit" value="Confirmar">
    </form>
    <br><a href='ver_encuesta.php?id=<?php echo $_GET['encuesta']; ?>' >Regresar</a>
</center>


<?php

include('parte_abajo.html');
?>
