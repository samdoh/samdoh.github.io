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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container">
                        <div class="sixteen map columns"> 
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1021364.4023429034!2d36.39264093852213!3d-0.4324108151313434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x18285dfed09e0ebf%3A0x829716f702f65e9e!2sNyeri!3m2!1d-0.42778089999999996!2d36.943359099999995!5e0!3m2!1sen!2ske!4v1465813817074" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                             -->    <iframe width="100%" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1021364.4023429034!2d36.39264093852213!3d-0.4324108151313434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x18285dfed09e0ebf%3A0x829716f702f65e9e!2sNyeri!3m2!1d-0.42778089999999996!2d36.943359099999995!5e0!3m2!1sen!2ske!4v1465813817074"></iframe>
                        </div>
                        <div class="sixteen columns"><span class="hr mapdv"></span></div>
                        <!-- <div class="five columns">
                            <h5 class="semi">About Us</h5>
                            <p>In id odio justo, eu aliquet odio, nunc viverra ligula</p>
                            
                            <h5 class="semi">Contact Info</h5>
                            <p>
                                12345 Random Rd,<br />
                                Baltimore MD, 21212
                                <span class="hr"></span>
                                Phone: 1.800.555.6789<br />                          
                                Fax: 1.800.555.6789<br />                 
                                Email: example@ex.com<br />                           
                                Web: www.ex.com
                            </p>
                            
                            <h5 class="semi">Testimonials</h5>
                            <ul class="slide testimonials clr overlap">
                                <li>
                                    <p>Mia Web Designs' willingness to help make the best website for us was outstanding. We highly recommend Mia Web Designs.
                                        <strong>Nico Tigulis</strong>                               	</p>
                                </li>
                          <li>
                                    <p>I got the HTML files&hellip; Thank you so much, I appreciate your quick response and attention. I recommend you! A++ Service! 
                                        <strong>movilwebs - ThemeForest Member</strong>                                </p>
                                </li>
                       <li>
                                   <p>Great business, was very prompt to my request. Your templates are great. Strongly recommended to anyone looking for a great website.
                                        <strong>Chris Fale</strong>                              </p>
                            </li>
                          </ul>
                            
                        </div> -->
                        <div class="contact eleven columns">
                            <div class="standard-form compressed">
                                <h4 class="semi">Contact Form</h4>
                                <div class="form-result"></div>
                                <form action="about.php" class="contactForm" id="contactus" name="contactus">
                                    <input type="text" class="input" id="name" name="name" placeholder="Name *" />
                                    <input type="text" class="input" id="email" name="email" placeholder="Email *" />
                                    <input type="text" class="input extend" id="subject" name="subject" placeholder="Subject" />
                                    <textarea name="comment" id="comment" rows="10" cols="65" placeholder="Message *" ></textarea>
                                    <div class="submit">
                                          <a class="button color" href="javascript:contactUsSubmit();"><span>Submit</span></a>
                                    </div>
                                    <div class="clear"></div>
                                </form>
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