<!DOCTYPE html>
<head>
	<title>IMM News Network - Delete Article</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Delete Article">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
session_start();
if(isset($_SESSION["personId"])) {
?>

<?php
	$articleId = $_GET["articleId"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `articleId` = $articleId");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

?><h1>Are you sure you want to delete the following record?</h1><?php
	echo("<label>Article Category: </label>" .$row["category"]."<p>"."<br>");
		echo("<label>Article Title: </label>" .$row["title"]."<p>"."<br>");
			echo("<label>Author: </label>" .$row["author"]."<p>"."<br>");
				echo("<label>Article Content: </label>" .$row["content"]."<p>"."<br>");
					echo("<label>Article Date: </label>" .$row["date"]."<br>");
?>

<form action="process-delete-article.php" method="POST">
	<input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">
		<input type="submit" value="CONFIRM DELETE" />
</form>

<?php

}else{
	?>
	<p> ACCESS DENIED. Go Home </p>
	<a href = "home-page.php">Home</a><?php
}
?>
