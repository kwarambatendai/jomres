<?php

//Originally based on Xoriant Reviews by Manish Khanchandani http://www.phpclasses.org/browse/package/5542.html, it's been hugely rewritten for use in Jomres.

class jomres_reviews {
	private static $instance;

	public function __construct() {
		if(self::$instance) {
			return self::$instance;
		} else {
			self::$instance = $this;
		}
	$this->db_prefix=get_showtime('dbprefix');
	$thisJRUser = jomres_getSingleton('jr_user');
	$this->ip= $this->processString($_SERVER['REMOTE_ADDR']);
	$this->userid = $thisJRUser->userid;
	$this->property_uid = 0;
	}

	public function this_user_can_report()
		{
		$thisJRUser = jomres_getSingleton('jr_user');
		if ($thisJRUser->userIsRegistered)
			return true;
		return false;
		}
	
	
	public function this_user_can_review()
		{
		$thisJRUser = jomres_getSingleton('jr_user');
		$can_post = false;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		// This test mode allows property managers to make reviews where normally they wouldn't be allowed to.
		if ($jrConfig['reviews_test_mode']=="1")
			{
			if ($thisJRUser->userIsRegistered)
				$can_post = true;
			}
		else
			{
			if (!$thisJRUser->userIsManager && $thisJRUser->userIsRegistered)
				$can_post = true;
			}
		return $can_post;
		}

	public function this_user_can_review_this_property()
		{
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		$thisJRUser = jomres_getSingleton('jr_user');
		// This test mode allows property managers to make reviews where normally they wouldn't be allowed to.
		if ($jrConfig['reviews_test_mode']=="1")
			return true;
		if ($this->property_uid == 0)
			return false;
		if (!$thisJRUser->userIsRegistered)
			return false;

		$sql = "SELECT count(*) FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' and rating_ip = '".$this->ip."'";
		$result1 = (int) doSelectSql($sql,1);
		$sql = "SELECT count(*) as cnt FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' and user_id = '".(int)$this->userid."'";
		$result2 = (int) doSelectSql($sql,1);
		if ($result1 == 0 && $result2 == 0 )
			return true;
		return false;
		}
		
	public function save_confirmation($rating_id,$state) 
		{
		$property_uid = $this->get_property_uid_for_rating_id($rating_id);
		if ($property_uid && $rating_id > 0)
			{
			$query = "INSERT INTO #__jomres_reviews_ratings_confirm SET 
				`item_id` = ".(int)$this->property_uid.",
				`rating_id`=".(int)$rating_id.",
				`confirm_user_id`=".(int)$this->userid.",
				`confirm`=".(int)$state.",
				`confirm_ip`='".$this->ip."',
				`confirm_date`='".date( 'Y-m-d H:i:s' )."'
			";
			$result = doInsertSql($query);
			if($result)
				return $result;
			}
		return false;
		}
	
	public function save_review($rating,$title,$description,$pros,$cons) 
		{
		$published = 0;
		$siteConfig = jomres_getSingleton('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		if ($jrConfig['autopublish_reviews'] =="1")
			$published = 1;
		$query = "INSERT INTO #__jomres_reviews_ratings SET 
			user_id='".(int)$this->userid."',
			item_id='".(int)$this->property_uid."',
			rating='".(int)$rating."',
			rating_ip='".$this->ip."',
			rating_date='".date( 'Y-m-d H:i:s' )."',
			review_title='".trim($title)."',
			review_description='".trim($description)."',
			pros='".trim($pros)."',
			cons='".trim($cons)."',
			published = ".$published."
			";
		$result = doInsertSql($query,'');
		if($result)
			return $result;
		return false;
		}
		
	public function save_review_report($rating_id,$report)
		{
		$query ="INSERT INTO #__jomres_reviews_reports SET 
			`rating_id`='".(int)$rating_id."',
			`user_id`=".(int)$this->userid.",
			`report`='".(string)$report."',
			`report_date`='".date( 'Y-m-d H:i:s' )."'
			";
		$result = doInsertSql($query,'');
		if($result)
			return $result;
		return false;
		}
		
	public function delete_review($rating_id) 
		{
		if ((int)$rating_id > 0)
			{
			$query = "DELETE FROM #__jomres_reviews_ratings WHERE `rating_id`=".(int)$rating_id."";
			$result = doInsertSql($query,'');
			if($result)
				{
				$query = "DELETE FROM #__jomres_reviews_ratings_confirm WHERE `rating_id`=".(int)$rating_id."";
				$result = doInsertSql($query,'');
				if($result)
					{
					$all_reports = $this->get_all_reports_index_by_rating_id();
					if (isset($all_reports[$rating_id]))
						{
						$query="DELETE FROM #__jomres_reviews_reports WHERE `rating_id`=".(int)$rating_id."";
						$result = doInsertSql($query,'');
						if($result)
							return true;
						}
					else return true;
					}
				}
			}
		else
			{
			return false;
			}
		}
		
	public function publish_review($rating_id)
		{
		$query = "UPDATE #__jomres_reviews_ratings SET published = 1 WHERE rating_id = ".$rating_id;
		$result = doInsertSql($query,"");
		if ($result)
			return true;
		else
			return false;
		}
		
	public function unpublish_review($rating_id)
		{
		$query = "UPDATE #__jomres_reviews_ratings SET published = 0 WHERE rating_id = ".$rating_id;
		$result = doInsertSql($query,"");
		if ($result)
			return true;
		else
			return false;
		}
		
	private function processString($text) {
		return addslashes(stripslashes(trim($text)));
	}

	public function get_all_reviews_index_by_property_uid()
		{
		$reviews = array();
		$query = "SELECT * FROM #__jomres_reviews_ratings ORDER BY rating_date";
		$result = DoSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $res)
				{
				$property_uid = $res->item_id;
				$reviews[$property_uid][$res->rating_id]['rating_id']=$res->rating_id;
				$reviews[$property_uid][$res->rating_id]['property_uid']=$res->item_id;
				$reviews[$property_uid][$res->rating_id]['user_id']=$res->user_id;
				$reviews[$property_uid][$res->rating_id]['review_title']=$res->review_title;
				$reviews[$property_uid][$res->rating_id]['review_description']=$res->review_description;
				$reviews[$property_uid][$res->rating_id]['pros']=$res->pros;
				$reviews[$property_uid][$res->rating_id]['cons']=$res->cons;
				$reviews[$property_uid][$res->rating_id]['rating']=$res->rating;
				$reviews[$property_uid][$res->rating_id]['rating_ip']=$res->rating_ip;
				$reviews[$property_uid][$res->rating_id]['rating_date']=$res->rating_date;
				$reviews[$property_uid][$res->rating_id]['published']=$res->published;
				}
			}
		return $reviews;
		}

	public function validateData($record) {
		if(!isset($record['rating'])) {
			throw new Exception("Rating is empty. ");
		}
		if(empty($record['review_title'])) {
			throw new Exception("Rating Title is empty. ");
		}
		return true;
	}

	public function checkRatingUniqueIp() 
		{
		$sql = "SELECT count(*) FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' and rating_ip = '".$this->ip."'";
		$result = doSelectSql($sql,1);
		return $result;
		}

	public function checkRatingUniqueUser() 
		{
		$sql = "SELECT count(*) as cnt FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' and user_id = '".(int)$this->userid."'";
		$result = doSelectSql($sql,1);
		return $result;
		}

	public function checkConfirmUniqueIp($rating_id) {
		$sql = "SELECT count(*) as cnt FROM #__jomres_reviews_ratings_confirm WHERE item_id = '".(int)$this->property_uid."' and confirm_ip = '".$this->ip."' and rating_id = '".(int)$rating_id."'";
		$result = doSelectSql($sql,1);
		return $result;
		}

	public function checkConfirmUniqueUser($rating_id) 
		{
		$sql = "SELECT count(*) as cnt FROM #__jomres_reviews_ratings_confirm WHERE item_id = '".(int)$this->property_uid."' and confirm_user_id = '".$this->userid."' and rating_id = '".(int)$rating_id."'";
		$result = doSelectSql($sql,1);
		return $result;
		}

	public function showRating($item_id) {
		$sql = "SELECT item_id, AVG(rating) as avg_rating, COUNT(rating) as counter, SUM(rating) as sumrating FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' AND published = 1 GROUP BY item_id";
		$sql = str_replace("#__",$this->db_prefix,$sql);
		$rs = @mysql_query($sql);
		if(!$rs) {
			throw new Exception(mysql_error()." on line number ".__LINE__." of file ".__FILE__);
		}
		$arr = mysql_fetch_array($rs);
		return $arr;
	}

	public function showReviews($item_id, $max=-1, $pageNum=0) {
		$return = array();
		$confirm = array();
		
		$sql = "SELECT item_id, rating_id, AVG(confirm) as avg_rating, COUNT(confirm) as counter, SUM(confirm) as total FROM #__jomres_reviews_ratings_confirm WHERE item_id = '".(int)$this->property_uid."' GROUP BY rating_id";
		$rs =doSelectSql($sql);
		foreach($rs as $r) 
			{
			$confirm[$arr['rating_id']] = $r->rating_id;
			}

		if($max=="-1") 
			{
			$sql = "SELECT * FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' AND published = 1 order by rating_date desc";
			$rs =doSelectSql($sql);
			
			$return['totalRows'] = count($rs);
			$return['max'] = $max;
			$return['pageNum'] = $pageNum;
			$startRow = $pageNum * $max;
			$return['startRow'] = $startRow;
			$totalPages = 0;
			$return['totalPages'] = $totalPages;
			} 
		else 
			{
			// Not currently used, therefore commented out until it can be tested
			// $sql = "SELECT count(*) as cnt FROM #__jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."' order by rating_date desc";
			// $sql = str_replace("#__",$this->db_prefix,$sql);
			// $return['sqlCnt'] = $sql;
			// $rs = @mysql_query($sql);
			// if(!$rs) {
				// throw new Exception(mysql_error()." on line number ".__LINE__." of file ".__FILE__);
			// }
			// $arr = mysql_fetch_array($rs);
			// $totalRows = $arr['cnt'];
			// $return['totalRows'] = $totalRows;

			// if(!$max) $max = 10;
			// $return['max'] = $max;
			// if(!$pageNum) $pageNum = 0;
			// $return['pageNum'] = $pageNum;
			// $startRow = $pageNum * $max;
			// $return['startRow'] = $startRow;
			// $totalPages = ceil($totalRows/$max)-1;
			// $return['totalPages'] = $totalPages;

			// $sql = "SELECT * FROM __jomres_reviews_ratings WHERE item_id = '".(int)$this->property_uid."'";
			// $sql .= " Limit ".$startRow.", ".$max;
			// $return['sql'] = $sql;
			// $sql = str_replace("#__",$this->db_prefix,$sql);
			// $rs = @mysql_query($sql);
			
			// if(!$rs) {
				// throw new Exception(mysql_error()." on line number ".__LINE__." of file ".__FILE__);
			//}
			}

		foreach ($rs as $r)
			{
			$arr=array();
			foreach ($r as $key=>$val)
				$arr[$key]=$val;
			$rating_id = $r->rating_id;
			$return['fields'][$arr['rating_id']] = $arr;
			$return['confirm'][$arr['rating_id']] = $confirm[$arr['rating_id']];
			}
		return $return;
	}

	public function showConfirm($rating_id)
		{
		$arr = array("agree"=>0,"disagree"=>0,"confirm_ips"=>array());
		$sql = "SELECT confirm,confirm_ip FROM #__jomres_reviews_ratings_confirm WHERE item_id = '".(int)$this->property_uid."' and rating_id = '".(int)$rating_id."' ";
		$result = doSelectSql($sql);
		foreach ($result as $res)
			{
			$arr['confirm_ips'][]=$res->confirm_ip;
			if ((int)$res->confirm == 1)
				$arr['agree']++;
			else
				$arr['disagree']++;
			}
		return $arr;
		}
		
	public function get_property_uid_for_rating_id($rating_id)
		{
		$query = "SELECT item_id FROM #__jomres_reviews_ratings WHERE `rating_id` = ".(int)$rating_id." LIMIT 1";
		return doSelectSql($query,1);
		}
	
	public function get_all_reports_index_by_rating_id()
		{
		$reports = array();
		$query = "SELECT * FROM #__jomres_reviews_reports";
		$result = doSelectSql($query);
		if (count($result)>0)
			{
			foreach ($result as $res)
				{
				$rating_id = $res->rating_id;
				$reports[$rating_id][$res->report_id]['report_id']=$res->report_id;
				$reports[$rating_id][$res->report_id]['rating_id']=$res->rating_id;
				$reports[$rating_id][$res->report_id]['user_id']=$res->user_id;
				$reports[$rating_id][$res->report_id]['report']=$res->report;
				$reports[$rating_id][$res->report_id]['report_date']=$res->report_date;
				}
			}
		return $reports;
		}
}
?>