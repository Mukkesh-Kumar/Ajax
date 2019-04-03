<?php
	include 'db.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];

	$duplicate=mysqli_query($conn,"SELECT * FROM crud WHERE email='$email'");
	if (mysqli_num_rows($duplicate)>0)
	{
		echo json_encode(array("statusCode"=>201));
	}

	else{
		$sql = "INSERT INTO `crud`( `name`, `email`, `phone`, `city`) VALUES ('$name','$email','$phone','$city')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}
	mysqli_close($conn);
?>