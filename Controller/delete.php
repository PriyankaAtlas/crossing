<?php include "../modal/usermodel.php";

class delete{
	function deletedata()
	{
		$data = new usermodel();
		$data->deletelist();
	}
}
$data = new delete();
$data->deletedata();