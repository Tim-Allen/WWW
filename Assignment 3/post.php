<?php
   /*
      Template Name: post
      Purpose: individual posts and responses
   */
    global $wpdb;
	require_once('wp-config.php');
	session_start();
?>
<?php get_header() ?>
<?php
	$post = $wpdb->get_row($wpdb->prepare("SELECT * FROM message WHERE messageID = %d AND reply = 0", $_GET['postid']));
?>
<div class='row'>
	<h1 class='text-center'><?php echo $post->title;?></h1>
</div>
<p class='text-center'>Click <a href='forum'>here </a>to return to the Forum</p>
<div class='row' data-equalizer>
	<div class="small-9 columns panel" data-equalizer-watch>
		<h1><?php echo $post->title;?></h1>
		<h5 class='subheader'><?php echo $post->text;?></h5>
	</div>
	<div class="small-3 columns panel" data-equalizer-watch>
		<p><b>Author: </b><a href='forum/'><?php echo $post->creator;?></a></p>
		<p><b>Responses: </b>42</p>
		<p><b>Date:</b><?php echo $post->date;?></p>
	</div>
</div>
<div class='row'>
	<h4 class='columns'>Respond Below</h4>
</div>
<div class="row">
	<div class="small-12 columns">
		<form method="post">
			<label>Respond Below 
				<textarea placeholder="Type Response Here" name="response"></textarea>
			</label>
			<input type="submit" class='button small round right' value="Submit" name="submit">
		</form>
		
	</div>
</div>
<hr />
<div class="row">
	<h4 class='small-10 columns text-center'>Responses</h4>
</div>
<?php
	$responses = $wpdb->get_results($wpdb->prepare("SELECT * FROM message WHERE replyID = %d AND reply = 1 ORDER BY date DESC", $_GET['postid']));
	
	foreach($responses as $response){ ?>
		<div class='row' data-equalizer>
			<div class="small-9 columns panel" data-equalizer-watch>
				<h5 class='subheader'><?php echo $response->text;?></h5>
			</div>
			<div class="small-3 columns panel" data-equalizer-watch>
				<p><b>Author: </b><a href='forum/'><?php echo $response->creator;?></a></p>
				<p><b>Rank: </b>+5</p>
				<p><b>Date:</b><?php echo $response->date;?></p>
			</div>
		</div>
	<?php } ?>
<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			date_default_timezone_set("America/Chicago");
			$text = $_POST['response'];
			$creator = $_SESSION['username'];
			$date = date("d/m/Y h:i:sa");

			$result = $wpdb->insert('message', array(
				'text' => $text,
				'creator' => $creator,
				'class' => '1',
				'reply' => '1',
				'replyID' => $_GET['postid'],
				'date' => $date));
		
			if($result == false)
			{
				
				echo "Failed to Post, Try Again!";
			}
			else
			{
				header("Location: post?postid=".$_GET['postid']);
			}
		}
?>


<?php get_footer() ?>