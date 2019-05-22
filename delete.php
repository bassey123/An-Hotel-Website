<?php
include("connect/db.php");

$delete_id = $_GET['del'];
$delete_query = "DELETE FROM authenticate WHERE userid = '$delete_id'";
$run = mysqli_query($conn, $delete_query);
if($run){
	echo "<script>window.open('admin.php?deleted=user has been deleted','_self')</script>";
}

?>