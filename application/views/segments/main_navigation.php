<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mainnavigation.css">
	<script src="<?php echo base_url();?>js/basic/navi.js"></script>
	<script src="<?php echo base_url();?>js/basic/bars.js"></script>
</head>
<body>
	<div id="main-navigation-overlay">
		<div id="navi-overlay-cont" cursor="white">
			<div class="navi-overlay-inner">
				<div class="navi-overlay-inner-cont">
					<div class="overlay-main-links">
						<ul>
							<li>
								<div class="overlay-main-link" id="home-overlay">
									<a href="<?php echo base_url();?>">
										<h1>Home</h1>
									</a>
								</div>

								<div class="overlay-main-link" id="about-overlay">
									<a href="<?php echo base_url();?>about">
										<h1>About</h1>
									</a>
								</div>
								
								<div class="overlay-main-link" id="portfolio-overlay">
									<a href="<?php echo base_url();?>redirect/portfolio/All">
										<h1>Portfolio</h1>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="overlay-underline"></div>
					<div class="overlay-page-links">
						<ul>
							<?php foreach ($links as $link): ?>
								<li class="overlay-page-item" pageid=<?php echo $link['link'] ?>>
									<h3><?php echo $link['name'] ?></h3>
								</li>
							<?php endforeach; ?>
							<div class="navi-under-bar"></div>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="main-navigation white-navi">
		<div class="main-navi-cont">
			<div id="navi-logo-sect">
				<a href="<?php echo base_url();?>">
					<img src="<?php echo base_url(); ?>img/Logo.png">
				</a>
			</div>
			<div id="navi-main-sect">
				<div id="navi-main-items">
					<ul>
						<?php foreach ($links as $link): ?>
							<li class="navi-main-item" pageid=<?php echo $link['link'] ?>>
								<h5><?php echo $link['name'] ?></h5>
							</li>
						<?php endforeach; ?>
						<div class="navi-under-bar"></div>
					</ul>
				</div>
			</div>
			<div id="navi-bars-sect">
				<div class="bars bars-close bars-30" id="main-navi-bars">
					<div class="bar top-bar"></div>
					<div class="bar mid-bar"></div>
					<div class="bar bottom-bar"></div>
				</div>
			</div>
		</div>
	</nav>
</body>
</html>