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
	echo "<center><strong>Encuestas Realizadas</strong></center>";
	//~ exit();
}
else
{
	echo "Error 404";
	exit();
}



?>

<center>
<table border="1" >
    <tr>
        <td>
            ver
        </td>
        <td>
            Fecha
        </td>
        <td>
            Pais
        </td>
        <td>
            Observaciones
        </td>
    </tr>
<?php
    
include ("conexion.php");
$consulta_p=mysql_query("select * from encuesta;", $conexion)or die(mysql_error());



/*********************************************************/
$num_total_registros=mysql_query("SELECT COUNT(id_encuesta) FROM encuesta;", $conexion)or die(mysql_error());
$num_total_registros = mysql_fetch_row($num_total_registros);
$TAMANO_PAGINA = 5;//$_GET['numero'];
//if (!$TAMANO_PAGINA)
//    $TAMANO_PAGINA=10;
$total_paginas = (int)($num_total_registros[0] / $TAMANO_PAGINA);
if (($num_total_registros[0] / $TAMANO_PAGINA) > $total_paginas)
{
    $total_paginas++;
}
//echo ($contar == 1) ? '1 usuarios' : &quot;$countar usuarios&quot;;
//~ echo "total $num_total_registros[0] <br>";

$pagina = $_GET["pagina"];
if (!$pagina) {
   $inicio = 0;
   $pagina = 1;
}
else {
   $inicio = ($pagina - 1) * $TAMANO_PAGINA;
}
//$total_paginas = $num_total_registros[0] / $TAMANO_PAGINA;
//~ echo "total pag: ". $num_total_registros[0] / $TAMANO_PAGINA;
//~ echo "<br>registros: $num_total_registros[0]  <br>Tamaño: $TAMANO_PAGINA<br>";
//~ echo "inicio: $inicio";
$consulta = "select * from encuesta ORDER BY fecha DESC, id_encuesta DESC LIMIT ".$inicio."," . $TAMANO_PAGINA;
$rs = mysql_query($consulta, $conexion);

while ($row = mysql_fetch_array($rs)) {
   
	$pais = mysql_query("select pais from paises where id_pais=$row[id_pais];", $conexion);
	$pais = mysql_fetch_row($pais);
	//Aqui mostrariamos los datos que se quieran sobre la noticia
   ?>
   <tr>
        <td>
            <a href="ver_encuesta.php?id=<?php echo $row['id_encuesta']; ?>" >
                Ver Detalles
            </a>
        </td>
        <td>
            <?php
                echo $row['fecha'];
            ?>
        </td>
        <td>
            <?php
                echo utf8_encode($pais[0]);
            ?>
        </td>
        <td>
            <?php
                echo $row['observaciones'];
            ?>
        </td>
        
    </tr>
   
   <?php
   
}
?>
</table>

<?php
if ($total_paginas > 1) {
   if ($pagina != 1)
      echo '<a href="'.$url.'?pagina='.($pagina-1).'"> Anterior </a>';
      
      for ($i=1;$i<=$total_paginas;$i++) {
         if ($pagina == $i)
            //si muestro el índice de la página actual, no coloco enlace
            echo $pagina;
         else
            //si el índice no corresponde con la página mostrada actualmente,
            //coloco el enlace para ir a esa página
            echo '  <a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
      }
      if ($pagina != $total_paginas)
         echo '<a href="'.$url.'?pagina='.($pagina+1).'"> Siguiente </a>';
}
    

echo "<br><a href='index.php' >Regresar</a><br>";

?>
</center>


<?php
include('parte_abajo.html');
?>
