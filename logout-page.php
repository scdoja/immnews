<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>
<?php
	//logout.php
	session_start();
 	session_destroy();
?>
<p>You have successfully logged out</p>
<a href="login-page.php">Login here</a>
