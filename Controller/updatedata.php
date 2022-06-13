<?php include "../modal/usermodel.php";
class updatedata
{
	function updatedata()
	{
		$data = new usermodel();
		$data-> getupdate();
	}
}
$data = new update();
$data->updatedata();