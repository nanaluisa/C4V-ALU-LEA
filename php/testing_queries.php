<?php

include 'C:\xampp\htdocs\dashboard\conection.php';
include 'C:\xampp\htdocs\dashboard\queries.php';

?>

<html>
<head>
    <title></title>
</head>
<body>

	<table>
		 <tr>
			<th>TOP</th>
			<th>UserId</th>
			<th>Amount donated</th>
			<th>Category</th>
		 </tr>
			<?php

			    //SELECT in DB table
			    $lv_sql  = get_top_5_all( );
			    $lv_sql  = mysqli_query($gc_conexao, $lv_sql);

			    //check if SELECT worked
			    if($lv_sql === FALSE) { 
			       echo("errou");
			    }

			    //iterate in every line that returned from the SELECT
			    $lv_iteration = 0;

			    while ($lv_linha = mysqli_fetch_assoc($lv_sql)) {

			    	$lv_iteration += 1;
					$id            = $lv_linha              ['Id'        ]    ;
					$amount        = number_format($lv_linha['TotalValue'], 2);
					$category      = $lv_linha              ['Campaign'  ]    ;

				     echo 
				     	" <tr>							\n" .
				     	"	<td> $lv_iteration </td>	\n" .
				        "  	<td> $id           </td>	\n" .
				        "	<td> $amount       </td>	\n" .
				        "   <td> $category     </td>    \n ".
				        " </tr>					        \n" ;

				} 


			?>
	</table>
	<br>
	<br>
	<table>
		 <tr>
			<th>TOP</th>
			<th>UserId</th>
			<th>Amount donated</th>
			<th>Category</th>
		 </tr>
			<?php

			    //SELECT in DB table
			    $lv_sql  = get_top_5_by_campaign( "\"CD\"" );
			    $lv_sql  = mysqli_query($gc_conexao, $lv_sql);

			    //check if SELECT worked
			    if($lv_sql === FALSE) { 
			       echo("errou");
			    }

			    //iterate in every line that returned from the SELECT
			    $lv_iteration = 0;

			    while ($lv_linha = mysqli_fetch_assoc($lv_sql)) {

			    	$lv_iteration += 1;
					$id            = $lv_linha              ['Id'        ]    ;
					$amount        = number_format($lv_linha['TotalValue'], 2);
					$category      = $lv_linha              ['Campaign'  ]    ;

				     echo 
				     	" <tr>							\n" .
				     	"	<td> $lv_iteration </td>	\n" .
				        "  	<td> $id           </td>	\n" .
				        "	<td> $amount       </td>	\n" .
				        "   <td> $category     </td>    \n ".
				        " </tr>					        \n" ;

				} 


			?>
	</table>
	<br>
	<br>
	<table>
		 <tr>
			<th>TOP</th>
			<th>UserId</th>
			<th>Amount donated</th>
			<th>Category</th>
		 </tr>
			<?php

			    //SELECT in DB table
			    $lv_sql  = get_top_5_by_campaign_and_date( "\"CD\"" , "\"Q2-2018\"" );
			    $lv_sql  = mysqli_query($gc_conexao, $lv_sql);

			    //check if SELECT worked
			    if($lv_sql === FALSE) { 
			       echo("errou");
			    }

			    //iterate in every line that returned from the SELECT
			    $lv_iteration = 0;

			    while ($lv_linha = mysqli_fetch_assoc($lv_sql)) {

			    	$lv_iteration += 1;
					$id            = $lv_linha              ['Id'        ]    ;
					$amount        = number_format($lv_linha['TotalValue'], 2);
					$category      = $lv_linha              ['Campaign'  ]    ;

				     echo 
				     	" <tr>							\n" .
				     	"	<td> $lv_iteration </td>	\n" .
				        "  	<td> $id           </td>	\n" .
				        "	<td> $amount       </td>	\n" .
				        "   <td> $category     </td>    \n ".
				        " </tr>					        \n" ;

				} 


			?>
	</table>

</body>
</html>