<!DOCTYPE html>
<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		
		header("location: index.php");
	}

	$name = $_SESSION['name'];

?>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Hello, <?php echo $name;  ?></h1>
	<h1 style="float: right;"><a href="logout.php">Logout</a></h1>

</body>
</html>