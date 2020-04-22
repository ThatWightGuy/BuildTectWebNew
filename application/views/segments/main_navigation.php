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
		<div id="navi-overlay-cont">
			<div class="navi-overlay-inner">
				<div class="overlay-main-links">
					<h1 class="tect-blue">About</h1>
					<h1 class="tect-blue">Portfolio</h1>
				</div>
				<div class="overlay-page-links">
					
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
							<li class="navi-main-item" id=<?php echo $link['link'] ?>>
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