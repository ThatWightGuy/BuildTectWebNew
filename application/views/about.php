<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect | About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Online Links -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<!-- Custom Links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/about.css">
	<link rel="shortcut icon" href="img/Logo.png">
	
	<!-- Online JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	
	<!-- Downloaded JS -->
	<script src="<?php echo base_url();?>js/basic/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url();?>js/basic/flowtype.js"></script>

	<!-- Custom JS -->
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
		var scrollData = "<?php echo $flashdata;?>";
	</script>
	<script src="<?php echo base_url();?>js/basic/basic.js"></script>
	<script src="<?php echo base_url();?>js/basic/cursor.js"></script>
</head>
<body ontouchmove >
	<!--<div class="cursor-main cursor-main-blue"></div>
	<div class="cursor-follower cursor-follower-blue">
		<div class="cf-arc"></div>
	</div>-->

	<?php echo $navbar; ?>

	<div class="main-sect" id="about-us">
		<div class="main-sect-cont" id="about-us-head" navcolor="blue">
			<div class="sect-info-full" id="about-us-cont">
				<!--<div class="sect-info-side-title">
					<div class="sect-title-line sect-title-top-line"></div>
					<h6>About Us</h6>
					<div class="sect-title-line sect-title-bottom-line"></div>
				</div>-->
				<div class="sect-description" id="about-us-desc-cont">
					<h1 class="sect-title" id="about-us-desc-cont-h1">About Us</h1>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-us-history" navcolor="white">
			<div class="sect-info-split" id="about-us-history-cont">
				<div class="sect-split-left" id="about-us-history-left">
					<div class="sect-split-image" id="about-us-history-img-cont">
						<div class="sect-split-image-cont" id="about-us-history-img">
							<div class="sect-image-inner-cont">
								
							</div>
						</div>
					</div>
				</div>
				<div class="sect-split-right" id="about-us-history-right">
					<div class="sect-description" id="about-us-history-desc-cont">
						<h1 class="sect-title" id="about-us-history-desc-cont-h1">Our History</h1>
						<h3 id="about-us-history-desc-cont-h3">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-us-history-images">
			<div class="main-sect-cont" id="auhi-top-half-back" navcolor="white"></div>
			<div class="main-sect-cont" id="auhi-bottom-half-back" navcolor="darkblue"></div>
			<div class="sect-short" id="about-us-history-images-cont">
				<div class="auh-image">
					<div class="auh-image-cont">
						<img src="<?php echo base_url(); ?>img/About/HistorySub1.jpg">
					</div>
				</div>
				<div class="auh-image">
					<div class="auh-image-cont">
						
					</div>
				</div>
				<div class="auh-image">
					<div class="auh-image-cont">
						
					</div>
				</div>
				<div class="auh-image">
					<div class="auh-image-cont">
						
					</div>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-us-blurbs" navcolor="darkblue">
			<div class="sect-info-full" id="about-us-blurbs-cont">
				<div class="about-us-blurb">
					<div class="about-us-blurb-cont">
						<h1 class="sect-title">Our Mission</h1>
						<h3>
							At Build Tect Building Designs, we aim to produce successful designs that are both creative and financially feasible for our clients.
						</h3>
					</div>
				</div>
				<div class="about-us-blurb">
					<div class="about-us-blurb-cont">
						<h1 class="sect-title">Our Promise</h1>
						<h3>
							We are committed to working directly with our customers to deliver high-quality architectural plans to meet any and every possible need.
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--<div class="main-sect" id="our-team">
		<div class="main-sect-cont" id="our-team-head" navcolor="blue">
			<div class="sect-info-full" id="our-team-cont">
				<div class="sect-description" id="our-team-desc-cont">
					<h1 class="sect-title" id="our-team-desc-cont-h1">Our Team</h1>
				</div>
			</div>
		</div>
	</div>-->

	<div class="main-sect" id="services">
		<div class="main-sect-cont" id="services-head" navcolor="blue">
			<div class="sect-info-full" id="services-cont">
				<!--<div class="sect-info-side-title">
					<div class="sect-title-line sect-title-top-line"></div>
					<h6>Services</h6>
					<div class="sect-title-line sect-title-bottom-line"></div>
				</div>-->
				<div class="sect-description" id="services-desc-cont">
					<h1 class="sect-title" id="services-desc-cont-h1">Services</h1>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="services-main" navcolor="white">
			<div class="sect-info-full" id="services-main-cont">
				<div class="service-info-icon">
					<div class="service-info-icon-cont">
						<div class="sii-inner">
							<div class="sii-inner-cont">
								<div class="sii-icon-cont">
									<div class="sii-icon">
										<i class="fas fa-home"></i>
									</div>
									<h5>Site Development</h5>
								</div>
								<button class="learn-more-button black-button service-info-button">
									<div class="button-overlay"></div>
									<h6>See More</h6>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="service-info-icon">
					<div class="service-info-icon-cont">
						<div class="sii-inner">
							<div class="sii-inner-cont">
								<div class="sii-icon-cont">
									<div class="sii-icon">
										<i class="fas fa-clipboard"></i>
									</div>
									<h5>Pre-Design Services</h5>
								</div>
								<button class="learn-more-button black-button service-info-button">
									<div class="button-overlay"></div>
									<h6>See More</h6>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="service-info-icon">
					<div class="service-info-icon-cont">
						<div class="sii-inner">
							<div class="sii-inner-cont">
								<div class="sii-icon-cont">
									<div class="sii-icon">
										<i class="fas fa-drafting-compass"></i>
									</div>
									<h5>Design Services</h5>
								</div>
								<button class="learn-more-button black-button service-info-button">
									<div class="button-overlay"></div>
									<h6>See More</h6>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="service-info-icon">
					<div class="service-info-icon-cont">
						<div class="sii-inner">
							<div class="sii-inner-cont">
								<div class="sii-icon-cont">
									<div class="sii-icon">
										<i class="fas fa-city"></i>
									</div>
									<h5>City Interactions</h5>
								</div>
								<button class="learn-more-button black-button service-info-button">
									<div class="button-overlay"></div>
									<h6>See More</h6>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="services-info" navcolor="darkblue">
			<div class="sect-info-full" id="services-info-cont">
				
			</div>
		</div>
	</div>

	<?php echo $footer; ?>

	<script type="text/javascript">

	</script>
</body>
</html>