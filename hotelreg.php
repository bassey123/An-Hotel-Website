<?php
session_start();

include('connect/db.php');
$errors = array();

extract($_POST);
if(isset($reg)){
    
  //first check the database to make sure a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM authenticate WHERE username='$uname' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
    
  if($user) { // if user exists
    if($user['username'] === $uname) {
      array_push($errors, "Username already exists");
        echo "<h4 style='background-color: white; color: red; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 7em; left: 31.5em;'>Username already exists !</h4>";
    }

    elseif($user['email'] === $email) {
      array_push($errors, "email already exists");
        echo "<h4 style='background-color: white; color: red; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 7em; left: 31.5em;'> This Email already exists !</h4>";
    }
  }
    
    // Finally, register user if there are no errors in the form
    if(count($errors) == 0){
    $pad = md5($pwd);
	$query = "INSERT INTO authenticate VALUES ('', '$fname', '$email', '$num', '$add', '$uname', '$pad')";
	$conn = mysqli_query($conn, $query);
    
	echo "<h4 class='text-center' style='background-color: white; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 7em; left: 26em;'>Registered Successfully! Please <a href='hotellogin.php'>Login</a> to Continue.</h4>";
 }
}


include('reg.html');

?>