<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
//process-contact-trader_cdlseparatinglines.php

    //receive input
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $category1 = $_POST["category1"];
    $category2 = $_POST["category2"];
    $category3 = $_POST["category3"];
    $roles = $_POST["roles"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("INSERT INTO `contact` (`firstName`, `lastName`, `emailAddress`,`category1`,`category2`,`category3`,`role`)
    VALUES ('$firstName', '$lastName', '$emailAddress', '$category1', '$category2', '$category3', '$roles');");

    $stmt->execute();
?>

    <p>Thank you for contacting us, we will get back to you!</p><a href="contact-page.php">Back to Contact Form</a>
