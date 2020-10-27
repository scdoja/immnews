<?php

$articleId = $_GET["articleId"];

//get person record form the database table
$dsn = "mysql:host=localhost;dbname=immnew;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `article`
	WHERE `article`.`articleId` = $articleId;");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo("<h1>");
echo($row["title"]);
echo("</h1>");

echo("<h3>");
echo("<label>Written By:</label>".$row["author"]);
echo("</h3>");

echo("<p>");
	echo($row["content"]);
echo("</p>");

?>

<!DOCTYPE html>
<a href="<?php echo($row['articleLink']);?>">Article Link</a>
