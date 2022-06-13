<?php include "../modal/usermodel.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mini php project</title>
</head>
<body>
	<?php
		$data = new usermodel();
		$result = $data->getupdate();
		$data = $result->fetch_assoc();
		//print_r($result->fetch_assoc());die;
		?>
		<form action="updatelist.php" method="post">
			<fieldset>
				<lable>FirstName</lable>
				<input type="text" name="firstname" value="<?php echo $data['firstname'];?>">
				<input type="hidden" name="id" value="<?php echo $data['id'];?>">
				<br>

				<lable>LastName</lable>
				<input type="text" name="lastname" value="<?php echo $data['lastname'];?>">
				<br>

				<label>email</label>
				<input type="email" name="email" value="<?php echo $data['email'];?>">
				<br>

				<label>password</label>
				<input type="password" name="password" value="<?php echo $data['password'];?>">
				<br>

				<label>gender</label>
				<input type="radio" name="gender" value="male" <?php if($data['gender'] == 'male') { echo "checked";} ?> >Male
				<input type="radio" name="gender" value="female" <?php if($data['gender'] == 'female') { echo "checked";} ?>>Female
				<br>

				<input type="submit" name="Update" value="Update">
			</fieldset>
		</form>
</body>
</html>
