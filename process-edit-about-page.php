<head>
    <title>IMM News Network - Process Edit About Page</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
$aboutId = $_POST["aboutId"];
$content = $_POST["content"];

include('includes/db-config.php');

$stmt = $pdo->prepare("UPDATE `about` SET `content` = '$content'
WHERE `about`.`aboutId` = 1 ;");

$stmt->execute();

?>

<p>Edit Successful!</p><a href="admin-dashboard.php">Back to Admin Dashboard</a>
