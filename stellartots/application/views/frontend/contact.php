<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
 <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb" class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Stellartots- Contact</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<?php echo link_tag('assets/css/style.css') ?>
<?php echo link_tag('assets/css/shortcodes.css') ?>
<?php echo link_tag('assets/css/responsive.css') ?>
<?php echo link_tag('assets/css/font-awesome.min.css') ?>
<?php echo link_tag('assets/css/shortcodes.css') ?>
<?php echo link_tag('assets/css/layerslider.css') ?>
<?php echo link_tag('assets/css/prettyPhoto.css') ?>

<?php echo $map['js']; ?>
<!--Fonts-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="<?php base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
</head>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <?php include('header.php');?>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Contact</h1>
                    <div class="breadcrumb">
                        <a href="index.html">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Contact</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
				
<!--					<div id="map"> </div>-->
                    <?php echo $map['html']; ?>
                    
                    <div class="dt-sc-hr"> </div>
                    
                    <!--dt-sc-two-third starts-->
                    <div class="column dt-sc-three-fourth first contact_form_outer">
                        <form name="frcontact" class="contact-form" method="post" action="<?php base_url()?>index.php?Email/send_mail_byparent">
                        	<h2>We'd Like to Hear From You!</h2>
                            <p class="column dt-sc-one-third first">
                                <input id="name" name="txtname" type="text" placeholder="Name" required="">
                            </p>
                            <p class="column dt-sc-one-third">
                                <input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
                            </p>
                            <p class="column dt-sc-one-third">
                            	<input id="subject" name="txtsubject" type="text" placeholder="Subject" required="">
                            </p>
                            <p>
                            	<textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
                            </p>
                            <div id="ajax_contact_msg"> </div>
                            <p>
                                <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Send Email">
                            </p>
                        </form>
                    </div>
                    <!--dt-sc-two-third ends-->
                    
                    <!--dt-sc-one-third starts-->
                    <div class="column dt-sc-one-fourth class_hours">
                    	<h2>Class Hours</h2>
                        <ul class="class_hours">
                        	<li>Monday<span>9am - 3pm</span></li>
                            <li>Tuesday<span>9am - 3pm</span></li>
                            <li>Wednesday<span>9am - 3pm</span></li>
                            <li>Thursday<span>9am - 3pm</span></li>
                            <li>Friday<span>9am - 3pm</span></li>
                            <li>Saturday<span>Holiday</span></li>
                            <li>Sunday<span>Holiday</span></li>
                        </ul>
                        <div class="dt-sc-hr-small"></div>
                    </div>
                    <!--dt-sc-one-third ends-->
                    
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
       <?php include('footer.php')?>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="" title="Go to Top" class="back-to-top">To Top ↑</a>
    <!--Java Scripts-->
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php base_url();?>assets/js/jquery-migrate.min.js"></script>   
	<script type="text/javascript" src="<?php base_url();?>assets/js/jquery.tabs.min.js"></script>
	<script type="text/javascript" src="<?php base_url();?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php base_url();?>assets/js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.inview.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/shortcodes.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/validation.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php base_url();?>assets/js/twitter/jquery.tweet.min.js"></script>    
    <script type="text/javascript" src="<?php base_url();?>assets/js/shortcodes.js"></script>      
    <script type="text/javascript" src="<?php base_url();?>assets/js/custom.js"></script>
    
</body>
</html>
