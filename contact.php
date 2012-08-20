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
        
        <?php /* ERROR */ ini_set('error_reporting', E_ALL); ini_set('display_errors', 1); ?>
        <?php /* TAG */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/tag.php"); ?>
        <?php /* PAGE */ $thisPage="Contact"; ?>
        
        <title>77 12th - Contact</title>
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
        
        <script language="javascript">	
            $(function() {   
                $("#contact .button").click(function() {                       
                    var name       = $("#name").val();     
                    var email      = $("#email").val(); 
                    var phone      = $("#phone").val();
                    var street     = $("#street").val();
                    var city       = $("#city").val();
                    var state      = $("#state").val();
                    var zip        = $("#zip").val();
                    var comments   = $("#comments").val();                   
                    var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&street=' + street + '&city=' + city + '&state=' + state + '&zip=' + zip + '&comments=' + comments;      
                    $.ajax({     
                        type: "POST",     
                        url: "email.php",     
                        data: dataString,     
                        success: function(){       
                            $('.success').fadeIn(500);
                            $('input, textarea').hide();     
                        }     
                    });      
                    return false;   
                }); 
            });
        </script>
                    
    </head>
    <body>
        <section>       	       	
<?php /* NAV */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/nav.php"); ?>
            <article class="contact">
                <div class="contact">
                    <h2 style="padding-bottom:12px;">Downloads:</h2>
                    <ul>                    
                        <li><a href="/_media/downloads/amenities.pdf" target="_blank">Features &amp; Amenities</a></li>
                        <li><a href="/_media/downloads/location.pdf" target="_blank">Location Map</a></li>
                        <li><a href="/_media/downloads/qualifications.pdf" target="_blank">Pre-Qualifications</a></li>
                        <li><a href="/_media/downloads/application.pdf" target="_blank">Lease Application</a></li>
                        <li><a href="/_media/downloads/fees.pdf" target="_blank">Leasing Fees</a></li>                    
                    </li>
                </div>
            </article>
            <form id="contact" method="post">
                <h2>Now Leasing</h2>
                <p>Visit the new leasing center to experience 77 12th today!</p>
                <p>We are located on Crescent Avenue in the 1010 Midtown retail suite next to Ri Ra Irish Pub (directly across the street from 77 12th) with convenient parking available on-site in the 1010 Midtown parking deck.</p>
                <address>
                    <a href="http://goo.gl/maps/qicIS" target="_blank">1080 Peachtree Street NE<br />Atlanta, GA 30309</a>
                </address>
                <p style="padding-bottom:6px;">Hours:</p>
                <p>Monday - Friday  9:00 - 6:00<br />Saturday  10:00 - 5:00<br />Sunday  1:00 - 5:00</p>
                <hr />
                <p class="success" style="display:none">Your message has been sent successfully.</p>
                <input type="text"  id="name"     name="name"     placeholder="*First &amp; Last Name" />
                <input type="email" id="email"    name="email"    placeholder="*Email" />
                <input type="tel"   id="phone"    name="phone"    placeholder="*Phone" />
                <input type="text"  id="street"   name="street"   placeholder="Street Address" />
                <input type="text"  id="city"     name="city"     placeholder="City" />
                <input type="text"  id="state"    name="state"    placeholder="State" />
                <input type="text"  id="zip"      name="zip"      placeholder="Zip" />
                <textarea placeholder="Comments" class="placeholder" name="comments" id="comments"></textarea>
                <input type="submit" name="submit" class="button" />
                <div class="group"></div>
                <footer></footer>
            </form>
<?php /* FOOTER */ include_once($_SERVER['DOCUMENT_ROOT']."/_includes/footer.php"); ?>            
        </section>     
    </body>
</html>