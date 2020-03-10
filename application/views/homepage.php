<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect Building Designs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/index.css">
	<link rel="shortcut icon" href="img/Logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/homepage.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/navscript.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/about-image.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/portfolio.js"></script>
</head>
<body ontouchmove >
	<!-- Overlays -->
	<div class="full-img-overlay">
		<div class="full-img-overlay-cont">
			<div class="full-img-overlay-button button-usable" id="overlay-button-prev">
				<i class="fa fa-angle-left"></i>
			</div>
			<div class="full-img-overlay-img-cont" data-aos="fade-down">
				<img class="full-img-overlay-img" src="" >
			</div>
			<div class="full-img-overlay-button button-usable" id="overlay-button-next">
				<i class="fa fa-angle-right"></i>
			</div>
		</div>
		
	</div>

	<!-- Main Markup -->
	<nav class="navi-main" style="display: none">
		<div class="navi-cont">
			<ul>
				<li class="navi-logo white-logo">
					<a href="#">
						<img src="img/Logo.png">
					</a>
				</li>
				<li class="navi-item navi-bars white-text">
					<i class="fa fa-bars"></i>
				</li>
				<div class="navi-item-drop-content background-black">
					<!--<li class="navi-item navi-item-drop navi-search">
						<form class="navi-search-form black-border">
							<button type="submit" class="navi-search-button black-text">
								<i class="fa fa-search"></i>
							</button>
							<input placeholder="Search" class="navi-search-input black-text" type="text" name="">
						</form>
					</li>-->
					<li class="navi-item white-text navi-item-drop">
						<a href="#contact">Contact</a>
					</li>
					<li class="navi-item white-text navi-item-drop">
						<a href="#portfolio">Portfolio</a>
					</li>
					<li class="navi-item white-text navi-item-drop">
						<a href="#about">About</a>
					</li>
				</div>
			</ul>
		</div>
	</nav>

	<!-- Welcome Section -->

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
				<a href="#about">
					<i class="welcome-nav-i fa fa-angle-down"></i>
				</a>
			</div>
		</div>
	</div>

	<!-- About Section -->

	<div class="main-sect" id="about">
		<div class="parallax-content" id="about-parallax">
			<div class="overlay-div"></div>
			<h1 class="parallax-header">
				<a href="#main-sect-about">About</a>
			</h1>
		</div>
		<div class="main-sect-cont" id="main-sect-about">
			<div class="sect-div" id="main-sect-about-sect-div">
				<div class="sect-div-top"></div>
				<div class="sect-div-angle"></div>
			</div>
			<div class="sect-short" id="about-short">
				<div class="sect-short-cont" id="about-descriptions">
					<div class="short-cont" id="about-us-cont" data-aos="fade-right">
						<div class="sect-title" id="about-us">
							<h1>What is <span class="tect-blue">Build Tect</span>?</h1>
						</div>
						<p class="sect-description about-us-desc" id="about-what">
							Build Tect Building Designs is a design firm based in the San Fernando Valley that aims to serve the design and planning needs of contractors, developers, and owners. We pride ourselves on the reputation we have built with our clients through our years in business for our excellence in service, quick turn-around, and our abliity to help clients solve difficult design problems.
						</p>
						<div class="learn-more">
							<a href="/about" onclick="" >
								<span class="learn-more-text">Learn More</span> 
								<span class="learn-more-bar"><i class="fa fa-angle-right"></i></span>
							</a> 
						</div>
					</div>
					<div class="short-cont-divide" id="about-desc-divide" data-aos="fade-up"></div>
					<div class="short-cont" id="about-offer-cont"  data-aos="fade-left">
						<div class="sect-title" id="about-offer">
							<h1>What Do We <span class="tect-blue">Offer</span>?</h1>
						</div>
						<p class="sect-description about-us-desc" id="what-is-desc">
							At Build Tect, we specialize in providing plans for custom homes, remodels, additions, commercial remodels, and tenant improvements. Our team consists of experienced industry professionals who believe in a hands-on approach to every project, ensuring each client recieves the individual attention they deserve. As a team we produce successful designs that are creative and financially feasible. 
						</p>
						<div class="learn-more">
							<a href="">
								<span class="learn-more-text">Learn More</span> 
								<span class="learn-more-bar"><i class="fa fa-angle-right"></i></span>
							</a> 
						</div>
					</div>
				</div>
				<div class="sect-short-cont" id="about-blurb-image-cont">
					<div class="about-blurb-image" data-aos="fade-right">
						<div class="about-blurb-placeholder">
							<i class="far fa-calendar-alt"></i>
						</div>
						<h6 class="about-blurb-header tect-blue">30+</h6>
						<h6 class="about-blurb-desc">Years of Experience</h6>
					</div>
					<div class="about-blurb-image" data-aos="fade-up">
						<div class="about-blurb-placeholder">
							<i class="fas fa-building"></i>
						</div>
						<h6 class="about-blurb-header tect-blue">100+</h6>
						<h6 class="about-blurb-desc">Projects Completed</h6>
					</div>
					<div class="about-blurb-image" data-aos="fade-left">
						<div class="about-blurb-placeholder">
							<i class="fas fa-user-friends"></i>
						</div>
						<h6 class="about-blurb-header tect-blue">100+</h6>
						<h6 class="about-blurb-desc">Clients Served</h6>
					</div>
				</div>
				
				<div class="short-cont-divide" id="about-divide-one"></div>
				
				<div class="sect-short-cont" id="about-testimonials">
					<div class="sect-title" id="about-test-main-title" data-aos="fade-up">
						<h1>What They <span class="tect-blue">Are Saying</span></h1>
					</div>
					<div class="about-testimonial" data-aos="fade-right">
						<div class="about-test-image">
							<img src="../img/stock3.jpg">
						</div>
						<div class="about-test-desc">
							<div class="sect-title about-test-blurb">
								<i class="fas fa-quote-left"></i>
								<h1>The Results Were Amazing!</h1>
							</div>
							<p class="sect-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper velit sed ullamcorper morbi.
							</p>
							<div class="about-test-signature">
								<h6 class="sig-name tect-blue">Jane Doe</h6>
								<h6 class="sig-occupation">Former Client</h6>
							</div>
						</div>
					</div>
					<div class="about-testimonial" data-aos="fade-left">
						<div class="about-test-image">

						</div>
						<div class="about-test-desc">
							<div class="sect-title about-test-blurb">
								<i class="fas fa-quote-left"></i>
								<h1>Very Professional</h1>
							</div>
							<p class="sect-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper velit sed ullamcorper morbi.
							</p>
							<div class="about-test-signature">
								<h6 class="sig-name tect-blue">Adam Smith</h6>
								<h6 class="sig-occupation">Former Client</h6>
							</div>
						</div>
					</div>
					<div class="about-testimonial" data-aos="fade-right">
						<div class="about-test-image">
							
						</div>
						<div class="about-test-desc">
							<div class="sect-title about-test-blurb">
								<i class="fas fa-quote-left"></i>
								<h1>Incredible Atmosphere</h1>
							</div>
							<p class="sect-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper velit sed ullamcorper morbi.
							</p>
							<div class="about-test-signature">
								<h6 class="sig-name tect-blue">John Doe</h6>
								<h6 class="sig-occupation">Former Client</h6>
							</div>
						</div>
					</div>
				</div>

				<!--<div class="sect-short-cont" id="about-images">
					<div class="sect-short-img-cont-main" data-aos="fade-up">
						<div class="sect-short-img-cont" id="about-img-1" >
							<div class="img-cont-overlay" >
								<div class="img-cont-overlay-button" >
									<i class="fas fa-expand"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="sect-short-img-cont-main" data-aos="fade-up">
						<div class="sect-short-img-cont" id="about-img-2">
							<div class="img-cont-overlay" >
								<div class="img-cont-overlay-button" >
									<i class="fas fa-expand"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="sect-short-img-cont-main" data-aos="fade-up">
						<div class="sect-short-img-cont" id="about-img-3">
							<div class="img-cont-overlay" >
								<div class="img-cont-overlay-button" >
									<i class="fas fa-expand"></i>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>

	<!-- Portfolio Section -->

	<div class="main-sect" id="portfolio">
		<div class="parallax-content" id="portfolio-parallax">
			<div class="overlay-div"></div>
			<h1 class="parallax-header">
				<a href="#main-sect-portfolio">Portfolio</a>
			</h1>
		</div>
		<div class="main-sect-cont" id="main-sect-portfolio">
			<div class="sect-div" id="main-sect-portfolio-sect-div">
				<div class="sect-div-top"></div>
				<div class="sect-div-angle"></div>
			</div>
			<div class="sect-short" id="portfolio-short">
				<div class="sect-short-cont" id="portfolio-desc">
					<div class="sect-title" id="portfolio-sect-title" data-aos="fade-up">
						<h1>See Our <span class="tect-blue">Work</span></h1>
					</div>
					<p class="sect-description" id="portfolio-sect-desc" data-aos="fade-up">
						Below are links to our jobs portfolio. Clicking on a link will automatically filter our database to show one of three job types (shown below). You may also click <a href=""><span class="tect-blue">here</span></a> to navigate to our portfolio page.  
					</p>
				</div>
				<div class="sect-short-cont" id="portfolio-cols">
					<div class="portfolio-col-cont" data-aos="fade-right">
						<div class="portfolio-col-cont-main">
							<div class="col-cont-main-items">
								<h1>All</h1>
								<div class="learn-more" id="learn-more-port-col">
									<a href="">
										<span class="learn-more-text" id="learn-more-port-text">See Projects</span> 
										<span class="learn-more-bar" id="learn-more-port-bar"><i class="fa fa-angle-right"></i></span>
									</a> 
								</div>
							</div>
						</div>
					</div>
					<div class="portfolio-col-cont" data-aos="fade-up">
						<div class="portfolio-col-cont-main">
							<div class="col-cont-main-items">
								<h1>Residential</h1>
								<div class="learn-more" id="learn-more-port-col">
									<a href="">
										<span class="learn-more-text" id="learn-more-port-text">See Projects</span> 
										<span class="learn-more-bar" id="learn-more-port-bar"><i class="fa fa-angle-right"></i></span>
									</a> 
								</div>
							</div>
						</div>
					</div>
					<div class="portfolio-col-cont" data-aos="fade-left">
						<div class="portfolio-col-cont-main">
							<div class="col-cont-main-items">
								<h1>Commercial</h1>
								<div class="learn-more" id="learn-more-port-col">
									<a href="">
										<span class="learn-more-text" id="learn-more-port-text">See Projects</span> 
										<span class="learn-more-bar" id="learn-more-port-bar"><i class="fa fa-angle-right"></i></span>
									</a> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<h6 id="portfolio-scroll-prompt" data-aos="fade-up">(Grab to Scroll)</h6>
			</div>
		</div>
	</div>
	<!-- Contact Section -->

	<div class="main-sect" id="contact">
		<div class="parallax-content" id="contact-parallax">
			<div class="overlay-div"></div>
			<h1 class="parallax-header">
				<a href="#main-sect-contact">Contact</a>
			</h1>
		</div>
		<div class="main-sect-cont" id="main-sect-contact">
			<div class="sect-div" id="main-sect-contact-sect-div">
				<div class="sect-div-top"></div>
				<div class="sect-div-angle"></div>
			</div>
			<div class="sect-short" id="contact-short">
				<div class="sect-short-cont" id="contact-basic-info-cont" data-aos="fade-right">
					<div class="contact-short-cont" id="contact-basic-info">
						<div id="basic-contact-buildtect">
							<img src="img/Logo.png">
						</div>
						<div id="contact-info">
							<h5 id="contact-info-phone-h5">Phone</h5>
							<h5 id="contact-info-addr-h5">Address</h5>
							<h5 id="contact-info-email-h5">Email</h5>
							<div class="short-cont-divide" id="contact-info-div"></div>
							<h6 id="contact-info-phone">(818) 894-5335</h6>
							<h6 id="contact-info-addr">9707 Woodley Ave. Northridge, CA. 91343</h6>
							<div id="contact-info-email">
								<h6>info@buildtect.com<h6>
								<div id="contact-info-email-tool">Or Email: dean.btdesigns11@yahoo.com</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sect-short-cont" id="contact-form-cont" data-aos="fade-left">
					<div class="contact-short-cont" id="contact-form">
						<h1>Contact Us</h1>
						<form id="contact-form-main">
							<input type="text" id="contact-name" name="name" placeholder="Name">
							<input type="text" id="contact-email" name="email" placeholder="Email">
							<input type="text" id="contact-phone" name="phone" placeholder="Phone Number">
							<input type="text" id="contact-subject" name="subject" placeholder="Subject">
							<textarea id="contact-message" name="message" placeholder="Message"></textarea>
							<input type="submit" id="contact-submit" name="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer  -->

	<footer>
		<h6>Build Tect Building Designs - <span class="footer-year"></span></h6>
	</footer>
	
	<!-- Misc -->

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  		AOS.init({
  			once:"true"
  		});
	</script>
</body>
</html>