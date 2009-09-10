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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class jomres_config_property_singleton
	{
	// Store the single instance of Database
	private static $configInstance;

	public function __construct() 
		{
		$this->property_uid = 0;
		$this->default_config = array();
		$this->property_config = array();
		$this->get_default_property_settings();
		}

	public static function getInstance()
		{
		if (!self::$configInstance)
			{
			self::$configInstance = new jomres_config_property_singleton();
			}
		return self::$configInstance;
		}
		
	public function __clone()
		{
		trigger_error('Cloning not allowed on a singleton object', E_USER_ERROR);
		}
		
	public function set($config)
		{
		$this->property_config = $config;
		}
		
	public function get()
		{
		return $this->property_config;
		}
		
	public function set_setting($setting,$value)
		{
		$this->property_config[$setting] = $value;
		}
		
	public function get_setting($setting)
		{
		return $this->property_config[$setting];
		}
		
	public function init($property_uid)
		{
		if ($property_uid >0)
			return $this->load_property_config($property_uid);
		else
			return false;
		}
		
	public function load_property_config($property_uid)
		{
		if ($property_uid > 0)
			{
			$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
			$jrConfig=$siteConfig->get();
			$temp_config=$this->default_config;
			$this->property_uid = (int)$property_uid;
			$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = '".$this->property_uid."'";
			$settingsList=doSelectSql($query);
			if (count($settingsList)>0)
				{
				foreach ($settingsList as $setting)
					{
					$akey=$setting->akey;
					$value=$setting->value;
					$temp_config[$akey]=$value;
					}
				if ($jrConfig['useGlobalCurrency'] =="1")
					{
					$temp_config['currency']=$jrConfig['globalCurrency'];
					$temp_config['currencyCode']=$jrConfig['globalCurrencyCode'];
					}
				}
			$this->property_config = $temp_config;
			return $this->property_config;
			}
		else
			return false;
		}
		
	private function get_default_property_settings()
		{
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$query="SELECT akey,value FROM #__jomres_settings WHERE property_uid = 0";
		$settingsList=doSelectSql($query);
		if (count($settingsList)>0)
			{
			foreach ($settingsList as $setting)
				{
				$akey=$setting->akey;
				$value=$setting->value;
				$this->default_config[$akey]=$value;
				}
			if ($jrConfig['useGlobalCurrency'] =="1")
				{
				$this->default_config['currency']=$jrConfig['globalCurrency'];
				$this->default_config['currencyCode']=$jrConfig['globalCurrencyCode'];
				}
			}
		}
	}
?>