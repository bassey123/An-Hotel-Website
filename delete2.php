<?php
include("connect/db.php");

$delete_id = $_GET['del'];
$delete_query = "DELETE FROM booking WHERE bookingno = '$delete_id'";
$run = mysqli_query($conn, $delete_query);
if($run){
	echo "<script>window.open('reserve.php?deleted=user has been deleted','_self')</script>";
}

?>