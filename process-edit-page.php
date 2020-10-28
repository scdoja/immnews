<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
//process-edit-person.php

//receive POST data from edit form
$category = $_POST["category"];
$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
$date = $_POST["date"];
$articleLink = $_POST["articleLink"];
$articleId = $_POST["articleId"];

//update person record (row) with the edit form data
include('includes/db-config.php');

$stmt = $pdo->prepare("UPDATE `article` SET `category` = '$category', `author` = '$author', `title` = '$title', `content` = '$content', `date` = '$date', `articleLink` = '$articleLink'
WHERE `article`.`articleId` = $articleId;");

$stmt->execute();

?>

<p>Edit Successful!</p><a href="admin-dashboard.php">Back to Admin Dashboard</a>
