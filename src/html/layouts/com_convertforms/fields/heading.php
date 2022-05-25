<?php

/**
 * @package         Convert Forms
 * @version         3.2.4 Pro
 *
 * @author          Tassos Marinos <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

defined('_JEXEC') or die('Restricted access');

extract($displayData);

// Load custom fonts into the document
\NRFramework\Fonts::loadFont($field->font_family);

$styles = [];

// init vars
$link_start = $link_end = '';

// link
if ($field->use_link == '1')
{
	$link_atts = ($field->open_new_tab == '1') ? 'target="_blank"' : '';

	$link_start = '<a href="' . $field->link_url . '"' . $link_atts . '>';
	$link_end = '</a>';
}
?>
<<?php echo $field->heading_type; ?> style="<?php echo implode(';', $styles); ?>"><?php echo $link_start . $field->label . $link_end; ?></<?php echo $field->heading_type; ?>>
