<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/mainnavigation.css">
	<script src="<?php echo base_url();?>js/basic/navi.js"></script>
</head>
<body>
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
						<li class="navi-main-item">
							<h5>About</h5>
						</li>
						<li class="navi-main-item">
							<h5>Portfolio</h5>
						</li>
						<li class="navi-main-item">
							<h5>Contact</h5>
						</li>
					</ul>
					<div class="navi-under-bar"></div>
				</div>
			</div>
			<div id="navi-bars-sect">
			
			</div>
		</div>
	</nav>
</body>
</html>