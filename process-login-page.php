<head>
	<title>IMM News Network - Process Login Page</title>
	<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
session_start();
	$username = $_POST["username"];
	$password = $_POST["password"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `person`
	WHERE `emailAddress` = '$username'
		AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row["userType"] == "admin") {
	$_SESSION["personId"] = $row["personId"];
	$_SESSION["userType"] = $row["userType"];
	?><p>Welcome Admin!</p>
	<a href="admin-dashboard.php">Go to Admin Article Dashboard</a><?php
}else{
	$_SESSION["personId"] = $row["personId"];
	$_SESSION["userType"] = $row["userType"];
	?><p>Welcome User/Public to IMM News Network!</p>
	<a href="home-page.php">Go to Homepage</a><?php
}
?>
