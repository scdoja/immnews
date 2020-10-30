<!DOCTYPE html>
<head>
	<title>IMM News Network - Contact Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Contact Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<?php
	include("includes/header.html");
?>

<!DOCTYPE html>
	<h2>Contact Page</h2>
<body>
		<form action="process-contact-page.php" method="POST">
<p>
        First Name: <input type="text" name="firstName" required />
		Last Name: <input type="text" name="lastName" required />
		Email Address: <input type="email" name="emailAddress" required /><br>
</p>
<p>
		Category Interests:
		<input type="hidden" name="category1" value="0" />
		<input type="checkbox" name="category1" value="1"/>
        	<label for="category1"> Industry</label>

		<input type="hidden" name="category2" value="0"	/>
		<input type="checkbox" name="category2" value="1"/>
        	<label for="category2"> Technical</label>

		<input type="hidden" name="category3" value="0"	/>
		<input type="checkbox" name="category3" value="1"/>
			<label for="category3"> Career</label>
</p>
<p>
        <br><label for="roles">Select Your Role:</label>
        	<select name="roles" id="roles">
        	<option value="writer">Writer</option>
        	<option value="contributor">Contributor</option>
        	<option value="administrator">Administrator</option>
		</select>
</p>
		<input type="submit" value="Submit">
    	</form>
</body>
</html>

<p>
<footer>
	IMM News Network Uses Cookies, click here -
	<a href="cookies-page.php">Accept Cookies</a>
</footer>
</p>
