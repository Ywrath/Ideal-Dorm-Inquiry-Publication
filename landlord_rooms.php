<!DOCTYPE html>
<?php
    session_start();
    $session_user = htmlspecialchars($_SESSION['username']);

    include('connection.php');

    if (!$session_user) {
        header("location: index.php");
    }

    $fullname = htmlspecialchars($_SESSION['fullname']); //session fullname

    //count old building rooms
    $old_bldg_sql = mysqli_query($conn, "SELECT ID FROM rooms WHERE Bldg = 'Old Building'");
    $old_bldg_count = mysqli_num_rows($old_bldg_sql);

    //count new building rooms
    $new_bldg_sql = mysqli_query($conn, "SELECT ID FROM rooms WHERE Bldg = 'New Building'");
    $new_bld_count = mysqli_num_rows($new_bldg_sql);
?>
<html>
<head>
	<title>Rooms</title>
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
<div class="container">  
  <a class="btn btn-info" data-toggle="modal" data-target="#addRoomModal"><span class="fa fa-plus">
    </span> Add Rooms</a>
  <div>
  <h3>Old Building Rooms(<?php echo $old_bldg_count; ?>)</h3>
</div>
<div class="table-responsive">
  <table class="table table-hover">
    <thead class ="thead-dark">
      <tr>
        <th>Room Number</th>
        <th>Building</th>
        <th>Room Type</th>
        <th>Rate</th>
        <th>Availability</th>
        <th>No. of Boarders</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
          $dis_room = mysqli_query($conn, "SELECT * FROM 
            rooms WHERE Bldg = 'Old Building'");

            if (mysqli_num_rows($dis_room)  > 0) {
                
                while ($dis_room_row = mysqli_fetch_assoc($dis_room)) {

          ?>
          <tr>
              <td><?php echo $dis_room_row['RoomNum'];  ?></td>
              <td><?php echo $dis_room_row['Bldg'];  ?></td>
              <td><?php echo $dis_room_row['RoomType'];  ?></td>
              <td><?php echo $dis_room_row['Rate'];  ?></td>
              <td><?php echo $dis_room_row['Availability'];  ?></td>
              <td><?php echo $dis_room_row['NoOfBoarders'];  ?></td>
              <td><a class= 'btn btn-primary text-white' href="landlord_edit_rooms.php?edit_room_old=<?php echo $dis_room_row['ID']; ?>"><span class='fa fa-edit'></span> Edit</a></td>
              <td><a class="btn btn-danger" href="actions.php?del_room_new=<?php echo $dis_room_row['ID']?>" onclick="return confirm('Delete this room?');"><span class="fa fa-trash"></span> Delete</a></td>
          </tr>
            <?php } ?>
          <?php  } else {
                 echo "<tr>
              <td colspan='11'><h3 class='alert alert-warning text-center'>No Rooms Found</h3></td>
              </tr>";
          } ?>
    </tbody>
  </table>
 
  <div>
  <h3>New Building Rooms(<?php echo $new_bld_count; ?>)</h3>
</div>
<div class="table-responsive">
  <table class="table table-hover">
    <thead class ="thead-dark">
      <tr>
        <th>Room Number</th>
        <th>Building</th>
        <th>Room Type</th>
        <th>Rate</th>
        <th>Availability</th>
        <th>No. of Boarders</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $dis_new_room = mysqli_query($conn, "SELECT * FROM rooms WHERE Bldg = 'New Building'");

        if(mysqli_num_rows($dis_new_room) > 0){

          while ($dis_new_room_row = mysqli_fetch_assoc($dis_new_room)) {
            ?>
            <tr>
              <td><?php echo $dis_new_room_row['RoomNum'];  ?></td>
              <td><?php echo $dis_new_room_row['Bldg'];  ?></td>
              <td><?php echo $dis_new_room_row['RoomType'];  ?></td>
              <td><?php echo $dis_new_room_row['Rate'];  ?></td>
              <td><?php echo $dis_new_room_row['Availability'];  ?></td>
              <td><?php echo $dis_new_room_row['NoOfBoarders'];  ?></td>
              <td><a class= 'btn btn-primary text-white' 
              href="landlord_edit_rooms.php?edit_room_old=<?php echo $dis_new_room_row['ID']; ?>">
              <span class='fa fa-edit'></span> Edit</a></td>
              <td><a class="btn btn-danger" href="actions.php?del_room_new=<?php echo $dis_new_room_row['ID']?>" onclick="return confirm('Delete this room?');"><span class="fa fa-trash"></span> Delete</a></td>
          </tr>

          <?php } ?>

          <?php } else {
              echo "<tr>
              <td colspan='11'><h3 class='alert alert-warning text-center'>No Rooms Found</h3></td>
              </tr>";
          } ?>
    </tbody>
  </table>
  <div>
    <h3>Private Rooms</h3>
  </div>
<div class="table-responsive">
  <table class="table table-hover">
    <thead class ="thead-dark">
      <tr>
        <th>Room Number</th>
        <th>Building</th>
        <th>Room Type</th>
        <th>Rate</th>
        <th>Availability</th>
        <th>No. of Boarders</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $dis_room = mysqli_query($conn, "SELECT * FROM rooms WHERE Bldg = 'Private Rooms'");

        if(mysqli_num_rows($dis_room) > 0){

          while ($dis_room_row = mysqli_fetch_assoc($dis_room)) {
            ?>
            <tr>
              <td><?php echo $dis_room_row['RoomNum'];  ?></td>
              <td><?php echo $dis_room_row['Bldg'];  ?></td>
              <td><?php echo $dis_room_row['RoomType'];  ?></td>
              <td><?php echo $dis_room_row['Rate'];  ?></td>
              <td><?php echo $dis_room_row['Availability'];  ?></td>
              <td><?php echo $dis_room_row['NoOfBoarders'];  ?></td>
              <td><a class= 'btn btn-primary text-white' href="landlord_edit_rooms.php?edit_room_old=<?php echo $dis_room_row['ID']; ?>"><span class='fa fa-edit'></span> Edit</a></td>
              <td><a class="btn btn-danger" href="actions.php?del_room_new=<?php echo $dis_room_row['ID'];?>" onclick="return confirm('Delete this room?');"><span class="fa fa-trash"></span> Delete</a></td>
          </tr>

          <?php } ?>

          <?php } else {
              echo "<tr>
              <td colspan='11'><h3 class='alert alert-warning text-center'><span class='fa fa-warning'></span> No Rooms Found</h3></td>
              </tr>";
          } ?>
    </tbody>
  </table>

</div>

<div class="modal fade" id="addRoomModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Rooms</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
            <form method="post">
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Room No</span>
                    </div>
                    <input type="text" class="form-control" name="room_num">
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Building</span>
                    </div>
                    <select class="form-control" name="room_building">
                        <option>Building Type</option>
                        <option value="Old Building">Old Building</option>
                        <option value="New Building">New Building</option>
                        <option value="Private Rooms">Private Rooms</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Room Type</span>
                    </div>
                     <select class="form-control" name="room_type">
                        <option>Room Type</option>
                        <option value="Any">Any</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-lg-12">
                  <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rate</span>
                    </div>
                    <input type="text" class="form-control" name="room_rate">
                  </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" name="add_rooms" class="btn btn-success col-lg-4">Add</button>
            </div>
        </form>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['add_rooms'])) {
        
        //define room variables
        $room_num = mysqli_real_escape_string($conn, $_POST['room_num']);
        $room_building = mysqli_real_escape_string($conn, $_POST['room_building']);
        $room_type = mysqli_real_escape_string($conn, $_POST['room_type']);
        $room_rate = mysqli_real_escape_string($conn, $_POST['room_rate']);

        //Add Rooms Query
        $insert_rooms = mysqli_query($conn, "INSERT INTO rooms(RoomNum, Bldg, RoomType, Rate, Availability, NoOfBoarders) VALUES ('$room_num', '$room_building', '$room_type', '$room_rate', '0', '0')");

        if ($insert_rooms) {
            echo "<script>
              alert('Sucessfully added a room');
            </script>
            <meta http-equiv='refresh' content='0; url=landlord_rooms.php'>";
        } else {
            echo "<script>
              alert('Failure in adding rooms');
            </script>";
        }
        mysqli_close($conn); //close connection
    }
?>
</body>
</html>