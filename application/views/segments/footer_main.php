<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mainfooter.css">
	<script src="<?php echo base_url();?>js/basic/footer.js"></script>
</head>
<body>
	<footer class="main-footer">
		<div class="footer-main-sect" id="footer-main">
			<div class="footer-sect" id="footer-main-inner-sect">
				<div class="footer-sect-cont" id="footer-main-logo">
					<img src="<?php echo base_url(); ?>img/Logo.png">
				</div>
				<div class="footer-sect-cont" id="footer-main-navi">
					<div class="footer-sect-cont-header">
						<h4>Navigation</h4>
					</div>
					<div class="foooter-sect-cont-main">
						<div class="footer-list" id="footer-general">
							<section>
								<h5>Home</h5>
								<h6>
									<a href="">Welcome</a>
								</h6>
								<h6>
									<a href="">About</a>
								</h6>
								<h6>
									<a href="">Portfolio</a>
								</h6>
								<h6>
									<a href="">Contact</a>
								</h6>
							</section>
						</div>
						<div class="footer-list" id="footer-about">
							<section>
								<h5>About</h5>
								<h6>
									<a href="">About Us</a>
								</h6>
								<h6>
									<a href="">Our Team</a>
								</h6>
								<h6>
									<a href="">Services</a>
								</h6>
							</section>
						</div>
						<div class="footer-list"id="footer-portfolio">
							<section>
								<h5>Portfolio</h5> 
								<h6>
									<a href="">All Projects</a>
								</h6>
								<h6>
									<a href="">Residential</a>
								</h6>
								<h6>
									<a href="">Commercial</a>
								</h6>
							</section>
						</div>
					</div>
				</div>
				<div class="footer-sect-cont" id="footer-main-contact">
					<div id="address-cont">
						<div class="foooter-sect-cont-main">
							<div class="footer-sect-cont-header">
								<h4>Address</h4>
							</div>
							<h6>
								9707 Woodley Ave.</br> 
								Northridge, CA. 91343
							</h6>
						</div>
					</div>
					<div id="contact-cont">
						<div class="foooter-sect-cont-main">
							<div class="footer-sect-cont-header">
								<h4>Contact</h4>
							</div>
							<h6><i class="footer-icon fa fa-phone"></i><a href="tel:8188945335" id="contact-link-phone">(818) 894-5335</a></h6>
							<h6><i class="footer-icon far fa-envelope"></i><a href="mailto:info@buildtect.com" id="contact-link-email">info@buildtect.com</a></h6>
						</div>
					</div>
					<div id="social-cont">
						<div class="foooter-sect-cont-main">
							<div id="social-icon-cont">
								<a href="">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="">
									<i class="fab fa-facebook"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-main-sect" id="footer-bottom">
			<h6>Build Tect Building Designs - <span id="footer-date">2019</span></h6>
		</div>
	</footer>
</body>
</html>