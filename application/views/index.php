<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect Building Designs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Online Links -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

	<!-- Custom Links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/homepage.css">
	<link rel="shortcut icon" href="img/Logo.png">
	
	<!-- Online JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	
	<!-- Downloaded JS -->
	<script src="<?php echo base_url();?>js/basic/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url();?>js/basic/flowtype.js"></script>
	
	<!-- Custom JS -->
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
	</script>
	<script src="<?php echo base_url();?>js/basic/basic.js"></script>
	<script src="<?php echo base_url();?>js/basic/cursor.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-main.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-navi.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-testimonials.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-portfolio.js"></script>
</head>
<body ontouchmove >
	<div class="cursor-main cursor-main-blue"></div>
	<div class="cursor-follower cursor-follower-blue">
		<div class="cf-arc"></div>
	</div>
	
	<div class="main-sect" id="welcome">
		<div id="welcome-background">
			
		</div>
		<div class="main-sect-cont" id="welcome-cont" navcolor="transparent">
			<div id="welcome-logo-cont">
				<div id="welcome-logo">
					<img src="<?php echo base_url();?>img/Logo.png">
				</div>
			</div>
		</div>
	</div>
	<?php echo $navbar ?>
	<div class="main-sect" id="about">
		<div class="main-sect-cont" id="about-us" navcolor="blue">
			<div class="sect-info-full" id="about-us-cont">
				<div class="sect-info-side-title">
					<div class="sect-title-line sect-title-top-line"></div>
					<h6>About</h6>
					<div class="sect-title-line sect-title-bottom-line"></div>
				</div>
				<form class="sect-description" id="about-us-desc-cont">
					<h1 class="sect-title" id="about-us-desc-cont-h1">Who Are We</h1>
					<h3 id="about-us-desc-cont-h3">
						Build Tect Building Designs is an architectural design firm based in the San Fernando Valley that aims to serve the design and planning needs of contractors, developers, and owners.
					</h3>
					<button class="learn-more-button white-button">
						<div class="button-overlay"></div>
						<h6>Learn More</h6>
					</button>
				</form>
			</div>
		</div>
		<div class="main-sect-cont" id="about-what-is" navcolor="white">
			<div class="sect-info-split" id="about-what-is-cont">
				<div class="sect-split-left" id="about-what-is-left">
					<div class="sect-split-image">
						<div class="sect-split-image-cont" id="about-what-is-img">
							<div class="sect-image-inner-cont">
								
							</div>
						</div>
					</div>
				</div>
				<div class="sect-split-right" id="about-what-is-right">
					<form class="sect-description" id="about-what-is-desc-cont">
						<h1 class="sect-title" id="about-what-is-desc-cont-h1">What We Do</h1>
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
		<div class="main-sect-cont" id="about-provide" navcolor="white">
			<div class="sect-info-split" id="about-provide-cont">
				<div class="sect-split-left" id="about-provide-left">
					<form class="sect-description" id="about-provide-desc-cont">
						<h1 class="sect-title" id="about-provide-desc-cont-h1">What We Provide</h1>
						<h3 id="about-provide-desc-cont-h3">
							At Build Tect, we specialize in providing plans for custom homes, remodels, additions, commercial remodels, and tenant improvements.
						</h3>
						<button class="learn-more-button black-button" cursor="blue">
							<div class="button-overlay"></div>
							<h6>Learn More</h6>
						</button>
					</form>
				</div>
				<div class="sect-split-right" id="about-provide-right">
					<div class="sect-split-image">
						<div class="sect-split-image-cont" id="about-provide-img">
							<div class="sect-image-inner-cont">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="about-testimonials">
			<!--<div class="sect-info-split" id="about-testimonials-split">
				<div class="sect-split-left" id="about-test-left">
					<div class="testimonial-shell">
						<div class="test-shell-cont">
							
						</div>
					</div>
				</div>
				<div class="sect-split-right" id="about-test-right">
					
				</div>
			</div>
			<div class="background-div bg-tect-blue" id="at-back"></div>-->
			<div id="about-testimonials-title">
				<h1 class="sect-title" id="about-testimonials-h1">What People Say</h1>
			</div>
			<div class="main-sect-cont" id="at-top-half-back" navcolor="white"></div>
			<div class="main-sect-cont" id="at-bottom-half-back" navcolor="blue"></div>
			<div class="sect-short" id="about-testimonials-cont">
				<?php for($i = 0; $i < 5; $i++): ?>
					<div class="about-testimonial">
						<div class="about-testimonial-cont">
							<div class="about-test-main" cursor="white">
								<div class="at-main-cont">
									<div class="at-main-icon">
										<i class="fas fa-quote-left"></i>
									</div>
									<div class="at-main-cont-inner">
										<div class="atm-cont">
											<p>
												Build Tect was the perfect choice for our kitchen remodel project. Excellent service!
											</p>
										</div>
									</div>
									<div class="at-bottom-icon">
										<i class="fas fa-quote-right"></i>
									</div>
								</div>
							</div>
							<div class="about-test-bottom" cursor="blue">
								<div class="at-img-cont">
									<img src="<?php echo base_url();?>img/stock3.jpg">
								</div>
								<div class="at-title-cont">
									<h6 class="at-title-name">Dean Wight</h6>
									<h6 class="at-title-title">Owner</h6>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<div class="main-sect-cont" id="about-stats" navcolor="darkblue">
			<div class="sect-info-full" id="about-stats-cont">
				<div class="sect-short" id="about-stats-inner">
					<div class="about-stat">
						<div class="as-cont">
							<h1 class="as-num">
								<span class="as-num-num">30</span>+
							</h1>
							<div class="as-line"></div>
							<h6 class="as-title">Years in Business</h6>
						</div>
					</div>
					<div class="about-stat">
						<div class="as-cont">
							<h1 class="as-num">
								<span class="as-num-num">100</span>+
							</h1>
							<div class="as-line"></div>
							<h6 class="as-title">Projects Done</h6>
						</div>
					</div>
					<div class="about-stat">
						<div class="as-cont">
							<h1 class="as-num">
								<span class="as-num-num">100</span>+
							</h1>
							<div class="as-line"></div>
							<h6 class="as-title">Clients Served</h6>
						</div>
					</div>
					<div class="about-stat">
						<div class="as-cont">
							<h1 class="as-num">
								<span class="as-num-num">100</span>%
							</h1>
							<div class="as-line"></div>
							<h6 class="as-title">Happy Clients</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-sect" id="portfolio">
		<div class="main-sect-cont" id="portfolio-start" navcolor="blue">
			<div class="sect-info-full" id="portfolio-start-cont">
				<div class="sect-info-side-title">
					<div class="sect-title-line sect-title-top-line"></div>
					<h6>Portfolio</h6>
					<div class="sect-title-line sect-title-bottom-line"></div>
				</div>
				<form class="sect-description" id="portfolio-start-desc-cont" action="<?php echo base_url(); ?>index.php/Homepage/portfolioRedirect" method="post">
					<h1 class="sect-title" id="portfolio-start-desc-cont-h1">See Our Work</h1>
					<h3 id="portfolio-start-desc-cont-h3">
						Throughout our 30+ years in business, we have completed hundreds of residential and commerical projects. 
					</h3>
					<button class="learn-more-button white-button" name="PortfolioValue" type="submit" value="All">
						<div class="button-overlay"></div>
						<h6>See Projects</h6>
					</button>
				</form>
			</div>
		</div>
		<div class="main-sect-cont" id="portfolio-sect" navcolor="white">
			<div class="sect-info-split" id="portfolio-cols">
				<div class="sect-split-left portfolio-split-cont" id="portfolio-cols-left">
					<div class="sect-split-image portfolio-split-image" id="portfolio-right-split-image">
						<div class="sect-split-image-cont">
							<div class="sect-image-inner-cont" id="portfolio-left-image">
								<div class="portfolio-img-inner-cont" id="portfolio-left-inner" cursor="blue">
									<div class="portfolio-sect-cont-h1" id="portfolio-h1-left">
										<h1>Residential</h1>
									</div>
									<div class="portfolio-inner-cont-overlay main-overlay" id="portfolio-left-main-overlay">
										<form class="portfolio-col-form" id="portfolio-residential-form" action="<?php echo base_url(); ?>index.php/Homepage/portfolioRedirect" method="post">
											<button class="learn-more-button white-button" name="PortfolioValue" type="submit" value="Residential">
												<div class="button-overlay"></div>
												<h6>See Projects</h6>
											</button>
										</form>
									</div>
									<div class="portfolio-inner-cont-overlay secondary-overlay" id="portfolio-left-right-overlay">
										second
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
								<div class="portfolio-img-inner-cont" id="portfolio-right-inner" cursor="blue">
									<div class="portfolio-sect-cont-h1" id="portfolio-h1-right">
										<h1>Commercial</h1>
									</div>
									<div class="portfolio-inner-cont-overlay main-overlay" id="portfolio-right-main-overlay">
										<form class="portfolio-col-form" id="portfolio-commercial-form" action="<?php echo base_url(); ?>index.php/Homepage/portfolioRedirect" method="post">
											<button class="learn-more-button white-button" name="PortfolioValue" type="submit" value="Commercial">
												<div class="button-overlay"></div>
												<h6>See Projects</h6>
											</button>
										</form>
									</div>
									<div class="portfolio-inner-cont-overlay secondary-overlay" id="portfolio-right-left-overlay">
										second
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
		<div class="main-sect-cont" id="contact-start" navcolor="blue">
			<div class="sect-info-full" id="contact-start-cont">
				<div class="sect-info-side-title">
					<div class="sect-title-line sect-title-top-line"></div>
					<h6>Contact</h6>
					<div class="sect-title-line sect-title-bottom-line"></div>
				</div>
				<div class="sect-description" id="contact-start-desc-cont">
					<h1 class="sect-title" id="contact-start-desc-cont-h1">Contact Us</h1>
					<h3 id="contact-start-desc-cont-h3">
						Get in touch with our team today to get started with your project.
					</h3>
					<button class="learn-more-button white-button" id="contact-start-button">
						<div class="button-overlay"></div>
						<h6>
							See More <i class="fas fa-caret-down"></i>
						</h6>
					</button>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="contact-form-cont" navcolor="white">
			<div class="sect-info-full" id="contact-form-sect-cont">
				<div class="sect-info-split" id="contact-form-sect">
					<div class="sect-split-left" id="contact-form-split-left">
						<img src="<?php echo base_url();?>img/mail.png">
					</div>
					<div class="sect-split-right" id="contact-form-split-right">
						<form id="contact-form" method="post">
							<div class="contact-form-inner">
								<div class="contact-form-input-cont" id="name-field">
									<input type="text" name="Name" placeholder="&#xf007;  Name">
								</div>
								<div class="contact-form-input-cont" id="email-field">
									<input type="text" name="Email" placeholder="&#xf0e0;  Email">
								</div>
								<div class="contact-form-input-cont" id="phone-field">
									<input type="text" name="Phone" placeholder="&#xf3cd;  Phone">
								</div>
								<div class="contact-form-input-cont" id="subject-field">
									<input type="text" name="Subject" placeholder="&#xf086;  Subject">
								</div>
								<div class="contact-form-input-cont" id="message-field">
									<textarea placeholder="&#xf27b;  Message"></textarea>
								</div>
								<div class="contact-form-input-cont">
									<button type="submit" class="learn-more-button black-button" id="contact-form-submit">
										<div class="button-overlay"></div>
										<h6>
											Send Email
										</h6>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $footer ?>
	<script type="text/javascript">
		$('.atm-cont').flowtype({
			minFont: 13,
			maxFont: 25,
			minimum: 100,
			maximum: 420,
			fontRatio: 15
		});
	</script>
</body>