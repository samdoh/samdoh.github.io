<?php
include("includes/header.php")
?>

<body><div class="page-wrapper">
        <div class="slug-pattern"><div class="overlay"><div class="slug-cut"></div></div></div>
        <div class="header">
                <div class="nav">       
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                        <div class="eleven column omega tabwrapper">
                             <?php
                                include("includes/main_menu.php")
                                ?>

                        </div>
                    </div>
                    <!-- Standard Nav Ends, Start of Mini -->
                    
                    <div class="mini">
                        <div class="twelve column alpha omega mini">
                            <div class="logo">
                                <a href="index.html"><img src="images/logoMINI.png" /></a><!-- Small Logo -->
                            </div>
                        </div>
                        
                        <div class="twelve column alpha omega navagation-wrapper">
                            <select class="navagation">
                                <option value="" selected="selected">Site Navagation</option>
                            </select>
                        </div>
                    </div>
                    <!-- Start of Mini Ends -->
                </div> 
                
            </div>
            
            <div class="shadow"></div>
            <div class="container">
                <div class="page-title">
                    <div class="rg"></div>
                    <h1>Money Transfer</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container">
                        

                        <!-- YOUR CONTENT HERE -->

                        <div class="two-thirds column alpha">
                                <div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Paypal to M-Pesa Money Transfer:</h4>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="tcontent"><div class="clear"></div>
                                     <p>   
                                    Here you can Transfer money instanly from Paypal to M-Pesa and also top-up any network in Kenya, try now to transfer money instant from your Paypal into Mpesa. 
                                    </p>
<!-- 
                                    <h4>Exchange Procedure :</h4>

                                    <P>
                                        Click 
                                    </p> -->

                                        </div>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>

                                <ul class="accordion" id="1">
                                    <li>
                                        <div class="parent first">
                                            <h6><div class="accordion-caption"></div>PAYPAL >> M-PESA</h6>
                                        </div>
                                        <div class="cotact standard-form tcontent">
                                                <form  id="paypalForm" onsubmit="return checkDetails()" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="B7BHA9X2TXRKW">
                                                <table>
                                                <tr>
                                                <td><input type="hidden" name="on0" value="Enter Your Name :">Full Name :</td>
                                                </tr><tr><td><input id="senderName" type="text" name="os0" maxlength="200"></td></tr>
                                                <tr><td><input type="hidden" name="on1" value="Enter Your Number :">Phone Number to Fund :
                                                </td></tr><tr><td><input id="tel1" type="text" name="os1" maxlength="200"></td></tr>
                                                <tr><td><input  type="hidden" name="on1" value="Enter Your Number :">Confirm Phone Number :
                                                </td></tr><tr><td><input id="tel2" type="text" name="os1" maxlength="200"></td></tr>
                                                <td><input type="hidden" name="on0" value="Enter Your Name :">Paypal Email Address :</td>
                                                </tr><tr><td><input id="senderName" type="text" name="os0" maxlength="200"></td></tr>
                                                <tr><td><input type="hidden" name="on1" value="Enter Your Number :">City :
                                                </td></tr><tr><td><input id="tel1" type="text" name="os1" maxlength="200"></td></tr>
                                                <tr><td><input  type="hidden" name="on1" value="Enter Your Number :">Confirm Phone Number :
                                                </td></tr><tr><td><input id="tel2" type="text" name="os1" maxlength="200"></td></tr>
                                                </td></tr><tr><td><div class="wrapper"><span><input type="submit" value="Submit Details >>"/></span></div></td></tr>
                                                </td></tr><tr><td><div class="wrapper"></div></td></tr>
                                                
                                                </table>
                                                <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" 
                                                alt="PayPal - The safer, easier way to pay online!"> --> 
                                                <!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
                                                <!-- <input type="submit" style=" background-color:#2280a8; font-color:#FFFFFF" value="Submit >>" /> -->
                                                </form>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="parent">
                                            <h6><div class="accordion-caption"></div>M-PESA >> PAYPAL</h6>
                                        </div>
                                        <div class="tcontent">

                                            Coming Soon
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="one-third column omega">
                                <div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Testimonials</h4>
                                    </div>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
                                <ul class="style-2 slide testimonials clr overlap">
                                    <li>
                                        <div class="quote">
                                            <p>
                                                Samdoh Solutions Served Me well, it is a greate team!
                                            </p>
                                        </div>
                                        <div class="source">
                                            <img src="images/unknown.jpg" />
                                            <strong>Rachael Muriithi
                                                <a href="#">Contact Me : 0796 826 396</a>
                                            </strong>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quote">
                                            <p>
                                                I am able to do all my financial trasfers easily and quick, the app is greate and reliable! greate. 
                                            </p>
                                        </div>
                                        <div class="source">
                                            <img src="images/unknown.jpg" />
                                            <strong>Munyaka Ngethe
                                                <a href="#">Contact Me : 0724 809 208</a>
                                            </strong>
                                            <div class="clear"></div>
                                        </div>
                                    </li>
                                    <!-- <li>
                                         <div class="quote">
                                            <p>
                                                Testimonial coming soon. 
                                            </p>
                                        </div>
                                        <div class="source">
                                            <img src="images/unknown.jpg" />
                                            <strong>Name Three
                                                <a href="#">Contact Me</a>
                                            </strong>
                                            <div class="clear"></div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <?php
            include("includes/footer.php")
            ?>
        
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
            $('.slide.testimonials').contentSlide({'nav': false});
        });
    </script>

    <script type="text/javascript" src="js/jquery.color.animation.js"></script>
    <script src="ajax/ajax_default.js" type="text/javascript"></script>
    <script src="ajax/email_conf.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>

    </div>
</body>

</html>