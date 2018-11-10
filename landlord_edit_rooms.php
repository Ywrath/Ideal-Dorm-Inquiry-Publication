<!DOCTYPE html>
<?php
    session_start();
    include('connection.php');
    $session_user = htmlspecialchars($_SESSION['username']);

    if (!$session_user) {
        header("location: index.php");
    }


    $fullname = htmlspecialchars($_SESSION['fullname']);


    $edit_room_old = $_GET['edit_room_old'];
    $edit_room_sql = mysqli_query($conn, "SELECT * FROM rooms WHERE ID = '$edit_room_old'");
    $edit_room_row = mysqli_fetch_assoc($edit_room_sql);

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
</nav>


<br><br><br>
  

<div class="container">
	<div class="page-header">
		<h1 class="text-center"><span class="fa fa-refresh"></span> Update Rooms</h1>
		<h4>Update Room for Room No <span class="text-danger"><?php echo $edit_room_row['RoomNum']; ?>
    </span></h4>
		<hr>
	</div>
	<div class="row">
		<form method="post">
			<div class="form-group">
				<input type="hidden" name="room_id" value="<?php echo $edit_room_row['ID'] ?>">
			</div>
			   <div class="form-group col-lg-12">
              <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Room No</span>
                    </div>
                    <input type="text" class="form-control" name="room_num" value="<?php echo $edit_room_row['RoomNum']; ?>">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Building</span>
                    </div>
                    <input class="form-control" type="text" name="room_building" value="<?php echo $edit_room_row['Bldg'];  ?>">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Room Type</span>
                    </div>
                    <input class="form-control" type="text" name="room_type" value="<?php echo $edit_room_row['RoomType']; ?>">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rate</span>
                    </div>
                    <input type="text" class="form-control" name="room_rate" value="<?php echo $edit_room_row['Rate']; ?>">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Availability</span>
                    </div>
                    <input type="text" class="form-control" name="room_avail" value="<?php echo $edit_room_row['Availability']; ?>">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">No of Boarders</span>
                    </div>
                    <input type="text" class="form-control" name="room_boardnum" value="<?php echo $edit_room_row['NoOfBoarders']; ?>">
                  </div>
                </div>
			<div class="form-group col-lg-12">
				<button type="submit" class="btn btn-success col-lg-4" name="update_rooms"><span class="fa fa-save"></span> Update</button>
			</div>
		</form>
	</div>
</div>

<?php
    
    if (isset($_POST['update_rooms'])) {

          //define var
          $room_num = $_POST['room_num'];
          $room_building = $_POST['room_building'];
          $room_type = $_POST['room_type'];
          $room_rate = $_POST['room_rate'];
          $room_avail = $_POST['room_avail'];
          $room_boardnum = $_POST['room_boardnum'];

          $room_id = $_POST['room_id'];

          $room_update = mysqli_query($conn, "UPDATE rooms 
            SET RoomNum = '$room_num',
                Bldg = '$room_building',
                RoomType = '$room_type',
                Rate = '$room_rate',
                Availability = '$room_avail',
                NoOfBoarders = '$room_boardnum' 
            WHERE ID = '$room_id'");

            if($room_update){

              echo "<script>

              alert('Update rooms successful!')
              </script> 
              <meta http-equiv='refresh' content='0; url=landlord_rooms.php'>" ;


            }
            else {
              echo "<script> 
              alert('Update rooms failed');
              </script>";

            }

      }  
  
?>
</body>
</html>