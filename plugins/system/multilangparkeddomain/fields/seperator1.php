<?php 
/**
 * @package		Multi-Language Parked Domain Switcher fro Joomla! 1.6/1.7/2.5/3.0/3.1
 * @type		Plugin (System)
 * @filename	ultimatesitetools.php
 * @folder		<root>/plugins/system/ultimatesitetools
 * @version		1.0
 * @modified	16 August 2013
 * @author		Web-expert.gr / Stergios Zgouletas
 * @website		http://www.web-expert.gr
 * @license		GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * 
 * @copyright (C) 2011 Web-expert.gr
 *
 * This program can be used under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 3 of the License.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
**/
// no direct access
defined('_JEXEC') or die('Restricted access');
require_once ('general.php');

class WeSeperator1 extends WEElement {		
	function fetchElement($name, $value, &$node, $control_name){
		return '<div style="clear:both;font-weight:bold;font-size:12px;color:#ffffff;padding:3px;margin:0;background:#6699FF;text-align:left;">'.JText::_($value).'</div>';
	}
}

class JFormFieldSeperator1 extends WeSeperator1 {
	protected $type = 'seperator1';
}
class JElementSeperator1 extends WeSeperator1 {
		var	$_name = 'Seperator1';
}