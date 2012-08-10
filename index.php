<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="ie6 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 7]>   <html lang="en" class="ie7 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 8]>   <html lang="en" class="ie8 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<!--[if IE 9]>   <html lang="en" class="ie9 ie" xmlns="http://www.w3.org/1999/xhtml"><![endif]-->
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        <?php /* ERROR */ ini_set('error_reporting', E_ALL); ini_set('display_errors', 0); ?>
        <?php /* TAG */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/tag.php"); ?>
        <?php /* PAGE */ $thisPage="Home"; ?>
        
        <title>77 12th - Luxury High-Rise Apartments - Midtown Atlanta</title>
        <meta name="Author" content="77 12th" />
        <meta name="description" content="77 12th - Luxury High-Rise Apartments - Midtown Atlanta"/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=960px, user-scalable=no"> 
        <meta name="apple-mobile-web-app-capable" content="yes" />
                    
        <?php /* FACEBOOK OG */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/fb-og.php"); ?>
        <?php /* GOOGLE PLUS SNIPPET */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/gp-snippet.php"); ?>
        <?php /* LINKS */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/head.php"); ?>  
        
        <!-- /// PRELOAD  /// -->
        <script type="text/javascript">        
            $(document).ready(function() {    
                $('#preloader').show();
                $('#controls-wrapper').hide();
                $('#thumb-tray').hide();
                onload = function() {        
                    $('#preloader').hide();
                    $('section').addClass('show');
                    $('#controls-wrapper').show();
                    $('#thumb-tray').show();
                }
            });
        </script>
        
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
                        {image : '/_media/images/slides/home/01.jpg', thumb : '/_media/images/slides/home/01.jpg'},
                        {image : '/_media/images/slides/home/02.jpg', thumb : '/_media/images/slides/home/02.jpg'},
                        {image : '/_media/images/slides/home/03.jpg', thumb : '/_media/images/slides/home/03.jpg'},
                        {image : '/_media/images/slides/home/04.jpg', thumb : '/_media/images/slides/home/04.jpg'},
                        {image : '/_media/images/slides/home/05.jpg', thumb : '/_media/images/slides/home/05.jpg'},
                        {image : '/_media/images/slides/home/06.jpg', thumb : '/_media/images/slides/home/06.jpg'},
                        {image : '/_media/images/slides/home/07.jpg', thumb : '/_media/images/slides/home/07.jpg'}
                    ]
                });
            });            
        </script>
        
        <!-- /// TRAY BTN /// -->
        <!-- Remove this when confirmed thumb nav
        <script type="text/javascript">
            $(document).ready(function() { 
                $('#tray-button').click(function() {
                    $(this).toggleClass('active');
                });
            });
        </script>
        -->
        
        <!-- /// TOGGLE BTN /// -->
        <script type="text/javascript">
            $(document).ready(function() { 
                $('.toggle').click(function() {
                    $('section').toggleClass('hide');
                });
            });
        </script>
              
    </head>
    <body>
        <div id="preloader"></div>
        <section>
        	<ul id="social-links">
            	<li><a href="#" class="icon-twitter"></a></li>
            	<li><a href="#" class="icon-vimeo"></a></li>
            	<li><a href="#" class="icon-facebook"></a></li>
            	<li><a href="#" class="icon-webcam"></a></li>            	
        	</ul>       	
        	<nav>
            	<ul>
            	   <li><a href="#">Amenities</a></li>
            	   <li><a href="#">Features</a></li>
            	   <li><a href="#">Location</a></li>
            	   <li><a href="#">Floor Plans</a></li>
            	   <li><a href="#">Gallery</a></li>
            	   <li><a href="#">Contact</a></li>
            	</ul>
        	</nav>
        	<header>
            	<a href="/"><h1></h1></a>
        	</header>
        	<article>
            	<div>
            	    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
        	</article>
        	<aside>
            	<ul>
                	<li class="logo"><a href="#" class="icon-logo"></a></li>
            	</ul>
        	</aside>
        	<div class="group"></div>
        </section> 
        <div>
            <object style="width:100%;height:100%;padding:0 !important;margin:0 !important;">
                <param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;documentId=120516040250-3b5bd3a7c8404b86b1fc36d0876f94b4" />
                <param name="allowfullscreen" value="true"/>
                <param name="menu" value="false"/>
                <param name="wmode" value="transparent"/>
                <param name="scale" value="noborder" />
                <param name="bgcolor" value="#ffffff" />
                <param name="wmode" value="transparent"/>
                <embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" wmode="transparent" />
            </object>
        </div>     
        <!-- Slideshow Controls -->        
        <!-- Remove this
        <div id="controls-wrapper" class="load-item">
            <div id="controls">
                <a id="tray-button" class=""></a>
                <ul id="slide-list"></ul>            
            </div>
        </div>  
        -->      
        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>
        
        
        <!-- <div class="toggle" style="z-index:9999; position:absolute; bottom:40px; left:40px; background:red; width:200px; height:20px;">TOGGLE CONTENT</div> -->
        
    </body>
</html>