<?php
	include 'nav.php';
	
?>
<html>
	<head>
		<link rel='stylesheet' href='css/foundation.css'>
		<link rel="stylesheet" href="css/normalize.css">
		<script src='js/vendor/modernizr.js'></script>
	</head>
	<body>
		<section class='main-section'>
		<div class='container'>
			<div class='row'>
				<h1 class='text-center'>CS3330 Forum</h1>
				
			</div>
			<div class='row'>
					<div class='small-10 columns'><p></p>
					</div>
				<form>
					<div class='small-2 columns'>
						<label>Sort By:</label>
						<select>
							<option value="recent">Recent</option>
							<option value="popular">Popular</option>
							<option value="old">Oldest</option>
						</select>
					</div>
				</form>
			</div>
			<br />
			<div class='row' data-equalizer>
				<div class="small-9 columns panel" data-equalizer-watch>
					<h1><a href=''>Lab Help</a></h1>
					<h5 class='subheader'>I need help with the lab I keep getting a null pointer exception and I can't figure out what I'm doing wrong.
					If anyone could please help me it would be much appreciated!</h5>
				</div>
				<div class="small-3 columns panel" data-equalizer-watch>
					<p><b>Author: </b><a href=''>Tim Allen</a></p>
					<p><b>Responses: </b>42</p>
					<p><b>Date:</b>9/24/14</p>
				</div>
			</div>
			<div class='row pagination-centered'>
				<ul class='pagination'>
					<li class='arrow unavailable'><a href=''>&laquo;</a></li>
					<li class="current"><a href=''>1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
					<li class="arrow"><a href=''>&raquo;</a></li>
				</ul>
			</div>
		
		</section>
			
		</div>
		</main>
		<script src="js/vendor/jquery.js"></script>
 		<script src="js/foundation/foundation.js"></script>
		<script src="js/foundation/foundation.equalizer.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>