<head>
    <title>IMM News Network - Process Article Page</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
    $category = $_POST["category"];
    $author = $_POST["author"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = $_POST["date"];
    $articleLink = $_POST["articleLink"];
    $image = $_FILES["image"]["name"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("INSERT INTO `article` (`articleId`, `category`, `author`, `title`,`content`,`date`,`articleLink`, `image`)
    VALUES (NULL, '$category', '$author', '$title', '$content', '$date', '$articleLink', '$image');");

    $uploaddir = "uploads/";
    $uploadfile = $uploaddir . basename($_FILES["image"]["name"], time() . "_{$image}");
    if (move_uploaded_file($_FILES['image']["tmp_name"], $uploadfile)) {
        echo "If you uploaded an image, it was successful.\n";
    } else {
        echo "You didn't upload a file.\n";
    }

    $stmt->execute();
?>

    <p>Sucessfully Added Article!</p><a href="admin-dashboard.php">Back to Article Dashboard</a>
