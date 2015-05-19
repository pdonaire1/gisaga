<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="joomla, Joomla" />
  <meta name="title" content="Inicio" />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Joomla! - el motor de portales dinámicos y sistema de administración de contenidos" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>GISAGA</title>
  <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="../plugins/content/attachments1.css" type="text/css" />
  <link rel="stylesheet" href="../plugins/content/attachments.css" type="text/css" />
  <link rel="stylesheet" href="../media/system/css/modal.css" type="text/css" />
  <script type="text/javascript" src="../includes/js/joomla.javascript.js"></script>
  <script type="text/javascript" src="../media/system/js/mootools.js"></script>
  <script type="text/javascript" src="../media/system/js/caption.js"></script>
  <script type="text/javascript" src="../plugins/content/attachments_refresh.js"></script>
  <script type="text/javascript" src="../media/system/js/modal.js"></script>
  <script type="text/javascript">

		window.addEvent('domready', function() {

			SqueezeBox.initialize({});

			$$('a.modal-button').each(function(el) {
				el.addEvent('click', function(e) {
					new Event(e).stop();
					SqueezeBox.fromElement(el);
				});
			});
		});
		window.addEvent('domready', function(){ var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false}); });
  </script>

<link rel="stylesheet" href="../templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="../templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="../templates/a4joomla-aldora-free/css/template.css" type="text/css" />
<link rel="stylesheet" href="../templates/a4joomla-aldora-free/css/grey.css" type="text/css" />
<link rel="stylesheet" href="../templates/a4joomla-aldora-free/css/ie6.css" type="text/css" />
<style type="text/css">

</style>
<script src="../templates/a4joomla-aldora-free/js/iepngfix_tilebg.js" type="text/javascript"></script>
<link rel="stylesheet" href="../templates/a4joomla-aldora-free/css/ie67.css" type="text/css" />

<?php

//include("parte_arriba.html");
//include("parte_arriba_encuesta.html");
include ("conexion.php");
$idioma=$_GET['idioma'];
if ($idioma=='' or $idioma=='espanyol')
	include ("diccionario.php");
if ($idioma=='ingles')
	include ("diccionario_ingles.php");
if ($idioma=='frances')
	include ("diccionario_frances.php");
?>


<script type="text/javascript" src="jQuery/v4l1d4c10n.js"></script>
<script type="text/javascript" src="jQuery/jquery-1.6.4.min.js"></script>
<script type="text/javascript" >
	$(document).ready(function()
	{
		$('#pais').change(function()
		{
			var id=$('#pais').val();
			$('#estados').load('ajax1.php?id='+id);
		});
	});
	
</script>


<style type="text/css">
 #logo {
    width:330px;
 }
 #headerright {
    width:600px;
 } 
 #search {
   width:200px;
 }
 #topmenuwrap {
 background: #2A6B25;
 }
</style>
<!-- Modificado el favicon -->
<link rel="shortcut icon" href="../favicon.ico">
</head>
<body>

<div id="topmenuwrap" class="gainlayout">
 <div id="topmenuwrap2" class="gainlayout" style="width:960px;">
           <div id="topmenu" class="gainlayout">
           		<div class="moduletable">
					<ul id="mainlevel-nav"><li><a href="../" class="mainlevel-nav" >Inicio</a></li><li><a href="../index.php?option=com_content&amp;view=article&amp;id=47&amp;Itemid=29" class="mainlevel-nav" >¿Quienes Somos?</a></li><li><a href="../index.php?option=com_content&amp;view=frontpage&amp;Itemid=18" class="mainlevel-nav" >Noticias</a></li><li><a href="../encuesta/encuesta2.php" class="mainlevel-nav" >Realizar Encuesta</a></li><li><a href="../index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=37&amp;Itemid=59" class="mainlevel-nav" >Investigaciones y Publicaciones</a></li><li><a href="../index.php?option=com_kunena&amp;view=showcat&amp;catid=0&amp;Itemid=62" class="mainlevel-nav" >Foro</a></li><li><a href="../encuesta/index.php" class="mainlevel-nav" >
					
					
					</a></li></ul>		</div>
	
           <div class="clr"></div>
         </div> 
    <div class="clr"></div>
 </div>
 <div class="clr"></div>
</div> 

<div id="allwrap" class="gainlayout">

<div id="wrap" class="gainlayout" style="width:960px;">

  	  <div id="pathway" class="gainlayout">
        <span class="breadcrumbs pathway">
</span>

      <div class="clr"></div>
	  </div>
   

  <div id="cbody" class="gainlayout">






    <div id="sidebar" style="width:190px;">     
      		<div class="moduletable_menu">
		  
		</div>
  </div>

    <div id="content60" style="width:490px;">    

      <div id="content" >
            
<center>
<div id="">

	<center>
		<a href="encuesta2.php?idioma=espanyol" style="font-size: 17px;" >[Español]</a>
		<a href="encuesta2.php?idioma=ingles" style="font-size: 17px;" >[English]</a>
		<a href="encuesta2.php?idioma=frances" style="font-size: 17px;">[Français]</a>
		
		<br>
		 <h3  color="#FFF" ><center>
			Facultad de Ciencias, Económicas y Sociales FACES-ULA
			</center>
		 </h3>
		 <h4 color="#FFF" ><center>
			Grupo de Investigación Sobre Agricultira Gerencia y Ambiente (GISAGA)
		 </center></h4>
		<h5 color="#FFF" ><center>
			Núcleo La Liria Edificio "G" 2° Planta</center>
		</h5>


		</div>
		
    	</div>
</div>
</center>
        	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#navbar-wrap').prepend('<a id="menu-icon"><span class="menu-icon-title">Menú Principal</span> <i class="icon-double-angle-down"></i> </a>');
		$("#menu-icon").on("click", function(){
			$("#navbar").slideToggle(500,"linear");
			$(this).toggleClass("active");
		});
	});
</script>

		<div class="">
<!--
			<center><h1> Encuesta </h1></center>
-->
		</div>
			
			<center>
				
				<form id="form" action="pr0c3s4r.php" method="post" onsubmit="return validar(this)" >
					<table border ="1" width="500" style="border: 1px solid white;" class="TablaBlanca" >
						<tr>
							<td>
								<p>
									<center>
										<?php echo $q['membrete_uno']; ?><br/>
										<?php echo $q['membrete_dos']; ?><br/>
										<?php echo $q['membrete_tres']; ?><br/>
									</center>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>
									<strong><?php echo $q['membrete_cuatro']; ?></strong> <?php echo $q['membrete_cinco']; ?>
									<?php echo $q['membrete_seis']; ?><br />
									<?php echo $q['membrete_siete']; ?><br/>
									<strong><?php echo $q['membrete_ocho']; ?></strong><?php echo $q['membrete_nueve']; ?><strong>
										<?php echo $q['membrete_diez']; ?><strong><?php echo $q['membrete_once']; ?></strong>
									<?php echo $q['membrete_doce']; ?><br />
									<strong><?php echo $q['membrete_trece']; ?></strong><?php echo $q['membrete_catorce']; ?><strong>
										<?php echo $q['membrete_quince']; ?></strong><?php echo $q['membrete_dieciseis']; ?>
									
										
								</p>
								<br><br>
								<p>
									<?php $h = date("Y-m-d",time()-86400); 
									
									?>
								</p>
							</td>
						</tr>
						<tr>
							<td>
								<table  >
									<tr>
										<td>
											<p><strong>&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p0']; ?> 
												</strong></p>
										</td>
									</tr>
									<tr>
										<td width="200">
											&nbsp;&nbsp; &nbsp; &nbsp;
											<input type="radio" name="perfil" value="1"  id="perfil" /> 
											<?php echo $q['p0_1']; ?>
											<br />
											<p>&nbsp;&nbsp; &nbsp; &nbsp;
											
											<input type="radio" name = "perfil" value = "2" id="perfil" /> 
											<?php echo $q['p0_2']; ?>
											</p> 
										</td>
										<td>
											<td width="100">
												<br />
												<?php echo $q['p0_3']; ?>
											</td>
											<td width="300">
												<p>
												<input id="grupo_objetivo" type="radio" name="grupo_objetivo" value="1" /> 
												 <?php echo $q['p0_4']; ?>
												</p>
												<p>
												<input id="grupo_objetivo" type="radio" name="grupo_objetivo" value="2" />
												<?php echo $q['p0_5']; ?>
												</p>
												<p>
												<input id="grupo_objetivo" type="radio" name="grupo_objetivo" value="3" />
												<?php echo $q['p0_6']; ?>
												</p>
												<p>
												<input id="grupo_objetivo" type="radio" name="grupo_objetivo" value="4" />
												<?php echo $q['p0_7']; ?>
												</p>
											</td>
											<td width="250">
												<center>
												<p> <?php echo $q['p0_8']; ?> 
													<input type="text" disabled name="" value="<?php echo $h; ?>"/>
											  <p>
													<?php echo $q['p0_9']; ?> 
													<?php
													$consulta=mysql_query("select id_pais,pais from paises order by pais ASC",$conexion);
													echo "<select name='pais' id='pais'>";
													echo "<option value='' >-------</option>";
													while ($fila=mysql_fetch_array($consulta)){
														echo "<option value='".$fila[0]."'>".utf8_encode($fila[1])."</option>";
													}
													echo "</select>";
													?>
													<br><br><?php echo $q['p0_10']; ?>
													<div id="estados">
														<select name="estado">
															<option value=""><?php echo $q['p0_11']; ?></option>
														</select>
													</div>
												</p>
												</center>
											</td>
										</td>
									</tr>
									<tr></tr>								
									
								</table>			
							</td>
							
						</tr>
						
						<tr>
										<td> <strong> &nbsp;&nbsp; &nbsp; &nbsp;
													<?php echo $q['pt1']; ?>
											</strong>
										</td>
									</tr>
									<tr>
										<td>
											<p>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p1']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1a" value="1" />
												<?php echo $q['p1a']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1b" value="2" />
												<?php echo $q['p1b']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1c" value="3" />
												<?php echo $q['p1c']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1d" value="4" />
												<?php echo $q['p1d']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1e" value="5" />
												<?php echo $q['p1e']; ?>
												
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p1nsnr" value="6" />
												<?php echo $q['p1f']; ?>
												
											<br>
										
											&nbsp;&nbsp; &nbsp; &nbsp;
											<?php echo $q['p2']; ?> 
											<br>
													&nbsp;&nbsp; &nbsp; &nbsp;
													&nbsp;&nbsp; &nbsp; &nbsp;
													
													
													<input id="p2" type="radio" name="p2" value="1" />
													<?php echo $q['p2a']; ?>
											<br>
													&nbsp;&nbsp; &nbsp; &nbsp;
													&nbsp;&nbsp; &nbsp; &nbsp;
													
													<input id="p2" type="radio" name="p2" value="2" />
													<?php echo $q['p2b']; ?>
											<br>
													&nbsp;&nbsp; &nbsp; &nbsp;
													&nbsp;&nbsp; &nbsp; &nbsp;
													
													<input id="p2" type="radio" name="p2" value="3" checked />
													<?php echo $q['p2c']; ?>
											<br>
													&nbsp;&nbsp; &nbsp; &nbsp;
													&nbsp;&nbsp; &nbsp; &nbsp;
													<?php echo $q['p2d']; ?>
											<center>
											<table>
												<tr>
												<td>
													<textarea id="p2_t" rows="4" cols="120" name="p2_t" ></textarea>
													</td>
												</tr>
											</table>
											</center>
											<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p3']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p3a" value="1" />
												<?php echo $q['p3a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p3b" value="2" />
												<?php echo $q['p3b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p3c" value="3" />
												<?php echo $q['p3c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p3d" value="4" />
												<?php echo $q['p3d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p3e" value="5" />
												<?php echo $q['p3e']; ?>
												
												<br><br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p4']; ?><br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p4a" value="1" />
												<?php echo $q['p4a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p4b"  value="2" />
												<?php echo $q['p4b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p4c" value="3" />
												<?php echo $q['p4c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p4d" value="4" />
												<?php echo $q['p4d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p4e" value="5" />
												<?php echo $q['p4e']; ?>
												
												<br><br>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p5']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p5" value="1"/>
												<?php echo $q['p5a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p5" value="2" />
												<?php echo $q['p5b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p5" value="3" checked />
												<?php echo $q['p5c']; ?>
												
											</p>
										</td>
									</tr>
									
									<tr>
										<td>&nbsp;&nbsp; &nbsp; &nbsp;
											<strong><?php echo $q['pt2']; ?></strong>
										</td>
									</tr>
									
									<tr>
										<td>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p6']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p6" value="1" />
												<?php echo $q['p6a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p6" value="2" />
												<?php echo $q['p6b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p6" value="3" checked />
												<?php echo $q['p6c']; ?>
												<br><br>
												&nbsp;&nbsp; &nbsp; &nbsp;<?php echo $q['p6d']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<table><tr>
													<td>
													<textarea name="p6_t" rows="3" cols="100"></textarea>
													</td>
												</tr>
												</table>
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p7']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p7" value="1" />
												<?php echo $q['p7a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p7" value="2" />
												<?php echo $q['p7b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p7" value="3" checked />
												<?php echo $q['p7c']; ?>
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p8']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p8v1" min="0" max="100" id="p8v1"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p8a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p8v2" min="0" max="100" id="p8v2"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p8b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p8v3" min="0" max="100" id="p8v3"
												onkeypress="return SoloNumeros(event)" onpaste="return false"/>%
												<?php echo $q['p8c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p8v4" min="0" max="100" id="p8v4"
												onkeypress="return SoloNumeros(event)" onpaste="return false"/>%
												<?php echo $q['p8d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p8v5" min="0" max="100" id="p8v5"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p8e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['DebeSumar']; ?></font>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p8nsnr" value="101" />
												<?php echo $q['p8f']; ?>
											</p>
											<p>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p9']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number"  name="p9v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v2" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v3" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v4" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v5" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v6" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9f']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v7" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9g']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p9v8" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p9h']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['peso']; ?></font>
												<br>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;	
												<input type="checkbox" name="p9nsnr" value="101" />
												<?php echo $q['p9i']; ?>
												
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p10']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p10v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p10a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p10v2" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p10b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p10v3" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p10c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p10v4" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p10d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p10v5" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p10e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['peso']; ?></font>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="checkbox" name="p10nsnr" value="101" />
												<?php echo $q['p10f']; ?>
											</p>
											
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p11']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p11v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p11a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p11v2" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p11b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p11v3" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p11c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p11v4" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p11d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p11v5" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p11e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['peso']; ?></font>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p11nsnr" value="101" />
												<?php echo $q['p11f']; ?>
											</p>
											<p>
												
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p12']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p12" value="1" />
												<?php echo $q['p12a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p12" value="2" />
												<?php echo $q['p12b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p12" value="3" checked />
												<?php echo $q['p12c']; ?>
												<br>
												
											</p>
										</td>
									</tr>
									<tr>
										<td>
											 &nbsp;&nbsp;&nbsp;&nbsp;
											 <strong><?php echo $q['pt3']; ?></strong>
										</td>
									</tr>
									<tr>
										<td>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												
												<?php echo $q['p13']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p13" value = "1" />
												<?php echo $q['p13a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p13" value = "2" />
												<?php echo $q['p13b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p13" value = "3" />
												<?php echo $q['p13c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p13" value="101" checked />
												<?php echo $q['p13d']; ?>
												<br>
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p14']; ?>

												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="text" name="p14" min="1" />
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p14nsnr" value="101" />
												<?php echo $q['p14a']; ?>
												<br>
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p15']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p15" value="1" />
												<?php echo $q['p15a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p15" value="2" />
												<?php echo $q['p15b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p15c']; ?>
												<input type="radio" name="p15" value="3" checked />
												<br>
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<?php echo $q['p16']; ?>

												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p16" value="1" />
												<?php echo $q['p16a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p16" value="2" />
												<?php echo $q['p16b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p16" value="3" checked />
												<?php echo $q['p16c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p16" value="4" checked />
												<?php echo $q['p16d']; ?>
												<br>
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p17']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p17" value="1" />
												<?php echo $q['p17a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p17" value="2" />
												<?php echo $q['p17b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p17" value="3" checked />
												<?php echo $q['p17c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
												17.a. <?php echo $q['p17d']; ?><br>
												&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="text" name="p17_t" size="107" />
												
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p18']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p18a" value="1">
												<?php echo $q['p18a']; ?>
												<input type="checkbox" name="p18b" value="2">
												<?php echo $q['p18b']; ?>
												<input type="checkbox" name="p18c" value="3">
												<?php echo $q['p18c']; ?>
												<input type="checkbox" name="p18d" value="4">
												<?php echo $q['p18d']; ?>
												<input type="checkbox" name="p18e" value="5">
												<?php echo $q['p18e']; ?>
												<input type="checkbox" name="p18f" value="6">
												<?php echo $q['p18f']; ?>
												<input type="checkbox" name="p18g" value="7">
												<?php echo $q['p18g']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p18h" value="8">
												<?php echo $q['p18h']; ?>
												<input type="checkbox" name="p18i" value="9">
												<?php echo $q['p18i']; ?>
												<input type="checkbox" name="p18j" value="10">
												<?php echo $q['p18j']; ?>
												<input type="checkbox" name="p18k" value="11">
												<?php echo $q['p18k']; ?>
												<input type="checkbox" name="p18l" value="12">
												<?php echo $q['p18l']; ?>
												<input type="checkbox" name="p18m" value="13">
												<?php echo $q['p18m']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p18nsnr" value="101" />
												<?php echo $q['p18nsnr']; ?>
												
												<br>
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p19']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v2" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v3" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v4" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v5" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v6" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19f']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v7" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19g']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p19v8" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p19h']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['peso']; ?></font>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p19nsnr" value="101" />
												<?php echo $q['p19i']; ?>
												<br>
												
												
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p20']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p20" value="1" />
												<?php echo $q['p20a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p20" value="2" />
												<?php echo $q['p20b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p20" value="3" checked />
												<?php echo $q['p20c']; ?>
												<br>
											</p>
											<p>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p21']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p21" value="1" />
												<?php echo $q['p21a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p21" value="2" />
												<?php echo $q['p21b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p21" value="3" />
												<?php echo $q['p21c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p21" value="4" />
												<?php echo $q['p21d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p21" value="5" />
												<?php echo $q['p21e']; ?>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p21" value="6" checked />
												<?php echo $q['p21f']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="radio" name="p21" value="7"
												id="p21_para_checkear"
												/>
												
												21.a. <?php echo $q['p21g']; ?>
												<input type="text" name="p21_t" size="107"
												onkeypress="checkear()"
												/>
												
						
											</p>
											
										</td>
									</tr>
									<tr>
										<td>
											<strong>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['pt4']; ?></strong>
										</td>
									</tr>
									<tr>
										<td>
											<p>
												
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p22']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p22" value="1" />
												<?php echo $q['p22a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p22" value="2" />
												<?php echo $q['p22b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p22" value="3" checked />
												<?php echo $q['p22c']; ?>
												<br>
											
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p23']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p23" value="1" />
												<?php echo $q['p23a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p23" value="2" />
												<?php echo $q['p23b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p23" value="3" checked />
												<?php echo $q['p23c']; ?>
												<br>
											
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p24']; ?>

												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p24v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p24a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p24v2" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p24b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p24v3" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p24c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p24v4" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p24d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p24v5" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />%
												<?php echo $q['p24e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['DebeSumar']; ?></font>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p24nsnr" value = "101"/>
												<?php echo $q['p24g']; ?>
												<br>
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p25']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p25" value="1" />
												<?php echo $q['p25a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p25" value="2" />
												<?php echo $q['p25b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p25" value="3" checked />
												<?php echo $q['p25c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												25.a. <?php echo $q['p25d']; ?>
												<input type="text" name="p25_t" size="107" />
												<br>
											
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p26']; ?>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p26" value="1" />
												<?php echo $q['p26a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p26" value="2" />
												<?php echo $q['p26b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p26" value="3" checked />
												<?php echo $q['p26c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												26.a. <?php echo $q['p26d']; ?>
												<input type="text" name="p26_t" size="107" />
												<br>
											
											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p27']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p27v1" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p27a']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p27v2" min="0" max="100" 
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p27b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p27v3" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p27c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p27v4" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p27d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="number" name="p27v5" min="0" max="100"
												onkeypress="return SoloNumeros(event)" onpaste="return false" />
												<?php echo $q['p27e']; ?>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<font color="red" ><?php echo $q['peso']; ?></font>
												
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p27nsnr" value="101" />
												<?php echo $q['p27f']; ?>
												<br>
											
											</p>
										</td>
									</tr>
									<tr>
										<td>
											<strong>&nbsp;&nbsp; &nbsp; &nbsp;
											<?php echo $q['pt5']; ?>
												</strong>
										</td>
									</tr>
									<tr>
										<td>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p28']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p28" value="1" />
												<?php echo $q['p28a']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p28" value="2" />
												<?php echo $q['p28b']; ?>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p28" value="3" checked />
												<?php echo $q['p28c']; ?>
												<br>
				

											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p29']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="1" />
												<?php echo $q['p29a']; ?>
												<br>	
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="2" />
												<?php echo $q['p29b']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="3" />
												<?php echo $q['p29c']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="4" />
												<?php echo $q['p29d']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="5" />
												<?php echo $q['p29e']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												
												<input type="radio" name="p29" value="6" checked />
												<?php echo $q['p29f']; ?>
												<br>
												

											</p>
											<p>
												&nbsp;&nbsp; &nbsp; &nbsp;
												<?php echo $q['p30']; ?>
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												a. 
												<input id="p30_a" type="text" name="p30_a" size="80" />
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												b.
												<input type="text" name="p30_b" size="80" />
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												c. 
												<input type="text" name="p30_c" size="80" />
												<br>
												&nbsp;&nbsp; &nbsp; &nbsp;
												&nbsp;&nbsp; &nbsp; &nbsp;
												<input type="checkbox" name="p30_nsnr" />
												<?php echo $q['p30nsnr']; ?>
												
											</p>
										</td>
									</tr>
									<tr>
										<td>
											&nbsp;&nbsp; &nbsp; &nbsp;
											<?php echo $q['ultimap']; ?>
											
											&nbsp;&nbsp; &nbsp; &nbsp;
											<table><tr>
													<td>
														&nbsp;&nbsp; &nbsp; &nbsp;
														<input type="radio" name="ultimap" value="1" checked="checked" />
														<?php echo $q['ultimapa']; ?>
														<input type="radio" name="ultimap" value="2" />
														
														<?php echo $q['ultimapb']; ?>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<br>
											&nbsp;&nbsp; &nbsp; &nbsp;
											<?php echo $q['p31']; ?>
											<br>
											&nbsp;&nbsp; &nbsp; &nbsp;
											<table><tr>
													<td>
														<textarea id="ob" name="observaciones" rows="3" cols="120"></textarea>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr>
										<td>
											<br>
											
<!--
											<input type="text" name="encuestador" size="80" />
-->

												<center><input type="submit" value="Enviar" /></center>
											<br>
										</td>
									</tr>
					</table>
					
				</form>
			</center>

                                    </div>
                                </div>
								</div>

		        
<div id="footer-wrap"  class="container row clr" >
                            <div id="footer-nav">           
				<div class="breadcrumbs jmoddiv" data-jmodediturl="http://localhost/GISAGA/administrator/index.php?option=com_modules&view=module&layout=edit&id=17" data-jmodtip="<strong>Editar módulo</strong><br />Ruta<br />Posición: footer-menu">
Encuesta</div>

            </div>
         <?php /*               
</div>
</div>
</body>
</html>
*/

include ("parte_abajo.php");
?>
