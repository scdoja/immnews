<!DOCTYPE html>
<head>
	<title>IMM News Network - Add New Article</title>
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
session_start();
if(isset($_SESSION["personId"])) {
?>

	<form method="POST"
	enctype="multipart/form-data"
	action="process-article-page.php">
	Upload Article Image: <input type="file" name="image" id="image" />

<html>
<body>
<p>
		Article Author: <input type="text" name="author"/>
		Article Title: <input type="text" name="title" /><br>
</p>

<p>
		Content: <input type="text" name="content" /><br>
</p>

<p>
	 	Article Date: <input type="text" name="date" /><br>
</p>

<p>
		Article URL: <input type ="url" name="articleLink" /><br>
</p>
<p>
	<label for="category">Select Article Category:</label>
		<select name="category" id="category">
		<option value="industry">Industry</option>
		<option value="technical">Technical</option>
		<option value="career">Career</option>
</select>
</p>
	<input type="submit" value="CONFIRM ADD">
</form>
</body>
</html>
<?php

}else{
	?>
	<p> ACCESS DENIED. Go Home </p>
	<a href = "home-page.php">Home</a><?php
}
?>
