<?php
	include 'db.php';
	$sql = "SELECT * FROM crud";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr id="<?php echo $row["id"]; ?>">
			<td><input type="checkbox" class="emp_checkbox" data-emp-id="<?php echo $row["id"]; ?>"></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['phone'];?></td>
			<td><?=$row['city'];?></td>
		</tr>
<?php	
		}
		}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>