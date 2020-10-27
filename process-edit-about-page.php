<?php
//process-edit-person.php

//receive POST data from edit form
$aboutId = $_POST["aboutId"];
$content = $_POST["content"];

//update person record (row) with the edit form data
include('includes/db-config.php');

$stmt = $pdo->prepare("UPDATE `about` SET `content` = '$content'
WHERE `about`.`aboutId` = 1 ;");

$stmt->execute();

?>

<p>Edit Successful!</p><a href="admin-dashboard.php">Back to Admin Dashboard</a>
