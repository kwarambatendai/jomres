<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5
* @package Jomres
* @copyright	2005-2011 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
 #
* @package Jomres
#
 */
class j00064generate_mainmenu {

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00064generate_mainmenu($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		$buttons = $componentArgs['jomres_mainmenu_buttons_categorised'];
		$button_o = array();

		foreach ($buttons as $category=>$buts)
			{
			$rows = array();
			foreach ($buts as $key=>$val)
				{
				$r=$val;
				$r['LIVESITE']=get_showtime('live_site');
				$r['TARGET'] = '';
				if ($val['external'])
					$r['TARGET'] = ' target="_blank" ';
					
				$r['disabled_class']='';
				if ($r['disabled'])
					{
					$r['link']='#';
					$r['disabled_class']= 'class="ui-state-error ui-state-disabled"';
					}

				$rows[]=$r;
				}

			$pageoutput = array();
			$output['CATEGORY']=ucwords($category);
			$output['LIVE_SITE']=get_showtime('live_site');
			$pageoutput[]=$output;
			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'mainmenu_options.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$tmpl->addRows( 'rows', $rows );
			$button_o[]['DIV']= $tmpl->getParsedTemplate();
			}

		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'mainmenu_wrapper.html' );
		$tmpl->addRows( 'button_output', $button_o );
		$this->ret_vals = $tmpl->getParsedTemplate();
		 echo $this->ret_vals;
		}


	function getRetVals()
		{
		return $this->ret_vals;
		}
	}
?>