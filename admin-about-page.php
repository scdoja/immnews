<html>
<h2>About Page</h2>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `about`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row); // recursively print out object.
		echo("<p>");
		echo($row["content"]);?>
		<a href="edit-about-page.php?aboutId=<?php echo($row["aboutId"]); ?>">Edit</a>
		<?php
		echo("</p>");
	}
?>
