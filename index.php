<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#f8d315">
    <title>Al's Engineering - Trucking, Hauling & Equipment Rental Services</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    
    <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
	  var mapProp = {
	    center:new google.maps.LatLng(33.5494664,-117.6811979),
	    zoom:19,
	    mapTypeId:google.maps.MapTypeId.ROADMAP,
	    panControl:false,
		zoomControl:true,
		mapTypeControl:false,
		scaleControl:false,
		streetViewControl:true,
		overviewMapControl:false,
		rotateControl:false,
		scrollwheel: false,
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	  
	  var marker=new google.maps.Marker({
	  	position:new google.maps.LatLng(33.5494664,-117.6811979),
	  	//animation:google.maps.Animation.BOUNCE
	  });
	
	  marker.setMap(map);
	  //map.disableScrollWheelZoom();
	  
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    
</head>
<body id="top" class="scrollspy">


<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#why">Why Als's Engineering</a></li>
                    <li><a href="#map">Map</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">Intro</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#why">Why Als's Engineering</a></li>
                    <li><a href="#map">Map</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
	   <div style="width:100%; background: #ffffff;">
		    <img class="logo_image" src="images/allogo.png" style="display: block; margin-left: auto; margin-right: auto "/>
		    </div>
	    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
	        <span>Big or small, we haul it all!</span> 
            <br>
            
            <!--
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Trucking</b>
                <b>Hauling</b>
                <b>Equipment Rental</b>
            </span>
            -->
        </h1>
    </div>
</div>


<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                
                <h4 class="center header text_h2"> 
	                Al's Engineering, Inc. is a licensed, bonded and insured Broker specialized in Trucking and hauling Services located in Laguna Niguel, California. We haul all types of materials and equipment. We own and operate Super-10 Dump trucks, End and Bottom Dump Trucks. We also have all types of construction equipment for rental (Excavators, Skid Steers, Water Trucks & Street Sweepers.)<br><br>We have remained commited to providing clients in the private and public market with cost-effective, professional service.
	            </h2>
            
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div class="section scrollspy" id="services">
    <div class="container">
        <h2 class="header text_b">Services</h2>
        <div class="row">
	        
	        
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/trucking.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Trucking</span>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/hauling.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Hauling</span>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/excavation2.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Grading & Excavation</span>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/rental.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Equipment Rental</span>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/demolition.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Demolition</span>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/sidewalk.JPG">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Sidewalk Grinding & Repair</span>
                    </div>
                </div>
            </div>
           
            
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/erosion_control.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Erosion Control Installation</span>
                    </div>
                </div>
            </div>
            
             
            <div class="col s12 m4 l4">  
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/concrete_foundations.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Concrete Installation & Foundations</span>
                    </div>
                </div>
            </div>
                      
                
            
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="images/img1.jpg"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="why">
    <div class="container">
        <h2 class="header text_b">Why Al's Engineering</h2>
        
        <h4 class="center header text_h2">
	        The importance of working with a local contractor is crucial. We are readily available during each phase of a project, and our personnel can respond immediately to all warranty issues that may ocur after construction is complete.<br><br>Al's Engineering takes pride in performing quality work at a fair price and we offer our trucking and hauling services 24 hours. Let us know how our team can assist you. </br>You can check our online brochure <a href="images/AL'S%20ENG.%20BROCHURE.pdf">here</a>
        </h4>
        
           
           	<h3> We remain flexible </h3>
           	<h4 class="center header text_h2">
	        	We proudly serve The Countries of Orange, Los Angeles, San Diego, Riverside and San Bernandino.
	        	<br><br>
	        	Al's Engineering has the ability to work from a set of plans and specifications, or provide design build services to fulfill your construction needs.
        	</h4>
        	
        	<br><br>
        	
        	<h3>Partnerships</h3>
           	<h4 class="center header text_h2">
	        	We partner with several Architectural and Civil Engineering fils, which allows us to select one that is not only best suited for your project, but one that is capable of meeting the required schedule.
        	</h4>
           
            
        </div>
    </div>
</div>

<!-- Map -->
<div class="section scrollspy" id="map">
    <div class="container">
        <h2 class="header text_b">Map</h2>
        <div class="row">
	    <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
    </div>
</div>



<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            
            <div class="col l3 s12">
                <h5 class="white-text">Al's Engineering, Inc.</h5>
                <ul>
                    <li>Phone : 949.208.1932</li>
                    <li>Emergency/24hrs : 949.246.1976</li>
                    <li>Fax : 949.218.1104</li>
                    <li>Address : 28471 La Pradera.</br>Laguna Niguel<br>CA 92677</li>
                </ul>
                
            </div>
            
            <div class="col l3 s12 right">
                <h5 class="white-text">Social</h5>
                <ul>
                    <!--
	                <li>
                        <a class="white-text" href="https://www.behance.net/joashp">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    -->
                    <li>
                        <a class="white-text" href="https://www.facebook.com/HyperionRobotics/">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <!--<li>
                        <a class="white-text" href="https://github.com/gkortsaridis">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/georgekortsaridis">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            <!-- MY FOOTER -->
        </div>
    </div>
</footer>


    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>

    </body>
</html>