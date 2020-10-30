<!DOCTYPE html>
<head>
	<title>IMM News Network - Public Article</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Public Article">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<header>
	<img src="./images/logos/immlogo.png" width="120"/>
	<a href="home-page.php">Go Back to Home Page</a>
</header><br>

<!DOCTYPE html>
<p>
	<h2>Welcome Public User! If you wish to continue reading more content, please register for an account with IMM News Network!</h2>
	<a href="register-page.php">Register Account Here</a><br>
	<a href="home-page.php">Already User? Return Home</a>
</p>
</html>

<?php

	$articleId = $_GET["articleId"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `article`.`articleId` = $articleId;");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);?>
		<img src="uploads/<?php echo($row["image"]); ?>" width="500" alt="image"><?php

echo("<p>");

echo("<h1>");
	echo($row["title"]);
echo("</h1>");

echo("<h3>");
	echo("<label>By: </label>".$row["author"]);
echo("</h3>");

echo("<h4>");
	echo("<label>Published: </label>".$row["date"]);
echo("</h4>");

	echo($row["content"]);

echo("</p>");?>

	<a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a><p>

<?php
	$stmt = $pdo->prepare("SELECT count(*) FROM `likes`
	WHERE `likes`.`articleId` = $articleId");

	$stmt->execute();
	$row = $stmt->fetchColumn();?>

	<p><?php echo $row?> total likes for this article</p>

<p>
<footer>
	IMM News Network Uses Cookies, click here -
	<a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
