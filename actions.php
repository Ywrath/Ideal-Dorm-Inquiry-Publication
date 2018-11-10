<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ideal_dorm');
	 //include connection

	if (isset($_GET['del_room']) && is_numeric($_GET['del_room'])) {
		
		$del_room = $_GET['del_room']; //get url name
		$del_room_sql = mysqli_query($conn, "DELETE FROM rooms WHERE ID = '$del_room'");
		
		echo "<script>
			alert('Successfully deleted a room');
		</script>
		<meta http-equiv='refresh' content='0; url=landlord_rooms.php'>"; //refreshes page
	
	} elseif (isset($_GET['del_room_new']) && is_numeric($_GET['del_room_new'])) {
		
		$del_room_new = $_GET['del_room_new']; //get url name
		$del_room_sql = mysqli_query($conn, "DELETE FROM rooms WHERE ID = '$del_room_new'");
		echo "<script>
			alert('Successfully deleted a room');
		</script>
		<meta http-equiv='refresh' content='0; url=landlord_rooms.php'>"; //refreshes page
	
	} elseif (isset($_GET['del_room_private']) && is_numeric($_GET['del_room_private'])) {
		
		$del_room_private = $_GET['del_room_private'];
		$del_room_sql = mysqli_query($conn, "DELETE FROM rooms WHERE ID = '$del_room_private'");

		echo "<script>
			alert('Successfully deleted a room');
		</script>
		<meta http-equiv='refresh' content='0; url=landlord_rooms.php'>"; //refreshes page
	}
?>