<?php

?>
<html class='no-js' lang='en'>
	<head>
		<meta charset="utf-8">
		<link rel='stylesheet' href='css/foundation.css'>
		<link rel="stylesheet" href="css/normalize.css">
		<script src='js/vendor/modernizr.js'></script>
		<title>NotePost</title>

	</head>

	<body>
		<div class='large-10 large-centered columns'>
			<div class='off-canvas-wrap' data-offcanvas>
				<div class='inner-wrap'>
					<nav class='tab-bar'>
						<section class='left-small'>
							<a class='left-off-canvas-toggle menu-icon'><span></span></a>
						</section>
						<section class='middle tab-bar-section'>
							<h1 class='title'>NotePost</h1>
						</section>
						<section class='right-small'>
							<a class='right-off-canvas-toggle menu-icon'><span></span></a>
						</section>
					</nav>
					<aside class='left-off-canvas-menu'>
						<ul class='off-canvas-list'>
							<li><label>NotePost</label></li>
							<li class='has-submenu'><a href='#'>My Classes</a>
								<ul class='left-submenu'>
									<li class='back'><a href='#'>Back</a></li>
									<li><label>My Classes</label></li>
									<li class ='has-submenu'><a href='#'>CS1050</a>
										<ul class='left-submenu'>
											<li class='back'><a href='#'>Back</a></li>
											<li><a href='#'>Notes</a></li>
											<li><a href='#'>Discussion</a></li>
											<li><a href='#'>Calendar</a></li>
										</ul>
									</li>
									<li class ='has-submenu'><a href='#'>CS2050</a>
										<ul class='left-submenu'>
											<li class='back'><a href='#'>Back</a></li>
											<li><a href='#'>Notes</a></li>
											<li><a href='#'>Discussion</a></li>
											<li><a href='#'>Calendar</a></li>
										</ul>
									</li>
									<li><a href='#'>Enroll</a></li>
									
								</ul>
							</li>
							<li><a href='#'>Link</a></li>
							<li><a href='#'>Link</a></li>
							<li><a href='#'>Link</a></li>
							<li><a href='#'>Link</a></li>
						</ul>
					</aside>
					<aside class='right-off-canvas-menu'>
						<ul class='off-canvas-list'>
							<li><label>Classmates</label></li>
							<li><a href='#'>Tim</a></li>
							<li><a href='#'>Mark</a></li>
							<li><a href='#'>Travis</a></li>
							<li><a href='#'>Skye</a></li>
						</ul>
					</aside>
					<section class='main-section'>
						<br/>
						<div class='row'>
							<div class='orbit-container'>
								<ul class='orbit' data-orbit>
									<li class='active'>
										<img src='http://placehold.it/1000x400&text=[ img 1]'></img>
										<div class='orbit-caption'>Caption1</div>
									</li>
									<li>
										<img src='http://placehold.it/1000x400&text=[ img 2]'></img>
										<div class='orbit-caption'>Caption2</div>
									</li>
									<li>
										<img src='http://placehold.it/1000x400&text=[ img 3]'></img>
										<div class='orbit-caption'>Caption3</div>
									</li>
								</ul>
								<div class="orbit-timer">
    								<span></span>
   									<div class="orbit-progress"></div>
  								</div>
							</div>
						</div>
						<div class='row'>
							<div class = 'large-4 columns'>
								<div class='panel'>
									<h1 class='text-center'>About</h1>
									<p class='text-center'>Learn more about NotePost</p>
									<a href='#' class='button expand radius'>About</a>
								</div>
							</div>
							<div class = 'large-4 columns'>
								<div class='panel'>
									<h1 class='text-center'>Register</h1>
									<p class='text-center'>Register and start posting notes!</p>
									<a href='#' class='button expand radius'>Register</a>
								</div>
							</div>
							<div class = 'large-4 columns'>
								<div class='panel'>
									<h1 class='text-center'>View Tutorial</h1>
									<p class='text-center'>View how this site works</p>
									<a href='#' class='button expand radius'>Tutorial</a>
								</div>
							</div>
						</div>	
					</section>
					<a class="exit-off-canvas"></a>
				</div>
			</div>
			<hr />

			<footer class='row'>
				<div class='large-12 columns'>
					<p class='large-8 columns'>© Copyright TeamBlag</p>
					<i class='large-4 columns text-right'>"No F's Were Given"</i>
				</div>
			</footer>
		</div>
		<script src='js/vendor/jquery.js'></script>
   		<script src='js/foundation/foundation.js'></script>
   		<script src='js/foundation/foundation.offcanvas.js'></script>
   		<script src='js/foundation/foundation.dropdown.js'></script>
   		<script src="js/foundation/foundation.orbit.js"></script>
   		<script>
   			$(document).foundation();	
   		</script>

	</body>
	
</html>