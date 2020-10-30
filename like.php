<?php
session_start();
if(isset($_SESSION["personId"])){
?>

<head>
    <title>IMM News Network - Like Process</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php

    $articleId = $_GET["articleId"];

    include('includes/db-config.php');

    $like = $_POST["like"];
    $personId = $_SESSION["personId"];
    $likeicon = $_POST["likeicon"];

    $stmt = $pdo->prepare("INSERT INTO `likes` (`likeId`, `personId`, `articleId`, `likeicon`)
    VALUES (NULL, '$personId', '$articleId', 'like.png');");

    $stmt->execute();

    header('Location: home-page.php');

?>

<?php
}else{?>
    <p> Please Login to view Full Articles. </p>
        <a href = "login-page.php">Login Here </a>
<?php
}
?>
