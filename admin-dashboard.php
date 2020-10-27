<html>
<h2>Admin Dashboard</h2>
<nav>
<a href="home-page.php">Home Page</a>   |
<a href="article-page.php?articleId">Add New Article</a>   |
<a href="contact-page-submissions.php?articleId">Contact Form Submissions</a> |
<a href="admin-about-page.php">Edit About Page</a>
</nav>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `article`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row); // recursively print out object.
		echo("<h3>Articles</h3>");
		echo("<p>");
		echo("<label>Article ID:</label>".$row["articleId"]."<br>");
		echo("
        <label>Article Category:</label>".$row["category"]."<br>
		<label>Author:</label> ".$row["author"]."<br>
		<label>Article Title:</label>".$row["title"]."<br>
		<label>Article Preview:</label> ".$row["preview"]."<br>
		<label>Article Date:</label> ".$row["date"]."<br>
		<label>Article URL:</label>".$row["articleLink"]."<br>
		<label>Feature:</label>".$row["feature"]."<br>");
		?>
		<a href="view-article.php?articleId=<?php echo($row["articleId"]); ?>">View</a>
		<a href="edit-article.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a>
		<a href="delete-article.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a>
		<a href="feature-article.php?articleId=<?php echo($row["articleId"]); ?>">Set Feature</a>
		<?php
		echo("</p>");
	}
?>
