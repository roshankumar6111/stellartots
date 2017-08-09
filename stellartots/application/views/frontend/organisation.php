<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Stellartots- Services</title>
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
                          <?php include ($pagename.'.php');?>                    
                </section>
                <!--fullwidth-background ends-->                
            <!--primary ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
         <?php include('footer.php');?>
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
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.inview.js"></script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/shortcodes.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>
