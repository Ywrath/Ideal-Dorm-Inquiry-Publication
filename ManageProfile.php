<!DOCTYPE html>
<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'ideal_dorm');
    $session_user = htmlspecialchars($_SESSION['username']);

    if (!$session_user) {
        header("location: index.php");
    }

    $fullname = htmlspecialchars($_SESSION['fullname']); //session fullname

     $disp_contNum = mysqli_query($conn, "SELECT * FROM admin");
    $disp_row = mysqli_fetch_assoc($disp_contNum);

?>
<html>
<head>
	<title>Ideal Dorm</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel ="icon" href="img/homeIcon.png">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="js/carousel.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">IDEAL DORM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="land_lord_dashboard.php"><span class="fa fa-home"></span> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="landlord_rooms.php"><span class="fa fa-bed"></span> Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="landlord_reservation.php"><span class="fa fa-bookmark"></span> Reservation</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <span class="fa fa-gear"></span> Hello, <?php echo $fullname; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="ManageProfile.php"><span class="fa fa-user"></span> Manage Profile</a>
          <a class="dropdown-item" href="#"><span class="fa fa-address-book"></span> Change Contact</a>
          <a class="dropdown-item" href="logout.php"><span class="fa fa-sign-out"></span> Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav><br><br><br>
<div class="container">
	<div class="page-header">
		<h1 class="text-center"><span class="fa fa-lock"></span>&nbsp; Change Password</h1>
		<h4>Change Password for <span class="text-danger"><?php echo $session_user; ?></span></h4>
		<hr>
	</div>
	<div class="row">
		<form method="post">
			<div class="form-group">
				<input type="hidden" name="pass_id" value="<?php echo $_SESSION['id']; ?>">
			</div>
			<div class="form-group col-lg-12">
				<div class="input-group input-group-lg">
  					<div class="input-group-prepend">
    					<span class="input-group-text">Old Password</span>
  					</div>
  					<input type="password" class="form-control" name="old_pass">
				</div>
			</div>
			<div class="form-group col-lg-12">
				<div class="input-group input-group-lg">
  					<div class="input-group-prepend">
    					<span class="input-group-text">New Password</span>
  					</div>
  					<input type="password" class="form-control" id="pass" name="new_pass">
				</div>
			</div>
			<div class="form-group col-lg-12">
				<div class="input-group input-group-lg">
  					<div class="input-group-prepend">
    					<span class="input-group-text">Repeat Password</span>
  					</div>
  					<input type="password" class="form-control" name="repeat_pass">
				</div>
				<hr>
			</div>
			<div class="form-group col-lg-12">
				<a class="btn btn-info text-white" onclick="showPass();"><span class="fa fa-eye"></span> Show</a>
				<button type="submit" class="btn btn-success col-lg-4" name="change_pass"><span class="fa fa-save"></span> Save</button>
			</div>
		</form>
	</div>
</div>
<?php
	include('connection.php');

	if (isset($_POST['change_pass'])) {
		
		//define change pass variables
		$old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
		$new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
		$repeat_pass = mysqli_real_escape_string($conn, $_POST['repeat_pass']);

		//escapes special chars in a string and escape variables for security

		//define variable id to change pass
		$pass_id = htmlspecialchars($_POST['pass_id']);

		$old_pass_sql = mysqli_query($conn, "SELECT * FROM admin WHERE ID = ".$_SESSION['id']."");
		$row = mysqli_fetch_assoc($old_pass_sql);
		
		if ($row['Password'] == $old_pass) {
			
			if ($new_pass == $repeat_pass) {
				
				//query start for update password
				$change_pass = mysqli_query($conn, "UPDATE admin SET Password = '$new_pass' WHERE ID = '$pass_id'");

				//condition to check if password is updated successfully or fail
				if ($change_pass) {
					echo "<script>
						alert('Successfully Changed Password');
					</script>
					<meta http-equiv='refresh' content='0; url=ManageProfile.php'>";
				} else {
					echo "<script>
						alert('Failure in changing password');
					</script>";
				}

			} else {
				echo "<script>
					alert('Password do not match');
				</script>";
			}

		} else {
			echo "<script>
				alert('Old Password do not match');
			</script>";
		}
	
	}
?>
 	
<script>
	function showPass() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<br><br><br>
<footer>
 <div class="container-fluid">
    <div class="row footer-top">
        <div class="col-sm-4 text-center">
            <h4 class="ft-text-title">Ideal Dorm Publication & Inquiry</h4>
            <h6 class="ft-desp">A Project for CCS 3400 
                <br>Lopez Jaena St., Jaro, Iloilo City
            </h6>
            <h4 class="details">
                <a class="contact text-white">
                    <i class="fa fa-phone" aria-hidden="true"></i><?php echo $disp_row['ContactNum']; ?>
                  </a>
                </h4>
            </div>
            <div class="col-sm-4 text-center border-left">
                <h4 class="ft-text-title">Our Team</h4>
                <div class="address-member">
                    <p class="member">
                        <b>Front End Developer</b> : George Pormilos
                    </p>
                    <p class="member">
                        <b>Back End Developer</b> : Jade Edward Duran
                    </p>
                    <p class="member">
                        <b>Land Lady</b> : Michelle Frias
                    </p>
                    <p class="member">
                        <b>Land Lord</b> : Roger Frias
                    </p>
               </div>
           </div>
           <div class="col-sm-4 col-xs-12 text-center border-left">
            <h4 class="ft-text-title">About Developers</h4>
            <div class="pspt-dtls">
                <a href="https://www.facebook.com/youjustgotjadedXD" class="about"><span class="fa fa-facebook"></span> Jade Duran</a>
                <a href="https://www.facebook.com/LiLGreggYGuys" class="team"><span class="fa fa-facebook"></span> George Pormilos</a>
                <br><br><br><br><br><br><br>
            </div>
          </div>
        <div style="padding: 15px 0;" class="text-center text-white">
            <h5 class="col-lg-12">Developed By JG Solutions</h5>
        </div>
    </div> 
</div>
</footer>

</body>
</html>