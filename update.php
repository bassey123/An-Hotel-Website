<?php

session_start();

$name = $_SESSION['name'];

include('connect/db.php');

if($_SESSION['name'] == '' ){
    header("location: hotellogin.php");
}

extract($_POST);
if(isset($updt)){
	$upd = "UPDATE authenticate SET fullname = '$fname', email = '$email', phonenumber = '$num', address = '$add', username = '$uname', password = '$pwd'  WHERE username = '$name' ";
	$conn = mysqli_query($conn, $upd);
     echo "<h4 style='background-color: white; color: blue; padding: 0.5em 0.5em 0.5em 0.5em; position: absolute; top: 4em; left: 27em;'>Your Profile has been Updated successfully!</h4>";
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<meta charset="utf-8">
    <meta http-equiv="U-XA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        form{
            width: 400px;
        }
        body{
            background-image: url(hotel6.jpg);
        }
        .panel-default{
            width: 500px;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 30em;
        }
        legend{
            font-size: 2.5em;
            text-align: center;
        }
        label{
            font-size: 1.2em;
            float: left;
        }
        .panel-body{
        }   
    </style>
</head>
<body>


	<nav class="navbar" style="margin-bottom: 0.1em; border-bottom: 1px solid #ddd; background-color: white;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="hotel.php" style="margin-top: -0.5em;"><img src="brand.png" height="50em"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" style="margin-left: 3em; margin-top: 0.5em; font-size: 15px; font-weight: bold;">
                            <li class="active" style="padding-right: 3em;"><a href="hotel.php">HOME <span class="sr-only">(Current)</span></a></li>
                            <li style="padding-right: 3em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu2" aria-haspopup="true" aria-expanded="false">ACCOMODATIONS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu2" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">DELUXE ROOMS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">STANDARD DOUBLE ROOMS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">STANDARD SINGLE ROOMS</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 3em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu5" aria-haspopup="true" aria-expanded="false">DINING</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu5" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">Z-BAR</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">THE LOBBY</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">UYO TERRACE</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 3em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu4" aria-haspopup="true" aria-expanded="false">EVENTS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu4" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">WEDDINGS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">MEETINGS AND EVENTS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">HEALTHY MEETINGS</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 3em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu3" aria-haspopup="true" aria-expanded="false">WELLNESS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu3" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">SPA</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">POOL</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">FITNESS CENTER</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="nav navbar-nav navbar-right" style="margin-top: 1em; margin-right: 3em; font-size: 20px; font-weight: bold; color: blue;">
                            <?php 
                            echo "Edit Your Profile " .$_SESSION['name'];
                            if(isset($updt)){
                                echo "<h4 style='background-color: white; color: blue; padding: 0.5em 2em 1em 2em; position: absolute; right: 2em; top: 0;'>Please <a href='logout.php'>Logout</a> to continue.</h4>";
                            }
                            ?>
                        </div>
                       </div>
                 </div>
              </nav>




    <center class="container panel panel-default">
        <form action="update.php" method="POST">
            <legend>Edit Profile</legend>

            <div class="panel-body col-md-6">
            <label class="lab">Full Name:</label>
          <input type="text" name="fname" class="form-control" placeholder="Your New Full Name" required><br>

                <label class="lab">Address:</label>
          <input type="text" name="add" class="form-control" placeholder="Your New Address" required><br>
                
                <label class="lab">Username:</label>
          <input type="text" name="uname" class="form-control" placeholder="Your New Username" required><br>
                </div>
                
                <div class="panel-body col-md-6">
                    <label class="lab">Email:</label>
          <input type="email" name="email" class="form-control" placeholder="Your New Email" required><br>
                    
                <label class="lab">Phone Number:</label>
          <input type="tel" name="num" class="form-control " placeholder="Your New Telephone" required><br>

                <label class="lab">Password:</label>
          <input type="password" name="pwd" class="form-control" placeholder="Your New Password" required><br>
            </div>
            
        <button type="submit" name="updt" class="btn btn-success reg" style="margin-bottom: 1em; margin-top: -1em;">Save Changes</button>
        </form>
    </center>
</body>
</html>