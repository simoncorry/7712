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
        <?php /* TAG */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/tag.php"); ?>
        <?php /* PAGE */ $thisPage="Amenities"; ?>
        
        <title>77 12th - Amenities</title>
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
                        {image : '/_media/images/slides/amenities/01.jpg', thumb : '/_media/images/slides/amenities/01-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/02.jpg', thumb : '/_media/images/slides/amenities/02-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/03.jpg', thumb : '/_media/images/slides/amenities/03-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/04.jpg', thumb : '/_media/images/slides/amenities/04-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/05.jpg', thumb : '/_media/images/slides/amenities/05-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/06.jpg', thumb : '/_media/images/slides/amenities/06-thumb.jpg'},
                        {image : '/_media/images/slides/amenities/07.jpg', thumb : '/_media/images/slides/amenities/07-thumb.jpg'}
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
              
    </head>
    <body>
        <div id="preloader"></div>
        <section>       	       	
<?php /* NAV */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav.php"); ?>
            <article>
                <div>
                    <h2>Outdoor Plaza Level<br />(6th Floor):</h2>
                    <ul>
                        <li>Saline swimming pool with epic waterfall and in-water tanning ledges</li>
                        <li>Cabana lounges</li>
                        <li>Outdoor fireplaces</li>
                        <li>Private grilling and entertainment areas</li>
                        <li>Bocce ball court</li>
                        <li>Poolside sports bar with multiple HD displays</li>
                        <li>Lush landscaping with uninterrupted views of the Atlanta skyline</li>
                    </ul>
                    <h2>Top Floor Club Level<br />(23rd floor):</h2>
                    <ul>
                        <li>Sports lounge with billiards, poker, shuffleboard, and theater seating</li>
                        <li>Outdoor sky deck with breathtaking panoramic views</li>
                        <li>Cyber caf&eacute;</li>
                        <li>Skyline viewing room with fireplace</li>
                        <li>Media / library lounge</li>
                        <li>Conference center</li>
                        <li>State-of-the-art fitness center with dramatic views</li>
                    </ul>
                    <h2>Conveniences:</h2>
                    <ul>
                        <li>Concierge</li>
                        <li>Wireless Internet</li>
                        <li>Secured covered parking &amp; building access</li>
                        <li>4 high-speed elevators with dedicated freight elevator</li>
                        <li>Trash chutes on each floor</li>
                    </ul>
                </div>
            </article>
        </section>     
<?php /* NAV SLIDESHOW */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav-slideshow.php"); ?>        
    </body>
</html>