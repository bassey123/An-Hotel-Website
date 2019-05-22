<?php
session_start();

include('connect/db.php');

if($_SESSION['name'] == '' ){
    header("location: hotellogin.php");
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accomodations</title>
        <meta charset="utf-8">
        <meta http-equiv="U-XA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="w3.css">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .head{
                text-align: center;
                color: white;
                background-color: royalblue;
                padding-top: 0.5em;
                padding-bottom: 0.5em;
            }
            .overlay{
              position: absolute; 
              bottom: 35px; 
              background: rgba(0, 0, 0, 0.5); /* Black see-through */
              color: #f1f1f1; 
              width: 250px;
              transition: .5s ease;
              opacity: 0;
              font-size: 18px;
              text-align: center;
            }
            .w3-card-2:hover .overlay{
              opacity: 1;
            }
             form{
                width: 500px;
            }
            .modal{
                background-image: url(hotel6.jpg);
            }
            label{
                font-size: 1.2em;
                float: left;
            }
        </style>
    </head>
    <body>
      
        <nav class="navbar" style="margin-bottom: -0.1em; border-bottom: 1px solid #ddd;">
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
                        <div class="nav navbar-nav navbar-right" style="margin-top: 1em; margin-bottom: 1em; margin-left: -16em; margin-right: 8em; font-size: 20px; font-weight: bold; color: blue;"><?php echo "Welcome " .$_SESSION['name'] ?></div>
                        <a href="update.php"><button type="button" name="edit" class="btn btn-primary navbar-right"  style="margin-top: 1.3em; margin-right: 1em;">Edit Profile</button></a>
                       </div>
                 </div>
              </nav>

        
        
        <h1 class="head" style="margin-left: 15em; margin-right: 15em;">Book Now!</h1>
        
        <!----- Deluxe Rooms -------->
        <div id="deluxe" class="container">
            <h2 class="head">Deluxe Rooms</h2>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de1.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                <h4 class="w3-container">Daffodil</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de2.jfif" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Dahlia</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de3.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Daisy</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de4.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Daphne</h4>
                     </div></div>
            </div>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de5.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                <h4 class="w3-container">Dianella</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de6.jpg" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Dianthus</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de7.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Diascia</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/de8.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Dichondra</h4>
                     </div></div>
            </div>
        </div>
        
        <!----- Double Rooms ---->
        <div id="double" class="container">
            <h2 class="head">Standard Double Rooms</h2>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do1.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Hypericum</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do2.jfif" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Hollyhock</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do3.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Heather</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do4.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Helenium</h4>
                     </div></div>
            </div>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do5.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                <h4 class="w3-container">Heliotrope</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do6.jfif" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Hellebore</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do7.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Hydrangea</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/do8.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Hyacinth</h4>
                     </div></div>
            </div>
        </div>
        
        <!----- Single Rooms ------->
        <div id="single" class="container">
            <h2 class="head">Standard Single Rooms</h2>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s1.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Saponaria</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s2.jfif" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Scabiosa</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s3.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Scaevola</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s4.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px"> 
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Statice</h4>
                     </div></div>
            </div>
            
            <div class="w3-row-padding w3-margin-top">
                 <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s5.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                <h4 class="w3-container">Sedum</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s6.jfif" class="img-rounded" alt="Cinque Terre" style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Solidago</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s7.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Snapdragon</h4>
                     </div></div>
                <div class="col-md-3">
                    <div class="w3-card-2">
             <img src="gallery/s8.jfif" class="img-rounded" alt="Cinque Terre"  style="width: 100%; height: 200px">
                        <div class="overlay"><a href="book.php"  style="color: white;">Click here to book</a></div>
                        <h4 class="w3-container">Snowdrop</h4>
                     </div></div>
            </div>
        </div>
    </body>
</html>