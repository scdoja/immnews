<!DOCTYPE html>
</html>
<html>
	<head>
	</head>
	<body>
	<form action="process-article-page.php" method="POST">

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
		<input type="submit" value="Submit">
        </form>
        </body>
    	</html>
