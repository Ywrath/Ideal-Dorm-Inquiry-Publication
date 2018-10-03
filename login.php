<?php
	session_start(); //starts the session
	include('connection.php'); //include connection

	if (isset($_POST['login'])) {
		

		//define login var
		$username = $_POST['username'];
		$password = $_POST['password'];

		$admin_user_check = mysqli_query($conn, "SELECT * FROM admin WHERE Username = '$username'");
		$admin_user_count = mysqli_num_rows($admin_user_check);
		$admin_user_row = mysqli_fetch_assoc($admin_user_check);


		//db var
		$res_id = $admin_user_row['ID'];
		$res_lname = $admin_user_row['LastName'];
		$res_fname = $admin_user_row['FirstName'];
		$res_mname = $admin_user_row['Midname'];
		$res_name = $res_fname .  " " . $res_lname;
		$res_fullname = $res_fname . " " . $res_mname . " " . $res_lname;
		$res_user = $admin_user_row['Username'];
		$res_pass = $admin_user_row['Password'];

	if ($admin_user_count > 0) {
		if ($password == $res_pass) {
			
			//session variables
			$_SESSION['id'] = $res_id;
			$_SESSION['lastname'] = $res_lname;
			$_SESSION['firstname'] = $res_fname;
			$_SESSION['midname'] = $res_mname;
			$_SESSION['name'] = $res_name;
			$_SESSION['fullname'] = $res_fullname;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			header("location: land_lord_dashboard.php");
		} else {

			echo "<script>
				alert('Incorrect Password');
				window.open('index.php', '_self');
			</script>";

		}
	} else {

			echo "<script>
				alert('Invalid Username');
				window.open('index.php', '_self');
			</script>";
	}
}

?>