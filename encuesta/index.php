<?php


include('parte_arriba.html');
include('../ecojoom15.php');
$user = JFactory::getUser();

if ($user->usertype == "Super Administrator")
{
    echo "Menú<br>";
}
else
{
	echo "Error 404";
	exit();
}


?>

<center>
    <a href="listar_encuestas.php">Ver Encuestas</a>
    <br>
    <a href="promedio_encuestas.php">Ver Resultados</a>
    <br>
</center>
<?php
include("parte_abajo.html");
?>