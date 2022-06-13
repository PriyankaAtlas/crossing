<?php
	include "../config.php";
	class usermodel
	{
		//insert data using this query
		function insertquery()
		{
			$putdata = new config();
			$conn = $putdata->getdata();
			$firstname = $_POST['firstname'];
			// print_r($_POST);die;
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$gender =$_POST['gender'];

			$sql = "INSERT INTO user(`firstname`,`lastname`,`email`,`password`,`gender`)VALUES('{$firstname}','{$lastname}','{$email}','{$password}','{$gender}')";

			$result = $conn->query($sql);
			if($result == TRUE)
			{
				echo "new record inserted successfully";
			}
			else
			{
				echo "Error:";
			}
			$conn->close();
		}
		//update data using this query
		function getupdate()
		{
			$putdata = new config();
			$conn = $putdata->getdata();
			
			$id = $_GET['id'];
			// print_r($_POST);die;
			$sql = "SELECT * from user WHERE id='$id'";
			$result = $conn->query($sql);
			return $result;
		}
		function updatedata()
		{
			$putdata = new config();
			$conn = $putdata->getdata();
			$firstname = $_POST['firstname'];
			$id = $_POST['id'];
			// print_r($_POST);die;
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];

			$sql = "UPDATE user SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$id'";

			$result = $conn->query($sql);
			if($result == TRUE)
			{
				echo "Record updated successfully";
			}
			else
			{
				echo "Error:";
			}
			return $result;
		}
		//list data using this query
		function getall()
		{
			$putdata = new config();
			$conn = $putdata->getdata();
			//$id = $_GET['id'];
			//print_r($_GET);die;
			$sql = "select * from user";

			$result = $conn->query($sql);
			//print_r(get_class_methods($result));die;
			return $result;
		}
		function deletelist()
		{
			$putdata = new config();
			$conn = $putdata->getdata();
			$id = $_GET['id'];
			//print_r($_GET);die;
			$sql = "DELETE FROM user WHERE id='$id'";

			$result = $conn->query($sql);
			if($result == TRUE)
			{
				echo "New record deleted successfully";
			}
			else
			{
				echo "Error:";
			}
		}
	}
?>