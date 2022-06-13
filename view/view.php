<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mini php project</title>
</head>
<body>
	<form action="user.php" method="post">
		<fieldset>
			<lable>FirstName</lable>
			<input type="text" name="firstname">
			<br>

			<lable>LastName</lable>
			<input type="text" name="lastname">
			<br>

			<label>email</label>
			<input type="email" name="email">
			<br>

			<label>password</label>
			<input type="password" name="password">
			<br>

			<label>gender</label>
			<input type="radio" name="gender" value="0">Male
			<input type="radio" name="gender" value="1">Female
			<br>

			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>