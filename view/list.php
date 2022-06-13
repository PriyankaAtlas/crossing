<?php include "../modal/usermodel.php";?>
<!DOCTYPE html>
<html>
<body>
	<table>
		<thead>
			<tr>
				<td>id</td>
				<td>Firstname</td>
				<td>Lastname</td>
				<td>Email</td>
				<td>#</td>
				<td>#</td>
			</tr>
		</thead>
		<tbody>
			<?php
			$data = new usermodel();
			$result = $data->getall();
			
			while ($row = $result->fetch_assoc()) 
			{
			 		//print_r($row);die;
			?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><a class ="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
						<td><a class ="btn btn-info" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
					</tr>
			<?php }
			
			?>
		</tbody>
	</table>
</body>
</html>