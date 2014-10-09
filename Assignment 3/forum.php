<?php
   /*
      Template Name: forum
      Purpose: forum for posting in classes discussions
   */
    global $wpdb;
	require_once('wp-config.php');
	session_start();
?>
<?php get_header() ?>

<div class='container'>
	<div class='row'>
		<h1 class='text-center'>CS3330 Forum</h1>
	</div>
	<hr />
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
	<br />
		<div class="row">
			<div class="small-12 columns">
				<form method="POST">
					<label><b>Start New Thread</b>
						<input type="text" placeholder="Type Post Title Here" name="title"></textarea>
						<textarea placeholder="Type Question Here" name="question"></textarea>
					</label>
						
					<input type="submit" class='button small round right' value="Post" name="submit">
				</form>
				
			</div>
		</div>
	<br />
	<?php
	
	
		$classID = 1;
		$posts = $wpdb->get_results($wpdb->prepare("SELECT * FROM message WHERE class = %d AND reply = 0 ORDER BY date DESC", $classID));
		foreach($posts as $post){ ?>
		<?php $id = $post->messageID;?>
	<div class='row' data-equalizer>
		<div class="small-9 columns panel" data-equalizer-watch>
			<h1><a href="post?postid=<?php echo$id;?>"><?php echo $post->title;?></a></h1>
			<h5 class='subheader'><?php echo $post->text;?></h5>
		</div>
		<div class="small-3 columns panel" data-equalizer-watch>
			<p><b>Author: </b><a href='forum/'><?php echo $post->creator;?></a></p>
			<p><b>Responses: </b>42</p>
			<p><b>Date:</b><?php echo $post->date;?></p>
		</div>
	</div>
	<?php } ?>
<?php
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$text = $_POST['question'];
		$title = $_POST['title'];
		$creator = $_SESSION['username'];
		

		//echo $text;
		//echo " ";
		//echo $title;
		//echo " ";
		//echo $creator;
		//echo " ";
		//echo $date;
		$result = $wpdb->insert('message', array(
			'text' => $text,
			'title' => $title,
			'creator' => $creator,
			'class' => '1',
			'reply' => '0',
			'date' => current_time('mysql')));
		
		if($result == false)
		{
			$wpdb->show_errors();
			$wpdb->print_error();
			echo "Failed to Post, Try Again!";
		}
		else
		{
			header('Location: forum');
		}
	}
	
	
?>







<?php get_footer() ?>