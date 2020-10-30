<!DOCTYPE html>
<head>
	<title>IMM News Network - Register  Page</title>
	<meta charset="utf-8">
	<meta name="description" content="IMM News Network - Register Page">
	<meta name="keywords" content="news, articles, IMM, career, industry, technical">
	<link rel="author" content="Jason Do"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' href='favicon.ico' type='image/x-icon'/>
</head>
</html>

<header>
<nav>
<img src="./images/logos/immlogo.png" width="120"/>
	<a href="home-page.php">Home Page</a>   |
	<a href="about-page.php">About Page</a> |
	<a href="contact-page.php">Contact Page</a>
</nav>
</header>

<!DOCTYPE html>
	<h2>Register New User</h2>
<body>
	<form action="process-register-page.php" method="POST">

        firstName: <input type="text" name="firstName" />

        lastName: <input type="text" name="lastName" />

        emailAddress: <input type="text" name="emailAddress" /><br>
<p>
        password: <input type="text" name="password" /><br>
</p>
<p>
        DOB: <input type="text" name="DOB" /><br>
</p>
<p>
    <label for="userType">Register Your User Type:</label>
    <select name="userType" id="userType">
		<option value="user" selected>User</option>
		<option value="public">Public</option>
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
