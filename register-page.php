<?php?>
<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<form action="process-register-page.php" method="POST">
		<!-- personId NOT needed because the database uses auto increment and takes care of the personId for us-->

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
