<?php
ini_set('memory_limit', '256M');
ini_set('upload_max_filesize', '64M');
session_start();
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->

<head>
<title>Upload your documents</title>
<meta name="Keywords" content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans">
<meta name="description" content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans">
<meta content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans" name=topic>
<meta content="Unsecured Personal Loan, Personal Loan, Personal Loan Interest Rates, Unsecured Personal Loans, Personal Loan Interest Rate, Personal Loan Calculator, Apply for Personal Loan, Best Personal Loan, Personal Loans Interest Rates, Personal Loan Interest, Online Personal Loan, Apply Personal Loan, Personal Loan Rate of Interest, Personal Loan Interest Calculator, Personal Loan Apply Online, Rate of Interest on Personal Loan, Personal Loans" name=subject>    
    <!-- Favicon --> 
  <link rel="shortcut icon" href="localhost/satishLoanForm/images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!--<link href="css/bootstrap.css" rel="stylesheet">-->

    
    <!-- responsive devices styles -->
  <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
    <!-- sticky menu -->
    <link rel="stylesheet" href="js/sticky-menu/core.css">
    
    <!-- progressbar -->
    <link rel="stylesheet" href="js/progressbar/ui.progress-bar.css">
    <script type="text/javascript" src="js/crawler.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript">
    $(document).ready(function(){
        //$('.error').css('display','none');

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
    <script src='https://www.google.com/recaptcha/api.js'></script>
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>
<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

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

<script type="text/javascript" src="js/sticky-menu/core.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>


<script type="text/javascript" src="js/dropdown-showhide.js"></script>
<script language="javascript">
window.onload=function(){
document.getElementById("task_dropdown").style.display = "block";
test9();
//document.getElementById("meeting_type").style.display = "block";
//test7();
}
</script>

<!-- Collapse Script Start -->
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
<!-- Collapse Script End-->
<!-- Calendar Start -->
    <link href="css/dp.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/datepicker_lang_US.js"></script>
    <script type="text/javascript" src="js/jquery.datepicker.js"></script>
 <!--   <script src="../js/datepicker_lang_US.js" type="text/javascript"></script>
    <script src="../js/jquery.datepicker.js" type="text/javascript"></script>-->
<!-- <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            Date.now = Date.now || function() { return +new Date; };
            //$("#carddate").datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" });
           $(".datepicker").each(function(){  
              $(this).attr('readonly',true);
              $(this).datepicker({ picker: "<img class='picker' id='img_0' align='middle' src='images/cal.gif' alt=''/>" }); 
            });
           $("#carddate").each(function(){  $(this).datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" }); });
    });
    </script><!-- Calendar End -->

<script type="text/javascript" src="js/radio-onchange-data.js"></script>
  
<!--Tooltip Start -->
<script type="text/javascript" src="js/supernote.js"></script>
<script type="text/javascript" src="js/supernote-data.js"></script>
<!-- Tooltip End -->
<script>
function addmoreSalaried(divName){
    var newdiv = document.createElement('div');
    newdiv.innerHTML = "<label class='blocklabe2'></label><div style='padding-bottom:10px;'><input name='userfile[]' type='file' /></div>";
    document.getElementById(divName).appendChild(newdiv);         
   }
</script> 
<script>
function addmoreotherLOan(divName){
    var newdiv = document.createElement('div');
    loan_div = $('#loan_row').html();
    
    var no_of_clicks = $('#no_of_clicks').val();
    var cnt = parseFloat($('#no_of_clicks').val())+1;
    $('#no_of_clicks').val(cnt);
    $('#loan_row_container').append(loan_div).addClass('testclass');
    $('.testclass table:first').addClass(cnt);
      $('.testclass .spare').addClass('datepicker_'+cnt);
      var i=1;
      $(".datepicker_"+cnt).each(function(){
       // alert(i);alert(i%2);
        //if(i%2 !== 0){
          if($('#img_'+i).length == 0){
             $(this).datepicker({ 
              picker: "<img class='picker' align='middle' id='img_"+i+"' src='images/cal.gif' alt=''/>" 
            }); 
          }
       // }
        i++;
      });
  }
  
  function addmoreotherCard(divName){
    var newdiv = document.createElement('div');
    loan_div = $('#card_row').html();
    $('#card_row_container').append(loan_div).addClass('testclass_card');
    var no_of_clicks = $('#no_of_clicks_card').val();
    
    if(no_of_clicks == 0){
      var cnt= $('#no_of_clicks_card').val() + 1;
        $('.testclass_card .spare_card').addClass('datepickercard_'+cnt);
        $(".datepickercard_"+cnt).each(function(){  $(this).datepicker({ picker: "<img class='picker' align='middle' src='images/cal.gif' alt=''/>" }); });
      }     
   }

</script> 

<input type="hidden" name="no_of_clicks" id="no_of_clicks" value="0">
<input type="hidden" name="no_of_clicks_card" id="no_of_clicks_card" value="0">

      
</head>


<body id="per" data-spy="scroll" data-target=".bs-docs-sidebar">

<div class="site_wrapper">
   
<!-- HEADER -->
<header id="header">

<?php include('inc-top.php'); ?>
    
</header><!-- end header -->

<div class="clearfix"></div>

<div class="top2_wrapper">

<div class="bg1"> <img src="images/personal-inner-banner.jpg" alt="" /></div>

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
          
    <div class="three_fifth" style="margin-left:40px;border:0px solid blue">

    <!--<h3><i>Upload Your Documents</i></h3>-->

<div class="form-div">
  <span class="mandatory">
    <?php 
      if(isset($_GET['error'])){
        echo $_GET['error'];
      }else if(isset($_GET['success'])){
        echo "Thank you ".$_GET['name'];
      }
    ?>
  </span>
</div>
  <?php include('main_form.php');?>
    
    </div>


<div id="card_row" style="display: none;">
      <table>
        <tr>
          <td align="center"><input name="Existing_bank_name[]" id="Existing_bank_name" type="text" class="car-field1" style="width:180px;"></td>
          <td align="center"><input name="Existing_Credit_Limit[]" id="Existing_Credit_Limit" type="text" class="car-field1" style="width:180px;"></td>
          <td align="center"><input name="Existing_Limit_Utiliz[]" id="Existing_Limit_Utiliz" type="text" class="car-field1" style="width:180px;"></td>
          <td align="center"><input type="text"  name="carddate[]" class="car-field1 spare_card" id="carddate"/ style="width:180px;"></td>
        </tr>
      </table>
</div>
               
  <div id="loan_row" style="display:none;">
    <table><tr>
    <td align="center" style="width:121px;"><input name="bank_name[]" id='bank_name'  type="text" class="car-field1" style="width:90px;"></td>
    <td align="center">
        <select name="products_services[]" id="Products_Services" class="car-field1" onChange="javascript:test9();" style="width:200px;">
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
    <td align="center" style="width:120px;"><input name="loan_amt[]" id='loan_amt'  type="text" class="car-field1" style="width:80px;"></td>
    <td align="center" style="width:118px;"><input name="loan_emi[]" id='loan_emi' type="text" class="car-field1" style="width:80px;"></td>
    <td align="center" style="width:105px;"><input name="loan_rate_int[]" id='loan_rate_int' type="text" class="car-field1"></td>
    <td align="center" style="width:125px;"><input type="text" class="car-field1 spare" name="startdate[]" data-validation="date" data-validation-format="dd/mm/yyyy"/></td>
    <td align="center" style="width:108px;"><input type="text" class="car-field1 spare" name="enddate[]"  data-validation="date" data-validation-format="dd/mm/yyyy" /></td>
   </tr>
  </table>
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

<!-- Tooltip Content Start-->
<div id="supernote-note-remindersheading" class="snp-mouseoffset pinnable notedefault">
<p class="help-text">You can tag leads in 3 categories, hot, hotter, hottest.</p>
</div>

<!-- Tooltip Content End -->

</div>
</body>
</html>
