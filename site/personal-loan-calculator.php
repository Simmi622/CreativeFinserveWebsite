<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Personal Loan Calculator</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightgreen.css" />-->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/brown.css" />-->
    
<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-ten.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eleven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-twelve.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-thirteen.css" />-->

    
    <!-- sticky menu -->
    <link rel="stylesheet" href="js/sticky-menu/core.css">
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin2.css" />
 <script type="text/javascript" src="js/crawler.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script> 
   
    <script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselthree').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouselfour').jcarousel();
	});
	
</script>

<script type="text/javascript" src="js/sticky-menu/core.js"></script>

</head>

<body>

<div class="site_wrapper">
   
<!-- HEADER -->
<header id="header">
<?php include('inc-top.php'); ?>
    
</header><!-- end header -->

<div class="clearfix"></div>

<div class="top2_wrapper">

<div class="bg1"> <img src="images/calculator-inner-banner.jpg" alt="" /></div>

<div class="top2_inner">

<div class="container">

<div class="top2 clearfix">
		<div class="title"><h1 style="font-weight:300;">Personal Loan Calculator</h1></div>
</div>	

</div>	

</div>

</div><!-- end page title --> 


<!-- Contant
======================================= -->

<div class="container">

<!-- left sidebar starts -->
<div class="left_sidebar">

	<div class="sidebar_widget">
    
    	<div class="sidebar_title"><h3><i>Calculator</i></h3></div>
        
		<?php include('inc-calc.php'); ?>
        
	</div><!-- end section -->
    
</div><!-- end left sidebar -->


<div class="content_right">
    
    	<h2>Personal Loan <strong> Calculator</strong></h2>
        
        <p>Digital computation system that allows a borrower to project how much the monthly payment will be on a loan and how long it will take to repay the borrowed amount. A loan calculator factors in the repayment of interest and principal on the loan to determine how long it will take to pay off. This is a good tool for potential borrower to use to see if they will be able to afford the monthly payment on the loan. To receive the most accurate number, a borrower would have to ask the lender for the interest rate that they qualify for.</p>
        
        <div class="clearfix mar_top2"></div>
        <iframe src="personal-loan/personal-loan.html" width="100%" height="1150px" frameBorder="0" scrolling="no"></iframe>
        
        	    

</div><!-- end content right side -->

</div><!-- end content area -->


<div class="clearfix mar_top5"></div>

<!-- Footer
======================================= -->

<?php include('inc-footer.php'); ?>
<?php include('inc-footer-last.php'); ?>

<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



 
</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->


</body>
</html>
