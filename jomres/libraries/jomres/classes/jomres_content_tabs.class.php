<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################


/**
#
 * Creates the Jomres config panel object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_content_tabs
	{
	/**
	#
	* Constructor.
	#
	*/
	function jomres_content_tabs()
		{
		$this->panes=array();
		$this->paneLink=array();
		$this->counter=1;
		$this->panelNames=array();
		$this->randomString ="";
		$this->useCookies=false;
		}

	/**
	#
	* Starts the tabs
	#
	*/
	function startTabs()
		{
		$currentTab=jomresGetParam( $_COOKIE,'jomres_content_tab', '' );
		#### Not currently working, jquery ui tabs #####
		//echo '
		//<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jquery-ui-1.7.1.custom.min.js"></script>';
		

		echo '
		<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jquerytabs/jquery.tabs.pack.js"></script>';
		echo '
		<script type="text/javascript" src="'.get_showtime('live_site').'/jomres/javascript/jquerytabs/jquery.history_remote.pack.js"></script>';
		echo '
		<link rel="stylesheet" href="'.get_showtime('live_site').'/jomres/javascript/jquerytabs/jquery.tabs.css" type="text/css" media="print, projection, screen">';
		echo '
		<!--[if lte IE 7]><link rel="stylesheet" href="'.get_showtime('live_site').'/jomres/javascript/jquerytabs/jquery.tabs-ie.css" type="text/css" media="print, projection, screen"><![endif]-->';

		if ($this->useCookies)
			{
			echo "<script type=\"text/javascript\" defer=\"true\">
			jQuery(document).ready(function() {
				jQuery('#content_tabs').tabs({ fxFade: true, fxSpeed: 'fast', fxAutoHeight: true});
				jQuery('#content_tabs').triggerTab('".$currentTab."');
				});
			</script>
			";
			}
		else
			{
			#### Not currently working, jquery ui tabs #####
			/*
			echo '
				<script type="text/javascript">
					jQuery(function(){
						// Tabs
						jQuery(\'#content_tabs\').tabs();
						
						//hover states on the static widgets
						jQuery(\'#dialog_link, ul#icons li\').hover(
							function() { jQuery(this).addClass(\'ui-state-hover\'); }, 
							function() { jQuery(this).removeClass(\'ui-state-hover\'); }
						);
						
					});
				</script>
				';
			*/

			echo "<script type=\"text/javascript\" defer=\"true\">
			jQuery(document).ready(function() {
				jQuery('#content_tabs').tabs();
				});
			</script>
			";

			}
		echo "<div id=\"content_tabs\"> <!-- start tabs panel -->";
		}

	/**
	#
	* Starts the panel
	#
	*/
	function startPanel($tabpage)
		{
		$this->content="";
		$anchor=ereg_replace("[^A-Za-z0-9]", "", $tabpage);
		if (strlen($anchor)==0)
			$anchor=generateJomresRandomString(10);
		$tabCookieString="";
		if ($this->useCookies)
			$tabCookieString='onClick="jQuery.cookie(\'jomres_content_tab\', \''.$anchor.'\');"';
		$this->panelNames[]=$anchor;
		$this->paneLink[]='<li>
			<a href="'.$_SERVER["REQUEST_URI"]."#".$anchor.'" '.$tabCookieString.'>'.$tabpage.'</a>
		</li>
		';
		$this->panes[]='<div id="'.$anchor.'"><!-- start content tab panel -->';
		}



	/**
	#
	* Inserts content into the panel
	#
	*/
	function insertContent()
		{
		$this->panes[]=$this->content.'
		';
		}

	/**
	#
	* Ends the panel
	#
	*/
	function endPanel()
		{
		$this->panes[]='</div> <!-- end content tab panel -->
		';
		}

	/**
	#
	* Ends the tabs
	#
	*/
	function endTabs()
		{
		echo '<ul>
		';
		foreach ($this->paneLink as $pane)
			{
			echo $pane;
			}
		echo '</ul>
		';
		foreach ($this->panes as $pane)
			{
			echo $pane;
			}

		echo "</div> <!-- end tabs panel -->";
		}

	/**
	#
	* Adds content to the this->content array variable
	#
	*/
	function setcontent($val="&nbsp;")
		{
		$this->content.=$val;
		}
	}


?>