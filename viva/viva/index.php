<?php 
require 'library/PHPMailer/PHPMailerAutoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Viva Carnaval</title>

    
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    
    <!-- Mobile -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
  <!-- CSS start here -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css" />
  <link rel="stylesheet" type="text/css" href="css/my.css" />
  <!-- CSS end here -->
  <!-- Google fonts start here -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
  <!-- Google fonts end here -->
  <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- end custome fonts -->
<script src="http://maps.googleapis.com/maps/api/js"></script>

</head>
<body class="ux">
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Viva Carnaval</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li> 
                        <a href="#" class="page-scroll" data-toggle="modal" data-target="#aboutModal">About</a>
                    </li>
                    <li> 
                        <a href="#" class="page-scroll" data-toggle="modal" data-target="#hotelModal">Hotel</a>
                    </li>
                     <li> 
                        <a href="#" class="page-scroll" data-toggle="modal" data-target="#itinModal">Itinerary</a>
                    </li>
                   <!--  <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

  <div class="bg-overlay"></div>
  <!-- Preloader start here -->
  <div id="preloader">
    <div id="status"></div>
  </div>

  <!-- Preloader end here -->
<!-- About Icon start here -->
  <!-- <div class="about-us"> 
    <a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg" data-placement="right" title="About"></a>
  </div> -->
<!-- About Icon end here -->  
<!-- Contact Icon start here -->
  <div class="contact-us"> 
<!--     <a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Contact"></a>
 -->  </div>
<!-- Contact Icon end here -->
  <!-- Main container start here -->
  <section class="container main-wrapper">
    <!-- Logo start here -->
    <section id="logo" class="fade-down">
      <a href="#" title="Out of the Night Ent.">
              <img src="img/logo.png" alt="Out of the Night Ent.">
            </a>
    </section>
    <!-- Logo end here -->
    <!-- Slogan start here -->
    <section class="slogan fade-down">
      
    </section>

    <!-- Slogan end here -->
    <!-- Count Down start here -->

      <ul class="row count-down white-font">                       
        <li class="col-md-3 col-sm-6">   
          <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="days-title">days</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="hours-title">hours</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="mins-title">minutes</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="secs-title">seconds</span>
        </li>                
      </ul>              
    </section>
    <!-- Count Down end here -->
    <!-- Newsletter start here -->
    <section class="newsletter row fade-down">      
      
            <form  method="post" action="library/mail.php" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="contact col-md-6 fade-down validate" target="_blank" novalidate>
            
            <div id="mc_embed_signup_scroll" class="form-group">
                <div><span class="email-ico"> <i class="fa fa-envelope-o"></i> </span>
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email here to stay tuned">          </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_9d80e0546273f34e306d026fe_748920b40a" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Submit" name="Submit" id="mc-embedded-subscribe" class="btn-submit"></div>
            </div>
        </form>
    </section>
    <!-- Newsletter end here -->
    <!-- Social icons start here -->
    <ul class="connect-us row fade-down">
      <li><a href="https://facebook.com/vivacarnaval813" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/VivaCarnaval813" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/vivacarnaval813/" class="ytube tool-tip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <!-- Social icons end here -->
    <!-- Footer start here -->
    <footer class="fade-down">        
      <p class="footer-text">&copy; Viva Carnaval 2016, All Rights Reserved.</p>
    </footer>
    <!-- Footer end here -->
  </section>
<!-- About start here -->
  <div id="aboutModal" class="modal fade" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>About US</h3>
        <div class="clearfix">
        <div>
          <p>Viva Carnaval is an annual event located in the beautiful Tampa, Florida during Labor Day weekend (September 2-4 2016). It is sponsored by Out of the Night Entertainment.</p>
          <p>Package information will be posted soon so be sure to keep checking.</p>
          <p>Here are some reasons to attend Viva Carnaval:</p>
        </div>
      </div>
<ul class="features">      
      <li>Networking Opportunities</li>
      <li>A Great Time</li>
      <li>Community Service</li>
      <li>Non stop Music</li>
      <li>Sunny Beaches</li>
      <li>Life Long Memories</li>
    </ul>         
      </div>
    </div>
  </div>
<!-- About end here -->
<!-- Hotel start here -->
  <div id="hotelModal" class="modal fade" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>Hotel Info</h3>
    <div class="row col-md-12 col-sm-6">
      <div class="col-md-6 col-sm-6">
        <a  href="http://www.vistainntampa.com">
          <img src="img/vista.jpg" class="img-responsive img-rounded" alt="Vista Inn">
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
          <p><b>Vista Inn</b> is the official hotel for Viva this year.</p>
          <p>*$55.00 room rate when you use "Viva" as the group. <b>"Viva"</b>.</p>
          <p><b>Address:</b> 400 E Bearss Ave, Tampa, FL 33613.</p>
          <p><b>Phone:</b> (813) 961-1000</p>
          <div id="gmap_canvas" class="img-responsive img-rounded" style="width:500px;height:280px;"></div>
      </div>
     <div class="col-md-6 col-sm-6">
      <a class="btn btn-primary" style="margin-top:15px;" href="http://www.vistainntampa.com" role="button">Book Now</a>
    </div>
     <div class="col-md-6 col-sm-6">
      <a  style="margin-top:15px;" href="#"</a>
     </div>
    </div>
  </div>
  </div>
  </div>
<!-- Hotel end here -->
<!-- Itinerary start here -->
  <div id="itinModal" class="modal fade" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>Itinerary</h3>
        <br></br>
        <div class="clearfix">
         <div class="row col-md-12 col-sm-12">
          <div class="col-md-12 col-sm-12">
             <h2>Thursday Night</h2>
             <p><b><i>Welcome Back Pre-Party</b></i></p>
             <p>THE CARNAVAL STARTS HERE! </p>
             <br></br>
          </div>
          <div class="col-md-12 col-sm-12">
             <h2>Friday</h2>
             <p><b><i>Registration by the Pool</i></b></p>
             <p>Get your wrist band and <b>SWAG</b> bag (Souvenirs) for the hottest Labor Day Weekend party while you chill out by the pool, enjoy the company and plan out your weekend.</p>
             <p class="hash">#VivaCarnavalWeekend</p>
             <p><b><i>Welcome to VIVA CARNAVAL'S 1st Party</b></i></p>
             <p>The opening night and welcome to Florida. Viva will showcase our beautiful Tampa night skyline in the downtown area. Maybe it will be relaxed? Like a meet and greet.</p>
             <p>Or maybe it will be crazy? Like a foam party...who knows? But get ready for one hell of a weekend.</p>
             <br></br>
          </div>
           <div class="col-md-12 col-sm-12">
             <h2>Saturday</h2>
             <p><b><i>Beach Day</b></i></p>
             <p>We are taking the <b>CARNAVAL</b> outside, with the traditional #CarnavalBeachDay. Be transported by us and enjoy the sun, sand, food, and music. But don't forget</p>
             <p>protection...or you might just get burned.</p>
             <p><b><i>Latin Caribbean Moon Party</b></i></p>
             <p>Our newest and most aesthetically inclined evening. Ever party under the moon with sand at your feet? Get Ready</p>
             <p class="hash">#VivaMoonParty</p>
             <br></br>
          </div>
           <div class="col-md-12 col-sm-12">
             <h2>Sunday</h2>
             <p><b><i>Headphone Day Party</b></i></p>
             <p>The party goes under the lights in the craziest <span class="hash">#CarnavalHeadPhoneParty</span> you have ever seen.</p>
             <p>3 DJ's, 1 Set of headphones, 1 Party...ENDLESS POSSIBILITIES</p>
             <p><b><i>Pajama Party</b></i></p>
             <p><b>ITS BACK!</b> You can't have a Labor Day Weekend in Tampa without the <span class="hash">#VivaCarnavalPajamaJam</span>. Close out your <span class="hash">#VivaCarnavalWeekend </span> the traditional way, with the INFAMOUS Pajama Party, but this time we will add some.</p>
             <p>YOU KNOW WE HAD TO SAVE THE BEST FOR LAST!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Itinerary end here -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Javascript framework and plugins start here -->
    <!-- Plugin JavaScript -->
    <!-- end plugin -->
  

    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/appear.js"></script>   
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.ccountdown.js"></script>
    <script src="js/general.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="js/my.js"></script> 


<script type="text/javascript"> 
function init_map(){
  var myOptions = {
    zoom:12,
    center:new google.maps.LatLng(28.088934,-82.4570175),
    mapTypeId: google.maps.MapTypeId.ROADMAP};
    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.088934, -82.4570175)});
    infowindow = new google.maps.InfoWindow({content:"<b>Vista Inn and Suites </b><br/>400 E Bearss Ave<br/>33613 Tampa, FL" });
    google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
        
<!-- Javascript framework and plugins end here -->
</body>
</html>