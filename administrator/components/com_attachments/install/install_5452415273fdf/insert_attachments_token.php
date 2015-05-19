<?php
/**
 * Add Attachments Button plugin
 *
 * @package Attachments
 * @subpackage Add_Attachment_Button_Plugin
 *
 * @copyright Copyright (C) 2007-2011 Jonathan M. Cameron, All Rights Reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://joomlacode.org/gf/project/attachments/frs/
 * @author Jonathan M. Cameron
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.event.plugin');

/**
 * Class for the button that allows you to add attachments from the editor
 *
 * @package Attachments
 */
class plgButtonInsert_attachments_token extends JPlugin
{
	/**
	 * Constructor
	 *
	 * For php4 compatability we must not use the __constructor as a constructor for plugins
	 * because func_get_args ( void ) returns a copy of all passed arguments NOT references.
	 * This causes problems with cross-referencing necessary for the observer design pattern.
	 *
	 * @param &object &$subject The object to observe
	 * @param array  $config	An array that holds the plugin configuration
	 * @since 1.5
	 */
	function plgInsert_attachments_token(&$subject, $config)
	{
		parent::__construct($subject, $config);
	}

	/**
	 * Insert attachments token button
	 *
	 * @return a button
	 */
	function onDisplay($name)
	{
		// Get the component parameters
		jimport('joomla.application.component.helper');
		$params =& JComponentHelper::getParams('com_attachments');
		
		// This button should only be displayed in 'custom placement' mode.
		// Check to make sure that is the case
		$placement = $params->get('attachments_placement', 'end');
		if ( $placement != 'custom' ) {
			return new JObject();
			}

		// Avoid displaying the button for anything except for registered parents
		global $option;
		$parent_type = $option;

		// Handle sections and categories specially (since they are really com_content)
		if ($option == 'com_sections') {
			$parent_type = 'com_content';
			}
		if ($option == 'com_categories') {
			$parent_type = 'com_content';
			}

		// Get the article/parent handler
		JPluginHelper::importPlugin('attachments', 'attachments_plugin_framework');
		$apm =& getAttachmentsPluginManager();
		if ( !$apm->attachmentsPluginInstalled($parent_type) ) {
			// Exit if there is no Attachments plugin to handle this parent_type
			return new JObject();
			}

		// Get ready for language things
		$lang =&  JFactory::getLanguage();
		if ( !$lang->load('plg_editors-xtd_insert_attachments_token', JPATH_ADMINISTRATOR) ) {
			// If the desired translation is not available, at least load the English
			$lang->load('plg_editors-xtd_insert_attachments_token', JPATH_ADMINISTRATOR, 'en-GB');
			}

		// Set up the Javascript to insert the tag
		$getContent = $this->_subject->getContent($name);
		$present = JText::_('ATTACHMENTS_TOKEN_ALREADY_PRESENT', true) ;
		$js =  "
			function insertAttachmentsToken(editor) {
				var content = $getContent
				if (content.match(/\{\s*attachments/i)) {
					alert('$present');
					return false;
				} else {
					jInsertEditorText('<span class=\"hide\">{attachments}</span>', editor);
				}
			}
			";
		$doc =& JFactory::getDocument();
		$doc->addScriptDeclaration($js);

		// Add the regular css file
		require_once(JPATH_SITE.DS.'components'.DS.'com_attachments'.DS.'helper.php');
		AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/content/attachments.css' );
		AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/editors-xtd/insert_attachments_token.css' );

		// Handle RTL styling (if necessary)
		if ( $lang->isRTL() ) {
			AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/content/attachments_rtl.css' );
			AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/editors-xtd/insert_attachments_token_rtl.css' );
			}
		
		$button = new JObject();
		$button->set('modal', false);
		$button->set('onclick', 'insertAttachmentsToken(\''.$name.'\');return false;');
		$button->set('text', JText::_('ATTACHMENTS_TOKEN'));
		$button->set('title', JText::_('ATTACHMENTS_TOKEN_DESCRIPTION'));
		$button->set('name', 'insert_attachments_token');

		// TODO: The button writer needs to take into account the javascript directive
		// $button->set('link', 'javascript:void(0)');
		$button->set('link', '#');

		return $button;
	}
}

?>
