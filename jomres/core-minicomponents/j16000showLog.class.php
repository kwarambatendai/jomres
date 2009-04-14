<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

class j16000showLog
	{
	function j16000showLog()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$logFiles,$xmlelements,$jomresConfig_live_site;
		global $xml_entry_key,$rows,$jomresAdminPath,$counter,$lastdata,$xmlelements;
		$logfile = jomresGetParam( $_REQUEST, 'logfile',	'' );
		$no_html = jomresGetParam( $_REQUEST, 'no_html',	0 );
		$no_update = jomresGetParam( $_REQUEST, 'no_update',	0 );
		$pageoutput=array();
		$output=array();
		$rows=array();
		$temp=array();
		
		$output['TITLE']="".$logFiles[$logfile]." Log";
		$output['DATETIME']='datetime';
		$output['JOMRESSESSION']='jomressession';
		$output['TASK']='task';
		$output['REQUESTURI']='requesturi';
		$output['MESSAGE']=JOMRES_COM_A_MESSAGE;

		if ($no_html == 0)
			{
			$output['DELETE']=_JOMRES_COM_MR_ROOM_DELETE;
			$output['DELETELINK']=JOMRES_SITEPAGE_URL_ADMIN.'&task=clearLog&logfile='.$logfile;
			$output['LIVESITE']=$jomresConfig_live_site;
			$output['BACKLINK']='<a href="javascript:submitbutton(\'listLogs\')">'._JOMRES_COM_MR_BACK.'</a>';
			echo '<script type="text/javascript" src="'.$jomresConfig_live_site.'/jomres/javascript/heartbeat.js"></script>
				';
				
			if ($no_update ==0)
				{
				$output['HEARTBEAT']= '<script>
				jQuery(document).ready(function() {
					jQuery.jheartbeat.set({
						url: "'.JOMRES_SITEPAGE_URL_ADMIN.'&task=showLog&no_html=1&logfile='.$logfile.'",
						delay: 5000,
						div_id: "logfileresult"
					});
				});
				</script>';
				}
				
			$theElements=$xmlelements[$logfile];
			$xml_root_key=$theElements['root'];
			//$xml_entry_key=$theElements['entry'];
			$xml_file = JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile];
			if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
				{
				if (!($fp = fopen($xml_file, 'r')))
					{
					die("Could not open $xml_file for parsing!\n");
					}
				$xml="";
				while ($data = fgets($fp, 8192))
					{
					$xml.=$data;
					}
						
				$p = new jomresXMLParser($xml);
				$result=$p->getOutput($xml);
				$counter=0;
				foreach ($result[$xml_root_key] as $res)
					{
					$r=array();
					$r['COUNTER']=$counter;
					$r['DATETIME']=$res['datetime'];
					$r['TASK']=$res['requesturi'];
					$r['MESSAGEFULL']=$res['message'];
					$r['JOMRESSESSION']=$res['jomressession'];
					$r['LIVESITE']=$jomresConfig_live_site;
					$rows[]=$r;
					$counter++;
					}
				
				$jrtbar = new jomres_toolbar();
				$jrtb  = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('cancel',JOMRES_SITEPAGE_URL_ADMIN."&task=listLogs",'');
				$jrtb .= $jrtbar->endTable();
				$output['{JOMRESTOOLBAR}']=$jrtb;

				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'logfilefragment.html');
				$tmpl->addRows( 'rows',$rows);
				$output['LOGFILEDATA'] = $tmpl->getParsedTemplate();
				}
			else
				{
				$output['LOGFILEDATA'] ="No data yet";
				}
				
			$pageoutput[]=$output;
				


			$tmpl = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'logfileoutput.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();
			}
		else
			{
			if (file_exists(JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile]) )
				{
				$counter=0;
				$theElements=$xmlelements[$logfile];
				$xml_root_key=$theElements['root'];
				//$xml_entry_key=$theElements['entry'];
				$xml_file = JOMRES_SYSTEMLOG_PATH.$logFiles[$logfile];
				
				if (!($fp = fopen($xml_file, 'r')))
					{
					die("Could not open $xml_file for parsing!\n");
					}
				$xml="";
				while ($data = fgets($fp, 8192))
					{
					$xml.=$data;
					}
					
				$p = new jomresXMLParser($xml);
				$result=$p->getOutput($xml);
				$counter=0;
				foreach ($result[$xml_root_key] as $res)
					{
					$r=array();
					$r['COUNTER']=$counter;
					$r['DATETIME']=$res['datetime'];
					$r['TASK']=$res['requesturi'];
					$r['MESSAGEFULL']=$res['message'];
					$r['JOMRESSESSION']=$res['jomressession'];
					$r['LIVESITE']=$jomresConfig_live_site;
					$rows[]=$r;
					$counter++;
					if ($counter == 10)
						break;
					}
				$tmpl = new patTemplate();
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
				$tmpl->readTemplatesFromInput( 'logfilefragment.html');
				$tmpl->addRows( 'pageoutput',$pageoutput);
				$tmpl->addRows( 'rows',$rows);
				$tmpl->displayParsedTemplate();
				}
			else
				{
				echo "No data yet";
				}
			}

		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}