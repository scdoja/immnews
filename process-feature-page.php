<head>
    <title>IMM News Network - Process Feature Page</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
    $feature = $_POST["feature"];
    $articleId = $_POST["articleId"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("UPDATE `article` SET `feature` = '$feature'
    WHERE `article`.`articleId` = $articleId;");

    $stmt->execute();

?>

<p>Edit Successful!</p><a href="admin-dashboard.php">Back to Admin Dashboard</a>
