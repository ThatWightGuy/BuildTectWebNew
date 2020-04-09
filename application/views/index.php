<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect Building Designs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/homepage.css">
	<link rel="shortcut icon" href="img/Logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
	</script>
	<script src="<?php echo base_url();?>js/basic/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url();?>js/basic/cursor.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-testimonials.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-portfolio.js"></script>
</head>
<body ontouchmove >
	<div class="cursor"></div>
	<nav class="main-navbar">

	</nav>
	<div class="main-sect" id="welcome">
		<div class="main-sect-cont" id="welcome-cont">
			<div class="welcome-top"></div>
			<div class="welcome-logo">
				<img class="welcome-logo-img" src="img/Logo.png">
				<h1>
					Build <span class="tect-blue">Tect</span>
				</h1>
				<!--<h6>Building Designs</h6>-->
			</div>
			<div class="welcome-nav">
				<ul class="welcome-nav-list">
					<li class="welcome-nav-li">
						<a href="#about">About</a>
					</li>
					<li class="welcome-nav-li">
						<a href="#portfolio">Portfolio</a>
					</li>
					<li class="welcome-nav-li">
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main-sect" id="about">
		<div class="main-sect-cont" id="about-us">
			<div class="sect-info-full" id="about-us-cont">
				<form class="sect-description" id="about-us-desc-cont">
					<h1 class="" id="about-us-desc-cont-h1">Who Are We</h1>
					<h3 id="about-us-desc-cont-h3">
						Build Tect Building Designs is a design firm based in the San Fernando Valley that aims to serve the design and planning needs of contractors, developers, and owners.
					</h3>
					<button class="learn-more-button white-button">
						<div class="button-overlay"></div>
						<h6>Learn More</h6>
					</button>
				</form>
			</div>
		</div>
		<div class="main-sect-cont" id="about-what-is">
			<div class="sect-info-split" id="about-what-is-cont">
				<div class="sect-split-left" id="about-what-is-left">
					<div class="sect-split-image">
						<div class="sect-split-image-cont">
							<div class="sect-image-inner-cont">
								
							</div>
						</div>
					</div>
				</div>
				<div class="sect-split-right" id="about-what-is-right">
					<form class="sect-description" id="about-what-is-desc-cont">
						<h1 class="" id="about-what-is-desc-cont-h1">What We Do</h1>
						<h3 id="about-what-is-desc-cont-h3">
							Our team consists of experienced industry professionals who believe in a hands-on approach to every project, ensuring each client recieves the individual attention they deserve.
						</h3>
						<button class="learn-more-button black-button">
							<div class="button-overlay"></div>
							<h6>Learn More</h6>
						</button>
					</form>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-provide">
			<div class="sect-info-split" id="about-provide-cont">
				<div class="sect-split-left" id="about-provide-left">
					<form class="sect-description" id="about-provide-desc-cont">
						<h1 class="" id="about-provide-desc-cont-h1">What We Provide</h1>
						<h3 id="about-provide-desc-cont-h3">
							At Build Tect, we specialize in providing plans for custom homes, remodels, additions, commercial remodels, and tenant improvements.
						</h3>
						<button class="learn-more-button black-button">
							<div class="button-overlay"></div>
							<h6>Learn More</h6>
						</button>
					</form>
				</div>
				<div class="sect-split-right" id="about-provide-right">
					<div class="sect-split-image">
						<div class="sect-split-image-cont">
							<div class="sect-image-inner-cont">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-testimonials">
			<!--<div class="background-div bg-tect-blue" id="at-back"></div>-->
			<div class="sect-short" id="about-testimonials-title">
				<h1>What Our Clients Say</h1>
			</div>
			<div class="sect-short" id="about-testimonials-cont">
				<div class="about-testimonial-button" id="testimonial-button-left">
					<div class="about-testimonial-button-cont">
						<div class="test-button-cont">
							<button class="test-button" value="left">
								<div class="tb-cont">
									<i class="fas fa-chevron-left"></i>
								</div>
							</button>
						</div>	
					</div>
				</div>
				<div class="about-testimonial-button" id="testimonial-button-right">
					<div class="about-testimonial-button-cont">
						<div class="test-button-cont">
							<button class="test-button" value="right">
								<div class="tb-cont">
									<i class="fas fa-chevron-right"></i>
								</div>
							</button>
						</div>	
					</div>
				</div>
				<?php for($i = 0; $i < 12; $i++): ?>
					<div class="about-testimonial">
						<div class="about-testimonial-cont">
							<div class="about-test-inner">
								<div class="testimonial-header">
									<div class="th-img">
										<img src="<?php echo base_url();?>img/stock3.jpg">
									</div>
								</div>
								<div class="background-div bg-tect-blue bg-div-test"></div>
								<div class="testimonial-desc">
									<div class="testimonial-desc-cont">
										<div class="test-icon">
											<div class="test-icon-line test-line-left"></div>
											<i class="fas fa-quote-left"></i>
											<div class="test-icon-line test-line-right"></div>
										</div>
										<div class="test-quote">
											<h3>
												Test <?php echo $i; ?>
											</h3>
										</div>
										<div class="test-signature">
											<h6>
												<span class="test-sig-name">Rick Sanchez</span>
											</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<div class="sect-short" id="about-testimonials-footer">
				<div class="about-test-foot-cont">
					
				</div>
			</div>
		</div>
	</div>
	<div class="main-sect" id="portfolio">
		<div class="main-sect-cont" id="portfolio-start">
			<div class="sect-info-full" id="portfolio-start-cont">
				<form class="sect-description" id="portfolio-start-desc-cont" action="<?php echo base_url(); ?>index.php/Homepage/portfolioRedirect" method="post">
					<h1 class="" id="portfolio-start-desc-cont-h1">See Our Work</h1>
					<h3 id="portfolio-start-desc-cont-h3">
						Over our 30+ years in business, we have completed hundreds of residential and commerical projects. 
					</h3>
					<button class="learn-more-button white-button" name="PortfolioValue" type="submit" value="All">
						<div class="button-overlay"></div>
						<h6>See Projects</h6>
					</button>
				</form>
			</div>
		</div>
		<div class="main-sect-cont" id="portfolio-sect">
			<div class="sect-info-split" id="portfolio-cols">
				<div class="sect-split-left portfolio-split-cont" id="portfolio-cols-left">
					<div class="sect-split-image portfolio-split-image" id="portfolio-right-split-image">
						<div class="sect-split-image-cont">
							<div class="sect-image-inner-cont" id="portfolio-left-image">
								<div class="portfolio-img-inner-cont" id="portfolio-left-inner">
									<div class="portfolio-inner-cont-overlay main-overlay" id="portfolio-left-main-overlay">
										main
									</div>
									<div class="portfolio-inner-cont-overlay secondary-overlay" id="portfolio-left-right-overlay">
										second
									</div>
									<div class="portfolio-sect-cont-h1" id="portfolio-h1-left">
										<h1>Residential</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sect-split-right portfolio-split-cont" id="portfolio-cols-right">
					<div class="sect-split-image portfolio-split-image" id="portfolio-left-split-image">
						<div class="sect-split-image-cont">
							<div class="sect-image-inner-cont" id="portfolio-left-image">
								<div class="portfolio-img-inner-cont" id="portfolio-right-inner">
									<div class="portfolio-inner-cont-overlay main-overlay" id="portfolio-right-main-overlay">
										main
									</div>
									<div class="portfolio-inner-cont-overlay secondary-overlay" id="portfolio-right-left-overlay">
										second
									</div>
									<div class="portfolio-sect-cont-h1" id="portfolio-h1-right">
										<h1>Commercial</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-sect" id="contact">
		
	</div>
	<footer class="main-footer">
		
	</footer>
</body>