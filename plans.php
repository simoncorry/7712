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
        <?php /* PAGE */ $thisPage="Plans"; ?>
        
        <title>77 12th - Floor Plans</title>
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
        
        <!-- /// FIXED FOOTER /// -->
        <script type="text/javascript">
        $(document).ready(function() {
		    $("section > footer").pinFooter("relative");
		});

		$(window).resize(function() {
		    $("section > footer").pinFooter("relative");
		});
        </script>
        
        <!-- /// FLOOR PLANS /// -->
        <script type="text/javascript">
        $(document).ready(function() {
		    /* 1b */
		    $('div.plate-1b').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1b.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1b.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-2').css("display", "block"); 
            });
            $('div.plate-1b').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-2').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1b-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1b.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1b.png)"); 
                
                $('div.info-1').css("display", "none"); 
                $('div.info-2').css("display", "block"); 
            });
            $('div.plate-1b-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)"); 
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-2').css("display", "none"); 
                $('div.info-1').css("display", "block");
            });
            /* 1c */
		    $('div.plate-1c').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1c.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1c.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-3').css("display", "block"); 
            });
            $('div.plate-1c').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-3').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1c-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1c.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1c.png)"); 
                
                $('div.info-1').css("display", "none"); 
                $('div.info-3').css("display", "block"); 
            });
            $('div.plate-1c-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)"); 
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-3').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 1d */
		    $('div.plate-1d').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1d.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1d.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-4').css("display", "block"); 
            });
            $('div.plate-1d').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-4').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 1e */
		    $('div.plate-1e').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1e.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1e.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-5').css("display", "block"); 
            });
            $('div.plate-1e').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-5').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 1f */
		    $('div.plate-1f').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1f.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1f.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-6').css("display", "block"); 
            });
            $('div.plate-1f').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-6').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 1g */
		    $('div.plate-1g').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1g.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1g.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-7').css("display", "block"); 
            });
            $('div.plate-1g').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-7').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1g-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1g.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1g.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-7').css("display", "block"); 
            });
            $('div.plate-1g-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-7').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 1h */
		    $('div.plate-1h').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1h.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1h.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-8').css("display", "block"); 
            });
            $('div.plate-1h').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-8').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1h-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1h.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1h.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-8').css("display", "block"); 
            });
            $('div.plate-1h-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-8').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1h-3').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1h.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1h.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-8').css("display", "block"); 
            });
            $('div.plate-1h-3').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-8').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-1h-4').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1h.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1h.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-8').css("display", "block"); 
            });
            $('div.plate-1h-4').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-8').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 2A */
		    $('div.plate-2a').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-2a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-2a.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-9').css("display", "block"); 
            });
            $('div.plate-2a').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-9').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-2a-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-2a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-2a.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-9').css("display", "block"); 
            });
            $('div.plate-2a-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-9').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 2C */
		    $('div.plate-2c').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-2c.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-2c.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-10').css("display", "block"); 
            });
            $('div.plate-2c').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-10').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-2c-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-2c.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-2c.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-10').css("display", "block"); 
            });
            $('div.plate-2c-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-10').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            /* 2C */
		    $('div.plate-studio').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-st.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-st.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-11').css("display", "block"); 
            });
            $('div.plate-studio').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-11').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
            $('div.plate-studio-2').mouseover(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-st.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-st.png)");
                
                $('div.info-1').css("display", "none"); 
                $('div.info-11').css("display", "block"); 
            });
            $('div.plate-studio-2').mouseout(function() {              
                $('div.plate-base').css("background-image", "url(/_media/images/plans/floorplate-1a.png)");
                $('div.unit-base').css("background-image", "url(/_media/images/plans/unit-1a.png)");
                
                $('div.info-11').css("display", "none"); 
                $('div.info-1').css("display", "block"); 
            });
		});
        </script>
                         
    </head>
    <body>
        <section>       	       	
<?php /* NAV */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav.php"); ?>
            <article class="plans">
                <div class="plans">
                    <!-- Plate -->
                    <div class="plate-base-main"></div>
                    <div class="plate-base"></div>
                    <div class="plate-1b"></div>
                    <div class="plate-1b-2"></div>
                    <div class="plate-1c"></div>
                    <div class="plate-1c-2"></div>
                    <div class="plate-1d"></div>
                    <div class="plate-1e"></div>
                    <div class="plate-1f"></div>
                    <div class="plate-1g"></div>
                    <div class="plate-1g-2"></div>
                    <div class="plate-1h"></div>
                    <div class="plate-1h-2"></div>
                    <div class="plate-1h-3"></div>
                    <div class="plate-1h-4"></div>
                    <div class="plate-2a"></div>
                    <div class="plate-2a-2"></div>
                    <div class="plate-2c"></div>
                    <div class="plate-2c-2"></div>
                    <div class="plate-studio"></div>
                    <div class="plate-studio-2"></div>
                    <!-- Unit -->
                    <div class="unit-base"></div>                  
                    <!-- Info -->
                    <div class="info info-1">
                        <h2>Unit 1A</h2>
                        <p>ONE BEDROOM / ONE BATH<br />714 SF + 66 SF BALCONY</p>
                    </div>
                    <div class="info info-2" style="display:none;">
                        <h2>Unit 1B</h2>
                        <p>ONE BEDROOM / ONE &amp; ONE HALF BATHS<br />730 SF + 65 SF BALCONY</p>
                    </div>
                    <div class="info info-3" style="display:none;">
                        <h2>Unit 1C</h2>
                        <p>ONE BEDROOM / ONE BATH<br />735 SF + 62 SF BALCONY</p>
                    </div>
                    <div class="info info-4" style="display:none;">
                        <h2>Unit 1D</h2>
                        <p>ONE BEDROOM / ONE BATH<br />740 SF + 53 SF BALCONY</p>
                    </div>
                    <div class="info info-5" style="display:none;">
                        <h2>Unit 1E</h2>
                        <p>ONE BEDROOM / ONE BATH<br />761 SF + 53 SF BALCONY</p>
                    </div>
                    <div class="info info-6" style="display:none;">
                        <h2>Unit 1F</h2>
                        <p>ONE BEDROOM / ONE BATH<br />780 SF + 70 SF BALCONY</p>
                    </div>
                    <div class="info info-7" style="display:none;">
                        <h2>Unit 1G</h2>
                        <p>ONE BEDROOM / ONE BATH<br />784 SF + 74 SF BALCONY</p>
                    </div>
                    <div class="info info-8" style="display:none;">
                        <h2>Unit 1H</h2>
                        <p>ONE BEDROOM / ONE BATH<br />797 SF + 62 SF BALCONY</p>
                    </div>
                    <div class="info info-9" style="display:none;">
                        <h2>Unit 2A</h2>
                        <p>TWO BEDROOMS / TWO BATHS<br />1,128 SF + 112 SF BALCONY</p>
                    </div>
                    <div class="info info-10" style="display:none;">
                        <h2>Unit 2C</h2>
                        <p>TWO BEDROOMS / TWO BATHS<br />1,239 SF + 128 SF BALCONY</p>
                    </div>
                    <div class="info info-11" style="display:none;">
                        <h2>Unit ST</h2>
                        <p>STUDIO / ONE BATH<br />643 SF + 96 SF BALCONY</p>
                    </div>
                </div>
            </article>
            <article class="plans-2">
                <div class="plans-2 scroll">
                    <h2 style="padding-bottom:6px;">Downloads:</h2>
                    <ul class="plans">                    
                        <li><a href="/_media/downloads/1a.pdf" target="_blank">Unit 1A</a></li>
                        <li><a href="/_media/downloads/1b.pdf" target="_blank">Unit 1B</a></li>
                        <li><a href="/_media/downloads/1c.pdf" target="_blank">Unit 1C</a></li>
                        <li><a href="/_media/downloads/1d.pdf" target="_blank">Unit 1D</a></li>
                        <li><a href="/_media/downloads/1e.pdf" target="_blank">Unit 1E</a></li>
                        <li><a href="/_media/downloads/1f.pdf" target="_blank">Unit 1F</a></li> 
                        <li><a href="/_media/downloads/1g.pdf" target="_blank">Unit 1G</a></li> 
                        <li><a href="/_media/downloads/1h.pdf" target="_blank">Unit 1H</a></li> 
                        <li><a href="/_media/downloads/2a.pdf" target="_blank">Unit 2A</a></li> 
                        <li><a href="/_media/downloads/2c.pdf" target="_blank">Unit 2C</a></li>
                        <li><a href="/_media/downloads/studio.pdf" target="_blank">Studio</a></li>                     
                    </li>
                </div>
            </article>
<?php /* FOOTER */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/footer.php"); ?>            
        </section>     
    </body>
</html>