<?php
/*
# ------------------------------------------------------------------------
# Extensions for Joomla 2.5 - Joomla 3.x
# ------------------------------------------------------------------------
# Copyright (C) 2011-2013 Ext-Joom.com. All Rights Reserved.
# @license - PHP files are GNU/GPL V2.
# Author: Ext-Joom.com
# Websites:  http://www.ext-joom.com 
# Date modified: 02/08/2013 - 10:00
# ------------------------------------------------------------------------
*/

/**
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modEXTSFMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');
$class_sfx	= htmlspecialchars($params->get('class_sfx'));
$ext_style_menu	= $params->get('stylemenu');
$ext_menu		= $params->get('ext_menu');
//$jquery			= $params->get('jquery');
$animation		= $params->get('animation');
$delay			= $params->get('delay');
$speed			= $params->get('speed');
$autoarrows		= $params->get('autoarrows');

if(count($list)) {
	require JModuleHelper::getLayoutPath('mod_ext_superfish_menu', $params->get('layout', 'default'));
	echo JText::_(COP_JOOMLA);
}
