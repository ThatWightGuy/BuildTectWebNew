<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php for ($i=0; $i < rand(0, 50) ; $i++): ?>
		<div class="portfolio-item portfolio-item-default">
			<div class="portfolio-item-cont">
				<div class="portfolio-item-inner">
					<div class="portfolio-item-overlay">
						<h6 class="portfolio-overlay-addr">
							9707 Woodley Ave. </br> 
							North Hills, CA
						</h6>
						<button class="portfolio-lightbox-open learn-more-button white-button">
							<div class="button-overlay"></div>
							<h6>Details</h6>
						</button>
					</div>
				</div>
			</div>
		</div>
	<?php endfor; ?>
</body>
</html>