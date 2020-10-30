<!DOCTYPE html>
<head>
	<title>IMM News Network - Contact Page Submissions</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Contact Page Submissions">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
session_start();
if(isset($_SESSION["personId"])) {
?>

<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `contact`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo("<p>");
    		echo($row["firstName"]." ".$row["lastName"]." ".$row["emailAddress"]." ".$row["category1"]." ".$row["category2"]." ".$row["category3"]." ".$row["role"]);
		echo("</p>")
?>
<?php
}

}else{
?>
    <p> ACCESS DENIED. Go Home </p>
    <a href = "home-page.php">Back Home</a><?php
}
?>
