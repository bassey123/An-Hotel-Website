<?php
session_start();

include("connect/db.php");

if($_SESSION['name'] == '' ){
    header("location: hotellogin.php");
}

$name = $_SESSION['name'];

extract($_POST);
if(isset($book)){
    $query = "INSERT INTO booking VALUES ('', '$name', '$room', '$arrival', '$depart', '$people', '$price')";
    $conn->query($query);
    $last_id = $conn->insert_id;
    header("location:receipt.php");
    $_SESSION['id'] = $last_id;
    $_SESSION['arriv'] = $_POST['arrival'];
    $_SESSION['pple'] = $_POST['people'];
    $_SESSION['dprt'] = $_POST['depart'];
    $_SESSION['rm'] = $_POST['room'];
    $_SESSION['pr'] = $_POST['price'];
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Book Now</title>
        <meta charset="utf-8">
        <meta http-equiv="U-XA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .form-group{
                width: 200px;
                padding-bottom: 1em;
            }
            body{
                background-image: url(hotel6.jpg);
            }
            .panel-default{
                width: 500px;
                margin-top: 10em;
                margin-left: 30em;
                margin-right: 30em;
            }
            legend{
                font-size: 2.5em;
                margin-top: 0.4em;
            }
            label{
                font-size: 1.2em;
                float: left;
            }
            .panel-body{
                padding-bottom: 1em;
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
                        <ul class="nav navbar-nav" style="margin-left: 4em; margin-top: 0.5em; font-size: 15px; font-weight: bold;">
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
                        <div class="nav navbar-nav" style="margin-top: 1em; margin-bottom: 1em; margin-right: 2em; font-size: 20px; font-weight: bold; color: blue;"><?php echo "Book Now " .$_SESSION['name'] ?></div>
                        <a href="logout.php"><button type="submit" class="btn btn-primary navbar=right" style="margin-top:1.2em;">Logout</button></a>
                       </div>
                 </div>
              </nav>

      
        
        <center class="panel panel-default">
        <form action="book.php" method="POST" name="myform">
            <legend>Reservation</legend>
            
            <div class="panel-body col-md-6">
            <div class="form-group">
                <label>Arrival</label>
                <input type="date" class="form-control" name="arrival" required>
            </div>
                <div class="form-group">
                <label>Number of People</label>
                <select class="form-control" name="people" onchange="myFunction()">
                    <option>Number of People</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    
                </select>
            </div>
            </div>
            <div class="panel-body col-md-6">
                <div class="form-group">
                <label>Departure</label>
                <input type="date" class="form-control" name="depart" required>
            </div>
            <div class="form-group">
                <label>Type of Room</label>
                <select class="form-control" name="room" onchange="myFunction()">
                    <option>Type of Room</option>
                    <option>Deluxe Room</option>
                    <option>Standard Double Room</option>
                    <option>Standard Single Room</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label style="margin-left: -1em;">Price</label>
                <input type="text" name="price" value="" readonly>
            </div>
            <button type="submit" name="book" class="btn btn-primary" style="margin-bottom: 1em;">Submit</button>
        </form>
            </center>
        
        <script>
            
                function myFunction() {
                    var x = document.forms["myform"]["room"].value;
                    var y = document.forms["myform"]["people"].value;
            if( x == "Deluxe Room" && y == 1){
            	document.forms["myform"]["price"].value = "NGN 7000";

            } else if( x == "Deluxe Room" && y == 2){
                document.forms["myform"]["price"].value = "NGN 8000";

            } else if( x == "Deluxe Room" && y == 3){
                document.forms["myform"]["price"].value = "NGN 9000";

            } 
            
            else if(x == "Standard Double Room" && y == 1){
                document.forms["myform"]["price"].value = "NGN 6000";

            } else if(x == "Standard Double Room" && y == 2){
                document.forms["myform"]["price"].value = "NGN 4000";

            } else if(x == "Standard Double Room" && y == 3){
                document.forms["myform"]["price"].value = "NGN 5000";

            } 

            else if(x == "Standard Single Room" && y == 1){
                document.forms["myform"]["price"].value = "NGN 1500";
            } else if(x == "Standard Single Room" && y == 2){
                document.forms["myform"]["price"].value = "NGN 2500";
            } else if(x == "Standard Single Room" && y == 3){
                document.forms["myform"]["price"].value = "NGN 3500";
            } 
        }
  
        </script>
        
    </body>
</html>