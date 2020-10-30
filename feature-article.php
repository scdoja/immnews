<!DOCTYPE html>
<head>
	<title>IMM News Network - Feature Article</title>
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
	WHERE `article`.`articleId` = $articleId;");

	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
	<form action="process-feature-page.php" method="POST">

    <label for="feature">Feature Article:</label>
    	<select name="feature" id="feature">

        <option value="0">Not Featured</option>

        <option value="1">Featured</option>

        <input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>">

        <input type="submit" />

</form>
</select>

<?php

}else{
	?>
	<p> ACCESS DENIED. Go Home </p>
		<a href = "home-page.php">Home</a><?php
}
?>
