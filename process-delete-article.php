<head>
	<title>IMM News Network - Process Delete Article</title>
	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
	$articleId = $_POST["articleId"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("DELETE FROM `article`
	WHERE `article`.`articleId` = $articleId;");

	$stmt->execute();


?>
	DELETE sucessful. Back to records: <a href="admin-dashboard.php">Back to Admin Dashboard</a>
