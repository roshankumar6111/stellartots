<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Kids Life- Services</title>
<meta name="description" content="">
<meta name="author" content="">
<?php echo link_tag('assets/css/style.css') ?>
<?php echo link_tag('assets/css/shortcodes.css') ?>
<?php echo link_tag('assets/css/responsive.css') ?>
<?php echo link_tag('assets/css/font-awesome.min.css') ?>
<?php echo link_tag('assets/css/shortcodes.css') ?>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" type="text/css">
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="<?php base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body class="main">
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
         <?php include('header.php');?>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--fullwidth_banner starts-->
            <section class="fullwidth_banner_<?php echo $pagename;?>">
            	<div class="container">

                </div>
            </section>
                
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
                           <div class="container">
                        <!--dt-sc-one-half starts-->
                            <h2>Blog Update</h2>
                            <!--dt-sc-one-half starts-->

                                
<!--
                                <div class="dt-sc-ico-content type2">
                                    <h4 style="color:white;">100% English literacy ; Fully air-conditioned classrooms ; Concept based puzzles ; Home cooked meals ; Equipped Children’s Library ; Audio- Visual Interaction ; Stage exposure ; Projector Movie Screening ; Monthly Health Check- ups ;  Story Telling sessions ; Puppet theatre ; Picnic outings ; Birthday celebrations with cake ; Digital Presence of classroom activities ; WhatsApp connectivity ; Festival celebrations with relevant goodie bags ; Ample play area with Ball pool.</h4>
                                </div>
                     
-->                           <h4 style="color:red;">
                               <?php 
                                 echo $error_image;
                               ?>
                               </h4>
                                <form action="<?php base_url();?>index.php?Landing/upload_it" method="post" enctype="multipart/form-data">
                                  
                                  
                                    <div class="dt-sc-one-fourth column">
                                      <div class="dt-sc-ico-content type1">
                                          <h4 style="color:white;">Day</h4>
                                          <select name="day" style=" border: 1px solid #ccc;
   font-size: 16px;
   height: 54px;
   width: 268px;">
                                              <option value="0">select</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="9">9</option>
                                              <option value="10">10</option>
                                              <option value="11">11</option>
                                              <option value="12">12</option>
                                              <option value="13">13</option>
                                              <option value="14">14</option>
                                              <option value="15">15</option>
                                              <option value="16">16</option>
                                              <option value="17">17</option>
                                              <option value="18">18</option>
                                              <option value="19">19</option>
                                              <option value="20">20</option>
                                              <option value="21">21</option>
                                              <option value="22">22</option>
                                              <option value="23">23</option>
                                              <option value="24">24</option>
                                              <option value="25">25</option>
                                              <option value="26">26</option>
                                              <option value="27">27</option>
                                              <option value="28">28</option>
                                              <option value="29">29</option>
                                              <option value="30">30</option>
                                              <option value="31">31</option>
                                          </select>
                                          <h4 style="color:white; margin-top:20px; ">Month</h4>
                                          <select name="month" style="border: 1px solid #ccc;
   font-size: 16px;
   height: 54px;
   width: 268px;">
                                              <option value="select">select</option>
                                              <option value="Jan">Jan</option>
                                              <option value="Feb">Feb</option>
                                              <option value="Mar">Mar</option>
                                              <option value="Apr">Apr</option>
                                              <option value="May">May</option>
                                              <option value="Jun">Jun</option>
                                              <option value="Jul">Jul</option>
                                              <option value="Aug">Aug</option>
                                              <option value="Sep">Sep</option>
                                              <option value="Oct">Oct</option>
                                              <option value="Nov">Nov</option>
                                              <option value="Dec">Dec</option>
                                              
                                          </select>
                                          <h4 style="color:white; margin-top:20px;">Year</h4>
                                         <select name="year" style=" border: 1px solid #ccc;
   font-size: 16px;
   height: 54px;
   width: 268px;">
                                              <option value="0">select</option>
                                              <option value="2014">2014</option>
                                              <option value="2015">2015</option>
                                              <option value="2016">2016</option>
                                              <option value="2017">2017</option>
                                              <option value="2018">2018</option>
                                              <option value="2019">2019</option>
                                              <option value="2020">2020</option>
                                              <option value="2021">2021</option>
                                              
                                          </select>
                                             
                                       </div>
                                    </div> 
                                      <div class="dt-sc-one-third column">
                                      <div class="dt-sc-ico-content type1">
                                          <h4 style="color:white;">Headline</h4>
                                          <input type="text" name="headline" /> 
                                          <h4 style="color:white; margin-top:20px;">About BLog</h4>
                                          <input type="textarea" name="description" style="height:200px; width:100%;"/>
                                             
                                       </div>
                                    </div> 
                                     <div class="dt-sc-one-fourth column">
                                      <div class="dt-sc-ico-content type1">
                                          <h4 style="color:white; ">Upload Image</h4>
                                          <input type="file" name="userfile" size="20"style="border: 1px solid #ccc;
   font-size: 16px;
   height: 54px;
   width: 268px; color:white;" />
                                             
                                       </div>
                                    </div>  
                                    <div class="dt-sc-one-fourth column">
                                      <div class="dt-sc-ico-content type1" style=" margin-top:20px;">
                                          <input type="submit" name="submit" value="Upload"/>   
                                       </div>
                                    </div>
                                    
                               </form>
                                
                                <div class="dt-sc-hr-very-small"></div>

                                <div class="dt-sc-hr-very-small"></div>

                            
               <!--dt-sc-one-half ends-->
                        
                  
                    </div>                  
                </section>
                <!--fullwidth-background ends-->                
            <!--primary ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
               <footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
              
                <div class="container">
                    

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget tweetbox">
                            <h3 class="widgettitle yellow_sketch"><a href="#"> Twitter Feeds </a></h3>
                            <div id="tweets_container"></div>
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_text">
                        <h3 class="widgettitle steelblue_sketch">Contact</h3>
                            <div class="textwidget">
                                <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> 4318 Mansion House, Greenland <br>  </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-phone"></span> (000) 233 - 3236 </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href="mailto:yourname@somemail.com"> Kidslife@somemail.com </a></p>
                            </div>
                        </aside>
                        <aside class="widget mailchimp">
                            <p> We're social </p>
                            <form name="frmnewsletter" class="mailchimp-form" action="php/subscribe.php" method="post">
                                <p>
                                    <span class="fa fa-envelope-o"> </span>
                                    <input type="email" placeholder="Email Address" name="mc_email" required />	
                                </p>	
                                <input type="submit" value="Subscribe" class="button" name="btnsubscribe">
                            </form>
                            <div id="ajax_subscribe_msg"></div>
                        </aside>
                    </div>
                    
                </div>    
                <!--container ends-->
            </div>
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info">© 2014 Kids Life. All rights reserved.</p>
        			<div class="footer-links">
                        <p>Follow us</p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="#"><img src="<?php base_url();?>assets/images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="#"><img src="<?php base_url();?>assets/images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="#"><img src="<?php base_url();?>assets/images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="#"><img src="<?php base_url();?>assets/images/pinterest.png" alt="" title=""></a></li>
                        </ul>
                    </div>
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="" title="Go to Top" class="back-to-top">To Top ↑</a>
    <!--Java Scripts-->
    <script src="<?php base_url();?>assets/js/jquery.js"></script>
    <script src="<?php base_url();?>assets/js/jquery-migrate.min.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php base_url();?>assets/js/jquery-easing-1.3.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.sticky.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.nicescroll.min.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.inview.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php base_url();?>assets/js/validation.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.tipTip.minified.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script src="<?php base_url();?>assets/js/jquery.bxslider.min.js"></script>   
    <script src="<?php base_url();?>assets/js/twitter/jquery.tweet.min.js"></script>
    <script src="<?php base_url();?>assets/js/shortcodes.js"></script>
    <script src="<?php base_url();?>assets/js/custom.js"></script>
    
    
</body>
</html>
