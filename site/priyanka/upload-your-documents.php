<?php echo 'here';exit;
session_start();
 //generate a random string
//generate a random string
    $md5_hash = md5(rand(0,999));

    //make it 5 characters long
    $security_code = substr($md5_hash, 15, 5); 

    //Storing the security code in the session
   $_SESSION["security_code"] = $security_code;
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Upload your documents</title>
	
<meta name="Keywords" content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans">

<meta name="description" content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans">

<meta content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans" name=topic>

<meta content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans" name=subject>    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="stylesheet" href="http://www.loaninmumbai.com/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="http://www.loaninmumbai.com/css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="http://www.loaninmumbai.com/css/font-awesome/css/font-awesome.min.css">
    <!--<link href="css/bootstrap.css" rel="stylesheet">-->

    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
    <!-- sticky menu -->
    <link rel="stylesheet" href="http://www.loaninmumbai.com/js/sticky-menu/core.css">
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="http://www.loaninmumbai.com/js/progressbar/ui.progress-bar.css">
    <script type="text/javascript" src="http://www.loaninmumbai.com/js/crawler.js"></script>
	<script type="text/javascript" src="http://www.loaninmumbai.com/js/jquery.min.js"></script> 
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).attr("value")=="red"){
                $(".red").toggle();
            }
            if($(this).attr("value")=="loanblue"){
                $(".loanblue").toggle();
            }
            if($(this).attr("value")=="debtblue"){
                $(".debtblue").toggle();
            }
        });
    });
</script>


    <!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="http://www.loaninmumbai.com/js/universal/jquery.js"></script>



<!-- main menu -->
<script type="text/javascript" src="http://www.loaninmumbai.com/js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="http://www.loaninmumbai.com/js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://www.loaninmumbai.com/js/mainmenu/selectnav.js"></script>

<script type="text/javascript" src="http://www.loaninmumbai.com/js/mainmenu/scripts.js"></script>

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

<script type="text/javascript" src="http://www.loaninmumbai.com/js/sticky-menu/core.js"></script>
<script type="text/javascript" src="http://www.loaninmumbai.com/js/jquery-1.4.2.min.js"></script>


<script type="text/javascript" src="http://www.loaninmumbai.com/js/dropdown-showhide.js"></script>
<script language="javascript">
window.onload=function(){
document.getElementById("task_dropdown").style.display = "block";
test9();
document.getElementById("meeting_type").style.display = "block";
test7();
}
</script>

<!---------------------- Collapse Script Start ---------------------->
<script>
	function show_story(id)
	{
		var span=document.getElementById('span_'+id);
		var story=document.getElementById('news_'+id);

		if(span.innerHTML=="Add Existing Loan Details")
		{
			story.style.display="block";
			span.innerHTML="No Existing Loan";
		}
		else
		{
			story.style.display="none";
			span.innerHTML="Add Existing Loan Details";
		}
	}
	
	function show_credit_card(id)
	{
		var span=document.getElementById('credit1_'+id);
		var story=document.getElementById('credit2_'+id);

		if(span.innerHTML=="Add Credit Cards Details")
		{
			story.style.display="block";
			span.innerHTML="Dont have Credit Cards";
		}
		else
		{
			story.style.display="none";
			span.innerHTML="Add Credit Cards Details";
		}
	}
</script>
<!---------------------- Collapse Script End ---------------------->
<!-- Calendar Start -->
    <link href="http://www.loaninmumbai.com/css/dp.css" rel="stylesheet" type="text/css" />
    <script src="http://www.loaninmumbai.com/js/datepicker_lang_US.js" type="text/javascript"></script>
    <script src="http://www.loaninmumbai.com/js/jquery.datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {           
            $("#startdate").datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" });
            $("#carddate").datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" });
            $("#enddate").datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" });
            
            function rule(id) {
                if (id == 'datetime') {
                    var v = $("#endtime").val();
                    if (v == "") {
                        return null;
                    }
                    else {
                        var d = v.match(/^(\d{1,4})(-|\/|.)(\d{1,2})\2(\d{1,2})$/);
                        if (d != null) {
                            var nd = new Date(parseInt(d[1], 10), parseInt(d[3], 10) - 1, parseInt(d[4], 10));
                            return { enddate: nd };
                        }
                        else {
                            return null;
                        }
                    }
                }
                else {
                    var v = $("#datetime").val();
                    if (v == "") {
                        return null;
                    }
                    else {
                        var d = v.match(/^(\d{1,4})(-|\/|.)(\d{1,2})\2(\d{1,2})$/);
                        if (d != null) {
                            var nd = new Date(parseInt(d[1], 10), parseInt(d[3], 10) - 1, parseInt(d[4], 10));
                            return { startdate: nd };
                        }
                        else {
                            return null;
                        }
                    }

                }
            }
        });
    </script><!-- Calendar End -->

<script type="text/javascript" src="http://www.loaninmumbai.com/js/radio-onchange-data.js"></script>
  
<!--------------- Tooltip Start --------------->
<script type="text/javascript" src="http://www.loaninmumbai.com/js/supernote.js"></script>
<script type="text/javascript" src="http://www.loaninmumbai.com/js/supernote-data.js"></script>
<!--------------- Tooltip End --------------->
    
    
</head>

<body id="per" data-spy="scroll" data-target=".bs-docs-sidebar">

<div class="site_wrapper">
   
<!-- HEADER -->
<header id="header">

<?php include('inc-top.php'); ?>
    
</header><!-- end header -->

<div class="clearfix"></div>

<div class="top2_wrapper">

<div class="bg1"> <img src="http://www.loaninmumbai.com/images/personal-inner-banner.jpg" alt="" /></div>

<div class="top2_inner">

<div class="container">

<div class="top2 clearfix">
		<div class="title"><h1 style="font-weight:300;">Upload Your Documents</h1></div>
</div>	

</div>	

</div>

</div><!-- end page title --> 


<!-- Contant
======================================= -->

<div class="container" style="margin-top:-50px;">

    <div class="content_fullwidth">
        	
    <div class="three_fifth" style="margin-left:40px;">

    <h3><i>Upload Your Documents</i></h3>

	<form action="#" method="post" name="frm_enquiry" id="frm_enquiry" onSubmit="return text_null();">
		<div class="form-div">
        <label for="name" class="blocklabel">Your Name <span class="mandatory">*</span></label>
        <input name="name" type="text" class="car-field1" />
        </div>
		<div class="form-div">
        <label for="name" class="blocklabel">Mobile No <span class="mandatory">*</span></label>
        <input name="mobile" type="text" class="car-field1"/>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Email id <span class="mandatory">*</span></label>
        <input name="email" type="text" class="car-field1"/>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Loan Type <span class="mandatory">*</span><span class="help-icon"><a href="#remindersheading" class="help-icon supernote-hover-remindersheading"></a></span></label>
        <select name="task_dropdown" id="task_dropdown" class="car-field1" onChange="javascript:test9();"/ style="width:51%; padding:8px;">
          <option value='Unsecured Personal loan'>Unsecured Personal loan</option>
          <option value='Unsecured Business loan'>Unsecured Business loan</option>
          <option value='Home Loan'>Home Loan</option>
          <option value='Loan Against Property' >Loan Against Property</option>
          <option value='Lease Rental Discount' >Lease Rental Discount</option>
          <option value='Car Refinance' >Car Refinance</option>
          <option value='Construction Finance' >Construction Finance</option>
          <option value='Balance Transfer of Business Loan' >Balance Transfer of Business Loan</option>
          <option value='Balance Transfer of Home Loan' >Balance Transfer of Home Loan</option>
          <option value='Balance Transfer of Loan against Property' >Balance Transfer of Loan against Property</option>
          <option value='Debt Consolidation' >Debt Consolidation</option>
          <option value='Professional Finance' >Professional Finance</option>
          <option value='Over Draft' >Over Draft</option>
          <option value='Cash Credit' >Cash Credit</option>
          <option value='Equipment Finance' >Equipment Finance</option>
		  </select>
        </div>
        
 		<div id="personal_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="group_name" type="radio" value="Salaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="group_name" type="radio" value="Self"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salaried">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="self">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        </div>


        
        <div id="business_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        </div>
        
        
        
        <div id="home_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="home_name" type="radio" value="Salaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="home_name" type="radio" value="Self"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedhome">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfhome">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
     <div>
        <label><input type="checkbox" name="colorCheckbox" value="red" checked="checked" > <strong>Spouse/Co-applicant</strong></label>
    </div>
    <div class="red box" style="display:block;">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="coapplicant_name" type="radio" value="Coaapsalaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="coapplicant_name" type="radio" value="Coaapself"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="coaapsal">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="coaapself">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    </div>

        
        </div>
        
 		
		<div id="lap_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="lap_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="lap_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedlap">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selflap">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    <div>
        <label><input type="checkbox" name="colorCheckbox" value="red" checked="checked" > <strong>Spouse/Co-applicant</strong></label>
    </div>
    <div class="red box" style="display:block;">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="spolapgroup_name" type="radio" value="SpolapSalaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="spolapgroup_name" type="radio" value="SpolapSelf"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="spolapsalaried">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="spolapself">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    </div>

        
        </div>
 		
         
         <div id="lrd_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Lease Agreement</label>
		  <input name="attachment" type="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        </div>
         
         
         
         <div id="car_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="car_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="car_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedcar">
        <div style="padding-bottom:10px; padding-top:10px;">
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">RC Book Copy</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Car Insurance Copy</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfcar">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">RC Book Copy</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Car Insurance Copy</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        </div>
       
        
        <div id="construction_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
		<div style="padding-bottom:10px;">
       <p class="label-text"><a href="project-finance-format-cld.doc" class="text-link">Click here</a> to download Project Details Format</p>
       <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
        <label class="blocklabe2">Project Details as per CLD format</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
         </div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Company Profile</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        </div>
        
        
        <div id="btbl_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
        </div>
        </div>
        
        
        <div id="bthl_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="bthl_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="bthl_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedbthl">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfbthl">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    <div>
        <label><input type="checkbox" name="colorCheckbox" value="red" checked="checked" > <strong>Spouse/Co-applicant</strong></label>
    </div>
    <div class="red box" style="display:block;">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="spobthl_name" type="radio" value="Spobthlsalaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="spobthl_name" type="radio" value="Spobthlself"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="spobthlsal">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="spobthlself">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    </div>
        
        
        
        </div> 
         
         
                 
        <div id="btlap_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="blap_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="blap_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedblap">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfblap">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="file" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        
    <div>
        <label><input type="checkbox" name="colorCheckbox" value="red" checked="checked" > <strong>Spouse/Co-applicant</strong></label>
    </div>
    <div class="red box" style="display:block;">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="spobtlap_name" type="radio" value="Spobtlapsalaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="spobtlap_name" type="radio" value="Spobtlapself"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="spobtlapsal">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="spobtlapself">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    </div>
        
        
        </div>
                 
        
        
        <div id="debt_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="debt_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="debt_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salarieddeb">
        <div style="padding-bottom:10px; padding-top:10px;">
        
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfdeb">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    <div>
        <label><input type="checkbox" name="colorCheckbox" value="red" checked="checked" > <strong>Spouse/Co-applicant</strong></label>
    </div>
    <div class="red box" style="display:block;">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="spodebgroup_name" type="radio" value="SpodebSalaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="spodebgroup_name" type="radio" value="SpodebSelf"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="spodebsalaried">
        <div style="padding-bottom:10px; padding-top:10px;">
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="spodebself">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
    </div>
        
             <div>
        <label><input type="checkbox" name="colorCheckbox" value="debtblue" checked="checked" > <strong>Existing Credit Cards</strong></label>
    </div>
    <div class="debtblue" style="display:block; padding-top:10px; padding-bottom:10px;">
	<div class="table-container">
	<table width="100%">
		<thead>
			<tr>
			  <th width="16%" valign="middle" bgcolor="#666666">Bank Name</th>
			  <th width="16%" bgcolor="#666666">Credit Limit</th>
			  <th width="16%" bgcolor="#666666">Limit Utilize</th>
			  <th width="16%" bgcolor="#666666">Credit Card Start Date</th>
			  
		    </tr>
		</thead>
		<tbody>
			<tr>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center">
              <input name="abc" type="text" class="car-field1" style="width:180px;">
              
              </td>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input type="text" class="car-field1" id="carddate"/ style="width:180px;"></td>
		    </tr>	
			<tr>
			  <td colspan="7" class="text-link"><a href="#" class="text-link">Add Other Card</a></td>
		    </tr>	
            <tr>
              <td><strong>Total</strong></td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center"></td>
              
            </tr>	
		</tbody>
	</table>
</div>
    </div>
        </div>
        <div id="professional_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="prof_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="prof_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedpof">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Degree Certificate</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Practice Certificate</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        
        <div id="selfpof">
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Degree Certificate</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Practice Certificate</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
        </div>
        
        
        
        <div id="od_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Provisional ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        
        </div>
                 
        
        <div id="cash_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Provisional ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>

		
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        </div>
        
        
        <div id="equipment_show">
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="mobile" type="text" class="car-field1"/ style="width:200px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Company Profile</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="file" style="padding-top:10px;">
		</div>
          
          <div class="attachment">
		   <a href="javascript:void(0);">More Documents</a>
		</div>
		</div>
        </div>
        
     <div>
        <label><input type="checkbox" name="colorCheckbox" value="loanblue" checked="checked" > <strong>Existing Loan Details</strong></label>
    </div>
    <div class="loanblue" style="display:block; padding-top:10px;">
	<div class="table-container">
	<table width="100%">
		<thead>
			<tr>
			  <th width="16%" valign="middle" bgcolor="#666666">Bank Name</th>
			  <th width="16%" bgcolor="#666666">Products / Services</th>
			  <th width="16%" bgcolor="#666666">Loan Amount</th>
			  <th width="16%" bgcolor="#666666">EMI</th>
			  <th width="16%" bgcolor="#666666">Rate of Intrest</th>
			  <th width="16%" bgcolor="#666666">EMI Start Date</th>
			  <th width="16%" bgcolor="#666666">EMI End Date</th>
		    </tr>
		</thead>
		<tbody>
			<tr>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:90px;"></td>
			  <td align="center">
              <select name="" id="" class="car-field1" onChange="javascript:test9();" style="width:200px;" >
              <option value='Unsecured Personal loan'>Unsecured Personal loan</option>
              <option value='Unsecured Business loan'>Unsecured Business loan</option>
              <option value='Home Loan'>Home Loan</option>
              <option value='Loan Against Property' >Loan Against Property</option>
              <option value='Lease Rental Discount' >Lease Rental Discount</option>
              <option value='Car Refinance' >Car Refinance</option>
              <option value='Construction Finance' >Car Loan</option>
              <option value='Construction Finance' >Two Wheeler Loan</option>
              <option value='Construction Finance' >Construction Finance</option>
              <option value='Professional Finance' >Professional Finance</option>
              <option value='Over Draft' >Over Draft</option>
              <option value='Cash Credit' >Cash Credit</option>
              <option value='Equipment Finance' >Equipment Finance</option>
              </select>
              
              </td>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:80px;"></td>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:80px;"></td>
			  <td align="center"><input name="abc" type="text" class="car-field1" style="width:50px;"></td>
			  <td align="center"><input type="text" class="car-field1" id="startdate"/></td>
			  <td align="center"><input type="text" class="car-field1" id="enddate"/></td>
		    </tr>	
			<tr>
			  <td colspan="7" class="text-link"><a href="#" class="text-link">Add Other Loan</a></td>
		    </tr>	
            <tr>
              <td><strong>Total</strong></td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center"></td>
              <td align="center"></td>
            </tr>	
		</tbody>
	</table>
</div>
    </div>
        <div class="formdiv" style="margin-top:10px;">
          <input type="checkbox"  id="c1" name="cc" checked="checked" />
          <label style="font-size:12px;" for="c1"><span></span>I agree terms and condition</label>
          </div>

		<div class="form-div">
        <img src="http://www.loaninmumbai.com/captcha.php" id="captcha" alt="captcha"/>
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

<!-- Footer
======================================= -->

<?php include('inc-footer.php'); ?>
<?php include('inc-footer-last.php'); ?>



<!-- end copyright info -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

<!----------------- Tooltip Content Start ----------------->
<div id="supernote-note-remindersheading" class="snp-mouseoffset pinnable notedefault">
<p class="help-text">You can tag leads in 3 categories, hot, hotter, hottest.</p>
</div>

<!----------------- Tooltip Content End ----------------->

</div>
</body>
</html>
