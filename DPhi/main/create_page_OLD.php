<?php
	require_once("../includes/session.php");
	require_once("../includes/functions.php");
	confirm_logged_in();
	require_once("../includes/connect.php");
	include("../includes/layout/h1.php");
	
	echo "<title>Delta Phi Xi- Create a New Page</title>";
	
	include("../includes/layout/h2.php");
	include("../pages/nav.php");
	include("../includes/layout/b1.php");
		
	include("../includes/validate_create_page.php");
	include("../includes/form_create_page.php");
	
	include("../includes/layout/b2.php");
?>