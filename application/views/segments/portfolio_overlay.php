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
						<div class="portfolio-lightbox-image-cont" data-flickity=
						'{
							"cellSelector": ".portfolio-lightbox-image",
							"pageDots": false,
							"setGallerySize": false
						}'>
							<div class="portfolio-lightbox-image">
								<img class="lightbox-img" src="<?php echo base_url(); ?>img/Home/Main.jpg">
							</div>
							<div class="portfolio-lightbox-image">
								<img class="lightbox-img" src="<?php echo base_url(); ?>img/stock3.jpg">
							</div>
						</div>
						<div class="portfolio-lightbox-info">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>