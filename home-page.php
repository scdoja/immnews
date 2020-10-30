<!DOCTYPE html>
<head>
	<title>IMM News Network - Home Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Home Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<header>
<nav>
    <img src="./images/logos/immlogo.png" width="120"/>
    <a href="home-page.php">Home Page</a>   |
    <a href="about-page.php">About Page</a> |
    <a href="contact-page.php">Contact Page</a> |
    <a href="register-page.php">Register</a>   |
    <a href="login-page.php">Login</a> |
    <a href="logout-page.php">Logout</a>
</nav>
</header>

<!DOCTYPE html>
<body>
<h2>Homepage</h2>
    <h3>Welcome to IMM News Network</h3>
    	<p>Sheridan College's News Network for all things Interactive! Browse from Industry, Technical and Career article content. </p>
<p>
    <a href="industry-article-dashboard.php">Industry Articles</a>   |
    <a href="tech-article-dashboard.php">Technical Articles</a>   |
    <a href="career-article-dashboard.php">Career Articles</a>
</p>
</body>
</html>

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `article`
    WHERE `article`.`feature` = 1");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	echo("<h3>Featured Article</h3>");

?><!DOCTYPE html>
        <img src="uploads/<?php echo($row['image']);?>" width="350"/><br></html><?php
        echo("<p>");
			echo("<label>Article Category:</label>".$row["category"]."<br><label>Article Title:</label>".$row["title"]."<br><label>Article Preview:</label>".$row["preview"]."<br><label>Article Date:</label> ".$row["date"]);
?>
        <br><a href="public-view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Public Verison</a>
		<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>"> View Full Article</a>
<?php
}
?>
    <h3>Video</h3>
    	<iframe width="560" height="315" src="https://www.youtube.com/embed/RkwPzCO-BY0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>

<p>
<table>
    <tr>
    <th>Monthly Visitors -</th>
    <th>April:</th>
        <td>27 -</td>
    <th>May:</th>
        <td>35 -</td>
    <th>June:</th>
        <td>50 -</td>
    <th>July:</th>
        <td>60 -</td>
    <th>August:</th>
        <td>25 -</td>
    <th>September:</th>
        <td>15</td>
    </tr>
</table>
</p>

<p>
<footer>
      IMM News Network Uses Cookies, click here -
      	<a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
