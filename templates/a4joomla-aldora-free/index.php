<?php // no direct access 
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$showLeftColumn = (bool) $this->countModules('left');
$showRightColumn = (bool) $this->countModules('right');
$showRightColumn &= JRequest::getCmd('layout') != 'form';
$showRightColumn &= JRequest::getCmd('task') != 'edit';
$margin = 30;
$logoText	= $this->params->get("logoText");
$slogan	= $this->params->get("slogan");
$pageWidth	= $this->params->get("pageWidth", "960");
$rightColumnWidth	= $this->params->get("rightColumnWidth", "200");
$leftColumnWidth	= $this->params->get("leftColumnWidth", "200");
$logoWidth	= $this->params->get("logoWidth", "330");
if($this->countModules('user4')){
$searchWidth = 200;
} else {
$searchWidth = 0;
}
$headerrightWidth = $pageWidth - $logoWidth - 30;
if ($showLeftColumn && $showRightColumn) {
   $contentWidth = $pageWidth - $leftColumnWidth - $rightColumnWidth - 3*$margin;
} elseif (!$showLeftColumn && $showRightColumn) {
   $contentWidth = $pageWidth - $rightColumnWidth - 2*$margin ;
} elseif ($showLeftColumn && !$showRightColumn) {
   $contentWidth = $pageWidth - $leftColumnWidth - 2*$margin ;
} else {
   $contentWidth = $pageWidth - $margin ;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/grey.css" type="text/css" />
<!--[if IE 6]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie6.css" type="text/css" />
<style type="text/css">
img, div, a, input { behavior: url(templates/<?php echo $this->template ?>/iepngfix.htc) }
</style>
<script src="templates/<?php echo $this->template ?>/js/iepngfix_tilebg.js" type="text/javascript"></script>
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie67.css" type="text/css" />
<![endif]-->

<style type="text/css">
 #logo {
    width:<?php echo $logoWidth; ?>px;
 }
 #headerright {
    width:<?php echo $headerrightWidth; ?>px;
 } 
 #search {
   width:<?php echo $searchWidth; ?>px;
 }
 #topmenuwrap {
 background: #2A6B25;
 }
</style>
<!-- Modificado el favicon -->
<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

<div id="topmenuwrap" class="gainlayout">
 <div id="topmenuwrap2" class="gainlayout" style="width:<?php echo $pageWidth; ?>px;">
  <?php if($this->countModules('user3')) : ?>
         <div id="topmenu" class="gainlayout">
           <jdoc:include type="modules" name="user3" style="xhtml" />
           <div class="clr"></div>
         </div> 
  <?php endif; ?>
  <?php if($this->countModules('user4')) : ?>
        <div id="search">
          <jdoc:include type="modules" name="user4" style="xhtml" /> 
		<div class="clr"></div>  
        </div>
  <?php endif; ?>
  <div class="clr"></div>
 </div>
 <div class="clr"></div>
</div> 
<!--
<div id="headerwrap" class="gainlayout">
  <div id="header" class="gainlayout" style="width:<?php echo $pageWidth; ?>px;">   
      <div id="logo" class="gainlayout">
			<h1><a href="<?php echo JURI::base(); ?>" title="<?php echo $logoText; ?>"><?php echo $logoText; ?></a></h1>
			<h2><?php echo $slogan; ?></h2> 
      </div>
	  <div id="headerright" class="gainlayout">
        <?php if($this->countModules('banner')) : ?>
          <div id="banner">
            <jdoc:include type="modules" name="banner" style="xhtml" /> 
          </div>
        <?php endif; ?>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
  </div>	  
  <div class="clr"></div>
</div>
-->
<div id="allwrap" class="gainlayout">

<div id="wrap" class="gainlayout" style="width:<?php echo $pageWidth; ?>px;">

  <?php if($this->countModules('breadcrumb')) : ?>
	  <div id="pathway" class="gainlayout">
        <jdoc:include type="module" name="breadcrumbs" style="none" />
      <div class="clr"></div>
	  </div>
  <?php endif; ?> 







  <div id="cbody" class="gainlayout">





<!----------------------------------

<!-- Modificado el 30-11-2014    
<center>
<div style="position: relative;top: -48px;left: 10px;" >
<table >
<tr>
<td>
<a href="/gisaga1"><img src="images/ula_hoga.gif" alt="Business" width="180px" height="80px" style="border-radius: 20px" ></a>
                 
        </td>
	<td style="vertical-align: top;">
		<h4 class="ache_blanco" color="#FFF">Facultad de Ciencias, Económicas y Sociales FACES-ULA</h4>
		<h3 class="ache_blanco" color="#FFF">Grupo de Investigación Sobre Agricultira Gerencia y Ambiente</h3>
		<h5 class="ache_blanco" color="#FFF">Núcleo La Liria Edificio "G" 2° Planta</h5>
               </td>
            </tr>
</table>
</div>
</center>

<!---------------------------------->














  <?php if($showLeftColumn) : ?>
  <div id="sidebar" style="width:<?php echo $leftColumnWidth; ?>px;">     
      <jdoc:include type="modules" name="left" style="xhtml" />    
  </div>
  <?php endif; ?>
  <div id="content60" style="width:<?php echo $contentWidth; ?>px;">    

      <?php if ($this->getBuffer('message')) : ?>
				<div class="error">
					<h2>
						<?php echo JText::_('Message'); ?>
					</h2>
					<jdoc:include type="message" />
				</div>
			<?php endif; ?>





<!--  Modificado el 30-11-2014   
style="position: relative;top: -48px;left: 10px;"
<!------------------------------------------->
      <div id="content" >

      <jdoc:include type="component" /> 
      </div>   
  </div>
  <?php if($showRightColumn) : ?>
  <div id="sidebar-2" style="width:<?php echo $rightColumnWidth; ?>px;">     
      <jdoc:include type="modules" name="right" style="xhtml" />     
  </div>
  <?php endif; ?>
  <div class="clr"></div>
  </div>
<!--end of wrap-->
</div>

<!--end of allwrap-->
</div>
<div id="footerwrap" class="gainlayout" style="width:<?php echo $pageWidth; ?>px;"> 
  <div id="footer" class="gainlayout">  
       <div class="moduletable">
					<div>Copyright © 2014 GISAGA. All Rights Reserved.</div>
       <div><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU/GPL License.</a>
</div>		        </div>
       	<?php /*if($this->countModules('footer')) : */?>
<!--         <jdoc:include type="modules" name="footer" style="xhtml" />   

cambiado el 26-10-2014
 -->
       <?php /*endif; */ ?>
  </div>
  <div id="a4j">
    <a href="http://a4joomla.com/">Joomla templates by a4joomla</a>
    <br> Derechos reservados GISAGA & Pablo González
 </div> 
</div>

</body>
</html>
