<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.navi-main{
			width: 100%;
			padding: 0;
			margin: 0;
			display: flex;
			background-color: black;
			justify-content: center;
			position: fixed;
			z-index: 100;
		}

		.navi-cont{
			width: 100%;
			max-width: 1600px;
		}

		.navi-cont ul{
			margin: 0;
			padding: 0 30px;
			list-style: none;
			font-size: 18px;

		}

		.navi-logo{
			float: left;
		}

		.navi-logo a img{
			width: 40px;
			height: auto;
			padding: 8px 0px;
		}

		.navi-item{
			padding: 15px 10px;
			transition: color .2s;
		}

		.navi-item-drop-content .navi-item-drop{
			display: inline-block;
			float: right;
		}

		.navi-bars{
			display: none;
		}

		.navi-search{
			padding: 15px 10px;
		}

		.navi-search-form{
			padding: 0;
			margin: -7px 0;
			font-weight: 500;
			display: flex;
		}

		.navi-search-button, .navi-search-input{
			border-style: none;
			background-color: transparent;
		}

		.navi-search-button:hover{
			color: #1885ff;
		}

		.navi-search-input{
			padding: 3px;
			margin: 3px;
		}


		/*for nav scroll*/
		.navi-main-scroll{
			background-color: white;
			top: 0;
		}

		.background-white{
			background-color: white;
		}

		.background-black{
			background-color: black;
		}

		.white-text{
			color: white;
			-webkit-transition: color .2s;
			-o-transition: color .2s;
			transition: color .2s; 
		}

		.black-text{
			color: black;
			-webkit-transition: color .2s;
			-o-transition: color .2s;
			transition: color .2s; 
		}

		.white-logo{
			filter: brightness(0) grayscale(1) saturate(0) invert(1);
			transition: filter .2s;
		}

		.black-logo{
			filter: brightness(0) grayscale(1) saturate(0);
			transition: filter .2s;
		}

		.white-logo:hover, .black-logo:hover{
			filter: none;
		}

		.white-border{
			border: 1px solid white;
		}

		.black-border{
			border-bottom: 1px solid black;
		}

		.white-text:hover a{
			color: #1885ff;
		}

		@media only screen and (max-width: 1000px){
			.navi-item-drop-content{
				top: 55px;
				position: absolute;
				left: 0;
				right: 0;
				padding: 0 30px;
				display: flex;
				height: 0;
				flex-direction: column-reverse;
				transition: height .2s ease-in;
				overflow: hidden;
				z-index: 1;
			}

			.navi-item-drop{
				text-align: center;
			}

			.navi-bars{
				display: block;
				float: right;
			}

			.navi-bars:hover{
				color: #1885ff;
			}

			.navi-bars:hover + .navi-item-drop-content, .navi-item-drop-content:hover{
				height: <?php echo sizeof($links)*100?>%;
			}

			.navi-search-form{
				padding: 0;
				margin: 0;
				width: 100%;
				display: flex;
			}

			.navi-search-button{
				width: 5%;
			}

			.navi-search-input{
				width: 95%;
			}
		}
	</style>
</head>
<body>
	<nav class="navi-main" style="
		<?php foreach ($styles as $style): ?>
			<?php echo $style; ?>
		<?php endforeach; ?>
	">
		<div class="navi-cont">
			<ul>
				<li class="navi-logo white-logo">
					<a href=<?php echo $logo_link; ?>>
						<img src="img/Logo.png">
					</a>
				</li>
				<?php if(sizeof($links) > 0): ?>
					<li class="navi-item navi-bars white-text">
						<i class="fa fa-bars"></i>
					</li>
				<?php endif; ?>
				<div class="navi-item-drop-content background-black">
					<?php foreach ($links as $info): ?>
						<li class="navi-item white-text navi-item-drop">
							<a href=<?php echo $info['link']; ?>>
								<?php echo $info['name']; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</div>
			</ul>
		</div>
	</nav>
</body>
</html>