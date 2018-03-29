<?php
include("includes/header.php")
?>
 <?php 
error_reporting(0);
session_start();
$counter_name = "counter.txt";

//Check if  text file exist if not crate one and initialise it to zero.
if (!file_exists($counter_name)) {
    $f=fopen($counter_name, "w");
    fwrite($f, "0");
    fclose($f);
}
//Read the current value of our counter file.
$f=fopen($counter_name, "r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);

//Has visitor been counted in this session?
//If not, increase counter value by one.
if (!isset($_SESSION['hasVisited'])) {
    $_SESSION['hasVisited'] = "yes";
    $counterVal++;
    $f = fopen($counter_name, "w");
    fwrite($f, $counterVal);
    fclose($f);
}
?>

<body>
    
    <div class="page-wrapper">
        <div class="slug-pattern slider-expand">
            <div class="background-image" id="1"></div>
            <div class="overlay"><div class="slug-cut"></div>
        </div></div>
        <div class="header slider-expand">
            <div class="nav">
            
                
                <div class="container">
                
                    <!-- Standard Nav (x >= 768px) -->
                    <div class="standard">
                    
                        <div class="five column alpha">
                            <div class="logo">
                                <a  maef="index.html"><img src="images/logo.png" /></a><!-- Large Logo -->
                            </div>
                        </div>
                    
                       <?php
                        include("includes/main_menu.php")
                        ?>


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


            <div class="slug">
                <div class="container">
                    
                    <div class="onebyone-wrapper">
                        <div class="preload">
                            <center><img src="images/design/preloader.gif" /></center>
                        </div>
                        <div class="fallback">
                            <img src="images/fallback-image.png" class="scale-with-grid" />
                        </div>
                        <div class="outer">
                        
                            <div class="onebyone hide" id="onebyone">

                                
                                <div id="slide-01" class="oneByOne_item" data-bg="images/background-1.jpg">
                                    <div id="left">
                                        <h3>Introducing:</h3>
                                        <h2>Samdoh Tech-solutions.</h2> 
                                        <h1>The Modern Ultimate Computer Solution providers!</h1>
                                                                               
                                    </div>
                                    <img src="images/onebyone/lens_1.png" class="lens" id="one" /> 
                                    <img src="images/onebyone/lens_6_thumb.png" class="lens" id="two" />  
                                    <img src="images/onebyone/lens_3_thumb.png" class="lens" id="three" />  
                                    <!-- <img src="images/onebyone/thumb_1.png" class="lens" id="four" /> --> 

                                    <div class="button">
                                        <a href="about.php"><img src="images/button-slider.png" /></a>
                                    </div>
                                    <!-- <img src="images/imac-2.png" class="monitor" />
                                    <img src="images/iphone-2.png" class="iphone" />
                                    <img src="images/ipad.png" class="ipad" /> -->                                     

                                </div>
                                
                                <div id="slide-02" class="oneByOne_item" data-bg="images/background-2.jpg">
                                    <img src="images/onebyone/money-currency-change.png" class="lens" id="two" />
                                    <div id="right">
                                    	<h2>Money:</h2>
                                        <h3>You can now Transfer money and airtime instantly between Paypal and M-Pesa and Transfer Airtime across networks in Kenya.</h3>
                                        <h4>It's Easy, Efficient, and Reliable Funds Transfer and Exchange.</h4>
                                    </div>
                                    <div class="button">
                                       <a href="about.php"><img src="images/button-slider.png" /></a>
                                    </div>

                                    <!-- <img src="images/onebyone/responsive_text.png" class="lens" id="one" /> -->

                                    <!-- <img src="images/ipad.png" class="iphone" />
                                    <img src="images/laptop.png" class="laptop" />
                                    <img src="images/monitor.png" class="monitor" /> -->

                                    
                                </div>
                                
                                 <div id="slide-03" class="oneByOne_item" data-bg="images/background-1.jpg">
                                    <div id="left">
                                    	<h4>Super Cool Graphics Design Service: Logos, Banners, Fliers, Posters, T-Shirts, Roll-ups, Lables ...</h4>
                                        <h3>We Always work hard To Give Your Company New Identity And Direction Necessary For It To Stand Out...</h3>
                                       	<h2>From Your Competitors</h2>
                                    </div>
                                    <img src="images/onebyone/lens_3.png" class="lens" id="three" />
                                    
                                    <div class="button">
                                        <a href="about.php"><img src="images/button-slider.png" /></a>
                                    </div>
                                    <!-- <img src="images/onebyone/1_laptop.png" class="laptop" />
                                    <img src="images/onebyone/1_ipad.png" class="ipad" />
                                    <img src="images/onebyone/1_iphone.png" class="iphone" /> -->
                                    
                                </div>

                               <div id="slide-02" class="oneByOne_item" data-bg="images/background-2.jpg">
                                    <img src="images/onebyone/lens_2.png" class="lens" id="two" />
                                    <div id="right">
                                        <h2>You Order:</h2>
                                        <h3>We deliver and support. This is what makes us to be your best IT Partner!</h3>
                                        <h4>Your website design is your chance to tell the world who you are and what you deal with, establish a great reputation and show off what you do best. Above all, it’s your chance to sell your products or services even more. A web design service that achieves all of that can be always hard to find.</h4>
                                    </div>
                                    <div class="button">
                                       <a href="about.php"><img src="images/button-slider.png" /></a>
                                    </div>
                                    <!-- <img src="images/ipad.png" class="iphone" />
                                    <img src="images/laptop.png" class="laptop" />
                                    <img src="images/monitor.png" class="monitor" /> -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="body">
            <div class="body-round"></div>
            <div class="body-wrapper">
                <div class="side-shadows"></div>
                <div class="content">
                    <div class="container callout">
                        
                        <div class="twelve columns">
                            <h5>Welcome to <span>Samdoh Tech-solutions</span> - We are redefining how businesses and organizations operate by offering an 
                                efficient software solutions. In addition to our on-premises solution, we also offer a cloud-based system. <span>Professional</span> Websites and Graphics for Companies, Organisationsa and Individuals.</h5>
                            <p class="subtitle">We also provide IT consultancy services for both Software and Hardware infrustructure.</p>
                        </div>
                        
                       <!--  <div class="four columns button-wrap">
                            <div class="wrapper"><a href="about.php" class="button color"><span>Read More >></span></a></div>
                        </div> -->
                    </div>
                    <div class="callout-hr"></div>                        
                    <div class="container">
                                            	
                   		



                        <div class="sixteen circles columns">
                            <ul>                                
                                <li class="columns">
                                    <a href="#">
                                        <div class="icon iphone">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h5>Responsive</h5>
                                                <span class="hr"></span>
                                                <p>We develop responsive websites to both Small, Medium and Large Devices. </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="columns">
                                    <a href="#">
                                        <div class="icon buoy">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h5>Support</h5>
                                                <span class="hr"></span>
                                                <p>We give our clients 24/7 direct IT support. Using teamviewer to offer on-point support</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="columns">
                                    <a href="#">
                                        <div class="icon client">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h5>Easy-to-Use</h5>
                                                <span class="hr"></span>
                                                <p>We develop an easy-to-use standard softwares that will offer you what you need in few .</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="columns last-child">
                                    <a href="#">
                                        <div class="icon trophy">
                                            <div class="content">
                                                <div class="symbol"></div>
                                                <h5>Unique Design</h5>
                                                <span class="hr"></span>
                                                <p>Samdoh is always focused on unique and proficient Designs.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="clear"></div>
                            </ul>
                        </div>    







                        <div class="sixteen columns">         
                            <!-- carousel starts -->
                            <div class="slidewrap">
                            	<div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title"><strong>Recent</strong> Projects</h4>
                                    </div>
                                    <ul class="slidecontrols">
                                        <li><a href="#sliderName" class="next">Next</a></li>
                                        <li><a href="#sliderName" class="prev">Prev</a></li>
                                    </ul>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
                                <ul class="slider carousel" id="sliderName">
                                    <li class="slide"><!-- slide starts -->
                                        <div class="one-third column portfolio-item">
                                            <div class="content">
                                                <div class="border">
                                                    <!-- <img class="scale-with-grid" src="images/thirds-woman-executives.jpg" />
                                                     --><a href="images/untouched/woman-executives.jpg" class="prettyPhoto zoom"></a>
                                                    <a class="link" href="portfolio-standard-3.html"></a>
                                                    </div>
                                                    <h5><center><a href="#">Salary Payments Calculator</a></center></h5>
                                                     <p>This is for automated payment calculation for an Employer,quick and easy to use. It automatically calculate the net payment and commissions...</p>
                                                      <a href="includes/dowloadPaycalcManual.php">Download install Guide</a> | <a href="includes/downloadPaycalc.php">Download Demo Program</a> | <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">Download JDK</a>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                    
                                        
                                        <div class="one-third column portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                    <a href="images/untouched/woman-executives.jpg" class="prettyPhoto zoom"></a>
                                                    <a class="link" href="portfolio-standard-3.html"></a>
                                                </div>
                                                <h5><center><a href="#">Inventory Managemnt</a></center></h5>
                                                <p>Gain complete inventory control in offices, warehouses, supply rooms, classrooms, work vehicles, and more.</p>
                                                <!-- <a href="includes/dowloadPaycalcManual.php">Download install Guide</a> | 
                                                <a href="includes/downloadPaycalc.php">Download Demo Program</a> | 
			                         <a href="http://www.oracle.com/technetwork/java/javase/downloads/jdk8-downloads-2133151.html">Download JDK</a> -->
                                           	</div>
                                            <div class="shadow"></div>
                                        </div>
                                        
                                            
                                     
                                        
                                    </li><!-- slide ends -->
                                    <li class="slide"><!-- slide starts -->
                                        <div class="one-third column alpha portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                    <!-- <img class="scale-with-grid" src="images/thirds-business-model.jpg" />
                                                     --><a href="images/untouched/business-model.jpg" class="prettyPhoto zoom"></a>
                                                    <a class="link" href="portfolio-standard-3.html"></a>
                                                </div>
                                               <center><h5 class="noline"><a href="#">Payroll System</a></h5></center>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        
                                         <div class="one-third column omega portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                    <!-- <img class="scale-with-grid" src="images/thirds-woman-laptop.jpg" />
                                                    --> <a class="zoom prettyPhoto" href="images/untouched/woman-laptop.jpg"></a>
                                                    <a class="link" href="portfolio-standard-3.html"></a>
                                                </div>
                                               <center><h5 class="noline"><a href="#">Sacco Management System</a></h5></center>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        
                                        <div class="one-third column omega portfolio-item">
                                        	<div class="content">
                                                <div class="border">
                                                  	<!-- <img class="scale-with-grid" src="images/thirds-woman-laptop.jpg" />
                                                	 --><a href="images/untouched/woman-laptop.jpg" class="zoom prettyPhoto"></a>
                                                    <a class="link" href="portfolio-standard-3.html"></a>
                                                </div>
                                               <center><h5 class="noline"><a href="#">Church Management System</a></h5></center>
                                            </div>
                                            <div class="shadow"></div>
                                        </div>
                                        
                                    </li><!-- slide ends -->
                                </ul>
                            </div><!-- end of carousel -->  
                            <span class="empty-hr"></span>
                            
                            <div class="two-thirds column alpha">
                                <div class="title-wrapper">
                                    <div class="section-title">
                                        <h4 class="title">Why Choose Us?</h4>
                                    </div>
                                    <span class="divider"></span>
                                    <div class="clear"></div>
                                </div>
                                <ul class="accordion" id="1">
                                    <li>
                                        <div class="parent first">
                                            <h6><div class="accordion-caption"></div>Reliable and always available IT Partners.</h6>
                                        </div>
                                        <div class="tcontent">
                                            We are always available for your 24/7 assistance and responce, to offer you the ready solutions.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="parent">
                                            <h6><div class="accordion-caption"></div>Affordable, simple and satisfying ICT solution for your company.</h6>
                                        </div>
                                        <div class="tcontent">
                                            We offer you standard solutions at minimum and affordable prices, since we are focused on your business success.
                                        </div>
                                    </li>
                                    <li>
                                        <div class="parent">
                                            <h6><div class="accordion-caption"></div>Unique and Innovative solutions.</h6>
                                        </div>
                                        <div class="tcontent">
                                         We offer unique solutions with sound nnovations to differenciate your products and services from competitors.
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
                                    <!-- <li>
                                        <div class="quote">
                                            <p>
                                                Testimonial coming soon. 
                                            </p>
                                        </div>
                                        <div class="source">
                                            <img src="images/unknown.jpg" />
                                            <strong>Name Two
                                                <a href="#">Contact Me</a>
                                            </strong>
                                            <div class="clear"></div>
                                        </div>
                                    </li> -->
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
                                </ul>
                            </div>                         
							
                            <div class="clear"></div>
                            <span class="hr"></span>
                            
                            <div class="callout intext">
                        
                                <div class="alpha twelve columns">
                                	<div class="content">
                                        <h4>New App in Development!</h4>
                                        <p class="subtitle">School Management and Exam Analysis System that will suit High Schools</p>
                                    </div>
                                </div>
                                
                                <div class="omega four columns">
                                   <div class="intext-button">
                                   		<a href="#" class="big-button"><span>Check it Out!</span></a>
                                   </div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                             <div class="title-wrapper">
                                <div class="section-title">
                                    <h4 class="title"><strong>Our</strong> Partners</h4>
                                </div>
                                <ul class="slidecontrols">
                                    <li><a href="#clientSlider" class="next">Next</a></li>
                                    <li><a href="#clientSlider" class="prev">Prev</a></li>
                                </ul>
                                    <span class="divider"></span>
                            	<div class="clear"></div>
                            </div> 
                        </div>
                        
                        <div class="clients columns sixteen slidewrap2">
                            <ul class="slider carousel" id="clientSlider">
                                <li class="slide">
                                    <div class="client alpha">
                                        <a href="#"><img id="transparent" src="images/saf.png" /></a>
                                    </div>
                                    <div class="client beta">
                                        <a href="#"><img id="transparent" src="images/ibm.jpg" /></a>
                                    </div>
                                    <div class="client delta">
                                        <a href="#"><img id="transparent" src="images/hp.png" /></a>
                                    </div>
                                    <div class="client omega">
                                        <a href="#"><img id="transparent" src="images/bulksms.jpg" /></a>
                                    </div>
                                </li>
                                
                                <li class="slide">
                                    <div class="client alpha">
                                        <a href="#"><img id="transparent" src="images/kenyawebexperts.png" /></a>
                                    </div>
                                    <div class="client beta">
                                        <a href="#"><img id="transparent" src="images/samdoh.png" /></a>
                                    </div>
                                    <!-- <div class="client delta">
                                        <a href="#"><img id="transparent" src="images/logo4.png" /></a>
                                    </div>
                                    <div class="client omega">
                                        <a href="#"><img id="transparent" src="images/logo1.png" /></a>
                                    </div> -->
                                </li>
                            </ul>
                            
                        </div>  
                        <div class="clear"></div>
                        <div class="sixteen columns">
                       		<span class="hr lip-quote">Contact Person : (+254) 727 031 141</span>
                            <blockquote class="standard bottom">
                                Visitors Count:  <br /> <?php echo "$counterVal"; ?>
                            </blockquote>
                        </div> 
                    </div></div>
                </div>
           

           <!--footer here -->
           <?php
            include("includes/footer.php")
            ?>

        
    <script type="text/javascript">
    <!--
        $(window).load(function(){
            // Setup Slider
            $(".onebyone.hide").fadeIn(1000);
            $('.onebyone').oneByOne({
                className: 'oneByOne1',	             
                easeType: 'random',
                autoHideButton: false,
                width: 960,
                height: 840,
                minWidth: 680,
                slideShow: true
            });
             $("a[class^='prettyPhoto']").prettyPhoto({social_tools: '' });
        });
        $(document).ready(function() {
            $('.slidewrap, .slidewrap2').carousel({
                slider: '.slider',
                slide: '.slide',
                slideHed: '.slidehed',
                nextSlide : '.next',
                prevSlide : '.prev',
                addPagination: false,
                addNav : false
            });
			$('.slide.testimonials').contentSlide();
			$('.bbss').contentSlide();
        });
    // -->
    </script>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
    <script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/EmpiricalThemes.json?callback=twitterCallback2&count=2"></script>
	</div>
</body>


</html>