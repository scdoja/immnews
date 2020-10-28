<?php
session_start();
if(isset($_SESSION["personId"])){
?>

<header>
<img src="./images/logos/immlogo.png" width="120"/>
<a href="home-page.php">Go to Back Home Page</a>
</header><br>

<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

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

<a href="<?php echo($row['articleLink']);?>" target = "_blank">External Article Link</a>

<?php
}else{?>
<p> Please Login to view Full Articles. </p>
<a href = "login-page.php">Login Here </a>
<?php
}
?>

<p>
<footer>
  IMM News Network Uses Cookies, click here -
  <a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
