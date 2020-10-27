<header>
<nav>
<img src="./images/logos/immlogo.png" width="120"/>
<a href="home-page.php">Home Page</a>   |
<a href="about-page.php">About Page</a> |
<a href="contact-page.php">Contact Page</a>
</nav>
</header>

<h2>Contact Page</h2>

<!DOCTYPE html>
</html>
<html>
	<head>
	</head>
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
