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
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.plugin.plugin' );
class plgSystemMultilangparkeddomain extends JPlugin
{
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);
	}
	
	function onAfterRoute() {
		$app = JFactory::getApplication();
		if($app->isAdmin()) return;
		
		$finders=@explode("\n",trim($this->params->get('finders','')));	
		$replacers=@explode("\n",trim($this->params->get('replacers','')));
		
		if(!count($finders)) return;
        $url=JURI::getInstance()->toString();
		foreach($finders as $i=>$find){
			if(!isset($replacers[$i])) continue;
			$new_url=str_replace(trim($find),trim($replacers[$i]),$url,$count);
			if($count>0){
				$app->redirect($new_url,'','',true);
				break;
			}
		}
	}
}