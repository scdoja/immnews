<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
//process-edit-person.php

//receive POST data from edit form
$feature = $_POST["feature"];
$articleId = $_POST["articleId"];

//update person record (row) with the edit form data
include('includes/db-config.php');

$stmt = $pdo->prepare("UPDATE `article` SET `feature` = '$feature'
WHERE `article`.`articleId` = $articleId;");

$stmt->execute();

?>

<p>Edit Successful!</p><a href="admin-dashboard.php">Back to Admin Dashboard</a>
