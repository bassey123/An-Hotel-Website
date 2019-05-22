<?php
session_start();

include("connect/db.php");

if($_SESSION['name'] == '' ){
    header("location: hotellogin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Receipt</title>
    <meta charset="utf-8">
    <meta http-equiv="U-XA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>

        body{
            background-image: url(hotel6.jpg);
        }
        .panel-default{
        	width: 500px;
        	margin-left: 30.5em;
        	margin-top: 3em;
        }
        legend{
            font-size: 2em;
            padding-top: 6px;
            padding-bottom: 6px;
        }
        .head{
            font-size: 16px;
            margin-right: 2em;
            margin-left: 2em;
            margin-top: 1.5em;
        }
        .echo{ 
            font-size: 16px;
            margin-top: 1em;
            margin-right: 1em;
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
                    <ul class="nav navbar-nav" style="margin-left: 2em; margin-top: 0.5em; font-size: 15px; font-weight: bold;">
                        <li class="active" style="padding-right: 2em;"><a href="hotel.php">HOME <span class="sr-only">(Current)</span></a></li>
                        <li style="padding-right: 2em;" class="dropdown w3-dropdown-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu2" aria-haspopup="true" aria-expanded="false">ACCOMODATIONS</a>
                            <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu2" style="text-align: center;">
                                <li><a href="#" class="w3-bar-item w3-button">DELUXE ROOMS</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">STANDARD DOUBLE ROOMS</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">STANDARD SINGLE ROOMS</a></li>
                            </ul>
                        </li>
                        <li style="padding-right: 2em;" class="dropdown w3-dropdown-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu5" aria-haspopup="true" aria-expanded="false">DINING</a>
                            <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu5" style="text-align: center;">
                                <li><a href="#" class="w3-bar-item w3-button">Z-BAR</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">THE LOBBY</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">UYO TERRACE</a></li>
                            </ul>
                        </li>
                        <li style="padding-right: 2em;" class="dropdown w3-dropdown-hover">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu4" aria-haspopup="true" aria-expanded="false">EVENTS</a>
                            <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu4" style="text-align: center;">
                                <li><a href="#" class="w3-bar-item w3-button">WEDDINGS</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">MEETINGS AND EVENTS</a></li>
                                <li class="divider" role="separator"></li>
                                <li><a href="#" class="w3-bar-item w3-button">HEALTHY MEETINGS</a></li>
                            </ul>
                        </li>
                        <li style="padding-right: 2em;" class="dropdown w3-dropdown-hover">
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
                    <div class="nav navbar-nav" style="margin-top: 1em; margin-bottom: 1em;  margin-right: 2em; font-size: 20px; font-weight: bold; color: blue;"><?php echo "Print your receipt " .$_SESSION['name'] ?></div>
                    <a href="logout.php"><button type="submit" class="btn btn-primary navbar=right" style="margin-top:1.2em;">Logout</button></a>
                   </div>
             </div>
          </nav>
  
    
    <center class="panel panel-default">
        <div id="free">
        <legend>Receipt</legend>
        <table>
        <tr>
            <td><p class="head"><strong>Username:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['name'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Booking Number:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['id'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Arrival:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['arriv'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Departure:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['dprt'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Number of People:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['pple'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Type of Room:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['rm'];?></div></td>
        </tr>
        <tr>
            <td><p class="head"><strong>Price:</strong></p></td>
            <td><div class="echo"><?php echo $_SESSION['pr'];?></div></td>
        </tr>
    </table>
        </div><br><br>
        <button class='btn btn-primary' onClick=printDiv('free'); style="margin-bottom: 1em; margin-top: -1em;">PRINT</button>
    </center>
    

                    
    <script>
        function printDiv(free){
			var printContents = document.getElementById(free).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		    }
    </script>
</body>
</html>