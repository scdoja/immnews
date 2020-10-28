<?php
session_start();
if(isset($_SESSION["personId"])) {
?>

<head>
<link rel='icon' href='favicon.ico' type='image/x-icon'/ >
</head>

<?php
include('includes/db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `person`");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //print_r($row); // recursively print out object.
    echo("<p>");
    echo($row["personId"]." ".$row["firstName"]." ".$row["lastName"]." ".$row["emailAddress"]." ".$row["DOB"]." ".$row["userType"]); //or $row[0];
    ?>
    <?php
}
}else{
	?>
	<p> ACCESS DENIED. Go Home </p>
	<a href = "home-page.php">Home</a><?php
}
?>
