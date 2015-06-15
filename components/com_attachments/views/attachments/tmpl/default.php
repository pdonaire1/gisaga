<?php
/**
 * Attachments component
 *
 * @package Attachments
 * @subpackage Attachments_Component
 *
 * @copyright Copyright (C) 2007-2011 Jonathan M. Cameron, All Rights Reserved
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link http://joomlacode.org/gf/project/attachments/frs/
 * @author Jonathan M. Cameron
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

global $mainframe, $option;


// Set a few variables for convenience
$rows =& $this->list;
$parent_id = $this->parent_id;
$parent_type = $this->parent_type;
$parent_entity = $this->parent_entity;

$base_url =& $this->base_url;

$format = JRequest::getWord('format', '');

$html = '';

if ( $format != 'raw' ) {

	// If any attachments are modifiable, add necessary Javascript for iframe
	if ( $this->some_attachments_modifiable ) {
		JHTML::_('behavior.modal', 'a.modal-button');
		}

	// Get the attachments helper to add the stylesheet
	require_once(JPATH_SITE.DS.'components'.DS.'com_attachments'.DS.'helper.php');
	AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/content/attachments.css' );

	// Handle RTL styling (if necessary)
	$lang =& JFactory::getLanguage();
	if ( $lang->isRTL() ) {
		AttachmentsHelper::addStyleSheet( JURI::base(true) . '/plugins/content/attachments_rtl.css' );
		}

	// Construct the empty div for the attachments
	if ( $parent_id === null ) {
		// If there is no parent_id, the parent is being created, use the username instead
		$user =& JFactory::getUser();
		$pid = $user->get('username');
		}
	else {
		$pid = $parent_id;
		}
	$div_id = 'attachmentsList' . '_' . $parent_type . '_' . $parent_entity	 . '_' . (string)$pid;
	$html .= "\n<div class=\"$this->style\" id=\"$div_id\">\n";
	}

$html .= "<table>\n";
$html .= "<caption>{$this->title}</caption>\n";

// Add the column titles, if requested
if ( $this->show_column_titles ) {
	$html .= "<thead>\n<tr>";
	$html .= "<th class=\"at_filename\">" . JText::_('FILE') . "</th>";
	if ( $this->show_description ) {
		$html .= "<th class=\"at_description\">" . JText::_('DESCRIPTION') . "</th>";
		}
	if ( $this->show_user_field_1 ) {
		$html .= "<th class=\"at_user_field\">" . $this->user_field_1_name . "</th>";
		}
	if ( $this->show_user_field_2 ) {
		$html .= "<th class=\"at_user_field\">" . $this->user_field_2_name . "</th>";
		}
	if ( $this->show_user_field_3 ) {
		$html .= "<th class=\"at_user_field\">" . $this->user_field_3_name . "</th>";
		}
	if ( $this->show_uploader ) {
		$html .= "<th class=\"at_uploader\">" . JText::_('UPLOADER') . "</th>";
		}
	if ( $this->show_file_size ) {
		$html .= "<th class=\"at_file_size\">" . JText::_('FILE_SIZE') . "</th>";
		}
	if ( $this->secure AND $this->show_downloads ) {
		$html .= "<th class=\"at_downloads\">" . JText::_('DOWNLOADS') . "</th>";
		}
	if ( $this->show_mod_date ) {
		$html .= "<th class=\"at_mod_date\">" . JText::_('LAST_MODIFIED') . "</th>";
		}
	if ( $this->some_attachments_modifiable AND $this->allow_edit ) {
		$html .= "<th class=\"at_edit\">&nbsp;</th>";
		}
	$html .= "</tr>\n</thead>\n";
	}

$html .= "<tbody>\n";

// Construct the lines for the attachments
$row_num = 0;
for ($i=0, $n=count($rows); $i < $n; $i++) {
	$row =& $rows[$i];

	// Skip this one if it should not be visible
	if ( !$row->user_may_see )
		continue;

	$row_num++;
	if ( $row_num & 1 == 1)
		$html .= '<tr class="odd">';
	else
		$html .= '<tr class="even">';

	// Construct some display items
	if ( JString::strlen($row->icon_filename) > 0 )
		$icon_url = $this->icon_url_base . $row->icon_filename;
	else
		$icon_url = $this->icon_url_base . 'generic.gif';
	$link_icon_url = $this->icon_url_base . 'link_arrow.png';
	$link_broken_icon_url = $this->icon_url_base . 'link_broken.png';

	if ( $this->show_file_size) {
		$file_size = (int)( $row->file_size / 1024.0 );
		if ( $file_size == 0 ) {
			// For files less than 1K, show the fractional amount (in 1/10 KB)
			$file_size = ( (int)( 10.0 * $row->file_size / 1024.0 ) / 10.0 );
			}
		}

	if ( $this->show_mod_date ) {
		jimport( 'joomla.utilities.date' );
		$date = new JDate($row->modification_date, -$mainframe->getCfg('offset'));
		$last_modified = $date->toFormat($this->mod_date_format);
		}

	// Add the filename
	$target = '';
	if ( $this->file_link_open_mode == 'new_window')
		$target = ' target="_blank"';
	$html .= '<td class="at_filename">';
	if ( JString::strlen($row->display_name) == 0 )
		$filename = $row->filename;
	else
		$filename = $row->display_name;
	$actual_filename = $row->filename;
	// Uncomment the following two lines to replace '.pdf' with its HTML-encoded equivalent
	// $actual_filename = JString::str_ireplace('.pdf', '.&#112;&#100;&#102;', $actual_filename);
	// $filename = JString::str_ireplace('.pdf', '.&#112;&#100;&#102;', $filename);
	if ( $this->show_file_links ) {
		if ( $row->uri_type == 'file' ) {
			if ( $this->secure ) {
				$url = JRoute::_("index.php?option=com_attachments&task=download&id=" . (int)$row->id);
				}
			else {
				$url = $base_url . $row->url;
				if (strtoupper(substr(PHP_OS,0,3) == 'WIN')) {
				   $url = utf8_encode($url);
				   }
				}
			$tooltip = JText::sprintf('DOWNLOAD_THIS_FILE_S', $actual_filename);
			}
		else {
			$user =& JFactory::getUser();
			if ( $this->secure AND ($this->who_can_see != 'anyone') AND ($user->get('username') == '') ) {
				$url = JRoute::_('index.php?option=com_attachments&task=request_login');
				}
			else {
				$url = $row->url;
				}
			$tooltip = JText::sprintf('ACCESS_THIS_URL_S', $row->url);
			}
		$html .= "<a class=\"at_icon\" href=\"$url\"$target title=\"$tooltip\"><img src=\"$icon_url\" alt=\"$tooltip\" />";
		if ( $row->uri_type == 'url' AND $this->superimpose_link_icons ) {
			if ( $row->url_valid ) {
				$html .= "<img id=\"link\" src=\"$link_icon_url\" />";
				}
			else {
				$html .= "<img id=\"link\" src=\"$link_broken_icon_url\" />";
				}
			}
		$html .= "</a>";
		$html .= "<a class=\"at_url\" href=\"$url\"$target title=\"$tooltip\">$filename</a>";
		}
	else {
		$tooltip = JText::sprintf('DOWNLOAD_THIS_FILE_S', $actual_filename);
		$html .= "<img src=\"$icon_url\" alt=\"$tooltip\" />&nbsp;";
		$html .= $filename;
		}
	$html .= "</td>";

	// Add description (maybe)
	if ( $this->show_description ) {
		$description = $row->description;
		if ( JString::strlen($description) == 0)
			$description = '&nbsp;';
		if ( $this->show_column_titles ) {
			$html .= "<td class=\"at_description\">$description</td>";
			}
		else {
			$html .= "<td class=\"at_description\">[$description]</td>";
			}
		}

	// Show the USER DEFINED FIELDs (maybe)
	if ( $this->show_user_field_1 ) {
		$user_field = $row->user_field_1;
		if ( JString::strlen($user_field) == 0 )
			$user_field = '&nbsp;';
		if ( $this->show_column_titles )
			$html .= "<td class=\"at_user_field\">" . $user_field . "</td>";
		else
			$html .= "<td class=\"at_user_field\">[" . $user_field . "]</td>";
		}
	if ( $this->show_user_field_2 ) {
		$user_field = $row->user_field_2;
		if ( JString::strlen($user_field) == 0 )
			$user_field = '&nbsp;';
		if ( $this->show_column_titles )
			$html .= "<td class=\"at_user_field\">" . $user_field . "</td>";
		else
			$html .= "<td class=\"at_user_field\">[" . $user_field . "]</td>";
		}
	if ( $this->show_user_field_3 ) {
		$user_field = $row->user_field_3;
		if ( JString::strlen($user_field) == 0 )
			$user_field = '&nbsp;';
		if ( $this->show_column_titles )
			$html .= "<td class=\"at_user_field\">" . $user_field . "</td>";
		else
			$html .= "<td class=\"at_user_field\">[" . $user_field . "]</td>";
		}

	// Add the uploader's username (if requested)
	if ( $this->show_uploader ) {
		$html .= "<td class=\"at_uploader\">{$row->uploader_name}</td>";
		}

	// Add file size (maybe)
	if ( $this->show_file_size ) {
		$html .= "<td class=\"at_file_size\">$file_size Kb</td>";
		}

	// Show number of downloads (maybe)
	if ( $this->secure AND $this->show_downloads ) {
		$num_downloads = (int)$row->download_count;
		$label = '';
		if ( ! $this->show_column_titles ) {
			if ( $num_downloads == 1 )
				$label = '&nbsp;' . JText::_('DOWNLOAD_NOUN');
			else
				$label = '&nbsp;' . JText::_('DOWNLOADS');
			}
		$html .= '<td class="at_downloads">'. $num_downloads.$label.'</td>';
		}

	// Add the modification date (maybe)
	if ( $this->show_mod_date ) {
		$html .= "<td class=\"at_mod_date\">$last_modified</td>";
		}

	// Add the link to delete the parent, if requested
	if ( $this->some_attachments_modifiable AND $row->user_may_edit AND $this->allow_edit ) {

		// Create the edit link
		$update_url = str_replace('%d', (string)$row->id, $this->update_url);
		$update_img = $base_url . 'components/com_attachments/media/pencil.gif';
		$tooltip = JText::_('UPDATE_THIS_FILE') . ' (' . $actual_filename . ')';
		$update_link = '<a class="modal-button" type="button" href="' . $update_url . '"';
		$update_link .= " rel=\"{handler: 'iframe', size: {x: 920, y: 580}}\"";
		$update_link .= " title=\"$tooltip\"><img src=\"$update_img\" alt=\"$tooltip\" /></a>";

		// Create the delete link	
		$delete_url = str_replace('%d', (string)$row->id, $this->delete_url);
		$delete_img = $base_url . 'components/com_attachments/media/delete.gif';
		$tooltip = JText::_('DELETE_THIS_FILE') . ' (' . $actual_filename . ')';
		$del_link = '<a class="modal-button" type="button" href="' . $delete_url . '"';
		$del_link .= " rel=\"{handler: 'iframe', size: {x: 600, y: 300}}\"";
		$del_link .= " title=\"$tooltip\"><img src=\"$delete_img\" alt=\"$tooltip\" /></a>";
		$html .= "<td class=\"at_edit\">$update_link $del_link</td>";
		}

	$html .= "</tr>\n";
	}

// Close the HTML
$html .= "</tbody></table>\n";

if ( $format != 'raw' ) {
	$html .= "</div>\n";
	}

echo $html;

?>
