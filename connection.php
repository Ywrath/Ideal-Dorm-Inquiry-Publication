<?php
	
	$conn = mysqli_connect('localhost', 'root', '', 'ideal_dorm');

	
    $disp_contNum = mysqli_query($conn, "SELECT * FROM admin");
    $disp_row = mysqli_fetch_assoc($disp_contNum);

	//$conn = mysqli_connect('localhost', 'root', '');
	//mysqli_select_db($conn, 'ideal_dorm');
?>
