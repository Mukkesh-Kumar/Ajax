<?php
	include 'db.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WebPage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="float: right;">
		<a href="logout.php" class="btn btn-info">LogOut</a>
	</div>
	<div>
		<h2>Welcome <?php echo $_SESSION['email'];?></h2>
	</div>
</div>
</body>
</html>