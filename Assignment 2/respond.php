<?php 
	include_once 'header.php';
	include_once 'navbar.php';

?>
<html>
	<head>
		<title>Response</title>
	</head>

	<body>
		<div class='row'>
			<h1 class='text-center'>Lab Help</h1>
		</div>
		<div class='row' data-equalizer>
			<div class="small-9 columns panel" data-equalizer-watch>
				<h1><a href='respond.php'>Lab Help</a></h1>
				<h5 class='subheader'>I need help with the lab I keep getting a null pointer exception and I can't figure out what I'm doing wrong.
				If anyone could please help me it would be much appreciated!</h5>
			</div>
			<div class="small-3 columns panel" data-equalizer-watch>
				<p><b>Author: </b><a href=''>Tim Allen</a></p>
				<p><b>Responses: </b>42</p>
				<p><b>Date:</b>9/24/14</p>
			</div>
		</div>
		<div class='row'>
			<h4 class='columns'>Respond Below</h4>
		</div>
		<div class="row">
			<div class="small-12 columns">
				<form>
					<label>Respond Below 
						<textarea placeholder="Type Response Here"></textarea>
					</label>
				</form>
				<a href='' class='small-2 columns button small round right'>Submit</a>
			</div>
		</div>
		<div class='columns small-12'>
		<hr />
	</div>
		<div class='row'>
			<h4 class='small-10 columns'>Responses</h4>
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
				<h1><a href='respond.php'>Joe Smith</a></h1>
				<h5 class='subheader'>Well it looks to me you need to blah blah blah blah blah blah blah blah blah blah blah blah blah 
				blah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blah</h5>
			</div>
			<div class="small-3 columns panel text-center" data-equalizer-watch>
				<p><b>Rank: </b>+5</p>
				<p><b>Date:</b>9/24/14</p>
				<p><b>Time: </b>5:30 PM</p>
				<p><b>Helpful? </b> <a href=''><i class='foundicon-up-arrow'></i></a>
				<a href=''><i class='foundicon-down-arrow'></i></a></p>
			</div>
		</div>
		<div class='row' data-equalizer>
			<div class="small-9 columns panel" data-equalizer-watch>
				<h1><a href='respond.php'>Tim Allen</a></h1>
				<h5 class='subheader'>Well it looks to me you need to blah blah blah blah blah blah blah blah blah blah blah blah blah 
				blah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blah</h5>
			</div>
			<div class="small-3 columns panel text-center" data-equalizer-watch>
				<p><b>Rank: </b>-4</p>
				<p><b>Date:</b>9/24/14</p>
				<p><b>Time: </b>5:30 PM</p>
				<p><b>Helpful? </b> <a href=''><i class='foundicon-up-arrow'></i></a>
				<a href=''><i class='foundicon-down-arrow'></i></a></p>
			</div>
		</div>
		<div class='row' data-equalizer>
			<div class="small-9 columns panel" data-equalizer-watch>
				<h1><a href='respond.php'>Bob Smith</a></h1>
				<h5 class='subheader'>Well it looks to me you need to blah blah blah blah blah blah blah blah blah blah blah blah blah 
				blah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blahblah blah blah blah blah blah blah blah blah blah</h5>
			</div>
			<div class="small-3 columns panel text-center" data-equalizer-watch>
				<p><b>Rank: </b>-10</p>
				<p><b>Date:</b>9/24/14</p>
				<p><b>Time: </b>5:30 PM</p>
				<p><b>Helpful? </b> <a href=''><i class='foundicon-up-arrow'></i></a>
				<a href=''><i class='foundicon-down-arrow'></i></a></p>
			</div>
		</div>
	</body>
</html>

<?php
	include_once 'footer.php';
?>