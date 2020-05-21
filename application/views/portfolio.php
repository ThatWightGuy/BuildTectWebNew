<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Build Tect | Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Online Links -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<!-- Custom Links -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/basic.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/portfolio.css">
	<link rel="shortcut icon" href="img/Logo.png">

	<!-- Online JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://kit.fontawesome.com/dacea39428.js" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<!-- Custom JS -->
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
		var scrollData = "";
	</script>
	<script src="<?php echo base_url();?>js/basic/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url();?>js/basic/cursor.js"></script>
	<script src="<?php echo base_url();?>js/basic/basic.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/portfolio/portfolio-main.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/portfolio/portfolio-layout.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/portfolio/portfolio-lightbox.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/portfolio/portfolio-request.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/portfolio/portfolio-sidebar.js"></script>
</head>
<body ontouchmove >
	<form id="portfolioForm" action="preventDefault()"></form>

	<?php echo $navbar?>

	<?php echo $portfolioOverlay?>

	<div class="cursor-main cursor-main-blue"></div>
	<div class="cursor-follower cursor-follower-blue">
		<div class="cf-arc"></div>
	</div>
	<div id="portfolio-form">
		<div class="portfolio-sidebar">
			<div id="sidebar-contents">
				<div class="cross sidebar-button" id="sidebar-button-exit"></div>
				<div class="sidebar-title-cont">
					<h3 id="sidebar-title-h">
						<i class="fas fa-search"></i>Filter Search
					</h3>
				</div>
				<div class="sidebar-filter-form">
					<div class="sidebar-filter-cont">
						<button class="sidebar-filter-button" id="Job-Type-Filter-Button" type="button" form="portfolioForm">
							<div class="sidebar-filter-button-cont">
								<div class="sidebar-button-title">
									<h5>Job Type</h5>
								</div>
								<div class="sidebar-button-indicator">
									<h5>+</h5>
								</div>
							</div>
						</button>
						<fieldset class="sidebar-filter-dropdown" name="JobType">
							<div class="sidebar-dropdown-item">
								<div class="sidebar-drop-title">
									<h6>All</h6>
								</div>
								<div class="sidebar-drop-button">
									<label class="switch sidebar-drop-switch">
										<input type="radio" name="JobType" value="All" class="sidebar-drop-switch-input" <?php if($flashdata == "All"){echo "checked";}?> form="portfolioForm">
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
										<input type="radio" name="JobType" value="Residential" class="sidebar-drop-switch-input" <?php if($flashdata == "Residential"){echo "checked";}?> form="portfolioForm">
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
										<input type="radio" name="JobType" value="Commercial" class="sidebar-drop-switch-input" <?php if($flashdata == "Commercial"){echo "checked";}?> form="portfolioForm">
				  						<span class="slider round"></span>
									</label>
								</div>
							</div>
						</fieldset>
					</div>
					<div class="sidebar-filter-cont">
						<button class="sidebar-filter-button" id="Project-Type-Filter-Button" type="button" form="portfolioForm">
							<div class="sidebar-filter-button-cont">
								<div class="sidebar-button-title">
									<h5>Project Type</h5>
								</div>
								<div class="sidebar-button-indicator">
									<h5>+</h5>
								</div>
							</div>
						</button>
						<fieldset class="sidebar-filter-dropdown" name="ProjectType">
							<?php foreach($projectTypes as $projectType): ?>
								<div class="sidebar-dropdown-item">
									<div class="sidebar-drop-title">
										<h6>
											<?php echo $projectType["projectType"]; ?>
										</h6>
									</div>
									<div class="sidebar-drop-button">
										<label class="switch sidebar-drop-switch">
											<input type="checkbox" name="ProjectType[]" value="<?php echo $projectType["projectTypeID"]?>" class="sidebar-drop-switch-input" form="portfolioForm">
											<span class="slider round"></span>
										</label>
									</div>
								</div>
							<?php endforeach; ?>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
		<div class="shade-overlay"></div>
		<div class="main-sect" id="portfolio-main-sect">
			<div class="main-sect-cont" id="portfolio-main-sect-cont" navcolor="blue">
				<div class="sect-short padding-100" id="portfolio-cont">
					<div class="sect-short-cont" id="portfolio-main-dash">
						<div class="short-cont" id="portfolio-search-cont">
							<div class="sidebar-button" id="sidebar-button-main">
								<div class="bars bars-25" id="sidebar-button-bars">
									<div class="bar top-bar"></div>
									<div class="bar mid-bar"></div>
									<div class="bar bottom-bar"></div>
								</div>
							</div>
							<div class="portfolio-search">
								<input id="portfolio-search-bar" type="search" name="PortfolioSearch" placeholder="Search Projects" autocomplete="off" form="portfolioForm">
							</div>
						</div>
						
						<div class="short-cont" id="portfolio-tags-cont">
							
						</div>
					</div>
					<div class="sect-short-cont" id="portfolio-items">
						<div class="portfolio-items-cont">
							<?php echo $portfolioItems; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $footer ?>
	</div>
</body>
</html>