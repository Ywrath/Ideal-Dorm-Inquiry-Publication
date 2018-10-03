<!DOCTYPE html>
<?php
    
    include('connection.php');

?>
<html>
<head>
	<title>Reservation</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
        <a class="nav-link" href="Index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Rooms.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Reservation.php">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
     <ul class="navbar-nav ml-auto">
      <li><a class = "nav-link" href="#" data-toggle = "modal" data-target ="#modalLogin">Log-in</a></li>
    </ul>
  </div>
</nav>
<?php include('library/modals/loginModal.php'); ?>
<br>
<br>
<br>
<br>
<div class="container">
<form class="row">
	<div class="form-group col-4">
		<label for="name">Name</label>
		<input type="text" class = "form-control" id="name" placeholder="Juan De la Cruz" required>
	</div>
	<div class="form-group col-4">
		<label for="email">Email Address</label>
		<input type="email" class = "form-control" id="email" aria-describedby="emailHelp" placeholder="juan@yahoo.com" required>
	</div>
	<div class ="form-group col-4">
		<label for="contactNum">Contact Number</label>
		<input type="text" class="form-control" id="contactNum" name="contactNum" placeholder="09123456789" required>
	</div>
	<div class="form-group col-3">
		<label for="courseAndYear">Course & Year</label>
		<input type="text" class = "form-control" id="courseAndYear" placeholder="BSIT-1">
	</div>
	<div class ="form-group col-3">
		<label for="roomInterested">Room Interested</label>
		<input type="text" class="form-control" id="roomNumber" placeholder="12" required>
	</div>
	
	<div>
	 <label>Building</label>
	  <div class="form-check">
 		<input class="form-check-input" type="radio" name="building" id="newBuilding" value="newBuilding" required>
  		 <label class="form-check-label" for="newBuilding">
    		New Building
  		 </label>
	   </div>
	   <div class="form-check">
  		<input class="form-check-input" type="radio" name="building" id="oldBuilding" value="oldBuilding" required>
  		<label class="form-check-label" for="oldBuilding">
    	Old Building
  		</label>
	   </div>
	   <div class="form-check">
  		<input class="form-check-input" type="radio" name="building" id="private" value="private" required>
  		<label class="form-check-label" for="private">
    	Private Room
  		</label>
		</div>
	</div>

<div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control rounded-0" id="message" rows="5" cols="225"></textarea>
</div>

<button type="submit" class="btn btn-primary" name="reserve">Reserve</button>


</form>
</div>

</body>
</html>