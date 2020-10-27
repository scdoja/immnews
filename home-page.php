<header>
<nav>
    <img src="./images/logos/immlogo.png" width="120"/>
    <a href="home-page.php">Home Page</a>   |
    <a href="about-page.php">About Page</a> |
    <a href="contact-page.php">Contact Page</a> |
    <a href="register-page.php">Register</a>   |
    <a href="login-page.php">Login</a>
</nav>
</header>

<!DOCTYPE html>
<body>
<h2>Homepage</h2>
<h3>Welcome to IMM News Network</h3>
<p>Sheridan College's News Network for all things Interactive! Browse from Industry, Technical and Career article content. </p>
<a href="industry-article-dashboard.php">Industry Articles</a>   |
<a href="tech-article-dashboard.php">Technical Articles</a>   |
<a href="career-article-dashboard.php">Career Articles</a>
</html>
</body>
<?php
	$dsn = "mysql:host=localhost;dbname=immnew;charset=utf8mb4";

	$dbusername = "root";
	$dbpassword = "";
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("SELECT * FROM `article`
    	WHERE `article`.`feature` = 1");
	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row);
        echo("<h3>Featured Article</h3>");
		echo("<label>Article Title:</label>".$row["title"]."<br><label>Article Preview:</label>".$row["preview"]."<br><label>Article Date:</label> ".$row["date"]);
		?>
		<br><a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View Full Article</a>
		<?php
	}
    ?>
<p>
<footer>
      IMM News Network Uses Cookies, click here -
      <a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
