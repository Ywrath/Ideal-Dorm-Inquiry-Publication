<!DOCTYPE html>
<?php
    include('connection.php');
?>
<html>
<head>
	<title>Ideal Dorm Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel ="icon" href="img/homeIcon.png">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
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
<div class="container">
<div>
  <iframe align="right" src="Carousel.html" width="700" height="500" frameborder="0" scrolling="no"></iframe>
  </div>

<span class="border-left">
    <div class = "row">
	   <div class = "text-left">
      <br>
      <br>
      <br>
		  <p>Ideal Dorm is a mixed dormitory located <br> 
		  in front of Central Philippine University, Jaro, Iloilo. <br>
		  Ideal Dorm has three buildings and the rates of rooms <br>
		  vary depending on the building you will choose. </p>

		  <p>The buildings inside the dormitory are New Building, <br>
		  Old Building, and Private Rooms.</p>	

		  <p>The dormitory enforces a strict 10:00 PM Curfew for its <br>
			dormers for their safety and to avoid non-dormers from <br>
			getting inside during curfew hours</p>
	   </div>
    </div>
</span>
</div>
 
 <br><br><br><br><br><br><br><br><br>

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

</body>
</html>