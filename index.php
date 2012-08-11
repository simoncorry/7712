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
<?php /* NAV */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav.php"); ?>
            <article>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>
        </section>     
        <div id="thumb-tray" class="load-item">
            <div id="thumb-back"></div>
            <div id="thumb-forward"></div>
        </div>
    </body>
</html>