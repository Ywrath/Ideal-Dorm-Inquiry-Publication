<!DOCTYPE html>
<?php
    include ('connection.php');
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
        <a class="nav-link" href="Index.php"><span class="fa fa-home"></span> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Rooms.php"><span class="fa fa-bed"></span> Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Inquiry.php"><span class="fa fa-bookmark"></span> Inquiry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li><a class = "nav-link" href="#" data-toggle = "modal" data-target ="#modalLogin"><span class= "fa fa-sign-in"></span> Log-in</a></li>
    </ul>
  </div>
</nav>
<?php include('library/modals/loginModal.php'); ?>
<br>
<br>
<br>
<div class="container">  
  <h3>Old Building Rooms</h3>
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
      </tr>
    </thead>
    <tbody>
      <?php
        $dis_room = mysqli_query($conn, "SELECT * FROM rooms WHERE Bldg= 'Old Building'");

        if(mysqli_num_rows($dis_room) > 0){

          while ($dis_room_row = mysqli_fetch_assoc($dis_room)) {
            echo "<tr>
                <td>".$dis_room_row['RoomNum']."</td>
                <td>".$dis_room_row['Bldg']."</td>
                <td>".$dis_room_row['RoomType']."</td>
                <td>".$dis_room_row['Rate']."</td>
                <td>".$dis_room_row['Availability']."/2</td>
                <td>".$dis_room_row['NoOfBoarders']."</td>
            </tr>";
          }
        } else {
          echo "<p>No Rooms</p>";
        }
      ?>
    </tbody>
  </table>
 
  <div>
  <h3>New Building Rooms</h3>
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
      </tr>
    </thead>
    <tbody>
      <?php
        $dis_room = mysqli_query($conn, "SELECT * FROM rooms WHERE Bldg= 'New Building'");

        if(mysqli_num_rows($dis_room) > 0){

          while ($dis_room_row = mysqli_fetch_assoc($dis_room)) {
            echo "<tr>
                <td>".$dis_room_row['RoomNum']."</td>
                <td>".$dis_room_row['Bldg']."</td>
                <td>".$dis_room_row['RoomType']."</td>
                <td>".$dis_room_row['Rate']."</td>
                <td>".$dis_room_row['Availability']."/8</td>
                <td>".$dis_room_row['NoOfBoarders']."</td>
            </tr>";
          }
        } else {
          echo "<p>No Rooms</p>";
        }
      ?>
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
      </tr>
    </thead>
    <tbody>
      <?php
        $dis_room = mysqli_query($conn, "SELECT * FROM rooms WHERE Bldg= 'Private Rooms'");

        if(mysqli_num_rows($dis_room) > 0){

          while ($dis_room_row = mysqli_fetch_assoc($dis_room)) {
            echo "<tr>
                <td>".$dis_room_row['RoomNum']."</td>
                <td>".$dis_room_row['Bldg']."</td>
                <td>".$dis_room_row['RoomType']."</td>
                <td>".$dis_room_row['Rate']."</td>
                <td>".$dis_room_row['Availability']."/8</td>
                <td>".$dis_room_row['NoOfBoarders']."</td>
            </tr>";
          }
        } else {
          echo "<p>No Rooms</p>";
        }
      ?>
    </tbody>
  </table>
 </div>
</div>

</body>
</html>