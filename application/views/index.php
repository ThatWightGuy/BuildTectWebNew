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
	<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">-->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 

	<!-- Custom Links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/homepage.css">
	<link rel="shortcut icon" href="img/Logo.png">
	
	<!-- Online JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>-->
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	
	<!-- Downloaded JS -->
	<script src="<?php echo base_url();?>js/basic/flowtype.js"></script>
	
	<!-- Custom JS -->
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
		var scrollData = "<?php echo $flashdata;?>";
	</script>
	<script src="<?php echo base_url();?>js/basic/basic.js"></script>
	<script src="<?php echo base_url();?>js/basic/cursor.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-main.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-navi.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-testimonials.js"></script>
	<script src="<?php echo base_url();?>js/homepage/homepage-contact.js"></script>
	<!--<script src="<?php echo base_url();?>js/homepage/homepage-portfolio.js"></script>-->
</head>
<body ontouchmove >
	<!--<div class="cursor-main cursor-main-blue"></div>
	<div class="cursor-follower cursor-follower-blue">
		<div class="cf-arc"></div>
	</div>-->
	
	<div class="main-sect" id="welcome">
		<div id="welcome-background" style="background-image: url('<?php echo base_url();?>img/Home/Main.jpg')">
		</div>
		<div class="main-sect-cont" id="welcome-cont" navcolor="home-transparent">
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
			<div class="main-sect-background" id="about-us-background"> 
				<div class="main-sect-background-overlay"></div>
			</div>
			<div class="sect-info-full" id="about-us-cont">
				<div class="sect-description" id="about-us-desc-cont" action="">
					<h1 class="sect-title" id="about-us-desc-cont-h1">Who We Are</h1>
					<h3 id="about-us-desc-cont-h3">
						Build Tect Building Designs is an architectural design firm based in the San Fernando Valley that aims to serve the design and planning needs of contractors, developers, and owners.
					</h3>
					<a class="learn-more-button white-button" href="<?php echo base_url();?>redirect/about/about-us">
						<div class="button-overlay"></div>
						<h6>Learn More</h6>
					</a>
				</div>
			</div>
		</div>
		<!--<div class="main-sect-cont" id="about-what-is" navcolor="white">
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
					<div class="sect-description" id="about-what-is-desc-cont">
						<h1 class="sect-title" id="about-what-is-desc-cont-h1">What We Do</h1>
						<h3 id="about-what-is-desc-cont-h3">
							Our team consists of experienced industry professionals who believe in a hands-on approach to every project, ensuring each client recieves the individual attention they deserve.
						</h3>
						<a class="learn-more-button black-button" href="<?php echo base_url();?>redirect/about/our-team">
							<div class="button-overlay"></div>
							<h6>Learn More</h6>
						</a>
					</div>
				</div>
			</div>
		</div>-->
		<div class="main-sect-cont" id="about-provide" navcolor="white">
			<div class="sect-info-split" id="about-provide-cont">
				<div class="sect-split-left" id="about-provide-left">
					<div class="sect-description" id="about-provide-desc-cont">
						<h1 class="sect-title" id="about-provide-desc-cont-h1">What We Provide</h1>
						<h3 id="about-provide-desc-cont-h3">
							At Build Tect, we specialize in providing plans for custom homes, remodels, additions, commercial remodels, and tenant improvements.
						</h3>
						<a class="learn-more-button black-button" href="<?php echo base_url();?>redirect/about/services">
							<div class="button-overlay"></div>
							<h6>Learn More</h6>
						</a>
					</div>
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
				<h1 class="sect-title" id="about-testimonials-h1">What Our Clients Say</h1>
			</div>
			<div class="main-sect-cont" id="at-top-half-back" navcolor="white"></div>
			<div class="main-sect-cont" id="at-bottom-half-back" navcolor="darkblue"></div>
			<div class="sect-short carousel" id="about-testimonials-cont" data-flickity=
			'{
				"cellSelector": ".about-testimonial",
				"autoPlay": 5000,
				"wrapAround": true,
				"pageDots": false
			}'>
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
			<div class="main-sect-background" id="portfolio-start-background"> 
				<div class="main-sect-background-overlay"></div>
			</div>
			<div class="sect-info-full" id="portfolio-start-cont">
				<div class="sect-description" id="portfolio-start-desc-cont">
					<h1 class="sect-title" id="portfolio-start-desc-cont-h1">See Our Work</h1>
					<h3 id="portfolio-start-desc-cont-h3">
						Throughout our 30+ years in business, we have completed hundreds of residential and commerical projects. 
					</h3>
					<a class="learn-more-button white-button" name="PortfolioValue" href="<?php echo base_url();?>redirect/portfolio/All">
						<div class="button-overlay"></div>
						<h6>See Projects</h6>
					</a>
				</div>
			</div>
		</div>
		<div class="main-sect-cont" id="portfolio-sect" navcolor="white">
			<div class="sect-info-full" id="portfolio-sect-cont">
				<div class="portfolio-item">
					<div class="portfolio-item-cont">
						<img src="<?php echo base_url(); ?>/img/Home/Residential_Square.jpg">
						<div class="portfolio-item-inner">
							<div class="portfolio-item-inner-cont">
								<h1 class="portfolio-item-inner-h1">Residential</h1>
								<a class="learn-more-button black-button" name="PortfolioValue" href="<?php echo base_url();?>redirect/portfolio/Residential">
									<div class="button-overlay"></div>
									<h6>See Projects</h6>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="portfolio-item">
					<div class="portfolio-item-cont">
						<img src="<?php echo base_url(); ?>/img/Home/Main_Square.jpg">
						<div class="portfolio-item-inner">
							<div class="portfolio-item-inner-cont">
								<h1 class="portfolio-item-inner-h1">Commercial</h1>
								<a class="learn-more-button black-button" name="PortfolioValue" href="<?php echo base_url();?>redirect/portfolio/Commercial">
									<div class="button-overlay"></div>
									<h6>See Projects</h6>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-sect" id="contact">
		<div class="main-sect-cont" id="contact-form-cont">
			<div class="main-sect-background" id="contact-form-background"> 
				<div class="main-sect-background-overlay"></div>
			</div>
			<div class="sect-info-full" id="contact-form-sect-cont">
				<div class="sect-info-split" id="contact-start-cont">
					<div class="main-sect-cont sect-split-left" id="contact-form-split-left" navcolor="blue">
						<div class="sect-description" id="contact-start-desc-cont">
							<h1 class="sect-title" id="contact-start-desc-cont-h1">Contact Us</h1>
							<h3 id="contact-start-desc-cont-h3">
								Get in touch with our team today to get started with your project.
							</h3>
						</div>
					</div>
					<div class="main-sect-cont sect-split-right" id="contact-form-split-right">
						<form id="contact-form">
							<div id="contact-form-inner">
								
								<div class="contact-form-input-cont" id="name-field">
									<input type="text" name="Name" placeholder="&#xf007;  Name" class="contact-form-input">
								</div>
								<div class="contact-form-input-cont" id="phone-field">
									<input type="text" name="Phone" placeholder="&#xf3cd;  Phone" class="contact-form-input">
								</div>
								<div class="contact-form-input-cont" id="email-field">
									<input type="text" name="Email" placeholder="&#xf0e0;  Email" class="contact-form-input">
								</div>
								<div class="contact-form-input-cont" id="message-field">
									<textarea type="text" name="Message" placeholder="&#xf075;  Message" class="contact-form-input"></textarea>
								</div>
								<div class="contact-form-input-cont" id="button-field">
									<button class="learn-more-button black-button">
										<div class="button-overlay"></div>
										<h6>Send Email</h6>
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