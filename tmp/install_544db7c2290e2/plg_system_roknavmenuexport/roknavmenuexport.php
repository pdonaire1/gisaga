<?php
/**
 * @version   $Id: roknavmenuexport.php 6920 2013-01-30 06:19:02Z steph $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');
jimport('joomla.filesystem.file');

/**
 * @package    RokNavMenuExport
 * @subpackage Plugin
 */
class plgSystemRokNavMenuExport extends JPlugin
{
	/**
	 * @var string
	 */
	var $_flag_file = '.export_navmenu_tmp';
	/**
	 * @var string
	 */
	var $_guest_export_file = 'guest_joomla_menu.inc';
	/**
	 * @var string
	 */
	var $_registered_export_file = 'reg_joomla_menu.inc';
	/**
	 * @var string
	 */
	var $_header_export_file = 'joomla_menu_headers.inc';
	/**
	 * @var string
	 */
	var $_session_key = 'export_ready';
	/**
	 * @var string
	 */
	var $_session_namespace = 'roknavmenuexport';
	/**
	 * @var bool
	 */
	var $_readyToExport = false;
	/**
	 * @var string
	 */
	var $_default_menu_params = "limit_levels=0\nstartLevel=0\nshowAllChildren=1\nclass_sfx=top\ncache=0\nmodule_cache=1";

	/**
	 * @var array
	 */
	var $_renderMenuAfterTasks = array(
		'com_menus'     => array(
			'item.apply',
			'item.save',
			'item.save2new',
			'item.save2copy',
			'item.cancel',
			'item.add',
			'items.publish',
			'items.unpublish',
			'items.checkin',
			'items.delete',
			'items.trash',
			'items.setDefault',
			'items.rebuild',
			'menu.apply',
			'menu.save',
			'menu.save2new',
			'menu.cancel',
			'menu.add',
			'menu.edit',
			'menus.delete',
			'menus.rebuild'
		),
		'com_plugins'   => array(
			'plugin.edit',
			'plugin.cancel',
			'plugin.save',
			'plugin.apply',
			'plugins.publish',
			'plugins.unpublish',
			'plugins.checkin'
		),
		'com_templates' => array(
			'source.apply',
			'source.save',
			'source.cancel',
			'style.apply',
			'style.edit',
			'style.save',
			'style.save2copy',
			'style.cancel',
			'styles.duplicate',
			'styles.delete',
			'styles.setDefault',
			'template.cancel'
		),
		'com_config'    => array(
			'application.apply',
			'application.save',
			'application.cancel'
		)
	);

	/**
	 * Catch the routed functions for
	 */
	function onAfterRoute()
	{
		$app    = JFactory::getApplication();
		$option = JFactory::getApplication()->input->getString('option', false);

		if (!$app->isAdmin() || ($option!==false && !array_key_exists($option, $this->_renderMenuAfterTasks))) {
			return;
		}
		// get the task
		$task = JFactory::getApplication()->input->getString('task', false);

		//set if we need to export next render
		if (($task!==false) && in_array($task, $this->_renderMenuAfterTasks[$option])) {
			$session = JFactory::getSession();
			$session->set($this->_session_key, true, $this->_session_namespace);
		}
	}

	/**
	 * @return mixed
	 */
	function onAfterRender()
	{
		$app          = JFactory::getApplication();
		$uri          = JFactory::getURI();
		$export_ready = false;

		// Are we on the admin side still?
		if ($app->isAdmin()) {
			$session = JFactory::getSession();
			//see if an export is needed
			if (!$session->has($this->_session_key, $this->_session_namespace)) {
				return;
			}
			$export_ready = $session->get($this->_session_key, false, $this->_session_namespace);
			if (!$export_ready) {
				return;
			}
			//clear session var
			$session->clear($this->_session_key, $this->_session_namespace);

			//export needed drop the flag file for the front end
			$buffer = '';
			$retval = JFile::write(JPATH_SITE . '/' . $this->_flag_file, $buffer);

			// call the front end to force the export
			$out = $this->_get_url_contents(($app->isAdmin()) ? $uri->root() : JURI::base());
			return;
		} //are we on the the front and and is the flag file there?
		else if ($app->isSite() && JFile::exists(JPATH_SITE . '/' . $this->_flag_file) && !$app->getCfg('offline')) {

			$document = JFactory::getDocument();

			$this->_cleanDocument($document);
			$output = $this->_renderModule(0, $this->params->get("highlighted_menu_item", null));
			$retval = JFile::write(JPATH_SITE . '/' . $this->params->get("guest_menu_file", $this->_guest_export_file), $output);

			$this->_cleanDocument($document);
			$output_registered = $this->_renderModule(1, $this->params->get("highlighted_menu_item", null));
			$retval            = JFile::write(JPATH_SITE . '/' . $this->params->get("reg_menu_file", $this->_registered_export_file), $output_registered);

			$header = $this->_renderHeader($document);
			$retval = JFile::write(JPATH_SITE . '/' . $this->params->get("header_file", $this->_header_export_file), $header);

			JFile::delete(JPATH_SITE . '/' . $this->_flag_file);
		}
	}

	/**
	 * Render the module output
	 */
	function _renderModule($check_access_level = 0, $highlighted_menu_item = null)
	{
		global $gantry;
		// get the params.ini from the template if its there
		$app      = JFactory::getApplication();
		$site     = new JSite();
		$menu     = $site->getMenu();
		$document = JFactory::getDocument();
		//$this->_cleanDocument($document);
		$renderer = $document->loadRenderer('module');
		$options  = array('style' => "raw"); // 'style' => "menu"
		$module   = JModuleHelper::getModule('mod_roknavmenu');

		// Get the information on which type of menu to work with from template params.ini
		$template             = $app->getTemplate();
		$template_params_file = JPATH_ROOT . '/templates/' . $template . "/params.ini";
		if (JFile::exists($template_params_file)) {
			$content         = file_get_contents($template_params_file);
			$template_params = new JForm($content);
		} else {
			//$template = $app->getTemplate();
			$db    = JFactory::getDBO();
			$query = 'SELECT params FROM #__extensions WHERE name=' . $db->quote($template) . ' AND type=' . $db->quote('template');
			$db->setQuery($query);
			$template_params = new JRegistry($db->loadResult());
		}

		if (!is_object($gantry)) { // old style template
			$variable_include_file = JPATH_ROOT . '/templates/' . $template . "/menus" . '/menu_variables.php';

			if (JFile::exists($variable_include_file)) {
				include $variable_include_file;
			}
			$menu_type = $template_params->get("menuType", "moomenu");
			$menu_name = $template_params->get("menuName", "mainmenu");
			$url_type  = $this->params->get('url_type');

			// get the module params to pass fpr the menu type
			$menu_params_file         = JPATH_ROOT . '/templates/' . $template . "/menus/" . $menu_type . ".ini";
			$default_menu_params_file = JPATH_PLUGINS . '/system/' . 'roknavmenuexport/' . $menu_type . ".ini";
			$evaled_mpcontent         = '';
			$menu_params_content      = '';

			// Try the Template params
			if (JFile::exists($menu_params_file)) {
				$menu_params_content = file_get_contents($menu_params_file);
			} //Try the default params
			else if (JFile::exists($default_menu_params_file)) {
				$menu_params_content = file_get_contents($default_menu_params_file);
			}
			eval("\$evaled_mpcontent = \"$menu_params_content\";");
			$module->params = $evaled_mpcontent . "\ncheck_access_level=$check_access_level\nmenutype=$menu_name\nurl_type=$url_type\n";
		} else { // Gantry Template
			$prefix        = 'menu-type';
			$selected_menu = $gantry->get($prefix);
			$menu_params   = $gantry->getParams("menu-" . $selected_menu, true);
			$passed_params = array("check_access_level=" . $check_access_level);
			foreach ($menu_params as $param_name => $param_value) {
				$passed_params[] = $param_name . "=" . $param_value['value'];
			}
			$string_params  = implode("\n", $passed_params);
			$module->params = & $string_params;
		}
		// Set the Active Menu Item to show
		if ($highlighted_menu_item != null) {
			$menu->setActive($highlighted_menu_item);
		}

		$myvar = $renderer->render($module, $options);
		return $myvar;
	}

	/**
	 * Call a URL
	 */
	function _get_url_contents($url)
	{
		$crl     = curl_init();
		$timeout = 5;
		curl_setopt($crl, CURLOPT_URL, $url);
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($crl, CURLOPT_USERAGENT, "Mozilla/4.0");
		if (!empty($_SERVER['PHP_AUTH_USER']) && !empty($_SERVER['PHP_AUTH_PW'])) {
			curl_setopt($crl, CURLOPT_USERPWD, $_SERVER['PHP_AUTH_USER'] . ":" . $_SERVER['PHP_AUTH_PW']);
		}
		$ret = curl_exec($crl);
		curl_close($crl);
		return $ret;
	}

	/**
	 * @param $document
	 */
	function _cleanDocument(&$document)
	{
		$document->_style       = array();
		$document->_scripts     = array();
		$document->_styleSheets = array();
		$document->_script      = array();
	}

	/**
	 * Generates the head html and return the results as a string
	 *
	 * @access public
	 *
	 * @param $document
	 *
	 * @return string
	 */
	function _renderHeader(&$document)
	{
		// get line endings
		$lnEnd = $document->_getLineEnd();
		$tab   = $document->_getTab();

		$tagEnd = ' />';

		$strHtml = '';

		// Generate stylesheet links
		foreach ($document->_styleSheets as $strSrc => $strAttr) {
			$strHtml .= $tab . '<link rel="stylesheet" href="' . $strSrc . '" type="' . $strAttr['mime'] . '"';
			if (!is_null($strAttr['media'])) {
				$strHtml .= ' media="' . $strAttr['media'] . '" ';
			}
			if ($temp = JArrayHelper::toString($strAttr['attribs'])) {
				$strHtml .= ' ' . $temp;
				;
			}
			$strHtml .= $tagEnd . $lnEnd;
		}

		// Generate stylesheet declarations
		foreach ($document->_style as $type => $content) {
			if (!empty($content) && ($content != '')) {

				$strHtml .= $tab . '<style type="' . $type . '">' . $lnEnd;

				// This is for full XHTML support.
				if ($document->_mime == 'text/html') {
					$strHtml .= $tab . $tab . '<!--' . $lnEnd;
				} else {
					$strHtml .= $tab . $tab . '<![CDATA[' . $lnEnd;
				}

				$strHtml .= $content . $lnEnd;

				// See above note
				if ($document->_mime == 'text/html') {
					$strHtml .= $tab . $tab . '-->' . $lnEnd;
				} else {
					$strHtml .= $tab . $tab . ']]>' . $lnEnd;
				}
				$strHtml .= $tab . '</style>' . $lnEnd;
			}
		}

		// Generate script file links
		foreach ($document->_scripts as $strSrc => $strType) {
			$strHtml .= $tab . '<script type="' . $strType['mime'] . '" src="' . $strSrc . '"></script>' . $lnEnd;
		}

		// Generate script declarations
		foreach ($document->_script as $type => $content) {
			if (!empty($content) && ($content != '')) {

				$strHtml .= $tab . '<script type="' . $type . '">' . $lnEnd;

				// This is for full XHTML support.
				if ($document->_mime != 'text/html') {
					$strHtml .= $tab . $tab . '<![CDATA[' . $lnEnd;
				}

				$strHtml .= $content . $lnEnd;

				// See above note
				if ($document->_mime != 'text/html') {
					$strHtml .= $tab . $tab . '// ]]>' . $lnEnd;
				}
				$strHtml .= $tab . '</script>' . $lnEnd;
			}
		}

		return $strHtml;

	}
}