<?php include "../modal/usermodel.php";
class updatelist
{
	function update()
	{
		$data = new usermodel();
		$data->updatedata();
	}
}
$data = new updatelist();
$data->update();