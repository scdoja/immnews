<?php
    $category = $_POST["category"];
    $author = $_POST["author"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = $_POST["date"];
    $articleLink = $_POST["articleLink"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("INSERT INTO `article` (`articleId`, `category`, `author`, `title`,`content`,`date`,`articleLink`)
    VALUES (NULL, '$category', '$author', '$title', '$content', '$date', '$articleLink');");

    $stmt->execute();
?>

    <p>Sucessfully Added Article!</p><a href="select-articles.php">Back to Article Dashboard</a>
