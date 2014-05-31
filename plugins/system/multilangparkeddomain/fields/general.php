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
defined('_JEXEC') or die('Restricted access'); // no direct access
if(!defined('DS')) define('DS',DIRECTORY_SEPARATOR);

if(!defined('WEJM16')){
	$version = new JVersion;
	$joomla = $version->getShortVersion();
	$v=(substr($joomla,0,3)=='1.5')?false:true;
	define('WEJM16',$v);
}
if (!WEJM16)
{
    jimport('joomla.html.parameter.element');
    class WEElement extends JElement{}
}else{
    jimport('joomla.form.formfield');
    class WEElement extends JFormField
    {
        function getInput()
        {
            return $this->fetchElement($this->name, $this->value, $this->element, $this->options['control']);
        }

        function getLabel()
        {
            if (method_exists($this, 'fetchTooltip'))
            {
                return $this->fetchTooltip($this->element['label'], $this->description, $this->element, $this->options['control'], $this->element['name'] = '');
            }
            else
            {
                return parent::getLabel();
            }
        }

        function render()
        {
            return $this->getInput();
        }

    }
}
