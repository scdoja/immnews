<!DOCTYPE html>
<head>
	<title>IMM News Network - Log Out Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Log Out Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
	session_start();
 	session_destroy();
?>
<html>
<p>You have successfully logged out.</p>
	<a href="login-page.php">Login here</a>
</html>
