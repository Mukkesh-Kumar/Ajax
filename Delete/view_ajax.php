<?php
	include 'db.php';
	$sql = "SELECT * FROM crud";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['phone'];?></td>
			<td><?=$row['city'];?></td>
			<td>
				<button type="button" class="btn btn-success delete" data-id="<?=$row['id'];?>" data-name="<?=$row['name'];?>"data-email="<?=$row['email'];?>" data-phone="<?=$row['phone'];?>" data-city="<?=$row['city'];?>">Delete</button>
			</td>
		</tr>
<?php	
	}
	}
	else {?>
		<tr>
		<td colspan="5">No Result found !</td>
		</tr>
<?php	}
	mysqli_close($conn);
?>