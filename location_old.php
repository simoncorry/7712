<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="ie6 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 7]>   <html lang="en" class="ie7 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]>   <html lang="en" class="ie8 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]>   <html lang="en" class="ie9 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if LT IE 9]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <?php /* ERROR */ ini_set('error_reporting', E_ALL); ini_set('display_errors', 0); ?>
        
        <?php /* PAGE */ $thisPage="Location"; ?>
        
        <title>77 12th - Location</title>
        <meta name="Author" content="77 12th" />
        <meta name="description" content="77 12th - Luxury High-Rise Apartments - Midtown Atlanta"/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=960px, user-scalable=no"> 
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
                    
        <?php /* FACEBOOK OG */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/fb-og.php"); ?>
        <?php /* GOOGLE PLUS SNIPPET */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/gp-snippet.php"); ?>
        <?php /* LINKS */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/head.php"); ?>  
        
        <!-- /// SLIDESHOW /// -->
        <script type="text/javascript">           
            jQuery(function($){
                $.supersized({
                    // Functionality
                    slide_interval  :6000,       // Length between transitions
                    transition      :1,          // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed:700,        // Speed of transition
                    // Components
                    slide_links:'blank',         // Individual links for each slide (Options: false, 'num', 'name', 'blank')                            
                    slides:[                     // Slideshow Images
                        {image : '/_media/images/slides/location/01.jpg', thumb : '/_media/images/slides/location/01.jpg'},
                        {image : '/_media/images/slides/location/02.jpg', thumb : '/_media/images/slides/location/02.jpg'},
                        {image : '/_media/images/slides/location/03.jpg', thumb : '/_media/images/slides/location/03.jpg'},
                        {image : '/_media/images/slides/location/04.jpg', thumb : '/_media/images/slides/location/04.jpg'},
                        {image : '/_media/images/slides/location/05.jpg', thumb : '/_media/images/slides/location/05.jpg'}
                    ]
                });
            });            
        </script>
        
        <!-- /// TOGGLE BTN /// -->
        <script type="text/javascript">
            $(document).ready(function() { 
                $('.toggle').click(function() {
                    $('section').toggleClass('hide');
                });
            });
        </script>
        
        <!-- /// FIXED FOOTER /// -->
        <script type="text/javascript">
        $(document).ready(function() {
		    $("section > footer").pinFooter("relative");
		});

		$(window).resize(function() {
		    $("section > footer").pinFooter("relative");
		});
        </script>
        
        <!-- /// MAP /// -->       
        <script type="text/javascript">
        $(document).ready(function() {
            $('.map').mobilymap({
		        position: '300 500', // map position after loading - 'X Y', 'center', 'top left', 'top right', 'bottom left', 'bottom right'
		        popupClass: 'bubble',
		        markerClass: 'point',
		        popup: true, // show popup on marker click - true/false
		        cookies: false, // remember last map position - true/false
		        caption: true, // show caption - true/false
		        setCenter: true, // sets the map view to the center on marker click
		        navigation: true, // display buttons to pan in four directions
		        navSpeed: 1000, // speed of panning map (higher value for slow panning)
		        navBtnClass: 'navBtn',
		        outsideButtons: false, // selector, only anchors eg. '.map_buttons a'
		        onMarkerClick: function(){}, // call the function on marker click (popup must be disabled)
		        onPopupClose: function(){}, // call the function after popup closing
		        onMapLoad: function(){} // call the function after loading map
		    });
		  });
        </script>
              
    </head>
    <body>
        <section>       	       	
<?php /* NAV */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav.php"); ?>
            <article class="location">
                <div class="location">
                    <h2>Resturants</h2>
                    <ol>
                        <li>STK</li>
                        <li>Cucina Asellina</li> 
                        <li>Caf&eacute; Intermezzo</li> 
                        <li>eleven</li>
                        <li>Mi Cocina</li>
                        <li>Piola</li>
                        <li>Ra Sushi</li>
                        <li>Ri Ra Irish Pub</li>
                        <li>Oceanaire Seafood Room</li>
                        <li>Front Page News</li>
                        <li>Lure</li>
                        <li>Tin Lizzy's Taqueria Cantina</li>
                        <li>Flip Flops</li>
                        <li>South City Kitchen</li>
                        <li>Opera</li>
                        <li>Highland Bakery</li>
                        <li>TAP Gastropub</li>
                        <li>Starbucks</li>
                        <li>Veni Vidi Vici</li>
                        <li>Rising Roll</li>
                        <li>Carolyn's Gourmet Caf&eacute;</li>
                        <li>Tamarind Seed</li>
                        <li>Shout</li>
                        <li>Spice Market</li>
                        <li>Whiskey Park</li>
                        <li>Colony Square</li>
                        <li>The Nook</li>
                        <li>Willy's Mexican Grill</li>
                        <li>PARQ</li>
                        <li>Groovy Smoothie</li>
                        <li>The Flying Biscuit</li>
                        <li>Jason's Deli</li>
                        <li>Caribou Coffee</li>
                        <li>Five Napkin Burger</li>
                        <li>Zocalo</li>
                        <li>Campagnolo</li>
                        <li>Joe's on Juniper</li>
                        <li>Einstein's</li>
                        <li>Table 1280</li>
                        <li>Nan Thai Fine Dining</li>
                        <li>Livingston</li>
                        <li>Baraonda Caff&eacute; Italiano</li>
                        <li>The Melting Pot</li>
                        <li>Escorpi&oacute;n</li>
                        <li>Gordon Biersch Brewery</li>
                        <li>Fresh 2 Order</li>
                        <li>The Vortex</li>
                        <li>Noodle</li>
                        <li>Little Azio</li>
                        <li>Lime</li>
                        <li>Taco Mac</li>
                        <li>Hudson Grille</li>
                        <li>Empire State South</li>
                        <li>Arden's Garden</li>
                        <li>Ecco</li>
                        <li>Cypress Street Pint &amp; Plate</li>
                        <li>Caf&eacute; Pharr Out</li>
                        <li>Technology Square</li>
                        <li>The Varsity</li>
                        <li>Midcity Caf&eacute;</li>
                        <li>Briza</li>
                        <li>Marlow's Tavern</li>
                        <li>J. Christopher's</li>
                        <li>Dressed</li>
                        <li>Steel</li>
                        <li>Charlie G's 11th St. Pub</li>
                        <li>Steamhouse Lounge</li>
                        <li>Deadwood Saloon</li>
                        <li>Pasta da Pulcinella</li>
                        <li>ONE Midtown Kitchen</li>
                        <li>Park Tavern</li>
                        <li>Metro Fresh</li>
                        <li>Mellow Mushroom</li>
                        <li>Mary Mac's Tea Room</li>
                        <li>Fins</li>                      
                    </ol>
                    <h2 class="g">Groceries</h2>
                    <ol>
                        <li class="g">Publix</li>
                        <li class="g">Trader Joe's</li> 
                        <li class="g">Whole Foods Market</li>
                    </ol>
                    <h2 class="a">Attractions</h2>
                    <ol>
                        <li class="a">Piedmont Park</li>
                        <li class="a">Atlanta Botanical Gardens</li> 
                        <li class="a">The High Museum of Art</li>
                        <li class="a">Woodruff Arts Center</li>
                        <li class="a">Atlanta Symphony Orchestra</li>
                        <li class="a">Alliance Theatre</li>
                        <li class="a">14th Street Playhouse</li>
                        <li class="a">Ansley Park Playhouse</li>
                        <li class="a">Center Stage</li>
                        <li class="a">Center for Puppetry Arts</li>
                        <li class="a">Fox Theatre</li>
                        <li class="a">CB2</li>
                        <li class="a">Exhale Spa</li>
                        <li class="a">Loews Atlanta Hotel</li>
                        <li class="a">Georgia Institute of Technology</li>
                        <li class="a">Atlantic Station</li>
                        <li class="a">Westside (West Midtown)</li>                        
                    </ol>
                </div>
            </article>
            <div class="map-wrapper">
                <div class="map">
                    <img src="/_media/images/map/map.jpg" alt="" width="1400" height="1652" />
                </div>
            </div>
<?php /* FOOTER */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/footer.php"); ?> 
        </section>             
    </body>
</html>