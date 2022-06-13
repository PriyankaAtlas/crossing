<?php
	class config
	{
		function getdata()
		{
			$servername = "localhost";
			$username ="root";
			$password ="";
			$dbname ="mydb";

			$conn = new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error)
			{
				die ("Connection failed:". $conn->connect_error);
			}
			return $conn;
		}
	}
?>