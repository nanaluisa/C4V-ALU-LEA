<?php include 'C:\xampp\htdocs\dashboard\queries.php'; ?>


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />

<?php write_header_in_html( ); ?>

<div class="container-fluid">
        <div class="row">
            <!--General leaderboards-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">General TOP 5</div>
                        <div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"LC\"" ); ?>    
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Campaigns TOP 5</div>
                        <div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"LC\"" ); ?>    
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Countries TOP 5</div>
                        <div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"LC\"" ); ?>    
                        </div>
                    </div>
                </div> 
            </div>






            <!--Per category: -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Iluminemos la USB</div>

                        <div class="banner-img">
                            <img src="../images/Auditorio.jpg" alt="Campaña1">
                        </div>

						<div class="progress" style="margin:4px">
						  <div class="progress-bar progress-bar-striped" role="progressbar" style="background-color:#d4ba35; width: 9%" >9%</div>
						</div>
    					<div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"LC\"" ); ?>    
    					</div>
                        <?php write_footer_in_html( ); ?>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Premio a la Labor Docente AlumnUSB</div>

                        <div class="banner-img">
                            <img src="../images/Docentes.jpg" alt="Campaña2">
                        </div>
						<div class="progress" style="margin:4px">
						  <div class="progress-bar progress-bar-striped" role="progressbar" style="background-color:#d4ba35; width: 13%" >13%</div>
						</div>
    					 <div class="div_leader_categ">
                              <?php write_top_5_by_campaign_in_html( "\"TS\"" ); ?>   
    					</div>
                        <?php write_footer_in_html( ); ?>
                    </div>
                </div> 
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Beca a un Estudiante de la USB</div>

                        <div class="banner-img">
                            <img src="../images/Estudiantes.jpg" alt="Campaña3">
                        </div>
						<div class="progress" style="margin:4px">
                          <div class="info_bar" style="margin:auto" > <a>$14.986,00 Raised by 273 Supporters. Be the next one!</a></div>
                        </div>
    					<div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"SS\"" ); ?>
    					</div>
                         <?php write_footer_in_html( ); ?>
					</div>
                    </div>
                </div> 

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Dona un Monto a la Biblioteca de la USB</div>

                        <div class="banner-img">
                            <img src="../images/Biblioteca.jpg" alt="Campaña4">
                        </div>
						<div class="progress" style="margin:4px">
                          <div class="info_bar"style="margin:auto" > <a>$100,00 Raised by 4 Supporters. Be the next one!</a></div>
                        </div>
					   <div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"LD\"" ); ?>
						</div>
                        <?php write_footer_in_html( ); ?>
                    </div>
                </div> 
            </div>
			
			            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">Dona Mensualmente Automaticamente</div>

                        <div class="banner-img">
                            <img src="../images/Donaciones regulares.jpg" alt="Campaña5">
                        </div>
						<div class="progress" style="margin:4px">
                          <div class="info_bar" style="margin:auto" > <a>$5600,00 Raised by 129 Supporters. Be the next one!</a></div>
                        </div>
					<div class="div_leader_categ">
                        <?php write_top_5_by_campaign_in_html( "\"ED\"" ); ?>
					</div>
                     <?php write_footer_in_html( ); ?>
                    </div>
                </div> 
            </div>
			
			            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">100 Computadoras para la USB</div>

                        <div class="banner-img">
                            <img src="../images/Computadoras.jpg" alt="Campaña6">
                        </div>
						
						<div class="progress" style="margin:4px">
						  <div class="progress-bar progress-bar-striped" role="progressbar" style="background-color:#d4ba35; width: 34%" >34%</div>
						</div>
						<div class="div_leader_categ">
                            <?php write_top_5_by_campaign_in_html( "\"CD\"" ); ?>
						</div>
                        <?php write_footer_in_html( ); ?>
                    </div>
                </div> 
            </div>
			
        </div>
    </div>