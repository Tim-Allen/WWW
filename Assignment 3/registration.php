<?php
   /*
      Template Name: registration
      Purpose: Form allowing a new user to create an account
   */
?>
<?php get_header() ?>
<?php session_start();?>
<?php 

	global $wpdb;
	require_once('wp-config.php');
	
	if($_SESSION['loggedin'] == TRUE)
	{
		header('Location: postLogin');
	}
?>
	<h2>Register</h2>
	<form method="POST">
		Email:
			<input name="email" type="email" id="email"required>
		Username:
			<input type="text" name="username">
		Password:
			<input type="password" name="password"required>
		Confirm Password:
			<input type="password" required>
		Are you a Human?
			<input type="text" required>
		<input type="checkbox">I have read the <a href="#">Terms and Conditions</a> for at least 3 seconds.
		<hr>
		<a href="index.php" class="medium white nice button radius">Cancel</a>
		
		<input type="submit" class='medium button radius' value="Submit" name="submit">

	</form>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$email = $_POST['email'];
		$salt = sha1(rand());
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pw_hash = sha1($password.$salt);
		
		$result = $wpdb->insert('user', array(
			'email' => $email,
			'username' => $username,
			'salt' => $salt,
			'password' => $pw_hash));
		if($result == false)
		{
			echo "Failed to Register, Try a Different Username";
		}
		else
		{
			echo "Success! You are Registered!";
			$_SESSION['username'] = $username;
			$_SESSION['loggedin'] = TRUE;
			header('Location: ../postLogin');
			
		}
		
	}
?>
<?php get_footer() ?>
