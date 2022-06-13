<?php include "../modal/usermodel.php";

class user{
	function insert()
	{
		$data = new usermodel();
		$data->insertquery();
	}
}
$insertdata = new user();
$insertdata->insert();       

