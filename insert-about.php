<?php
	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `about`");

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		//print_r($row); // recursively print out object.
		echo("<p>");
		echo($row["personId"]." ".$row["firstName"]." ".$row["lastName"]." ".$row["emailAddress"]." ".$row["DOB"]); //or $row[0];
		?>
		<a href="edit-person.php?personId=<?php echo($row["personId"]); ?>">Edit</a>
		<a href="delete-person.php?personId=<?php echo($row["personId"]); ?>">Delete</a>
		<?php
		echo("</p>");
	}
hello
