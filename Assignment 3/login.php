<?php
   /*
      Template Name: login
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

<h2>Login</h2>
	<form method="POST">
		Username:
			<input type="text" name="username" required>
		Password:
			<input type="password" name="password"required>
		<input type="submit" class='medium button radius' value="Login" name="submit">
	</form>
	<p>Click <a href = '../register'>Here</a> to Register</p> 

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$result = $wpdb->get_row($wpdb->prepare("SELECT * FROM user WHERE username = %s", $username));
		
		$salt = $result->salt;
		
		if(sha1($password.$salt) == $result->password)
		{
			echo "logged in";
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['username'] = $username;
			header('Location: ../postLogin');
		}
		else
		{
			echo "Invalid Username or Passwrod";
		}
	}
?>

<?php get_footer() ?>