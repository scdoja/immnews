<?php
//delete-person.php?personId=5

//receive GET variables
$articleId = $_GET["articleId"];

//get person record form the database table
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


//show a form with prefilled info that we can change
?>
<form action="process-delete-article.php" method="POST">
	<input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">
	<input type="submit" value="CONFIRM DELETE" />
</form>
