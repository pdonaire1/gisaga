<html>
<body>

<?php
	
	include ("conexion.php");
	$perfil = $_POST['perfil'];// 1 o 2
	$grupo_objetivo = $_POST['grupo_objetivo'];// 1 o 2 o 3 o 4
	$fecha = date("Y-m-d",time()-86400);// Fecha de guardado
	$pais = $_POST['pais'];// VEN, USA....
	$estado = $_POST['estado'];
	//~ _________________
	$p1a = $_POST['p1a'];
	$p1b = $_POST['p1b'];
	$p1c = $_POST['p1c'];
	$p1d = $_POST['p1d'];
	$p1e = $_POST['p1e'];
	$p1nsnr = $_POST['p1nsnr'];
	//~ ___________________________
	$p2 = $_POST['p2'];
	$p2_t = $_POST['p2_t'];
	
	$p3a = $_POST['p3a'];
	$p3b = $_POST['p3b'];
	$p3c = $_POST['p3c'];
	$p3d = $_POST['p3d'];
	$p3e = $_POST['p3e'];
	//~ __________________________
	$p4a = $_POST['p4a'];
	$p4b = $_POST['p4b'];
	$p4c = $_POST['p4c'];
	$p4d = $_POST['p4d'];
	$p4e = $_POST['p4e'];
	//~ ____________________
	$p5 = $_POST['p5'];
	
	$p6 = $_POST['p6'];
	
	$p6_t = $_POST['p6_t'];
	
	$p7 = $_POST['p7'];
	
	$p8v1 = $_POST['p8v1'];
	$p8v2 = $_POST['p8v2'];
	$p8v3 = $_POST['p8v3'];
	$p8v4 = $_POST['p8v4'];
	$p8v5 = $_POST['p8v5'];
	$p8nsnr = $_POST['p8nsnr'];
	//~ _______________
	$p9v1 = $_POST['p9v1'];
	$p9v2 = $_POST['p9v2'];
	$p9v3 = $_POST['p9v3'];
	$p9v4 = $_POST['p9v4'];
	$p9v5 = $_POST['p9v5'];
	$p9v6 = $_POST['p9v6'];
	$p9v7 = $_POST['p9v7'];
	$p9v8 = $_POST['p9v8'];
	$p9nsnr = $_POST['p9nsnr'];
	//____________________
	$p10v1 = $_POST['p10v1'];
	$p10v2 = $_POST['p10v2'];
	$p10v3 = $_POST['p10v3'];
	$p10v4 = $_POST['p10v4'];
	$p10v5 = $_POST['p10v5'];
	$p10nsnr = $_POST['p10nsnr'];
	//________________
	$p11v1 = $_POST['p11v1'];
	$p11v2 = $_POST['p11v2'];
	$p11v3 = $_POST['p11v3'];
	$p11v4 = $_POST['p11v4'];
	$p11v5 = $_POST['p11v5'];
	$p11nsnr = $_POST['p11nsnr'];
	
	$p12 = $_POST['p12'];
	$p13 = $_POST['p13'];
	
	$p14 = $_POST['p14'];
	$p14nsnr = $_POST['p14nsnr'];
	
	$p15 = $_POST['p15'];
	$p16 = $_POST['p16'];
	
	$p17 = $_POST['p17'];
	$p17_t = $_POST['p17_t'];
	
	$p19v1 = $_POST['p19v1'];
	$p19v2 = $_POST['p19v2'];
	$p19v3 = $_POST['p19v3'];
	$p19v4 = $_POST['p19v4'];
	$p19v5 = $_POST['p19v5'];
	$p19v6 = $_POST['p19v6'];
	$p19v7 = $_POST['p19v7'];
	$p19v8 = $_POST['p19v8'];
	$p19nsnr = $_POST['p19nsnr'];
	
	$p20 = $_POST['p20'];
	
	$p21 = $_POST['p21'];
	
	$p21_t = $_POST['p21_t'];// si p21 = 6 o 5 revisar
	
	$p22 = $_POST['p22'];
	
	$p23 = $_POST['p23'];
	
	$p24v1 = $_POST['p24v1'];
	$p24v2 = $_POST['p24v2'];
	$p24v3 = $_POST['p24v3'];
	$p24v4 = $_POST['p24v4'];
	$p24v5 = $_POST['p24v5'];
	$p24nsnr = $_POST['p24nsnr'];
	
	$p25 = $_POST['p25'];
	$p25_t = $_POST['p25_t'];
	
	$p26 = $_POST['p26'];
	$p26_t = $_POST['p26_t'];
	
	$p27v1 = $_POST['p27v1'];
	$p27v2 = $_POST['p27v2'];
	$p27v3 = $_POST['p27v3'];
	$p27v4 = $_POST['p27v4'];
	$p27v5 = $_POST['p27v5'];
	$p27v6 = $_POST['p27v6'];
	
	$p27nsnr = $_POST['p27nsnr'];
	
	$p28 = $_POST['p28'];
	
	$p29 = $_POST['p29'];
	
	$p30_a = $_POST['p30_a'];
	$p30_b = $_POST['p30_b'];
	$p30_c = $_POST['p30_c'];
	
	$observaciones = $_POST['observaciones'];
	
	if ($perfil != 1 and $perfil != 2)
	{
		echo "Error fatal perfil";
		exit();
	}
	if (
		$grupo_objetivo != 1 and
		$grupo_objetivo != 2 and
		$grupo_objetivo != 3 and
		$grupo_objetivo != 4
	)
	{
		echo "Error fatal grupo objetivo";
		exit();
	}
	
	
	
	$bandera = 0;
	
	
	
	
	if (
		$p2 != 3 &&
		isset($p2_t) && !empty ($p2_t)
	)
	{
		echo "";
	}
	elseif ($p2 == 3)
	{
		$p2_t = "";
	}else
	{
		echo "Error fatal 2";
		exit();
	}
	//// fin p2
	if (
		$p6 == 1 &&
		isset($p6_t) && !empty ($p6_t)
	)
	{
		echo "";	
	}
	elseif ($p6 == 3 || $p6 == 2)
	{
		$p6_t = "";
	}else
	{
		echo "Error fatal 6";
		exit();
	}
	// fin p6
	if ($p14nsnr == 101)
	{
		$p14 = "NsNr";
	}
	elseif (
		isset($p14) && !empty ($p14)
	)
	{
	}else
	{
		echo "Error fatal 14";
		exit();
	}
	if (
		$p17 != 3 &&
		isset($p17_t) && !empty ($p17_t)
	)
	{
		echo "";
	}
	elseif ($p17 == 3)
	{
		$p17_t = "";
	}else
	{
		echo "Error fatal 17";
		exit();
	}
	//fin p17
	if ($p18nsnr != 101)
	{
		$p18 = "NsNr";
	}
	elseif (isset($p18) && !empty ($p18))
	{
		echo "";
	}else
	{
		echo "Error fatal 18";
		exit();
	}
	//fin p18
	if (
		$p21 == 7 &&
		isset($p21_t) && !empty ($p21_t)
	)
	{
		echo "continuo";
	}
	elseif (
		$p21 == 1 ||
		$p21 == 2 ||
		$p21 == 3 ||
		$p21 == 4 ||
		$p21 == 5 ||
		$p21 == 6
	)
	{
		$p21_t = "";
	}else
	{
		echo "Error fatal 21";
		exit();
	}
	//fin p21
	if ($p25 == 3)
	{
		$p25_t = "";
	}
	elseif (
		($p25 == 1 || $p25 == 2) &&
		isset($p25_t) && !empty ($p25_t)
	)
	{
	}else
	{
		echo "Error fatal 25";
		exit();
	}
	//fin p25
	if ($p26 == 3)
	{
		$p26_t = "";
	}
	elseif (
		($p26 == 1 || $p26 == 2) &&
		isset($p26_t) && !empty ($p26_t)
	)
	{
	}else
	{
		echo "Error fatal 26";
		exit();
	}
	//fin p26
	// fin p2 p6 p14 p17 p18 p21 p25 p26
	
	
	
	
	
	if (
		($p1a == 1 or $p1b == 2 or $p1c == 3 or $p1d == 4 or $p1e == 5) and
		$p1nsnr != 6
	)
	{
		$p1total = "$p1a, $p1b, $p1c, $p1d, $p1e";
	}
	elseif ($p1nsnr == 6)
	{
		$p1a = "";
		$p1b = "";
		$p1c = "";
		$p1d = "";
		$p1e = "";
		
		$p1total = "$p1a, $p1b, $p1c, $p1d, $p1e";
	}
	else
	{
		echo "Error fatal p1";
		exit();
	}
	// fin p1 
	if ($p3a == 1 or $p3b == 2 or $p3c == 3 or $p3d == 4 or $p3e == 5)
	{
		$p3total = " $p3a, $p3b, $p3c, $p3d, $p3e ";
		echo "p3 total: $p3total";
	}
	else
	{
		echo "Error fatal p3";
		exit();
	}
	// fin p3
	if ($p4a == 1 or $p4b == 2 or $p4c == 3 or $p4d == 4 or $p4e == 5)
	{
		$p4total = "$p4a , $p4b, $p4c, $p4d, $p4e";
	}
	else
	{
		echo "Error fatal p4";
		exit();
	}
	// fin p4
	//fin p1, p3, p4
	
	
	$p8t = $p8v1 + $p8v2 + $p8v3 + $p8v4 + $p8v5;
	if ($p8t == 100 and $p8nsnr != 101)
	{
		$p8total = "$p8v1, $p8v2, $p8v3, $p8v4, $p8v5";
	}
	elseif ($p8nsnr == 101)
	{
		$p8v1 = "";
		$p8v2 = "";
		$p8v3 = "";
		$p8v4 = "";
		$p8v5 = "";
		$p8total = "101";
	}
	else
	{
		echo "Error fatal p8";
		exit();
	}
	// fin p8
	
	$p9t = $p9v1 + $p9v2 + $p9v3 + $p9v4 + $p9v5 + $p9v6 + $p9v7 + $p9v8;
	if ($p9t == 100 and $p9nsnr != 101)
	{
		$p9total = "$p9v1, $p9v2, $p9v3, $p9v4, $p9v5, $p9v6, $p9v7, $p9v8";
	}
	elseif ($p9nsnr == 101)
	{
		$p9v1 = "";
		$p9v2 = "";
		$p9v3 = "";
		$p9v4 = "";
		$p9v5 = "";
		$p9v6 = "";
		$p9v7 = "";
		$p9v8 = "";
		$p9total = "101";
	}
	else
	{
		echo "Error fatal p9";
		exit();
	}
	// fin p9
	
	
	$p10t = $p10v1 + $p10v2 + $p10v3 + $p10v4 + $p10v5;
	if ($p10t == 100 and $p10nsnr != 101)
	{
		$p10total = "$p10v1, $p10v2, $p10v3, $p10v4, $p10v5";
	}
	elseif ($p10nsnr == 101)
	{
		$p10v1 = "";
		$p10v2 = "";
		$p10v3 = "";
		$p10v4 = "";
		$p10v5 = "";
		$p10total = "101";
	}
	else
	{
		echo "Error fatal p10";
		exit();
	}
	// fin p10
	
	$p11t = $p11v1 + $p11v2 + $p11v3 + $p11v4 + $p11v5;
	if ($p11t == 100 and $p11nsnr != 101)
	{
		$p11total = "$p11v1, $p11v2, $p11v3, $p11v4, $p11v5";
	}
	elseif ($p11nsnr == 101)
	{
		$p11v1 = "";
		$p11v2 = "";
		$p11v3 = "";
		$p11v4 = "";
		$p11v5 = "";
		$p11total = "";
	}
	else
	{
		echo "Error fatal p11";
		exit();
	}
	// fin p11
	
	
	$p19t = $p19v1 + $p19v2 + $p19v3 + $p19v4 + $p19v5+ $p19v6 + $p19v7 + $p19v8;
	if ($p19t == 100 and $p19nsnr != 101)
	{
		
		$p19total = "$p19v1, $p19v2, $p19v3, $p19v4, $p19v5, $p19v6, $p19v7, $p19v8";
	}
	elseif ($p19nsnr == 101)
	{
		$p19v1 = "";
		$p19v2 = "";
		$p19v3 = "";
		$p19v4 = "";
		$p19v5 = "";
		$p19v6 = "";
		$p19v7 = "";
		$p19v8 = "";
		$p19total = "NsNr";
	}
	else
	{
		echo "Error fatal p19";
		exit();
	}
	// fin p19
	
	$p24t = $p24v1 + $p24v2 + $p24v3 + $p24v4 + $p24v5;
	if ($p24t == 100 and $p24nsnr != 101)
	{
		$p24total = "$p24v1, $p24v2, $p24v3, $p24v4, $p24v5";
	}
	elseif ($p24nsnr == 101)
	{
		$p24v1 = "";
		$p24v2 = "";
		$p24v3 = "";
		$p24v4 = "";
		$p24v5 = "";
		$p24total = "";
	}
	else
	{
		echo "Error fatal p24";
		exit();
	}
	// fin p24
	
	
	$p27t = $p27v1 + $p27v2 + $p27v3 + $p27v4 + $p27v5 + $p27v6;
	if ($p27t == 100 and $p27nsnr != 101)
	{
		$p27total = "$p27v1, $p27v2, $p27v3, $p27v4, $p27v5, $p27v6";
	}
	elseif ($p27nsnr == 101)
	{
		$p27v1 = "";
		$p27v2 = "";
		$p27v3 = "";
		$p27v4 = "";
		$p27v5 = "";
		$p27v6 = "";
		$p27total = "";
	}
	else
	{
		echo "Error fatal p27";
		exit();
	}
	// fin p27
	
	if (isset($p30_a) && !empty ($p30_a) )
	{
	}
	else
	{
		echo "Error fatal p30_a";
		exit();
	}
	
	
	
	
	
	
	
	/**********************************************************************************/
	
	$con=mysql_connect($host, $user, $pw)or die ("Problemas al conectar con el server");
	$bandera = 0;
	$consulta_p=mysql_query("select id_pais, pais from paises");
	while ($fila = mysql_fetch_array($consulta_p)) {
		
		if ($pais == $fila[0])
		{
			$consulta = mysql_query("select id_estados, estado from estados WHERE relacion='".$fila[0]."'")or die (mysql_error());
			while ($fila = mysql_fetch_array($consulta)) {
				
				if ($estado == $fila[0])
				{
					$bandera = 1;
					break;
				}
			}
			if ($bandera == 0)
			{
				echo "Error fatal: estado";
				exit();
			}
			$bandera = 1;
			break;
		}
	}
	if ($bandera == 0)
	{
		echo "Error fatal: estado";
		exit();
	}
	
	
	//~ mysql_select_db($db,$con) or die ("Problemas al conectar con la Base de Datos#");
	
	mysql_query("INSERT INTO encuesta (`perfil`, `fecha`, `grupo_objetivo`, `id_pais`, `id_estados`, `observaciones`)
	             VALUES ('$perfil', '$fecha', '$grupo_objetivo', '$pais', '$estado', '$observaciones');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_encuesta = mysql_insert_id($con);
	echo "<br>id perfil: $id_encuesta <br>";
	echo $id_encuesta;
	//    pregunta 1:::
	mysql_query("INSERT INTO respuesta (`respuesta`, `respuesta2`, `respuesta3`,`pregunta`)
	             VALUES ('$p1total', '' , '', '1');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta: $id_respuesta <br>";
	echo $id_respuesta;
	
	mysql_query("INSERT INTO encuesta_respuesta (`id_encuesta`, `id_respuesta`)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	        
	//    pregunta 2:::
	mysql_query("INSERT INTO respuesta (`respuesta`, `respuesta2`, `respuesta3`,`pregunta`)
	             VALUES ('$p2', '$p2_t' , '','2');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	//    pregunta 3:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3,`pregunta`)
	             VALUES ('$p3total', '' , '','3');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	//    pregunta 4:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p4total', '' , '', '4');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	             
	             
	//    pregunta 5:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p5', '' , '','5');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	             
	             
	//    pregunta 6:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p6', '$p6_t' , '', '6');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	
	
	//    pregunta 7:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p7', '' , '', '7');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	             
	//    pregunta 8:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p8total', '' , '', '8');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	             
	//    pregunta 9:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p9total', '' , '', '9');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	             
	//    pregunta 10:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p10total', '' , '', '10');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	
	
	//    pregunta 11:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p11total', '' , '', '11');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	
	//    pregunta 12:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p12', '' , '', '12');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	

	
	//    pregunta 13:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p13', '' , '', '13');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	
	
	//    pregunta 14:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p14', '' , '', '14');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	
	
	//    pregunta 15:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p15', '' , '', '15');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	             
	             
	             
	//    pregunta 16:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p16', '' , '', '16');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );             
	             
	
	
	//    pregunta 17:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p17', '$p17_t' , '', '17');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );                          
	             
	             
	/****************************************************************************************************************************************/
	//    pregunta 18:::
	mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$p18', '' , '', '18');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
	$id_respuesta = mysql_insert_id($con);
	echo "<br>id respuesta2: $id_respuesta <br>";
	
	mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
	             VALUES ('$id_encuesta', '$id_respuesta');", $con)
	             or die ("problemas al insertar datos 1: ".mysql_error() );             
	
	
	//   pregunta 19:::
	echo "LLenado en la pregunta 19****************<br> llenar = ";
	echo llenar($p19total, "","", 19, $id_encuesta, $con);
	
	//   pregunta 20:::
	echo llenar($p20, "","", 20, $id_encuesta, $con);
	
	//   pregunta 21:::
	echo llenar($p21, $p21_t,"", 21, $id_encuesta, $con);
	
	//   pregunta 22:::
	echo llenar($p22, "","", 22, $id_encuesta, $con);
	
	//   pregunta 23:::
	echo llenar($p23, "","", 23, $id_encuesta, $con);
	
	//   pregunta 24:::
	echo llenar($p24total, "","", 24, $id_encuesta, $con);
	
	//   pregunta 25:::
	echo llenar($p25, $p25_t,"", 25, $id_encuesta, $con);
	
	//   pregunta 26:::
	echo llenar($p26, $p26_t,"", 26, $id_encuesta, $con);
	
	//   pregunta 27:::
	echo llenar($p27total, "","", 27, $id_encuesta, $con);
	
	//   pregunta 28:::
	echo llenar($p28, "","", 28, $id_encuesta, $con);
	
	//   pregunta 29:::
	echo llenar($p29, "","", 29, $id_encuesta, $con);
	
	//   pregunta 30:::
	echo llenar($p30_a, $p30_b, $p30_c, 30, $id_encuesta, $con);
	
	
	
	
	$split = split(",", $p19total);
	echo "<br>split ======= $split <br>";
	var_dump($split);
	foreach ($split as $i){
		echo "I: $i <br>";
	}
	
	function llenar($resp, $resp2="", $resp3="", $pregunta, $IdEncuesta, $con)
	{
		mysql_query("INSERT INTO respuesta (respuesta, respuesta2, respuesta3, pregunta)
	             VALUES ('$resp', '$resp2' , '$resp3', '$pregunta');", $con) 
	             or die ("problemas al insertar datos 1: ".mysql_error() );
		$id_respuesta = mysql_insert_id($con);
		echo "<br>id respuesta $pregunta: $id_respuesta <br>";
		
		mysql_query("INSERT INTO encuesta_respuesta (id_encuesta, id_respuesta)
					 VALUES ('$IdEncuesta', '$id_respuesta');", $con)
					 or die ("problemas al insertar datos 2: ".mysql_error() );             
		
		return true;
	}
	
	
	
	
	echo "Datos Insertados";
	
?>
</body></html>
