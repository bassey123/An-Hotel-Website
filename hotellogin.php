<?php
session_start();

include('connect/db.php');

if(isset($_POST['login'])){
$name=mysqli_real_escape_string($conn,htmlentities($_POST['uname']));
$password=mysqli_real_escape_string($conn,htmlentities($_POST['pwd']));
$pwd = md5($password);
if(!empty($name) && !empty($password)){
  $teachQuery = "SELECT * FROM authenticate WHERE username='$name' and password='$pwd'";
  $qryChk= mysqli_query($conn,$teachQuery);
  $rset = mysqli_fetch_array($qryChk);
  if(is_array($rset)){
    $_SESSION['name'] = $rset['username'];
  	header("Location:gallery.php");

  }
  else{
        //invalid email and/or password.
        $errormsg ="You have entered invalid username and/or password";
      echo "<h4 style='background-color: white; color: red; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 7em; left: 26em;'> $errormsg<span> &#33;</span></h4>";
      
  }
}
else{
  //fields cannot be empty
        $errormsg= "Username and Password fields cannot be blank";
    echo "<h4 style='background-color: white; color: red; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 7em; left: 26em;'> $errormsg<span> &#33;</span></h4>";
    
}
}


include('login.html');

?>