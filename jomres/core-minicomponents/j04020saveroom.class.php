<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Mini-component core file: Constructs the javascript tab booking details page
 #
* @package Jomres
#
 */
class j04020saveroom {
	/**
	#
	 * Collates the room/property configuration tabs
	#
	 */
	function j04020saveroom($componentArgs)
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $mrConfig;
		
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$defaultProperty=getDefaultProperty();
		
		if ($mrConfig['singleRoomProperty'] == "0")
			{
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($defaultProperty);
			$roomUid         = intval( jomresGetParam( $_POST, 'roomUid', 0 ) );
			$roomClasses     = intval( jomresGetParam( $_POST, 'roomClasses', 0 ) );
			$disabledAccess  = intval( jomresGetParam( $_POST, 'disabledAccess', 0 ) );
			$max_people      = intval( jomresGetParam( $_POST, 'max_people', 0 ) );
			$smoking   		 = intval( jomresGetParam( $_POST, 'smoking', 0 ) );
			$room_name       = getEscaped( jomresGetParam( $_POST, 'room_name', "" ) );
			$room_number     = getEscaped( jomresGetParam( $_POST, 'room_number', "" ) );
			$room_floor      = getEscaped( jomresGetParam( $_POST, 'room_floor', "" ) );
			$singleperson_suppliment		 = (float) jomresGetParam( $_POST, 'singleperson_suppliment', 0 );

			if (isset($_POST['features_list']))
				{
				$features_list         = jomresGetParam( $_POST, 'features_list', array() );
				$featuresList=implode(",",$features_list);
				}

			if ($roomUid == 0)
				{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT',_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT,FALSE);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);
				$query="INSERT INTO #__jomres_rooms (`room_classes_uid`,`propertys_uid`,`room_features_uid`,`room_name`,`room_number`,`room_floor`,`room_disabled_access`,`max_people`,`smoking`,`singleperson_suppliment`)VALUES ('".(int)$roomClasses."',".(int)$defaultProperty.",'$featuresList','$room_name','$room_number','$room_floor','".(int)$disabledAccess."','".(int)$max_people."','".(int)$smoking."','".$singleperson_suppliment."')";
				if (doInsertSql($query,_JOMRES_MR_AUDIT_INSERT_ROOM)) returnToPropertyConfig($saveMessage);
				trigger_error ("Sql error when saving new room", E_USER_ERROR);
				}
			else
				{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE',_JOMRES_COM_MR_VRCT_ROOM_SAVE_UPDATE,FALSE);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);
				$query="UPDATE #__jomres_rooms SET `room_classes_uid`='$roomClasses',`room_features_uid`='$featuresList',`room_name`='$room_name',`room_number`='$room_number',`room_floor`='$room_floor',`room_disabled_access`='".(int)$disabledAccess."',`max_people`='".(int)$max_people."',`smoking`='".(int)$smoking."',`singleperson_suppliment`='".(float)$singleperson_suppliment."' WHERE room_uid='".(int)$roomUid."' AND propertys_uid='".(int)$defaultProperty."'";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_ROOM',_JOMRES_MR_AUDIT_UPDATE_ROOM,FALSE))) returnToPropertyConfig($saveMessage);
				trigger_error ("Sql error when updating room", E_USER_ERROR);
				}
			}
		else
			{
			$roomClass					= jomresGetParam( $_POST, 'roomClass', 0 );
			if ($roomClass > 0)
				{
				$query = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$defaultProperty."'";
				$room_uid =doSelectSql($query,1);
				$query="UPDATE #__jomres_rooms SET `room_classes_uid`='$roomClass' WHERE room_uid='".(int)$room_uid."' AND propertys_uid='".(int)$defaultProperty."'";
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_ROOM',_JOMRES_MR_AUDIT_UPDATE_ROOM,FALSE))) 
					trigger_error ("Sql error when updating room", E_USER_ERROR);
				
				$query="UPDATE #__jomres_rates SET `roomclass_uid`='$roomClass' WHERE `property_uid`=".(int)$defaultProperty;
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF',_JOMRES_MR_AUDIT_UPDATE_TARIFF,FALSE))) 
					trigger_error ("Sql error when updating room", E_USER_ERROR);

				$query="UPDATE #__jomcomp_tarifftype_rate_xref SET `roomclass_uid`='$roomClass' WHERE `property_uid`=".(int)$defaultProperty;
				if (!doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF',_JOMRES_MR_AUDIT_UPDATE_TARIFF,FALSE))) 
					trigger_error ("Sql error when updating tariff type xref table", E_USER_ERROR);

				returnToPropertyConfig('');
				
				}
			else
				trigger_error ("Room class uid not set", E_USER_ERROR);
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>