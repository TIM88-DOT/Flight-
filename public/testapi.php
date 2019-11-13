<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>Travelia - Travel Agency, Responsive - Hotel Online Booking</title>
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="World Cup - Responsive HTML5 Template soccer and sports">
        <meta name="author" content="iwthemes.com">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Responsive CSS -->
        <link href="css/theme-responsive.css" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="#" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon" href="img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">  

        <!-- Head Libs -->
        <script src="js/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->
	</head>






    
	<?php


	// query db

$origin = $_POST['origin'];
$destination = $_POST['destination'];
$outbounddate = $_POST['outbounddate'];
$inbounddate = $_POST['inbounddate'];
$adults = $_POST['adults'];
$children = $_POST['children'];





/*$data = json_decode($response);
foreach($data->Quotes as $quotes){
    echo $quotes->MinPrice;
    echo $quotes->OutboundLeg->DepartureDate;}
    
    foreach($data->Places as $places){
        echo $places->Name;
    }  

*/





$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/v1.0",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "cabinClass=economy&children=$children&infants=0&country=GB&currency=GBP&locale=en-GB&originPlace=$origin&destinationPlace=$destination&outboundDate=$outbounddate&adults=$adults",
	CURLOPT_HTTPHEADER => array(
		"content-type: application/x-www-form-urlencoded",
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 611189d0e6msh7ff09e834e88ad7p19b062jsn50828695a48f"
	),
));
curl_setopt($curl, CURLOPT_HEADER, true);
curl_setopt($curl, CURLOPT_POST, 1);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);


$target = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
$response = curl_exec($curl);

$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
$header = substr($response, 189, $header_size);

$err = curl_error($curl);

$string = str_replace(' ', '', $header);
$first = strtok($header , 'S');
$str = preg_replace('/\s/','',$first );


$sessionkey = $str;



$ch = curl_init();

curl_setopt_array($ch, array(
	CURLOPT_URL => "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/pricing/uk2/v1.0/$sessionkey?pageIndex=0&pageSize=10",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: skyscanner-skyscanner-flight-search-v1.p.rapidapi.com",
		"x-rapidapi-key: 611189d0e6msh7ff09e834e88ad7p19b062jsn50828695a48f"
	),
));

$responsefinal = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	
}

$data = json_decode($responsefinal, TRUE);




//echo $data['Itineraries'][0]['PricingOptions'][0]['Price'];

//foreach($data['Itineraries'] as $topic) {
     //  echo $topic['PricingOptions'][0]['DeeplinkUrl'];
//}

?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <body>
    
       <!--Preloader-->
        <div class="preloader">
            <div class="status">&nbsp;</div>
        </div>
        <!--End Preloader-->
    
        <!-- Theme-options -->
        <div id="theme-options">
            <div class="openclose"></div>
            <div class="title">
               <span>THEME OPTIONS</span>
               <p>Choose a combination of predefined colors here. Here are some examples. You can create any additional number on your backend theme, also can choose the background you want and four differents layouts.</p>
            </div>
            <span>SKINS</span>
            <ul id="colorchanger">      
                <li><a class="colorbox red" href="?theme=red" title="Red Skin"></a></li>
                <li><a class="colorbox blue" href="?theme=blue" title="Blue Skin"></a></li>                    
                <li><a class="colorbox yellow" href="?theme=yellow" title="Yellow Skin"></a></li>
                <li><a class="colorbox green" href="?theme=green" title="Green Skin"></a></li>
                <li><a class="colorbox orange" href="?theme=orange" title="Orange Skin"></a></li>
                <li><a class="colorbox purple" href="?theme=purple" title="Purple Skin"></a></li>
                <li><a class="colorbox pink" href="?theme=pink" title="Pink Skin"></a></li>
                <li><a class="colorbox cocoa" href="?theme=cocoa" title="Cocoa Skin"></a></li>
            </ul>
            <span>LAYOUT STYLE</span>
            <ul class="layout-style">      
                <li class="wide">Wide</li>
                <li class="semiboxed active">Semiboxed</li> 
                <li class="boxed">Boxed</li> 
                <li class="boxed-margin">Boxed Margin</li>               
            </ul>               
            <div class="patterns">
                <span>BACKGROUND PATTERNS</span>
                <ul class="backgrounds">
                    <li class="bgnone" title="None - Default"></li>
                    <li class="bg1"></li>
                    <li class="bg2"></li>
                    <li class="bg3"></li>
                    <li class="bg4 "></li>
                    <li class="bg5"></li> 
                    <li class="bg6"></li>
                    <li class="bg7"></li>
                    <li class="bg8"></li>
                    <li class="bg9 "></li>
                    <li class="bg10"></li> 
                    <li class="bg11"></li> 
                    <li class="bg12"></li> 
                    <li class="bg13"></li> 
                    <li class="bg14"></li> 
                    <li class="bg15"></li> 
                    <li class="bg16"></li> 
                    <li class="bg17"></li> 
                    <li class="bg18"></li> 
                    <li class="bg19"></li> 
                    <li class="bg20"></li> 
                    <li class="bg21"></li> 
                    <li class="bg22"></li> 
                    <li class="bg23"></li> 
                    <li class="bg24"></li> 
                    <li class="bg25"></li> 
                    <li class="bg26"></li>                   
                </ul>  
            </div>
        </div>
        <!-- End Theme-options -->       

        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header id="header" class="header-v1">
                <!-- Main Nav -->
                <nav class="flat-mega-menu">            
                    <!-- flat-mega-menu class -->
                    <label for="mobile-button"> <i class="fa fa-bars"></i></label><!-- mobile click button to show menu -->
                    <input id="mobile-button" type="checkbox">                          

                    <ul class="collapse"><!-- collapse class for collapse the drop down -->
                        <!-- website title - Logo class -->
                        <li class="title">
                            <a href="index.html"><span>T</span>ravelia<span>.</span></a> 
                            <i class="fa fa-rocket"></i>
                        </li>
                        <!-- End website title - Logo class -->

                        <li><a href="index.html">HOME</a>
                            <div class="drop-down two-column hover-fade"><!-- drop down with two columns -->
                                <ul><!-- column one -->
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-v2.html">Home Version 2</a></li>
                                    <li><a href="index-v3.html">Home Version 3</a></li>
                                    <li><a href="index-v4.html">Home Version 4</a></li>
                                </ul>
                                
                                <ul><!-- column two -->
                                    <li><a href="hotel-index.html">Home Hotels</a> </li>
                                    <li> <a href="flight-index.html">Home Flights</a> </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li> <a href="hotel-index.html">HOTELS</a>
                            <ul class="drop-down one-column hover-fade"><!-- first level drop down -->
                                <li><a href="hotel-index.html">Home Hotels</a></li>
                                <li><a href="hotel-list-view.html">List View</a></li>
                                <li><a href="hotel-grid-view.html">Grid View</a></li>
                                <li><a href="hotel-detailed.html">Detailed</a></li>
                            </ul>
                        </li>

                        <li> <a href="template-shop.html">SHOP</a>
                            <ul class="drop-down one-column hover-fade"><!-- first level drop down -->
                                <li><a href="template-shop.html">Default Shop</a></li>
                                <li><a href="template-shop-sidebar.html">Sidebar Shop</a> </li>
                                <li><a href="template-shop.html#!/Beautiful-Venice/p/58713996/category=15487747">Single Shop</a></li>
                            </ul>
                        </li>

                        <li> <a href="template-about-1.html">ABOUT US</a>
                            <ul class="drop-down one-column hover-fade"><!-- first level drop down -->
                                <li><a href="template-about-1.html">About Us 1</a> </li>
                                <li><a href="template-about-2.html">About us 2</a> </li>
                            </ul>
                        </li>

                        <li> <a href="template-service-1.html">SERVICES</a>
                            <ul class="drop-down one-column hover-fade"><!-- first level drop down -->
                                <li><a href="template-service-1.html">Services 1</a> </li>
                                <li><a href="template-service-2.html">Services 2</a> </li>
                            </ul>
                        </li>

                        <li> <a href="template-gallery-4.html">GALLERY</a>
                            <ul class="drop-down one-column hover-fade"><!-- first level drop down -->
                                <li><a href="template-gallery-4.html">Gallery 4 Column</a> </li>
                                <li><a href="template-gallery-3.html">Gallery 3 Columns</a> </li>
                                <li><a href="template-gallery-2.html">Gallery 2 Columns</a> </li>
                            </ul>
                        </li>

                        <li> <a href="#">PACKAGES</a> 
                            <div class="drop-down full-width hover-fade"><!-- full width drop down with 4 columns + images -->
                                <ul><!-- column one -->
                                    <li>
                                        <h2><span>Punta</span> Cana</h2>
                                        <a href="packages-index.html"><img src="img/gallery-2/1.jpg" alt="image 1"> </a> 
                                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</p>
                                        <a href="packages-index.html" class="btn btn-primary">View Details</a>
                                    </li>
                                </ul>
                                
                                <ul><!-- column two -->
                                    <li>
                                        <h2><span>Santa</span> Marta</h2>
                                        <a href="packages-index.html"><img src="img/gallery-2/2.jpg" alt="image 1"> </a> 
                                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</p>
                                        <a href="packages-index.html" class="btn btn-primary">View Details</a>
                                    </li>
                                </ul>
                                
                                <ul><!-- column three -->
                                    <li>
                                        <h2><span>Isla</span> de San Andres</h2>
                                        <a href="packages-index.html"><img src="img/gallery-2/3.jpg" alt="image 1"> </a> 
                                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</p>
                                        <a href="packages-index.html" class="btn btn-primary">View Details</a>
                                    </li>
                                </ul>
                                
                                <ul><!-- column four -->
                                    <li>
                                        <h2><span>Cartagena</span> de Indias</h2>
                                        <a href="packages-index.html"><img src="img/gallery-2/4.jpg" alt="image 1"> </a> 
                                        <p>Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales.</p>
                                        <a href="packages-index.html" class="btn btn-primary">View Details</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li> <a href="template-about-1.html">FEATURES</a> 
                            <div class="drop-down full-width hover-fade"><!-- full width drop down with 4 columns -->
                                <ul><!-- column One -->
                                    <li><h2>Templates</h2></li>
                                    <li><a href="template-about-1.html">About Us 1</a> </li>
                                    <li><a href="template-about-2.html">About us 2</a> </li>
                                    <li><a href="template-service-1.html">Services 1</a> </li>
                                    <li><a href="template-service-2.html">Services 2</a> </li>
                                    <li><a href="template-gallery-4.html">Gallery 4 Column</a> </li>
                                    <li><a href="template-gallery-3.html">Gallery 3 Columns</a> </li>
                                    <li><a href="template-gallery-2.html">Gallery 2 Columns</a> </li>
                                    <li><a href="template-blog-right.html">Blog Right Sidebar</a> </li>
                                    <li><a href="template-blog-left.html">Blog Left Sidebar</a> </li>
                                </ul>
                                
                                <ul><!-- column Two -->
                                    <li><h2>Templates</h2></li>
                                    <li><a href="template-blog-full.html">Blog Full Width</a> </li>
                                    <li><a href="template-blog-read.html">Blog Read</a> </li>
                                    <li><a href="template-faq.html">Page Faq Questions</a> </li>
                                    <li><a href="page-full-widht.html">Page Full Widht</a> </li>
                                    <li><a href="page-left.html">Page Left Sidebar</a> </li>
                                    <li><a href="page-right.html">Page Right Sidebar</a> </li>
                                    <li><a href="page-404.html">Page 404</a> </li>
                                    <li><a href="page-site-map.html">Page Site Map</a> </li>
                                    <li><a href="princing-tables.html">Princing tables</a> </li>
                                </ul>

                                <ul><!-- column three -->
                                    <li><h2>Features</h2></li>
                                    <li><a href="feature-header-1.html">Header Version 1</a> </li>
                                    <li><a href="feature-header-2.html">Header Version 2</a> </li>
                                    <li><a href="feature-header-3.html">Header Version 3</a> </li>
                                    <li><a href="feature-header-4.html">Header Version 4</a> </li>
                                    <li><a href="feature-footer-1.html#footer">Footer Version 1</a> </li>
                                    <li><a href="feature-footer-2.html#footer">Footer Version 2</a> </li>
                                    <li><a href="feature-footer-3.html#footer">Footer Version 3</a> </li>
                                    <li><a href="feature-footer-4.html#footer">Footer Version 4</a> </li>
                                    <li><a href="feature-background-sections.html">Background sections</a> </li>
                                </ul>

                                <ul><!-- column four -->
                                    <li><h2>Elements</h2></li>
                                    <li><a href="feature-grid-system.html">Grid System</a> </li>
                                    <li><a href="feature-typograpy.html">Typograpy</a> </li>
                                    <li><a href="feature-icons.html">Icons</a> </li>
                                    <li class="icon-big-nav"><i class="fa fa-rocket"></i></li><!-- Icon big nav -->
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="contact.html">CONTACT</a>
                        </li>

                        <li class="social-bar"> <a href="#">FOLLOW US</a> 
                            <ul class="drop-down hover-zoom">
                                <li> <a href="#" target="_blank"><i class="fa fa-flickr"></i> </a> </li>
                                <li> <a href="#" target="_blank"><i class="fa fa-instagram"></i> </a> </li>
                                <li> <a href="#" target="_blank"><i class="fa fa-youtube"></i> </a> </li>
                                <li> <a href="#" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
                                <li> <a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a> </li>
                                <li> <a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a> </li>
                            </ul>
                        </li>
                        
                        <li class="login-form"> <i class="fa fa-user"></i><!-- login form -->
                            <ul class="drop-down hover-expand">
                                <li>
                                    <form method="post" action="#">
                                        <table>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="email" required="required" name="email" placeholder="Your email address"> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"> 
                                                    <input type="password" required="required" name="password" placeholder="Password"> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <input type="submit" value="Login"> </td>
                                                <td> <label> <input type="checkbox" name="check_box"> Keep me signed in </label> </td>
                                            </tr>
                                        </table>
                                    </form>
                                </li>
                            </ul>
                        </li>  

                        <li class="search-bar"> <i class="fa fa-search"></i><!-- search bar -->
                            <ul class="drop-down hover-expand">
                                <li>
                                    <form method="post" action="#">
                                        <table>
                                            <tr>
                                                <td> <input type="search" required="required" name="serach_bar" placeholder="Type Keyword Here"> </td>
                                                <td> <input type="submit" value="Search"> </td>
                                            </tr>
                                        </table>
                                    </form>
                                </li>
                            </ul>
                        </li>           
                    </ul>
                </nav>
                <!-- Main Nav -->
            </header>
            <!-- End Header-->

            <!-- Section Title-->    
            <div class="section-title-01">
                <!-- Parallax Background -->
                <div class="bg_parallax image_04_parallax"></div>
                <!-- Parallax Background -->

                <!-- Content Parallax-->
                <div class="opacy_bg_02">
                     <div class="container">
                        <h1>Hotel List View</h1>
                        <div class="crumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>Hotels</li>  
                                <li>/</li>
                                <li>Hotel List View</li>  
                            </ul>    
                        </div>
                    </div>  
                </div>  
                <!-- End Content Parallax--> 
            </div>   
            <!-- End Section Title-->

            <!--Content Central -->
            <div class="content-central">
                <!-- Shadow Semiboxed -->
                <div class="semiboxshadow text-center">
                    <img src="img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                <!-- End Shadow Semiboxed -->

                <!-- End content info - page Fill with -->
                <div class="content_info">
                    <div class="container">
                        <div class="row">
                            <!-- Left Sidebar-->
                            <div class="col-md-3">
                                <div class="container-by-widget-filter bg-dark color-white">
                                    <!-- Widget Filter -->
                                    <aside class="widget padding-top-mini">
                                        <h3 class="title-widget">Search</h3>

                                        <!-- FILTER widget-->
                                        <div class="filter-widget">
                                            <form action="#">
                                                <input type="text" required="required" placeholder="Where do you want to go?" class="input-large">
                                                <input type="text" required="required" placeholder="Check In" class="date-input">
                                                <input type="text" required="required" placeholder="Check Out" class="date-input">
                                                <div class="selector">
                                                    <select class="guests-input">
                                                        <option value="1">1 Guests</option>
                                                        <option value="2">2 Guests</option>
                                                        <option value="3">3 Guests</option>
                                                        <option value="4">4 Guests</option>
                                                        <option value="5">5+ Guests</option>
                                                    </select>
                                                    <span class="custom-select">Guests</span>
                                                </div>
                                                <input type="submit" value="Search">
                                            </form>
                                        </div>
                                        <!-- END FILTER widget-->
                                    </aside>
                                    <!-- End Widget Filter -->

                                    <!-- Widget Filter Price Range-->
                                    <aside class="widget">
                                        <h3 class="title-widget">Refine your results:</h3>
                                        <h4>Price Range:</h4>
                                        <b>$ 10</b> <b class="pull-right">$ 1000</b>
                                        <input id="slider-range" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[0,800]"/> 
                                    </aside>
                                    <!-- End Widget Filter Price Range-->

                                    <!-- Widget Filter Stars-->
                                    <aside class="widget">
                                        <h4>Star Rating:</h4>
                                        <ul class="starts">
                                            <li><input type="checkbox" checked></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><span>5 Stars</span></li>
                                        </ul>

                                        <ul class="starts">
                                            <li><input type="checkbox" checked></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><span>4 Stars</span></li>
                                        </ul>

                                        <ul class="starts">
                                            <li><input type="checkbox"></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><span>3 Stars</span></li>
                                        </ul>

                                        <ul class="starts">
                                            <li><input type="checkbox" checked></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><span>2 Stars</span></li>
                                        </ul>

                                        <ul class="starts">
                                            <li><input type="checkbox"></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><span>1 Stars</span></li>
                                        </ul>
                                    </aside>
                                    <!-- End Widget Filter Stars-->

                                    <!-- Widget Filter Radio -->
                                    <aside class="widget">
                                        <h4>Acomodation type </h4>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" checked>
                                            All
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">
                                            Hotel
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">
                                            Bed &amp; Breakfast
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">
                                            Apartment
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">
                                            Condo
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox">
                                            All-Inclusive Resort 
                                          </label>
                                        </div>
                                    </aside>
                                    <!-- End Widget Filter Radio -->

                                    <!-- Widget Filter checkbox -->
                                    <aside class="widget">
                                        <h4>Hotel Preferences</h4>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">High-speed Internet (41)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Air conditioning (52)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Swimming pool (55)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Childcare (12)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Fitness equipment (49)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Free breakfast (14)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Free parking (11)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Hair dryer (48)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Pets allowed (16)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Restaurant in hotel (47)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Room service (38)
                                            </label>
                                        </div>  
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">Spa services on site (57) 
                                            </label>
                                        </div>  
                                    </aside>
                                    <!-- End Widget Filter checkbox -->
                                </div>
                            </div>
                            <!-- End Left Sidebar-->

                            <div class="col-md-9">
                                <!-- Title Results-->
                                <div class="title-results">
                                    <h3>41 Hotels starting at $56 Narrow results or <a href="#">view all</a></h3>
                                </div>
                                <!-- End Title Results-->
                                
                                <!-- sort-by-container-->
                                <div class="sort-by-container tooltip-hover">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <strong>Sort by:</strong>
                                            <ul>                            
                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="5">5 Starts</option>
                                                            <option value="4">4 Starts</option>
                                                            <option value="3">3 Starts</option>
                                                            <option value="2">2 Starts</option>
                                                            <option value="1">1 Starts</option>
                                                        </select>
                                                        <span class="custom-select">Users Rating</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="1">A To Z</option>
                                                            <option value="2">Z To A</option>
                                                        </select>
                                                        <span class="custom-select">Name</span>
                                                    </div>
                                                </li>  

                                                <li>
                                                    <div class="selector">
                                                        <select>
                                                            <option value="1">Sort Ascending</option>
                                                            <option value="2">Sort Descending</option>
                                                        </select>
                                                        <span class="custom-select">Price</span>
                                                    </div>
                                                </li>                            
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="style-view">
                                                <li data-toggle="tooltip" title="" data-original-title="BOX VIEW">
                                                    <a href="hotel-grid-view.html">
                                                        <i class="fa fa-th-large"></i>
                                                    </a>
                                                </li>
                                                <li data-toggle="tooltip" title="" data-original-title="LIST VIEW" class="active">
                                                    <a href="hotel-list-view.html">
                                                        <i class="fa fa-list"></i>
                                                    </a>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- sort-by-container-->

                                <div class="row list-view">
                                    <?php foreach($data['Itineraries'] as $topic) {?>
 

    

                                    <!-- Item Gallery List View-->
                                    <div class="col-md-12">
                                        <div class="img-hover">
                                            <img src="img/hotel-img/2.jpg" alt="" class="img-responsive">
                                            <div class="overlay"><a href="img/hotel-img/2.jpg" class="fancybox"><i class="fa fa-plus-circle"></i></a></div>
                                        </div>

                                        <div class="info-gallery">
                                            <h3>
                                            <?php echo $topic['PricingOptions'][0]['Price'];?><br>
                                               
                                            </h3>
                                            <hr class="separator">
                                            
                                            <p>Departing on </p>
                                            <ul class="starts">
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-empty"></i></a></li>
                                            </ul>
                                            <div class="content-btn"><a href=<?php echo $topic['PricingOptions'][0]['DeeplinkUrl'];?> class="btn btn-primary">View Details</a></div>
                                            <div class="price"><span>£</span><b>From </b><</div>
                                        
                                        </div>
                                    </div>
                                    <?php };?>
                                    <!-- End Item Gallery List View-->

                                    <!-- pagination-->
                                    <div class="col-md-12">
                                        <ul class="pagination">
                                            <li><a href="#">«</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul> 
                                    </div> 
                                    <!-- End pagination-->               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
                <!-- End content info - page Fill with  --> 
            </div>
            <!-- End Content Central -->
      
            <!-- footer-->
            <footer id="footer" class="footer-v1">
                <div class="container">
                    <div class="row">
                        <!-- Title Footer-->
                        <div class="col-md-5">
                            <div class="title-footer">
                                <h2>Save on your plans!
                                <br> <span>Select Travelia Theme And Receive</span>
                                <br> our discounts by e-mail.</h2>
                            </div>

                            <p>You can choose your favorite destination and start planning your long-awaited vacation. We offer thousands of destinations and have a wide variety of hotels so that you can host and enjoy your stay without problems. Book now your trip travelia.com.</p>
                        </div>
                        <!-- End Title Footer-->

                        <div class="col-md-7">
                            <div class="row">                             
                                <!-- Social Us-->
                                <div class="col-md-3">
                                    <h3>FOLLOW US</h3>
                                    <ul class="social">
                                        <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                                        <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                                        <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                                    </ul>
                                </div>
                                <!-- End Social Us-->
                                
                                <!-- Recent links-->
                                <div class="col-md-5">
                                    <h3>TRAVEL SPECIALISTS </h3>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <a href="#">Golf Vacations</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Disney Parks Vacations</a></li>
                                        <li><i class="fa fa-check"></i> <a href="#">Vacations As Advertised</a></li>                                    
                                    </ul>
                                </div>
                                <!-- End Recent links-->

                                <!-- Contact Us-->
                                <div class="col-md-4">
                                   <h3>CONTACT US</h3>
                                   <ul class="contact_footer">
                                        <li>
                                            <i class="fa fa-envelope"></i> <a href="#">example@example.com</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-headphones"></i> <a href="#">55-5698-4589</a>
                                         </li>
                                        <li class="location">
                                            <i class="fa fa-home"></i> <a href="#"> Av new stret - New York</a>
                                        </li>                                   
                                    </ul>
                                </div>
                                <!-- Contact Us-->
                            </div>  

                            <div class="divisor"></div>
                            
                            <div class="row">
                                <!-- Newsletter-->
                                <div class="col-md-12">
                                    <h3>NEWSLETTER SIGN UP</h3>  
                                    <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Your Name" name="name" type="text" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input class="form-control" placeholder="Your  Email" name="email" type="email" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>   
                                    <div id="result-newsletter"></div>
                                </div>
                                <!-- end Newsletter-->
                            </div>                      
                        </div>
                    </div>
                </div>

                <!-- footer Down-->
                <div class="footer-down">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <p>&copy; 2015 Travelia . All Rights Reserved.  2010 - 2015</p>
                            </div>
                            <div class="col-md-7">
                                <!-- Nav Footer-->
                                <ul class="nav-footer">
                                    <li><a href="index.html">HOME</a> </li>
                                    <li><a href="hotel-index.html">HOTELS</a></li>
                                    <li><a href="flight-index.html">FLIGHTS</a></li> 
                                    <li><a href="car-index.html">CARS</a></li> 
                                    <li><a href="cruice-index.html">CRUICES</a></li>                
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                                <!-- End Nav Footer-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer Down-->
            </footer>      
            <!-- End footer-->
        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local--> 
        <script src="js/jquery.js"></script>  
        <script src="js/jquery-ui.1.10.4.min.js"></script>                
        <!--Nav-->
        <script src="js/nav/jquery.sticky.js" type="text/javascript"></script>    
        <!--Totop-->
        <script type="text/javascript" src="js/totop/jquery.ui.totop.js" ></script>  
         <!--Accorodion-->
        <script type="text/javascript" src="js/accordion/accordion.js" ></script>  
        <!--Slide Revolution-->
        <script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>      
        <script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>    
        <!-- Maps -->
        <script src="js/maps/gmap3.js"></script>            
        <!--Ligbox--> 
        <script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script> 
        <!-- carousel.js-->
        <script src="js/carousel/carousel.js"></script>
        <!-- Filter -->
        <script src="js/filters/jquery.isotope.js" type="text/javascript"></script>
        <!-- Twitter Feed-->
        <script src="js/twitter/jquery.tweet.js"></script> 
        <!-- flickr Feed-->
        <script src="js/flickr/jflickrfeed.min.js"></script>    
        <!--Theme Options-->
        <script type="text/javascript" src="js/theme-options/theme-options.js"></script>
        <script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script> 
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> 
        <script type="text/javascript" src="js/bootstrap/bootstrap-slider.js"></script> 
        <!--MAIN FUNCTIONS-->
        <script type="text/javascript" src="js/main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->
    </body>
</html>





