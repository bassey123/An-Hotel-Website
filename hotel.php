<?php
session_start();

include("connect/db.php");

extract ($_POST);

if(isset($book)){
    header('location:hotellogin.php');
}

if(isset($contact)){
    echo "<h4 style='color: blue; position: absolute; top: 9px; left: 24em;'>Thank you, We will give you a feedback.</h4>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="U-XA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SpotLight Hotel</title>
        <link rel="stylesheet" href="w3.css">
        <link href="main.css" rel="stylesheet" type="text/css" media="all">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="font/font-awesome/css/font-awesome.css" rel="stylesheet">
        <script src="layout/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
            <header>
            <!----------- first navbar ------------->
            <nav class="navbar" style="border-bottom: 2px solid #ddd;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="btn btn-primary navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                            <span class="sr-only" style="background-color: blue;">Toggle Navigation</span>
                            <span class="icon-bar" style="background-color: blue;"></span>
                            <span class="icon-bar" style="background-color: blue;"></span>
                            <span class="icon-bar" style="background-color: blue;"></span>
                        </button>
                        <a href="hotel.php" class="navbar-brand" style="font-weight: bold;">SPOTLIGHT HOTEL AND RESORT</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                        <ul class="nav navbar-nav" style="margin-left: 32em; padding-right: 20px; font-size: 15px; font-weight: bold;">
                            <li><a href="hotelreg.php">REGISTER</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">CONTACT US</a></li>
                        </ul>
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                          <input type="text" name="search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                      
                    </div>
                </div>
            </nav>
                <!--<form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search Site">
                            </div>
                            <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
                        </form>  -->
                
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="hotel.php" method="post" class="contact-form">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: center; text-shadow: 0 1px 2px black; color: blue; font-weight: bold; font-size: 25px;">CONTACT US</h4>
                    </div>
                    <!-- Body -->
                    <div class="modal-body" style="margin: 0 1em 0 1em;">
                  
                        <div class="row">
                            <div class="col-sm-4" style="padding-left: 0;">
                                 <input type="name" class="form-control" placeholder="Name (required)" required>
                            </div>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" placeholder="E-Mail (required)" required>
                            </div>
                            <div class="col-sm-4" style="padding-right: 2em;">
                                <input type="subject" class="form-control" placeholder="Subject (optional)">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="message" style="padding-right: 2em;"><textarea rows="3" style="max-height: 8em;" class="form-control" id="message" placeholder="Message (required)" required></textarea></div>
                        </div>
                    
                    </div>
                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="contact" class="btn btn-primary">Send Message</button>
                    </div>
                </div>
                    </form>
            </div>
        </div><!-- End of Modal -->
                
            <!--------- second navbar ------->
        <nav class="navbar" data-spy="affix" data-offset-top="60" style="margin-top: -1em; margin-bottom: -0.1em; border-bottom: 1px solid #ddd;">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="btn btn-primary navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only" style="background-color: blue;">Toggle Navigation</span>
                            <span class="icon-bar" style="background-color: blue;"></span>
                            <span class="icon-bar" style="background-color: blue;"></span>
                            <span class="icon-bar" style="background-color: blue;"></span>					
                        </button>
                        <a class="navbar-brand" href="hotel.php" style="margin-top: -0.5em;"><img src="brand.png" height="50em"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" style="margin-left: 6em; margin-top: 0.5em; font-size: 15px; font-weight: bold;">
                            <li class="active" style="padding-right: 3em;"><a href="hotel.php">HOME <span class="sr-only">(Current)</span></a></li>
                            <li style="padding-right: 3em;" class="dropdown w3-dropdown-hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu2" aria-haspopup="true" aria-expanded="false">ACCOMODATIONS</a>
                                <ul class="dropdown-menu w3-dropdown-content w3-bar-block" aria-labelledby="dropdownMenu2" style="text-align: center;">
                                    <li><a href="accomodation.html" class="w3-bar-item w3-button">DELUXE ROOMS</a></li>
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
                        <div class="dropdown nav navbar-nav navbar-right" style="margin-top: 1em; margin-bottom: 1em;">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" role="button" id="dropdownMenu1" aria-haspopup="true" aria-expanded="true">RESERVATIONS</button>
                                
                                    <form action="hotel.php" method="POST" class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width: 20em; padding: 1em 1em 1em 1em;">
                                        <div class="form-group">
                                            <label>ARRIVAL</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>DEPARTURE</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>NUMBER OF ADULTS</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NUMBER OF CHILDREN</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                        <button type="submit" name="book" class="btn btn-primary" style="margin-left: 50px;">
                                            CHECK AVAILABILITY
                                        </button>
                                    </form>
                             </div>
                       </div>
                 </div>
              </nav>
            </header>
        
            
            <!-------------- carousel -------------->
                 <div  id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="hotel1.jpg" alt="pics1">
                    <div class="carousel-caption">
                        <a><h1>Welcome to SpotLight Hotel and Resort</h1></a>
                    </div>
                </div>

                <div class="item">
                    <img src="hotel2.jpg" alt="pics2">
                    <div class="carousel-caption">
                        <a><h1>Great Reception as you are Welcome</h1></a>
                    </div>
                </div>

                <div class="item">
                    <img src="hotel3.jpg" alt="pics3">
                    <div class="carousel-caption">
                        <a><h1>Awesome Kitchen and Dining</h1></a>
                    </div>
                </div>

                <div class="item">
                    <img src="hotel4.jpg" alt="pics4">
                    <div class="carousel-caption">
                        <a><h1>Fitness Center for your Wellness</h1></a>
                    </div>
                </div>
                
                <div class="item">
                    <img src="hotel5.jpg" alt="pics5">
                    <div class="carousel-caption">
                        <a><h1>Great Centers for your Events and Meetings</h1></a>
                    </div>
                </div>
                
                <div class="item">
                    <img src="hotel6.jpg" alt="pics6">
                    <div class="carousel-caption">
                        <a><h1>Awesome Pool for your Wellness</h1></a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
           </div><!-- End of Carousel -->
            
         <!-- Wellness -->
            <div style="text-align: center; font-weight: bold; color: blue; margin-top: 2em; margin-bottom: 2em;"><h1>We Care about your Wellness</h1></div>
        
        <div class="slideanim">
           <div class="col-md-4">
          <div class="container wel"  style="margin: 2em 0 3em 0">
              <a><img src="hotel10.jpg" alt="acc1" class="image thumbnail"></a>
              <div class="overlay">Great Spa for your Wellness</div>
            </div>
               </div>
            <div class="col-md-4">
            <div class="container wel"  style="margin: 2em 0 3em 0">
              <a><img src="hotel11.jpg" alt="acc2" class="image img-rounded"></a>
              <div class="overlay">Swimming Pool for your Refreshment</div>
            </div>
            </div>
                <div class="col-md-4">
            <div class="container wel"  style="margin: 2em 0 3em 0">
              <a><img src="hotel12.jpg" alt="acc3" class="image img-circle"></a>
              <div class="overlay">Golf Resort for your Leisure</div>
            </div>
            </div>
        </div>
        
            <div class="parallax"></div>
            
            <!-- Accomodation -->
            <div style="margin-top: 3em; margin-bottom: 2em;">
                <h1 style="text-align: center;  font-weight: bold; color: blue; float: left; padding-left:2em; margin-left: 12.5em;">ACCOMODATION</h1>
                 <h3 style="text-align: center; font-weight: bold; color: blue; clear: both;">You Can Choose The Room You Prefer</h3>
            </div>
        
        <div id="container" class="slideanim">
            <div id="sliderbox">
                <img src="hotel7.jpg">
                <div class="divider"></div>
                <img src="hotel13.jpg">
                <div class="divider"></div>
                <div class="name">
                    <h1>DELUXE ROOM</h1>
                    <h3>Enjoy the awesome comfort of our Deluxe Room with Breakfast served at your bed side.</h3></div>>
                <div class="divider"></div>
                <img src="hotel8.jpg">
                <div class="divider"></div>
                <img src="hotel14.jpg">
                <div class="divider"></div>
                <div class="name">
                    <h1>STANDARD DOUBLE ROOM</h1>
                    <h3>Enjoy the great comfort of our Standard Double Room with free WiFi</h3></div>
                <div class="divider"></div>
                <img src="hotel9.jpg">
                <div class="divider"></div>
                <img src="hotel15.jpg">
                <div class="divider"></div>
                <div class="name">
                    <h1>STANDARD SINGLE ROOM</h1>
                    <h3>Enjoy the special comfort of our Standard Single Room with a warm bath</h3></div>
            </div>
        </div>
        
        <!--<div>
            <div class="container acc" style="margin-left: 10em; padding-bottom: 3em;">
                <a><img src="hotel7.jpg" alt="well1" width="300px" height="200px" class="img-rounded"></a>
                <div class="overlay" style="margin-left: 18.5em; margin-bottom: 2em;">DELUXE ROOM</div>
                <div class="bath" style="margin-left: 30em"><a><img src="hotel13.jpg" alt="bath1" width="300px" height="200px" class="img-rounded"></a></div>
            </div>
            <div  class="container acc" style="margin-left: 10em; padding-bottom: 3em;">
                <a><img src="hotel8.jpg" alt="well2" width="300px" height="200px" class="img-rounded"></a>
                <div class="overlay" style="margin-left: 18.5em; margin-bottom: 2em;">STANDARD DOUBLE ROOM</div>
                <div class="bath" style="margin-left: 30em"><a><img src="hotel14.jpg" alt="bath2" width="300px" height="200px" class="img-rounded"></a></div>
            </div>
            <div  class="container acc" style="margin-left: 10em;">
                <a><img src="hotel9.jpg" alt="well3" width="300px" height="200px" class="img-rounded"></a>
                <div class="overlay" style="margin-left: 18.5em; margin-bottom: .5em;">STANDARD SINGLE ROOM</div>
                <div class="bath" style="margin-left: 30em"><a><img src="hotel15.jpg" alt="bath3" width="300px" height="200px" class="img-rounded"></a></div>
            </div>
        
            <div class="scrol" style="font-size: 40px; margin-left: 32em; width: 50px; padding-left: 6px; padding-top: 5px; background-color: #ddd; border-radius: 30px";>
                <a href="#top" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
            </div>
        </div>-->
        
        <!-- What our costumers says-->
        <div class="container text-center">
            <h2 style="color: blue; margin-bottom: -1em;">What our customers say</h2>
      <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel2" data-slide-to="0" class="active" style="border-color: blue;"></li>
          <li data-target="#myCarousel2" data-slide-to="1" style="border-color: blue;"></li>
          <li data-target="#myCarousel2" data-slide-to="2" style="border-color: blue;"></li>
        </ol>

        <!-- Wrapper for slides-->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4 style="font-size: 19px; line-height: 1.375em; font-weight: 400; font-style: italic; margin: 70px 0;">"This hotel is the best. I am so happy with the result!"<br><span style="font-style: normal;">Michael Roe, Vice President</span></h4>
          </div>
          <div class="item">
            <h4 style="font-size: 19px; line-height: 1.375em; font-weight: 400; font-style: italic; margin: 70px 0;">"One word... WOW!!"<br><span style="font-style: normal;">John Doe, Salesman, Rep Inc</span></h4>
          </div>
          <div class="item">
            <h4 style="font-size: 19px; line-height: 1.375em; font-weight: 400; font-style: italic; margin: 70px 0;">"Could I... BE any more happy with this hotel?"<br><span style="font-style: normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
          </div>
        </div>

        <!-- Left and right controls-->
        <a class="left carousel-control" style="background-image: none; color: blue; margin-left: 6em;" href="#myCarousel2" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" style="background-image: none; color: blue; margin-right: 6em;" href="#myCarousel2" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
           
        <!-- Back to top button -->
        <div class="scrol" style="font-size: 40px; margin-left: 32em; width: 50px; padding-left: 6px; padding-top: 5px; background-color: #ddd; border-radius: 30px";>
            <a href="#top" title="Back To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
        
            <!-- Footer -->
            <footer class="slideanim" style="margin: 2em 0em 1em 0em;">
            <div class="container-fluid" id="free">
                <div class="row" style="background-color: #eee;">
                    <div class="col-md-6" style="color: blue;">
                        <h3 style="padding-left: 1.5em;">VISIT US:</h3>
                        <ul style="padding-bottom: 1em;">
                        <li style="list-style: none; padding-bottom: 1em;"><span class="glyphicon glyphicon-map-marker" style="font-size: 20px; color: black; padding-right: 1em;"></span> <a>#47 Nmaniba Road, Uyo, Akwa Ibom State.</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="glyphicon glyphicon-envelope" style="font-size: 20px; color: black; padding-right: 1em;"></span> <a>spotlighthotel@gmail.com</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="glyphicon glyphicon-phone" style="font-size: 20px; color: black; padding-right: 1em;"></span> <a>&#43;234-132-3586-472</a></li>
                            <li style="list-style: none; padding-bottom: 1em;"><span class="fa fa-whatsapp" style="font-size: 25px; color: black; padding-right: 1em;"></span> <a>&#43;234-918-3874-638</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="fa fa-facebook-official" style="font-size: 25px; color: black; padding-right: 1em;"></span> <a>SpotLight Hotel</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="fa fa-twitter-square" style="font-size: 25px; color: black; padding-right: 1em;"></span> <a>@spotlighthotel</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="fa fa-instagram" style="font-size: 25px; color: black; padding-right: 1em;"></span> <a>SpotLight Hotel</a></li>
                        <li style="list-style: none; padding-bottom: 1em;"><span class="fa fa-youtube" style="font-size: 25px; color: black; padding-right: 1em;"></span> <a>SpotLight Hotel</a></li>
                            </ul>
                    </div>
                    <div class="col-md-6" style="color: blue; margin-bottom: 2em;">
                        <h3>ABOUT US:</h3>
                        <a><h5>SpotLight Hotel and Resort is a nice</h5>
                            <h5>and perfect place to spend your vacation</h5> 
                            <h5>with your family and friends. It is Located</h5>
                            <h5>at a serene envoirnment where you can witness </h5>
                            <h5>and enjoy the awesome sight of nature.</h5>
                            <h5>SpotLight is a well secured place for your safety</h5>
                            <h5>So don't you worry, you are safe in SpotLight Hotel.
                            </h5></a>
                    </div>
                    <div>
                        <button class="btn btn-info" data-toggle="modal" data-target="#myModal">CONTACT US</button>
                            <button class="btn btn-primary" onClick=printDiv('free');>PRINT</button>
                    </div>
                </div>
                <div class="row" style="text-align: center; background-color: black; color: white; font-size: 16px;">
                    All Rights Reserved  | &copy; IBBIL 2018.
                </div>
            </div>
        </footer>
            <script>
            function printDiv(free){
			var printContents = document.getElementById(free).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		    }
            </script>
        
            <script>
                $(document).ready(function(){
                  // Add smooth scrolling to all links in navbar + footer link
                  $(".scrol a[href='#top']").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                      scrollTop: $(hash).offset().top
                    }, 900, function(){

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                    });
                  });

                  // Slide in elements on scroll
                  $(window).scroll(function() {
                    $(".slideanim").each(function(){
                      var pos = $(this).offset().top;

                      var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                          $(this).addClass("slide");
                        }
                    });
                  });
                });
            </script>
    </body>
</html>