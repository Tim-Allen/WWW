<?php
	
?>
<html class='no-js' lang='en'>
	<head>
		<meta charset="utf-8">
		<link rel='stylesheet' href='css/foundation.css'>
		<link rel="stylesheet" href="css/normalize.css">
		<script src='js/vendor/modernizr.js'></script>
		<title>NotePost</title>
		<style>
			.off-canvas-wrap, .inner-wrap{
				min-height:100%;
			}
			.off-canvas-wrap{
				height: 100%;
				overflow-y: auto;
			}
		</style>

	</head>

	<body>
		
		<div class='large-12 large-centered columns'>
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
					
				</div>
			</div>
			
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
