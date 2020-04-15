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
						<ul class="footer-list" id="footer-general">
							<li> 
								<h5>Home</h5>
							</li>
							<li> 
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
							</li>
						</ul>
						<ul class="footer-list footer-list-inner" id="footer-about">
							<li> 
								<h5>About</h5>
							</li>
							<li> 
								<h6>
									<a href="">About Us</a>
								</h6>
								<h6>
									<a href="">Our Team</a>
								</h6>
								<h6>
									<a href="">Services</a>
								</h6>
							</li>
						</ul>
						<ul class="footer-list footer-list-inner"id="footer-portfolio">
							<li> 
								<h5>Portfolio</h5>
							</li>
							<li> 
								<h6>
									<a href="">All Projects</a>
								</h6>
								<h6>
									<a href="">Residential</a>
								</h6>
								<h6>
									<a href="">Commercial</a>
								</h6>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-sect-cont" id="footer-main-contact">
					<div id="address-cont">
						<div class="footer-sect-cont-header">
							<h4>Address</h4>
						</div>
						<div class="foooter-sect-cont-main">
							<h6>
								9707 Woodley Ave.</br> 
								Northridge, CA. 91343
							</h6>
						</div>
					</div>
					<div id="contact-cont">
						<div class="footer-sect-cont-header">
							<h4>Contact</h4>
						</div>
						<div class="foooter-sect-cont-main">
							<h6><i class="footer-icon fa fa-phone"></i>(818) 894-5335</h6>
							<h6><i class="footer-icon far fa-envelope"></i>info@buildtect.com</h6>
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