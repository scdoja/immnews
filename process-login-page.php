<?php
session_start();
//process-login.php
//receive post variables
$username = $_POST["username"];
$password = $_POST["password"];

//check the username and password against the database records

include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `person`
	WHERE `emailAddress` = '$username'
	AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row["userType"] == 'admin') {
	//successful username/password combination
	$_SESSION["personId"] = $row["personId"];
	?><p>Welcome Admin!</p>
	<a href="admin-articles.php">Go to Admin Article Dashboard</a><?php
}else{
	$_SESSION["personId"] = $row["personId"];
	?><p>Welcome User/Public to IMM News Network!</p>
	<a href="home-page.php">Go to Homepage</a><?php
}
?>
