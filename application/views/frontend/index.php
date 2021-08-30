<?php?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/season-change.jpg" type="image/x-icon">
		<title>Poliklinik</title>

		
	    <link href='<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <link href='<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	    <link href='<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    
	    
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.theme.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
		<link href='<?php echo base_url() ?>http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<section class= "navs">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	      				</button>
	      				<a class="navbar-brand logo" href="#">
	      					<span><i class="fa fa-stethoscope"></i></span>
	      					HealthCare
	      				</a>
	    			</div>
		
		    		<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav navbar-right">
					        <li class="active"><a href="#">Home</a></li>
							<li><a href="<?= base_url('login');  ?>">Login</a></li>
				      	</ul>
				    </div><!-- navbar-collapse -->
				</div><!-- container-fluid -->
			</nav>
		</section>
		<section class= "heading-slider">
			<div id="starting-slider" class="owl-carousel owl-theme">
 
			  	<div class="item">
			  		<div class="slider-1">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Professional</h1>
			  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-2">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Caring</h1>
			  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="item">
			  		<div class="slider-3">
			  			<div class="slider-inner">
			  				<div class="container">
			  					<div class="row">
			  						<div class="slider-inner-text">
			  							<h1>We're Responsible</h1>
			  							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum dignissimos tempore ad, eos sint ullam </p>
			  						</div>	
				  				</div>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			 
			</div>
		</section>

		<section class= "starting-text">
      		<div class="container">
      			<div class="row">
      				<div class="welcome">
        				<h2 class="welcome-title">Welcome To Poliklinik</h2>
        				<p class="welcome-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		        			
        			</div>
        		</div>
      		</div>
	  	</section>


		<section id= "services">
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-12 col-sm-12 col-xs-12">
						<h2 class= "headline text-center">
							
						</h2>
						<p class="sub-headline text-center">
							
						</p>
					</div>
				</div>
				<?php 
				$queryData = "SELECT `tbl_spesialis`.`nama` AS `namaspesialis`,`tbl_dokter`.`nama` AS `namadokter`,`noizin`,`nohp`,`tarif`,`kd_dokter`,`photo`,`jenis_kelamin`
					FROM `tbl_dokter`,`tbl_spesialis`
					WHERE `tbl_spesialis`.`kd_spesialis`=`tbl_dokter`.`spesialis`";
				$dokter = $this->db->query($queryData)->result_array();
					?>
				<?php foreach($dokter as $row) : ?>
				<div class= "row">
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "hservice">
							<div class= "service-img">
								<img class= "img-responsive center-block" src="<?= base_url('assets/foto/') . $row['photo'];?> ?>" alt="">
							</div>
							<div class= "service-description text-center">
								<h4 class= "service-heading"><?= $row['namadokter'];  ?></h4>
								</div>
								<div class= "service-description text">
								<h5 class="service-heading"><?=$row['jenis_kelamin'];  ?></h5>
								<h5 class="service-heading"><?=$row['nohp'];  ?></h5>
								<h5 class="service-heading"><?=$row['namaspesialis'];  ?></h5>
								<!-- <a href="#" class="rm-btn btn btn-primary">

										Read More <i class="fa fa-caret-right"></i></a> -->
							</div>

						</div>
						<div class="clearfix"></div>
					</div><?php endforeach; ?>
				</div>
				
				 
			</div>
		</section>






		<section id= "testimonial" class="text-center">
			<!-- <div class="testimonial-wrapper">
				<div class="container">
		    		<div class="row client-content text-center">
		    			<div class="col-md-8">
		    				<div class="row">
								<h1>Testimonial</h1>
							</div>
							<div class="row">
								<div class="sub-headline">
									<p>What Our Patients Say About Us</p>
								</div>
							</div>
		    				
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  

		  					<!-- Wrapper for slides -->
		  					<!-- <div class="carousel-inner" role="listbox">
		    					<div class="item active">
		      						<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client3.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">Julia Doe</p>
											</div>
										</div>
									</div>
		   						</div>
		    				<div class="item">
		      				<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client1.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">John Doe</p>
											</div>
										</div>
									</div>
		    					</div>
		    					<div class="item">
		      						<div id="client-speech">
										<div class="item">
											<div class="row">
												<div class="col-md-12">
													<i class="fa fa-quote-left"></i>
												</div>
												<div class="col-md-8 col-md-offset-2">
													<p class="client-comment text-center">
														When you form a team, why do you try to form a team? Because teamwork builds trust and trust builds speed.
													</p>
												</div>
												<div class="col-md-12">
													<i class="fa fa-quote-right"></i>
												</div>
												<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
													<img class="img-circle img-responsive center-block" src="assets/img/client4.jpg" alt="Image">
												</div>	
											</div>
											<div class= "row text-center">
												<p class="client-name text-center">Jane Doe</p>
											</div>
										</div>
									</div>
		    					</div>
		  					</div>

  						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <i class="fa fa-angle-left fa-3x"></i>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <i class="fa fa-angle-right fa-3x"></i>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class= "appointment">
							
			                    <div class="header text-center">
			                        <h2>Make an Appointment</h2>
			                       	<a href="#" class="number">
			                       		<i class="fa fa-phone fa-fw"></i>
										1-800-123-4567
			                       	</a>
			                        <span class="or">OR</span>
			                    </div> -->

								<!-- form of appointment -->
								<!-- <div class="row">
									<form method="post" action="#">
										<div class= "form">
											<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											 	<input class="form-control" type="text" placeholder="Full Name *" required>
											</div>
											<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											 	<input class="form-control" type="text" placeholder="Email Address *" required>
											</div>
											<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											 	<input class="form-control" type="text" placeholder="Appointment Date *" required>
											</div>
											<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											 	<input class="form-control" type="text" placeholder="Mobile Number *" required>
											</div>
										</div>
										<div class="input-group margin-bottom-sm col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											<textarea class="form-control" rows="6" placeholder="Your Problem *" required></textarea>
										</div>
										<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											<div class="captcha-container">
			                                    <label>Are you human? </label><br/>
			                                    <img src="http://inspirythemesdemo.com/healthpress/wp-content/themes/healthpress-theme/captcha/captcha.php" alt="">
			                                    <input type="text" class="captcha required" name="captcha" maxlength="5" title=" Please enter the code characters displayed in image!">
			                                </div>
											<input class="btn btn-primary send" type="submit" value="Send">
										</div>
									</form>
								</div> -->
								<!-- end of form -->
							<!-- </div> end of appointment -->
		    			<!-- </div> -->
		    		<!-- </div>  client-content  -->
		    	<!-- </div> -->
			<!-- </div>	 --> -->
	    </section>	<!-- testimonial -->


		<section id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<ul class="text-center contact">
				        	<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
							</li>
							<li class= "socials-icons">
								<a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
							</li>
				      	</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text text-center">
							&copy; Copyright 2014, Your Website Link. Theme by <a href="https://themewagon.com/">ThemeWagon</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		<script>
      		new WOW().init();
		</script>

		<script>
			$(document).ready(function() {
  				$("#starting-slider").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>


		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>

	</body>
</html>