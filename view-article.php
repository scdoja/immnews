<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>
<a href="home-page.php">Go to Back Home Page</a>
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

($row = $stmt->fetch(PDO::FETCH_ASSOC))

?><p>
<br>
<a href="likes.php?articleId=<?php echo($row["articleId"]); ?>">Like Article</a><br></p><?php
echo("<h1>");
echo($row["title"]);
echo("</h1>");

echo("<h3>");
echo("<label>By: </label>".$row["author"]);
echo("</h3>");

echo("<h4>");
echo("<label>Published: </label>".$row["date"]);
echo("</h4>");

?>
<img src="uploads/<?php echo($row["image"]); ?>" width="500" alt="image">
<?php
echo("<p>");
	echo($row["content"]);
echo("</p>");

?>
<a href="<?php echo($row['articleLink']);?>">External Article Link</a>
