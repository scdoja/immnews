<head>
    <title>IMM News Network - Process Register Page</title>
    <link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $DOB = $_POST["DOB"];
    $userType= $_POST["userType"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("INSERT INTO `person` (`personId`, `firstName`, `lastName`, `emailAddress`,`password`,`DOB`,`userType`)
    VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password', '$DOB', '$userType');");

    $stmt->execute();

?>
    <p>Thank you for registering with IMM News Network </p><a href="home-page.php">Back to Homepage</a>
