<?php
   /*
      Template Name: logout
      Purpose: Form allowing a new user to create an account
   */
?>
<?php get_header() ?>
<?php 

	session_start();
	$_SESSION['username'] = NULL;
	$_SESSION['loggedin'] = FALSE;
	
	header('Location: ../home');

?>
