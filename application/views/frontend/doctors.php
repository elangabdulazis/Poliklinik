<?php?>



	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/season-change.jpg" type="image/x-icon">
		<title>HealthCare</title>


	    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	    <!-- <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700' rel='stylesheet' type='text/css'> -->
	    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600' rel='stylesheet' type='text/css'>
	    
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
					        <li><a href="index.html">Home</a></li>
					        <li><a href="services.html">Services</a></li>
					        <li class="active"><a href="#">Doctors</a></li>
					        <li><a href="blog.html">Blog</a></li>
							<li><a href="faq.html">FAQs</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="contact.html">Contact Us</a></li>
				      	</ul>
				    </div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</section>

		<section id= "starting">
			<div class="starting-wrapper">
				<div class="container">
					<div class="row">
					<div class="team-button">
						<div class="col-md-12">
							<h1 class="main-title wow animated fadeInLeft">Our Doctors</h1>
						</div>
						<div class="col-md-12">
							<h2 class="sub-title wow animated flipInX" data-wow-delay="1s">Meet With Our Team</h2>
						</div>
					</div>
					</div>	
				</div>
			</div>
		</section>
				
		<section class= "doctor-list">
			<div class= "container">
				<div class= "row">
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor1.jpg" alt="">
							</div>
							<div class= "doctor-info">

								<div class= "row">
									<div class= "doctor-name text-center">
										john doe
									</div>
								</div>

								<div class= "row">
									<div class= "position text-center">
										Orthopedic Surgeon
									</div>
								</div>

								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>

								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						 <?php foreach($dokter as $row) : ?>
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor2.jpg" alt="">
							</div>
							<div class= "doctor-info">
								<div class= "row">
									<div class= "doctor-name text-center">
										<?=$row->nama ?>
									</div>
								</div>
								<div class= "row">
									<div class= "position text-center">
										gynecologist
									</div>
								</div>
								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>

								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor3.jpg" alt="">
							</div>
							<div class= "doctor-info">
								<div class= "row">
									<div class= "doctor-name text-center">
										john doe
									</div>
								</div>
								<div class= "row">
									<div class= "position text-center">
										ent specialist
									</div>
								</div>
								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>

								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor4.jpg" alt="">
							</div>
							<div class= "doctor-info">
								<div class= "row">
									<div class= "doctor-name text-center">
										john doe
									</div>
								</div>
								<div class= "row">
									<div class= "position text-center">
										radiologist
									</div>
								</div>
								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>

								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor5.jpg" alt="">
							</div>
							<div class= "doctor-info">
								<div class= "row">
									<div class= "doctor-name text-center">
										john doe
									</div>
								</div>
								<div class= "row">
									<div class= "position text-center">
										cardiologist
									</div>
								</div>
								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>

								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class= "col-lg-4 col-sm-6 col-xs-12">
						<div class= "doctor-meta">
							<div class= "doctor-img">
								<img class= "img-responsive center-block" src="assets/img/doctor6.jpg" alt="">
							</div>
							<div class= "doctor-info">
								<div class= "row">
									<div class= "doctor-name text-center">
										john doe
									</div>
								</div>
								<div class= "row">
									<div class= "position text-center">
										dentist
									</div>
								</div>
								<div class= "row">
									<div class= "doctor-des text-center">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores minima eaque blanditiis ipsa, doloribus consectetur provident officiis voluptatem magni molestias optio eius, minus aliquam fugit officia temporibus aspernatur voluptatibus nesciunt!
										</p>
									</div>
								</div>
								
								<div class= "row">
									<div class="doctor-social text-center">
										<ul class="contact">
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Facebook"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Connect with Skype"><i class="fa fa-skype"></i></a>
											</li>
											<li class="online-contact">
												<a href="#" data-toggle="tooltip" title="Share in Google +"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section id="job">
			<div class= "job-wrapper">
				<div class="container">
	      			<div class="row">
	        			<div class="col-lg-6 col-md-6 col-sm-6">
	          				<h2 style= "text-align: right;">Want To Join Our Team ???</h2>
	          				<h4 style= "text-align: right;">
	          					We are looking for qualified professionals who are passionate about their job. Send us your CV to the email address specified below
	          				</h4>

	          				<!--  form for job  -->

							<div class= "form">
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" placeholder="Name">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-envelope-o fa-fw"></i>
	  								</span>
								 	<input class="form-control" type="text" placeholder="Email address">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-tags fa-fw"></i>
	  								</span>
								 	<input type="file" class="btn btn-info form-control">
								</div>
							</div>
							<button type="button" class="btn btn-primary send">Send</button>

							<!-- end of form -->
				          	
	        			</div>
	        			<div class="col-lg-6 col-md-6 col-sm-6">
	        				<div class="block-image background-scale">
	          					<img class="img-responsive center-block" src="assets/img/join.png" alt="">
	          				</div>
	        			</div>
	      			</div> 
	    		</div>
			</div>
  		</section>


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
		<script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


  		<script>
      		new WOW().init();
		</script>

	</body>


