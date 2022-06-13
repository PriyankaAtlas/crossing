<?php include "../modal/usermodel.php";
class userlist
{
	function getlist()
	{
		$data = new usermodel();
		$data->getall();
	}
}
$data = new userlist();
$data->getlist();