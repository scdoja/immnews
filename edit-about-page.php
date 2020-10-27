<?php
//edit-person.php?personId=5

//receive GET variables
$aboutId = $_GET["aboutId"];

//get person record form the database table
$dsn = "mysql:host=localhost;dbname=immnew;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `about`");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<form action="process-edit-about-page.php" method="POST">

<input type="text" name="content" value="<?php echo($row["content"]);?>"/>

<input type="hidden" name="aboutId" value="<?php echo($row["aboutId"]);?>">

<input type="submit" value="CONFIRM EDIT" />
</form>
