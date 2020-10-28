<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>
<header>
<nav>
<img src="./images/logos/immlogo.png" width="120"/>
<a href="home-page.php">Home Page</a>   |
<a href="about-page.php">About Page</a> |
<a href="contact-page.php">Contact Page</a>
</nav>
</header>

<html>
<h2>About Page</h2>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `about`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row); // recursively print out object.
		echo("<p>");
		echo($row["content"]."<br>");?>
		<?php
		echo("</p>");
	}
?>
<p>
<footer>
      IMM News Network Uses Cookies, click here -
      <a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
