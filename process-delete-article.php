<?php
//process-delete-person.php

//receive POST data from delete form
$articleId = $_POST["articleId"];

//delete person record (row)
$dsn = "mysql:host=localhost;dbname=immnew;charset=utf8mb4";

$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("DELETE FROM `article`
	WHERE `article`.`articleId` = $articleId;");

$stmt->execute();


?>
DELETE sucessful. Back to records: <a href="admin-dashboard.php">Back to Admin Dashboard</a>
