<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>
<nav>
	<img src="./images/logos/immlogo.png" width="120"/>
	<a href="home-page.php">Home Page</a> |
	<a href="about-page.php">About Page</a> |
	<a href="contact-page.php">Contact Page</a>
</nav>

<html>
<h2>Technical Articles</h2>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'Technical'");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row); // recursively print out object.
		echo("<p>");
		echo("
        <label>Article Category:</label>".$row["category"]."<br>
		<label>Author:</label> ".$row["author"]."<br>
		<label>Article Title:</label>".$row["title"]."<br>
		<label>Article Preview:</label> ".$row["preview"]."<br>
		<label>Article Date:</label> ".$row["date"]."<br>
		<label>Article URL:</label>".$row["articleLink"]);
		?>
		<br><a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View Full Article</a><?php
}
?>
<footer>
  IMM News Network Uses Cookies, click here -
  <a href="cookies-page.php">Accept Cookies</a>
</footer>
