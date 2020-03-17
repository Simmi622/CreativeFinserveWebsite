<?php
session_start();

 //generate a random string
//generate a random string
    $md5_hash = md5(rand(0,999));

    //make it 5 characters long
    $security_code = substr($md5_hash, 15, 5); 

    //Storing the security code in the session
   $_SESSION["security_code"] = $security_code;
   
   ob_start( 'ob_gzhandler' );

?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">

<head>
	<meta charset="utf-8">
	<title>Creative Finserve: Contact Us for Loan in Mumbai, Personal Loan, Business Loan, Home Loan, Term Loan, Loan Against Property, Lease Rental Discount, Car Refinance, Construction Finance, Credit Card, Creative Finserve</title>
<meta name="Keywords" content="Loan in Mumbai, Unsecured Business Loan in Mumbai, Secured Loan in Mumbai, Unsecured Loan in Mumbai, Loan Against Property in Mumbai, Home Loan in Mumbai, LAP in Mumbai, LRD in Mumbai, Car Refinance in Mumbai, Lease Rental Discount in Mumbai, Debt Consolidation in Mumbai, Home Loan, Loan Against Property, Personalised Solution for Loan in Mumbai, Loan Solutions in Mumbai, Balance transfer of Loan, Balance transfer of Business Loan, Balance transfer of Home Loan, Balance transfer of Loan Against Property, Balance transfer of LAP, Faqs for LAP, Creative Finserve">
<meta name="description" content="Creative finserve provide personalised solutions for Loan in Mumbai, Unsecured Business Loan in Mumbai, Secured Loan in Mumbai, Unsecured Loan in Mumbai, Loan Against Property in Mumbai, Home Loan in Mumbai, LAP in Mumbai, LRD in Mumbai, Car Refinance in Mumbai, Lease Rental Discount in Mumbai, Debt Consolidation in Mumbai, Home Loan, Loan Against Property, Personalised Solution for Loan in Mumbai, Loan Solutions in Mumbai, Balance transfer of Loan, Balance transfer of Business Loan, Balance transfer of Home Loan, Balance transfer of Loan Against Property, Balance transfer of LAP, Faqs for LAP. For more information visit loaninmumbai.com">
    <meta name="author" content="Creative Finserve">
    <link rel="canonical" href="http://loaninmumbai.com/reach-us.php"/>
    <meta property="og:title" content="Creative Finserve: Contact Us for Loan in Mumbai, Personal Loan, Business Loan, Home Loan, Term Loan, Loan Against Property, Lease Rental Discount, Car Refinance, Construction Finance, Credit Card, Creative Finserve"/>
    <meta property="og:site_name" content="Creative Finserve"/>
    <meta property="og:description" content="Creative finserve provide personalised solutions for Loan in Mumbai, Unsecured Business Loan in Mumbai, Secured Loan in Mumbai, Unsecured Loan in Mumbai, Loan Against Property in Mumbai, Home Loan in Mumbai, LAP in Mumbai, LRD in Mumbai, Car Refinance in Mumbai, Lease Rental Discount in Mumbai, Debt Consolidation in Mumbai, Home Loan, Loan Against Property, Personalised Solution for Loan in Mumbai, Loan Solutions in Mumbai, Balance transfer of Loan, Balance transfer of Business Loan, Balance transfer of Home Loan, Balance transfer of Loan Against Property, Balance transfer of LAP, Faqs for LAP. For more information visit loaninmumbai.com"/>
    <meta property="og:image" content="http://loaninmumbai.com/images/logo-mail.png">
	<link rel="shortcut icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/li-scroller.css" rel="stylesheet">
    <link rel="stylesheet" href="js/sticky-menu/core.css">
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
	<script type="text/javascript" src="js/crawler.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-65186317-1', 'auto');
      ga('send', 'pageview');
    </script>
<script type="text/javascript">
function text_null()
{
	var msg="";
	
	if(document.frm_enquiry.name.value==0)
	{
		msg=msg + "Please Enter Name\n";
	}
	if(document.frm_enquiry.mobile.value != 0)
	{	
		var str_in = parseFloat(document.frm_enquiry.mobile.value)
		if (isNaN(str_in)){
			msg=msg + "Please Enter Valid Mobile No.\n";
		}
	}
	if(document.frm_enquiry.email.value==0)
	{
		msg=msg + "Please Enter Email ID\n";
	}
	else
	{
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = document.frm_enquiry.email.value;
		if(reg.test(address) == false) 
		{
			msg=msg+"Please Enter Valid Email\n";
		}
	}	
	if(document.frm_enquiry.coname.value==0)
	{
		msg=msg + "Please Enter Company Name\n";
	}
	if(document.frm_enquiry.designation.value==0)
	{
		msg=msg + "Please Select Designation\n";
	}
	if(document.frm_enquiry.profile.value==0)
	{
		msg=msg + "Please Select Profile\n";
	}
	if(document.frm_enquiry.message.value==0)
	{
		msg=msg + "Please Enter Your Feedback\n";
	}
	if(document.frm_enquiry.security_code.value==0)
	{
		msg=msg + "Please Enter Security Code\n";
	}else{
		if(document.frm_enquiry.security_code.value != document.frm_enquiry.security_code.value)
		{
			msg=msg + "Please Enter Valid Security Code\n";
		}
	}
	if(msg!="")
	{
		alert(msg);
		return false;
	}
alert ("Thank you for your Feedback.");
//return true;
}
</script>
</head>
<body oncontextmenu="return false">
<div class="site_wrapper">
<header id="header">
<?php include('inc-top.php'); ?>
</header><!-- end header -->
<div class="clearfix"></div>
<div class="top2_wrapper">
    <div class="bg1"><img src="images/feedback-inner-banner.jpg" alt="Loan in Mumbai, Personal Loan, Business Loan, Home Loan, Term Loan, Loan Against Property, Lease Rental Discount, Car Refinance, Construction Finance, Credit Card, Creative Finserve" title="Loan in Mumbai, Personal Loan, Business Loan, Home Loan, Term Loan, Loan Against Property, Lease Rental Discount, Car Refinance, Construction Finance, Credit Card, Creative Finserve"/></div>
<div class="top2_inner">	

<div class="container">

<div class="top2 clearfix">
		<div class="title"><h1 style="font-weight:300;">Contact Us</h1></div>
</div>	

</div>	

</div>

</div>

<div class="container">

	<div class="content_fullwidth">
        	
    <div class="one_half">

    <h3><i>Feedback Form</i></h3>

	<form action="connect_feedback.php" method="post" name="frm_enquiry" id="frm_enquiry" onSubmit="return text_null();">
		<div class="form-div">
        <label for="name" class="blocklabel">Your Name <span class="mandatory">*</span></label>
        <input name="name" type="text" class="car-field1_1" size="68" />
        </div>
		<div class="form-div">
        <label for="name" class="blocklabel">Mobile No <span class="mandatory">*</span></label>
        <input name="mobile" type="text" class="car-field1_1" size="68" />
		</div>
        
		<div class="form-div">
        <label for="name" class="blocklabel">Email id <span class="mandatory">*</span></label>
        <input name="email" type="text" class="car-field1_1" size="68" />
		</div>
        
		<div class="form-div">
        <label for="name" class="blocklabel">Company Name <span class="mandatory">*</span></label>
        <input name="coname" type="text" class="car-field1_1" size="68" />
		</div>
        
		<div class="form-div">
        <label for="name" class="blocklabel">Designation <span class="mandatory">*</span></label>
        <input name="designation" type="text" class="car-field1_1" size="68" />
		</div>
        
        <div class="form-div">
        <label for="name" class="blocklabel">Select Profile <span class="mandatory">*</span></label>
            <select name="profile"  class="car-field1" style="width:71%">
              <option selected="selected" placeholder="please select profile">Select Profile</option>
              <option>Salaried</option>
              <option>Self Employed</option>
              <option>Professional</option>
              <option>Other</option>
           </select>
        </div>
        
		<div class="form-div">
        <label for="message" class="blocklabel">Feedback in Detail <span class="mandatory">*</span></label>
        <textarea name="message" style="height:100px; width:69%" class="car-field1"></textarea>
        </div>
		<div class="form-div">
        <img src="captcha.php" id="captcha" alt="captcha"/>
        </div>
		<div class="form-div">
        <input type="text" id="security_code" name="security_code" autocomplete="off" class="car-field"/>
        </div>
		<div class="form-div">
        <input type="hidden" id="captchacode" name="captchacode" value="25a59"/>
        </div>
		<div class="form-div">
        <input type="submit" name="Submit" id="Submit" value="Submit" class="comment_submit2"/>
        </div>
        </form> 
    </div>
    
</div>
</div><!-- end content area -->
<div class="clearfix mar_top5"></div>

<?php include('inc-footer.php'); ?>
<?php include('inc-footer-last.php'); ?>
<a href="#" class="scrollup">Scroll</a>
 
</div>
<script type="text/javascript" src="js/universal/jquery.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-affix.js"></script>
<script src="js/application.js"></script>
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/mainmenu/scripts.js"></script>
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
</body>
</html>
