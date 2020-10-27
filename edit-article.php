<?php
//edit-person.php?personId=5

//receive GET variables
$articleId = $_GET["articleId"];

//get person record form the database table
include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `articleId` = $articleId;");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

//show a form with prefilled info that we can change
?>
<form action="process-edit-article.php" method="POST">

    category: <label for="category">Select Article Category:</label>
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
