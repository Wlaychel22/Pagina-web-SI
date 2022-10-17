<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die('Restricted access'); ?>

<div class="ph-item-box">
		<div class="ph-item-image"><a href="index.php?option=com_phocafavicon&amp;view=phocafaviconi&amp;tmpl=component&amp;folder=<?php echo $this->_tmp_folder->path_with_name_relative_no . '&field='.$this->field; ?>"><span class="ph-cp-item"><i class="phi duotone phi-fs-l phi-fc-brd icon-folder-close"></i></span></a></div>

	    <div class="ph-item-name"><a href="index.php?option=com_phocafavicon&amp;view=phocafaviconi&amp;tmpl=component&amp;folder=<?php echo $this->_tmp_folder->path_with_name_relative_no . '&field='.$this->field; ?>"><span><?php echo PhocaFaviconUtils::WordDelete($this->_tmp_folder->name, 15); ?></span></a></div>

        <div class="ph-item-action-box"></div>
</div>
