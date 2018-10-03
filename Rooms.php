<!DOCTYPE html>
<html>
<head>
	<title>Rooms</title>
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
<div class="container">  
  <div>
  <h3>Rooms</h3>
</div>

<div>
  <h4>Old Building Female</h4>
  <table class = "table table-hover">
    <thead>
      <tr>
        <th scope="col">Room</th>
        <th scope="col">Rate</th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h4>Old Building Male</h4>
  <table class = "table table-hover">
    <thead>
      <tr>
        <th scope="col">Room</th>
        <th scope="col">Rate</th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">5</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>2,500 php per month</td>
        <td>0/2</td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h4>New Building Female</h4>
  <table class = "table table-hover">
    <thead>
      <tr>
        <th scope="col">Room</th>
        <th scope="col">Rate</th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
       <tr>
        <th scope="row">5</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
       <tr>
        <th scope="row">6</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h4>New Building Male</h4>
  <table class = "table table-hover">
    <thead>
      <tr>
        <th scope="col">Room</th>
        <th scope="col">Rate</th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">7</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
       <tr>
        <th scope="row">11</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
       <tr>
        <th scope="row">12</th>
        <td>3,000 php per month</td>
        <td>0/8</td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h4>Private Rooms</h4>
  <table class = "table table-hover">
    <thead>
      <tr>
        <th scope="col">Room</th>
        <th scope="col">Rate</th>
        <th scope="col">Availability</th>
      </tr>
    </thead>
    <tbody>
     <tr>
      <th scope="row">1</th>
      <td>7,000 php per month</td>
      <td>0/2</td>
     </tr>
     <tr>
        <th scope="row">2</th>
      <td>7,000 php per month</td>
      <td>0/2</td>
     </tr>
    </tbody>

  </table>
</div>
</div>


</body>
</html>