<?php

$articleId = $_GET["articleId"];

//get person record form the database table
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
