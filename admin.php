<?php
session_start();

include("connect/db.php");

if($_SESSION['nem'] == '' ){
    header("location: adminlogin.php");
}

/*
extract($_POST);
if (isset($schbtn)) {
	$sel = "SELECT * FROM authenticate WHERE username LIKE '$sch%'";
	$conn = mysqli_query($conn, $sel);
	while ($selec = mysqli_fetch_array($conn)){
		echo "
		<table>
		<tr>
		<td>".$selec['username']."</td>
		</tr>
		</table>
		";
	}
}*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Adminstrator</title>
        <meta charset="utf-8">
        <meta http-equiv="U-XA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="w3.js"></script>
        <style>
            body{
                background-image: url(hotel6.jpg);
            }
            .head{
                text-align: center;
                color: white;
                background-color: royalblue;
                padding-top: 0.5em;
                padding-bottom: 0.5em;
            }
            .search{
                border-radius: 4px;
                background-image: url('searchicon.png');
                background-position: 10px 6px; 
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                margin-top: 0.6em;
            }
        </style>
    </head>
    <body>
        <nav class="navbar" style="margin-bottom: -0.1em; border-bottom: 1px solid #ddd; background-color: white;">
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
                        <ul class="nav navbar-nav" style="margin-left: 1.5em; margin-top: 0.5em; font-size: 15px; font-weight: bold;">
                            <li class="active" style="padding-right: 1.2em;"><a href="hotel.php">HOME <span class="sr-only">(Current)</span></a></li>
                            <li style="padding-right: 1.2em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu2" aria-haspopup="true" aria-expanded="false">ACCOMODATIONS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu2" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">DELUXE ROOMS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">STANDARD DOUBLE ROOMS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">STANDARD SINGLE ROOMS</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 1.2em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu5" aria-haspopup="true" aria-expanded="false">DINING</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu5" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">Z-BAR</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">THE LOBBY</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">UYO TERRACE</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 1.2em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu4" aria-haspopup="true" aria-expanded="false">EVENTS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu4" style="text-align: center;">
                                    <li><a href="#" class="w3-bar-item w3-button">WEDDINGS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">MEETINGS AND EVENTS</a></li>
                                    <li class="divider" role="separator"></li>
                                    <li><a href="#" class="w3-bar-item w3-button">HEALTHY MEETINGS</a></li>
                                </ul>
                            </li>
                            <li style="padding-right: 1.2em;" class="dropdown w3-dropdown-hover">
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
                        <div class="nav navbar-nav" style="margin-top: 0.9em; font-size: 20px; font-weight: bold; color: blue;"><?php echo "Welcome " .$_SESSION['nem'] ?></div>
                        
                        <form action="admin.php" method="POST" class="navbar-form navbar-right" role="search">
                          <input oninput="w3.filterHTML('#users', '.item', this.value)" type="text" name="search" class="form-control search" placeholder="Search..">
                        </form>
                        
                        <a href="logout.php"><button type="submit" class="btn btn-primary navbar=right" style="margin-left: 1em; margin-top: 1em;">Logout</button></a>
                        
                       </div>
                 </div>
            
              </nav>
        
            
        <div class="container panel" style="margin-top: 2em;">
            <h2 class="head">Users <span class=" glyphicon glyphicon-user"></span></h2>
            
            <table style='width:100%;' class='table table-striped'>
                <tr>
                    <th style='padding-top: 1em; padding-bottom: 1.5em;'>User ID</th>
                    <th style='padding-top: 1em; padding-bottom: 1.5em;'>Full Name</th>
                    <th style='width: 180px; padding-top: 1em; padding-bottom: 1.5em;'>Email</th>
                    <th style='width: 180px; padding-top: 1em; padding-bottom: 1.5em;'>Telephone</th>
                    <th style='width: 150px; padding-top: 1em; padding-bottom: 1.5em;'>Address</th>
                    <th style='width: 160px; padding-top: 1em; padding-bottom: 1.5em;'>Username</th>
                    <th style='width: 110px; padding-top: 1em; padding-bottom: 1.5em;'>Delete Users</th>
                </tr>
            </table>
            
            <?php
                $sql = "SELECT * FROM authenticate";
                if($conn = mysqli_query($conn,$sql)){
                while ($look = mysqli_fetch_array($conn)){
                    $userid = $look[0];

                    echo 
                    "<table style='width:100%;' class='table table-hover' id='users'>
                    <tr class='item'>
                    <td style='width:300px; padding-top:10px; padding-bottom:10px;'>".$look['userid']."</td>
                    <td style='width:300px; padding-top:10px; padding-bottom:20px;'>".$look['fullname']."</td>
                    <td style='width:300px; padding-top:10px; padding-bottom:10px;'>".$look['email']."</td>
                    <td style='width:300px; padding-top:10px; padding-bottom:10px;'>".$look['phonenumber']."</td>
                    <td style='width:300px; padding-top:10px; padding-bottom:10px;'>".$look['address']."</td>
                    <td style='width:300px; padding-top:10px; padding-bottom:10px;'>".$look['username']."</td>
                    <td style='padding-top:10px; padding-bottom:10px;'><a href='delete.php?del= $userid'><button type='submit' class='btn btn-primary'>Delete</button></a></td>
                    </tr>
                    </table>";

                }
            }

                ?>
            
        </div>
        
       <div class="container panel" style="margin-top: 2em;">
            <a href="reserve.php"><h2 class="head">Reservations <span class=" glyphicon glyphicon-home"></span></h2></a>
        </div>
        
        
    </body>
</html>