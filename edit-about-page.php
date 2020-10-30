<!DOCTYPE html>
<head>
    <title>IMM News Network - Edit About Page</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>
</html>

<?php

    $aboutId = $_GET["aboutId"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `about`");

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<form action="process-edit-about-page.php" method="POST">

    <textarea type="text" name="content" value="<?php echo($row["content"]);?>">
    </textarea>

    <input type="hidden" name="aboutId" value="<?php echo($row["aboutId"]);?>">

    <input type="submit" value="CONFIRM EDIT" />

</form>
