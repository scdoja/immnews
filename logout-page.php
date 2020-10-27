<?php
	//logout.php
	session_start();
 	session_destroy();
?>
<p>You have successfully logged out</p>
<a href="login-page.php">Login here</a>
