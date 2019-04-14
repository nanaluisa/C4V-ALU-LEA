<?php

	function new_line( ){ echo ("<br>"); }

	function get_top_5_all( ){

	    $lv_sql         =  "SELECT Id, SUM(Amount) as TotalValue, Campaign
							FROM Donations
							GROUP BY Id
							ORDER BY TotalValue DESC
							LIMIT 5";

		return $lv_sql;
	}

	function get_top_5_by_campaign( $iv_campaign ){

		$lv_sql = "SELECT Id, SUM(Amount) as TotalValue, Campaign 
				FROM Donations
				WHERE Campaign = " .$iv_campaign.  
				" GROUP BY Id 
				ORDER BY TotalValue 
				DESC LIMIT 5";
 
		return $lv_sql;
	}

	function get_top_5_by_campaign_and_date( $iv_campaign, $iv_quarter ){

		$lv_sql = "SELECT Id, SUM(Amount) as TotalValue, Campaign 
				   FROM Donations
				   WHERE Campaign = " .$iv_campaign.  
				   " AND Quarter  = " .$iv_quarter.
				  " GROUP BY Id 
				   ORDER BY TotalValue 
				   DESC LIMIT 5";
 
		return $lv_sql;

	}

?>