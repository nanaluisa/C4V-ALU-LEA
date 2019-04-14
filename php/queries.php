<?php

	function new_line( ){ echo ("<br>"); }

	function get_top_5_all( ){

		include 'C:\xampp\htdocs\dashboard\conection.php';

	    $lv_sql         =  "SELECT Id, SUM(Amount) as TotalValue, Campaign
							FROM Donations
							WHERE Anonymous  = 0
							GROUP BY Id
							ORDER BY TotalValue DESC
							LIMIT 5";

		return $lv_sql;
	}

	function get_top_5_by_campaign( $iv_campaign ){

		include 'C:\xampp\htdocs\dashboard\conection.php';

 		$lv_sql =	"SELECT
				IF(Con.Country=''  ,'No Country'  , Con.Country)    as Country,
				   Don.Campaign    , Con.Name     , SUM(Don.Amount) as TotalValue

			FROM Donations AS Don
			LEFT JOIN Contacts as Con ON Don.Id = Con.CodeAlumnUSB
			WHERE Don.Campaign   = " .$iv_campaign.  
			" AND Don.Anonymous  = 0
			GROUP BY Don.Id
			ORDER BY TotalValue DESC
			LIMIT 5";


		return $lv_sql;
	}

	function get_top_5_by_campaign_and_quarter( $iv_campaign, $iv_quarter ){

		include 'C:\xampp\htdocs\dashboard\conection.php';

		$lv_sql = "SELECT Id, SUM(Amount) as TotalValue, Campaign 
				   FROM Donations
				   WHERE Campaign  = " .$iv_campaign.  
				   " AND Quarter   = " .$iv_quarter.
				   " AND Anonymous = 0
				   GROUP BY Id 
				   ORDER BY TotalValue 
				   DESC LIMIT 5";
 
		return $lv_sql;

	}


	function get_top_5_all_country( ){

		$lv_sql = 

			"SELECT
				IF(Con.Country=''  ,'No Country'  , Con.Country)    as Country,
				   Don.Campaign    , Con.Name     , SUM(Don.Amount) as TotalValue

			FROM Donations AS Don
			LEFT JOIN Contacts as Con ON Don.Id = Con.CodeAlumnUSB
			WHERE Don.Anonymous  = 0
			GROUP BY Don.Id
			ORDER BY TotalValue DESC
			LIMIT 5";

	    return $lv_sql;

	}

	function write_top_5_by_campaign_in_html( $iv_campaign ){

		include 'C:\xampp\htdocs\dashboard\conection.php';

	    //SELECT in DB table
	    $lv_sql  = get_top_5_by_campaign( $iv_campaign );
	    $lv_sql  = mysqli_query($gc_conexao, $lv_sql);

	    //check if SELECT worked
	    if($lv_sql === FALSE) { 
	       echo("errou");
	    }

	    //iterate in every line that returned from the SELECT
	    $lv_iteration = 0;

	    while ($lv_linha = mysqli_fetch_assoc($lv_sql)) {

	        $lv_iteration += 1;
	        $name          = $lv_linha              ['Name'      ]    ;
	        $amount        = number_format($lv_linha['TotalValue'], 2);
	        $category      = $lv_linha              ['Campaign'  ]    ;
	        $country       = $lv_linha              ['Country'   ]    ;

	         echo
	         	" <div class= \"stats\">                             " .
		            " <div class = \"top\">                          " .
		            "   <strong> TOP       </strong> $lv_iteration   " .
		            " </div>                                         " .
		            " <div>                                          " .
		            "   <strong> Name      </strong> $name           " .
		            " </div>                                         " .
		            " <div>                                          " .
		            "   <strong> Amount    </strong> $amount         " .
		            " </div>                                         " .
		            " <div>                                          " .
		            "   <strong> Country   </strong> $country        " .
		            " </div>                                         " .
	            " </div>                                             " ; 

	    } 
	}

	function write_footer_in_html( ){

		echo

	        " <div class=\"footer\">                                                                                                                              " .
	        "     <a href=\"https://www.flipcause.com/secure/cause_pdetails/Mjk5NDc=\" target=\"_blank\" class=\"btn btn-info infobtn\">Info</a>                  " .
            "     <a href=\"https://www.flipcause.com/secure/donate/Mjk5NDc=\" target=\"_blank\" class=\"btn btn-info donatebtn\">Be in Top5, Donate!</a>         " .
	        " </div>                                                                                                                                              " ;
	}

	function write_header_in_html( ){

		echo 

			"<div>                                                        		 ".
			"    <img src='images/layout_USB.png' id='layout_USB' />      		 ".
			"</div>                                                      		 ".
			"<nav class=\"navbar navbar-expand-lg\" id=\"nav-bar\">       		 ".
			"    <div class=\"collapse navbar-collapse\" >                		 ".
			"        <div class= \"container\" id='menu'>                 		 ".
			"            <ul class=\"navbar-nav\">                        		 ".
			"            <li class=\"nav-item active\">                          ".
			"                <a class=\"nav-link\" href=\"#\">Home</a>           ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">Donar</a> 		 ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">Reportes</a>       ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">Sobre Nosotros</a> ".
			"            </li>                                                   ".
			"            <li class=\"nav-item active\">                          ".
			"                <a class=\"nav-link\" href=\"#\">Logros</a>         ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">UnCafexUSB</a>     ".
			"           </li>                                                    ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">Involúcrate</a>    ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">De Interés</a>     ".
			"            </li>                                                   ".
			"            <li class=\"nav-item active\">                          ".
			"                <a class=\"nav-link\" href=\"#\">Aliados</a>        ".
			"            </li>                                                   ".
			"            <li class=\"nav-item\">                                 ".
			"                <a class=\"nav-link\" href=\"#\">Español</a>        ".
			"            </li>                                                   ".
			"        </div>                                                      ".
			"    </div>                                                          ".
			"</nav>                                                              ";

	}

?>