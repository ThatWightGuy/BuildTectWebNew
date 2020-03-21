<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/portfolio.css">
	<link rel="shortcut icon" href="img/Logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>/js/basic/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/portfolio/portfolio-main.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/portfolio/portfolio-sidebar.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/portfolio/portfolio-layout.js"></script>
</head>
<body ontouchmove >
	<?php echo $navbar?>
	<div class="portfolio-sidebar">
		<div class="sidebar-button" id="sidebar-button-exit">
			<i class="fas fa-times"></i>
		</div>
		<div class="sidebar-title-cont">
			<h3>Filter Search</h3>
		</div>
		<div class="sidebar-filter-form">
			<form>
				<div class="sidebar-filter-cont">
					<button class="sidebar-filter-button" id="Job-Type-Filter-Button" type="button">
						<div class="sidebar-filter-button-cont">
							<div class="sidebar-button-title">
								<h5>Job Type</h5>
							</div>
							<div class="sidebar-button-indicator">
								<h5>+</h5>
							</div>
						</div>
					</button>
					<div class="sidebar-filter-dropdown">
						<div class="sidebar-dropdown-item">
							<div class="sidebar-drop-title">
								<h6>All</h6>
							</div>
							<div class="sidebar-drop-button">
								<label class="switch sidebar-drop-switch">
									<input type="radio" name="group1" class="sidebar-drop-switch-input">
									<span class="slider round"></span>
								</label>
							</div>
						</div>
						<div class="sidebar-dropdown-item">
							<div class="sidebar-drop-title">
								<h6>Residential</h6>
							</div>
							<div class="sidebar-drop-button">
								<label class="switch sidebar-drop-switch">
									<input type="radio" name="group1" class="sidebar-drop-switch-input">
			  						<span class="slider round"></span>
								</label>
							</div>
						</div>
						<div class="sidebar-dropdown-item">
							<div class="sidebar-drop-title">
								<h6>Commercial</h6>
							</div>
							<div class="sidebar-drop-button">
								<label class="switch sidebar-drop-switch">
									<input type="radio" name="group1" class="sidebar-drop-switch-input" >
			  						<span class="slider round"></span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="shade-overlay"></div>
	<div class="main-sect" id="portfolio-main-sect">
		<div class="main-sect-cont" id="portfolio-main-sect-cont">
			<div class="sect-short padding-100" id="portfolio-cont">
				<div class="sect-short-cont" id="portfolio-main-dash">
					<div id="help-mode-full">
						<h6>
							<span id="help-mode-underline">Help Mode</span>: 
							<span class="tect-blue" id="help-mode-status">Off</span>
							<div class="popup-cont" id="help-mode-popup">
								<p class="popup-text">
									Toggling "Help Mode" will provide on-screen assistance for the various sections of our protfolio search engine. Just hover any button/text field/etc., and a popup like this will provide you with an explaination of its function.  
								</p>
							</div>
						</h6>
					</div>
					<label class="switch" id="help-switch">
						<input type="checkbox" id="help-checkbox">
  						<span class="slider round"></span>
					</label>
					
					<div class="short-cont" id="portfolio-search-cont">
						<div class="sidebar-button" id="sidebar-button-main">
							<i class="fas fa-bars"></i>
						</div>
						<div class="portfolio-search">
							<input type="search" name="portfolio-search-main" placeholder="Search">
						</div>
					</div>
					
					<div class="short-cont" id="portfolio-tags-cont">
						
					</div>
				</div>
				<div class="sect-short-cont" id="portfolio-items">
					<div class="portfolio-items-cont">

						<?php for ($i=0; $i < 70; $i++): ?>
							<div class="portfolio-item portfolio-item-default">
								<div class="portfolio-item-cont">
									
								</div>
							</div>
						<?php endfor; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>