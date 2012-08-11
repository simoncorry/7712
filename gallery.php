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
        <?php /* PAGE */ $thisPage="Gallery"; ?>
        
        <title>77 12th - Gallery</title>
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
                        {image : '/_media/images/slides/gallery/01.jpg', thumb : '/_media/images/slides/gallery/01-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/02.jpg', thumb : '/_media/images/slides/gallery/02-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/03.jpg', thumb : '/_media/images/slides/gallery/03-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/04.jpg', thumb : '/_media/images/slides/gallery/04-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/05.jpg', thumb : '/_media/images/slides/gallery/05-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/06.jpg', thumb : '/_media/images/slides/gallery/06-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/07.jpg', thumb : '/_media/images/slides/gallery/07-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/08.jpg', thumb : '/_media/images/slides/gallery/08-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/09.jpg', thumb : '/_media/images/slides/gallery/09-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/10.jpg', thumb : '/_media/images/slides/gallery/10-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/11.jpg', thumb : '/_media/images/slides/gallery/11-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/12.jpg', thumb : '/_media/images/slides/gallery/12-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/13.jpg', thumb : '/_media/images/slides/gallery/13-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/14.jpg', thumb : '/_media/images/slides/gallery/14-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/15.jpg', thumb : '/_media/images/slides/gallery/15-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/16.jpg', thumb : '/_media/images/slides/gallery/16-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/17.jpg', thumb : '/_media/images/slides/gallery/17-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/18.jpg', thumb : '/_media/images/slides/gallery/18-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/19.jpg', thumb : '/_media/images/slides/gallery/19-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/20.jpg', thumb : '/_media/images/slides/gallery/20-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/21.jpg', thumb : '/_media/images/slides/gallery/21-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/22.jpg', thumb : '/_media/images/slides/gallery/22-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/23.jpg', thumb : '/_media/images/slides/gallery/23-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/24.jpg', thumb : '/_media/images/slides/gallery/24-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/25.jpg', thumb : '/_media/images/slides/gallery/25-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/26.jpg', thumb : '/_media/images/slides/gallery/26-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/27.jpg', thumb : '/_media/images/slides/gallery/27-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/28.jpg', thumb : '/_media/images/slides/gallery/28-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/29.jpg', thumb : '/_media/images/slides/gallery/29-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/30.jpg', thumb : '/_media/images/slides/gallery/30-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/31.jpg', thumb : '/_media/images/slides/gallery/31-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/32.jpg', thumb : '/_media/images/slides/gallery/32-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/33.jpg', thumb : '/_media/images/slides/gallery/33-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/34.jpg', thumb : '/_media/images/slides/gallery/34-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/35.jpg', thumb : '/_media/images/slides/gallery/35-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/36.jpg', thumb : '/_media/images/slides/gallery/36-thumb.jpg'},
                        {image : '/_media/images/slides/gallery/37.jpg', thumb : '/_media/images/slides/gallery/37-thumb.jpg'}
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
                    <h2>Videos &amp; Digital Books</h2>
                    <div>
                        <object style="width:210px;height:120px;">
                            <param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;documentId=120516040250-3b5bd3a7c8404b86b1fc36d0876f94b4" />
                            <param name="allowfullscreen" value="true"/>
                            <param name="menu" value="false"/>
                            <param name="bgcolor" value="#221f1f" />
                            <embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" />
                        </object>
                    </div>
                    <div>
                        <iframe style="border-radius:10px;" src="http://player.vimeo.com/video/25884800" width="210" height="120" seamless="seamless" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                    <div>
                        <object style="width:210px;height:120px;">
                            <param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=mini&amp;documentId=120516040250-3b5bd3a7c8404b86b1fc36d0876f94b4" />
                            <param name="allowfullscreen" value="true"/>
                            <param name="menu" value="false"/>
                            <param name="bgcolor" value="#221f1f" />
                            <embed src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" />
                        </object>
                    </div>
                    <div>
                        <iframe style="border-radius:10px;" src="http://player.vimeo.com/video/25884800" width="210" height="120" seamless="seamless" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                </div>
            </article>
        </section>     
<?php /* NAV SLIDESHOW */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav-slideshow.php"); ?>        
    </body>
</html>