<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die();
class PhocaFaviconRenderAdmin
{
	public static function quickIconButton( $link, $image, $text, $imgUrl ) {
		$image = str_replace('icon-48-', 'icon-48-phocafavicon', $image);

		return '<div class="thumbnails ph-icon">'
		.'<a class="thumbnail ph-icon-inside" href="'.$link.'">'
		.HtmlHelper::_('image', $imgUrl . $image, $text )
		.'<br /><span>'.$text.'</span></a></div>'. "\n";
	}

	public static function getLinks() {
		$app	= JFactory::getApplication();
		$option = $app->input->get('option');
		$oT		= strtoupper($option);

		$links =  array();
		switch ($option) {
			case 'com_phocagallery':
				$links[]	= array('Phoca Gallery site', 'https://www.phoca.cz/phocagallery');
				$links[]	= array('Phoca Gallery documentation site', 'https://www.phoca.cz/documentation/category/2-phoca-gallery-component');
				$links[]	= array('Phoca Gallery download site', 'https://www.phoca.cz/download/category/66-phoca-gallery');
			break;

			case 'com_phocaguestbook':
				$links[]	= array('Phoca Guestbook site', 'https://www.phoca.cz/phocaguestbook');
				$links[]	= array('Phoca Guestbook documentation site', 'https://www.phoca.cz/documentation/category/3-phoca-guestbook-component');
				$links[]	= array('Phoca Guestbook download site', 'https://www.phoca.cz/download/category/69-phoca-guestbook');
			break;

			case 'com_phocadownload':
				$links[]	= array('Phoca Download site', 'https://www.phoca.cz/phocadownload');
				$links[]	= array('Phoca Download documentation site', 'https://www.phoca.cz/documentation/category/17-phoca-download-component');
				$links[]	= array('Phoca Download download site', 'https://www.phoca.cz/download/category/68-phoca-download');
			break;

			case 'com_phocamaps':
				$links[]	= array('Phoca Maps site', 'https://www.phoca.cz/phocamaps');
				$links[]	= array('Phoca Maps documentation site', 'https://www.phoca.cz/documentation/category/53-phoca-maps-component');
				$links[]	= array('Phoca Maps download site', 'https://www.phoca.cz/download/category/81-phoca-maps');
			break;

			case 'com_phocafavicon':
				$links[]	= array('Phoca Favicon site', 'https://www.phoca.cz/phocafavicon');
				$links[]	= array('Phoca Favicon documentation site', 'https://www.phoca.cz/documentation/category/4-phoca-favicon-component');
				$links[]	= array('Phoca Favicon download site', 'https://www.phoca.cz/download/category/70-phoca-favicon');
			break;

		}

		$links[]	= array('Phoca News', 'https://www.phoca.cz/news');
		$links[]	= array('Phoca Forum', 'https://www.phoca.cz/forum');

		$components 	= array();
		$components[]	= array('Phoca Gallery','phocagallery', 'pg');
		$components[]	= array('Phoca Guestbook','phocaguestbook', 'pgb');
		$components[]	= array('Phoca Download','phocadownload', 'pd');
		$components[]	= array('Phoca Documentation','phocadocumentation', 'pdc');
		$components[]	= array('Phoca Favicon','phocafavicon', 'pfv');
		$components[]	= array('Phoca SEF','phocasef', 'psef');
		$components[]	= array('Phoca PDF','phocapdf', 'ppdf');
		$components[]	= array('Phoca Restaurant Menu','phocamenu', 'prm');
		$components[]	= array('Phoca Maps','phocamaps', 'pm');
		$components[]	= array('Phoca Font','phocafont', 'pf');
		$components[]	= array('Phoca Email','phocaemail', 'pe');
		$components[]	= array('Phoca Install','phocainstall', 'pi');
		$components[]	= array('Phoca Template','phocatemplate', 'pt');
		$components[]	= array('Phoca Panorama','phocapanorama', 'pp');
		$components[]	= array('Phoca Commander','phocacommander', 'pcm');
		$components[]	= array('Phoca Photo','phocaphoto', 'ph');
		$components[]	= array('Phoca Cart','phocacart', 'pc');

		$banners	= array();
		$banners[]	= array('Phoca Restaurant Menu','phocamenu', 'prm');
        $banners[]	= array('Phoca Cart','phocacart', 'pc');

		$o = '';
		$o .= '<p>&nbsp;</p>';
		$o .= '<h4 style="margin-bottom:5px;">'.Text::_($oT.'_USEFUL_LINKS'). '</h4>';
		$o .= '<ul>';
		foreach ($links as $k => $v) {
			$o .= '<li><a style="text-decoration:underline" href="'.$v[1].'" target="_blank">'.$v[0].'</a></li>';
		}
		$o .= '</ul>';

		$o .= '<div>';
		$o .= '<p>&nbsp;</p>';
		$o .= '<h4 style="margin-bottom:5px;">'.Text::_($oT.'_USEFUL_TIPS'). '</h4>';

		$m = mt_rand(0, 10);
		if ((int)$m > 0) {
			$o .= '<div>';
			$num = range(0,(count($components) - 1 ));
			shuffle($num);
			for ($i = 0; $i<3; $i++) {
				$numO = $num[$i];
				$o .= '<div style="float:left;width:33%;margin:0 auto;">';
				$o .= '<div><a style="text-decoration:underline;" href="https://www.phoca.cz/'.$components[$numO][1].'" target="_blank">'.HtmlHelper::_('image',  'media/'.$option.'/images/administrator/icon-box-'.$components[$numO][2].'.png', ''). '</a></div>';
				$o .= '<div style="margin-top:-10px;"><small><a style="text-decoration:underline;" href="https://www.phoca.cz/'.$components[$numO][1].'" target="_blank">'.$components[$numO][0].'</a></small></div>';
				$o .= '</div>';
			}
			$o .= '<div style="clear:both"></div>';
			$o .= '</div>';
		} else {
			$num = range(0,(count($banners) - 1 ));
			shuffle($num);
			$numO = $num[0];
			$o .= '<div><a href="https://www.phoca.cz/'.$banners[$numO][1].'" target="_blank">'.HtmlHelper::_('image',  'media/'.$option.'/images/administrator/b-'.$banners[$numO][2].'.png', ''). '</a></div>';

		}

		$o .= '<p>&nbsp;</p>';
		$o .= '<h4 style="margin-bottom:5px;">'.Text::_($oT.'_PLEASE_READ'). '</h4>';
		$o .= '<div><a style="text-decoration:underline" href="https://www.phoca.cz/phoca-needs-your-help/" target="_blank">'.Text::_($oT.'_PHOCA_NEEDS_YOUR_HELP'). '</a></div>';

		$o .= '</div>';
		return $o;
	}
}
