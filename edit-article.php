<!DOCTYPE html>
<head>
	<title>IMM News Network - Edit Article</title>
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
session_start();
if(isset($_SESSION["personId"])) {

?>
	<form method="POST"
	enctype="multipart/form-data"
	action="process-edit-article.php">
	File: <input type="file" name="image" id="image"/>

<?php

	$articleId = $_GET["articleId"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `articleId` = $articleId;");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<form action="process-edit-article.php" method="POST">

    <label for="category">Select Article Category:</label>
	<select name="category" id="category">
		<option value="industry">Industry</option>
		<option value="technical">Technical</option>
		<option value="career">Career</option>
	</select>

	author: <input type="text" name="author" value="<?php echo($row["author"]);?>"/>

    title: <input type="text" name="title" value="<?php echo($row["title"]);?>"/>

	content: <input type="textarea" name="content" value="<?php echo($row["content"]);?>"/>

	date: <input type="text" name="date" value="<?php echo($row["date"]);?>"/>

    articleLink: <input type="url" name="articleLink" value="<?php echo($row["articleLink"]);?>"/>

	<input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">

	<input type="submit" />

</form>

<?php

}else{
	?>
	<p> ACCESS DENIED. Go Home </p>
		<a href = "home-page.php">Home</a><?php
}
?>
