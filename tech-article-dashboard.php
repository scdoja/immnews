<!DOCTYPE html>
<head>
	<title>IMM News Network - Technical Articles</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Technical Articles">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
	include("includes/header.html");
?>

<html>
	<h2>Technical Articles</h2>
</html

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article` WHERE `category` = 'Technical'");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

	echo("<p>");
?>
	<img src="uploads/<?php echo($row['image']);?>" width="300"/><br>
<?php
	echo("
        <label>Article Category:</label>".$row["category"]."<br>
		<label>Author:</label> ".$row["author"]."<br>
		<label>Article Title:</label>".$row["title"]."<br>
		<label>Article Preview:</label> ".$row["preview"]."<br>
		<label>Article Date:</label> ".$row["date"]."<br>
		<label>Article URL:</label>".$row["articleLink"]);
?>
	<br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Public Verison</a>
	<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View Full Article</a>
<?php
}
?>

<p>
<footer>
	IMM News Network Uses Cookies, click here -
	<a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
