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
	<title>Reservation</title>
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
        <a class="nav-link" href="landlord_inquiry.php"><span class="fa fa-bookmark"></span> Inquiry</a>
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
</nav>
<br>
<br>
<br>
<br>
<div class="container">
<form action="SendEmail_Admin.php" class="row" method="post">
	<div class="form-group col-4">
		<label for="name">Name</label>
		<input type="text" class = "form-control" name="name" id="name" placeholder="Juan De la Cruz" required>
	</div>
	<div class="form-group col-4">
		<label for="email">Email Address</label>
		<input type="email" class = "form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="juan@yahoo.com" required>
	</div>
	<div class ="form-group col-4">
		<label for="contactNum">Contact Number</label>
		<input type="text" class="form-control" id="contactNum" name="contactNum" placeholder="09123456789" required>
	</div>
	<div class="form-group col-3">
		<label for="courseAndYear">Course & Year</label>
		<input type="text" name="courseAndYear" class = "form-control" id="courseAndYear" placeholder="BSIT-1">
	</div>
	<div class ="form-group col-3">
		<label for="roomInterested">Room Interested</label>
		<input type="text" class="form-control" name="roomNumber" id="roomNumber" placeholder="12" required>
	</div>
	
	<div>
	 <label>Building</label>
	  <div class="form-check">
 		<input class="form-check-input" type="radio" name="building" id="newBuilding" value="New Building" required>
  		 <label class="form-check-label" for="newBuilding">
    		New Building
  		 </label>
	   </div>
	   <div class="form-check">
  		<input class="form-check-input" type="radio" name="building" id="oldBuilding" value="Old Building" required>
  		<label class="form-check-label" for="oldBuilding">
    	Old Building
  		</label>
	   </div>
	   <div class="form-check">
  		<input class="form-check-input" type="radio" name="building" id="private" value="Private Rooms" required>
  		<label class="form-check-label" for="private">
    	Private Room
  		</label>
		</div>
	</div>

<div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control rounded-0" name="message" rows="5" cols="225"></textarea>
</div>

<button type="submit" class="btn btn-primary" name="inquire">Reserve</button>


</form>
</div>

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