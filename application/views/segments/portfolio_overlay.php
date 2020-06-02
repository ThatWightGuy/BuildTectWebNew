<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="portfolio-main-overlay">
		<div class="portfolio-lightbox">
			<div class="portfolio-lightbox-cont">
				<div class="portfolio-lightbox-inner">
					<div class="portfolio-lightbox-inner-cont">
						<button id="portfolio-lightbox-exit">
							<div class="cross"></div>
						</button>
						<div id="lightbox-info-button-cont">
							<button class="learn-more-button black-button" id="lightbox-info-button">
								<div class="button-overlay"></div>
								<h6>Project Info</h6>
							</button>
						</div>
						<div class="portfolio-lightbox-image-cont" >
							<div class="portfolio-lightbox-image">
								<img class="lightbox-img" src="<?php echo base_url(); ?>img/Home/Main.jpg">
							</div>
							<div class="portfolio-lightbox-image">
								<img class="lightbox-img" src="<?php echo base_url(); ?>img/stock3.jpg">
							</div>
						</div>
						<div class="portfolio-lightbox-info">
							<div class="portfolio-lightbox-info-cont">
								<h3 class="plic-main-header">
									Wight Residence
								</h3>
								<!--<div class="plic-underline"></div>-->
								<div class="plic-secondary-header">
									<div class="plic-secondary-header-title">
										<h5>Job Type</h5>
									</div>
									<div class="plic-secondary-header-content">
										<h6>Residential</h6>
									</div>
								</div>
								<div class="plic-secondary-header">
									<div class="plic-secondary-header-title">
										<h5>Address</h5>
									</div>
									<div class="plic-secondary-header-content">
										<h6>9707 Woodley Ave. Northridge CA</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('.portfolio-lightbox-image-cont').flickity({
			arrowShape: { 
				x0: 15,
				x1: 65, y1: 45,
				x2: 70, y2: 40,
				x3: 25
			},
			cellSelector: ".portfolio-lightbox-image",
			pageDots: false,
			setGallerySize: false
		});
	</script>
</body>