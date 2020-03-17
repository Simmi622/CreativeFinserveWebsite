<?php
ini_set('memory_limit', '256M');
ini_set('upload_max_filesize', '64M');
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
	<link rel="shortcut icon" href="http://loaninmumbai.com/images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="stylesheet" href="http://loaninmumbai.com/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="http://loaninmumbai.com/css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="http://loaninmumbai.com/css/font-awesome/css/font-awesome.min.css">
    <!--<link href="css/bootstrap.css" rel="stylesheet">-->

    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="http://loaninmumbai.com/css/responsive-leyouts.css" type="text/css" />
    
    <!-- sticky menu -->
    <link rel="stylesheet" href="http://loaninmumbai.com/js/sticky-menu/core.css">
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="http://loaninmumbai.com/js/progressbar/ui.progress-bar.css">
    <script type="text/javascript" src="http://loaninmumbai.com/js/crawler.js"></script>
	<script type="text/javascript" src="http://loaninmumbai.com/js/jquery.min.js"></script> 
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
<script type="text/javascript" src="http://loaninmumbai.com/js/universal/jquery.js"></script>



<!-- main menu -->
<script type="text/javascript" src="http://loaninmumbai.com/js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="http://loaninmumbai.com/js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://loaninmumbai.com/js/mainmenu/selectnav.js"></script>

<script type="text/javascript" src="http://loaninmumbai.com/js/mainmenu/scripts.js"></script>

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

<script type="text/javascript" src="http://loaninmumbai.com/js/sticky-menu/core.js"></script>
<script type="text/javascript" src="http://loaninmumbai.com/js/jquery-1.4.2.min.js"></script>


<script type="text/javascript" src="http://loaninmumbai.com/js/dropdown-showhide.js"></script>
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
    <link href="http://loaninmumbai.com/css/dp.css" rel="stylesheet" type="text/css" />
    <script src="http://loaninmumbai.com/js/datepicker_lang_US.js" type="text/javascript"></script>
    <script src="http://loaninmumbai.com/js/jquery.datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
		/*$('#add_more').click(function(e){
			e.preventDefault();
			$(this).before("<label class='blocklabe2'></label><div style='padding-bottom:10px;'><input name='file[]' type='file' /></div>");
		});		*/
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

<script type="text/javascript" src="http://loaninmumbai.com/js/radio-onchange-data.js"></script>
  
<!--------------- Tooltip Start --------------->
<script type="text/javascript" src="http://loaninmumbai.com/js/supernote.js"></script>
<script type="text/javascript" src="http://loaninmumbai.com/js/supernote-data.js"></script>
<!--------------- Tooltip End --------------->
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
	  newdiv.innerHTML = "<div style='padding-left:50px;'></div><tr><td><strong style='padding: 0px 90px 0 0 ;'>Total</strong></td><td align='center'><input name='Other_Loan_prd_sec' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='Other_Loan_loan_amt' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='Other_Loan_loan_emi' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='Other_Loan_loan_rate_int' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='Other_Loan_start_date' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='Other_Loan_end_date' type='text' class='car-field1' style='width:80px;padding: 5px 5px 5px 5px;'></td></tr><div style='height:10px;'></div>";
	  document.getElementById(divName).appendChild(newdiv);         
   }
function addmoreotherCard(divName){
	  var newdiv = document.createElement('div');
	  newdiv.innerHTML = "<tr><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name='other_Credit_Name' id='other_Credit_Name' type='text' class='car-field1' style='width:180px;'></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align='center'><input name='other_Credit_Limit1' id='other_Credit_Limit1' type='text' class='car-field1' style='width:180px;'></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align='center'><input name='other_Limit_Utiliz1' id='other_Limit_Utiliz1' type='text' class='car-field1' style='width:180px;'></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align='center'><input name='other_carddate1' id='other_carddate1' type='text' class='car-field1' style='width:180px;'></td></tr><div style='height:10px;'></div>";
	  document.getElementById(divName).appendChild(newdiv);         
   }

</script> 


      
</head>
<?php
$name=$nameErr=$mobile=$mobileErr=$email=$emailErr =$task_dropdownErr=$userfile=$captchaErr=$Website=$Website_Url=$bank_name=$bank=$Products_Services=$Products=$loan_amt=$loanamt=$loan_emi=$loanemi=$loan_rate_int=$loanrateint=$startdate_e=$startdate=$enddate_e=$enddate=$Other_Loan_prd_sec=$Other_Loan_prd_sec_e=$Other_Loan_loan_amt_e=$Other_Loan_loan_amt=$Other_Loan_loan_emi_e=$Other_Loan_loan_emi=$Other_Loan_loan_rate_int_e=$Other_Loan_loan_rate_int=$Other_Loan_start_date_e=$Other_Loan_start_date=$Other_Loan_end_date=$Other_Loan_end_date_e=$Existing_bank_name=$Existing_Credit_Limit=$Existing_Limit_Utiliz=$carddate=$other_Credit_Limit=$other_Limit_Utiliz=$other_carddate=$Website12=$other_Credit_Name=$other_Credit_Limit1=$other_Limit_Utiliz1=$other_carddate1="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nameErr=$mobileErr=$emailErr=$captchaErr=$userfile="";
$name	=	trim($_POST["name"]);
$mobile	=	trim($_POST["mobilechk"]); 
$email	=	trim($_POST["email"]);

if(empty($_SESSION['security_code'] ) || strcasecmp($_SESSION['security_code'], $_POST['security_code']) != 0){  
		$captchaErr="The Validation code does not match!";// Captcha verification is incorrect.		
}
if (empty($name)) {
	$nameErr = "Name is required";
} else {
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$nameErr = "Only letters and white space allowed";
	}
}
if(!empty($mobile)){
    if(preg_match('/^\d{10}$/',$mobile)) // phone number is valid
    {
		$mobile	=	trim($_POST["mobilechk"]); 
    }else {
		$mobileErr = "Invalid Mobile number";
    }
}else{
	$mobileErr = "Mobile is required";
}

if (empty($email)){
    $emailErr = "Email is required";
	} else {      
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		   $emailErr = "Invalid email format";
		}
	}
if(isset($_FILES['userfile'])){
        $j=1;
	for($i = 0; $i < count( $_FILES['userfile']['tmp_name']); $i++){
                 $j++;
		if ($error_array[$i]  > 0){
			$userfile= "File not be empty";
		}else{		
			$ftype[]       = $_FILES['fileToUpload']['type'][$i];
			$fname[]       = $_FILES['fileToUpload']['name'][$i];
			$fnametmp[]    =$_FILES['fileToUpload']['tmp_name'][$i];	
				$uploaddir = 'upload_doc/';
				$uploadfile = $uploaddir . $name.$j."_".$_FILES['userfile']['name'][$i];
				 
				if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile)) {
				   $uploadfile11[] = $uploaddir . $name.$j."_".$_FILES['userfile']['name'][$i];
				 //echo "File is valid, and was successfully uploaded.\n";
				} else {
				 //echo "Possible file upload attack!\n";
				} 
		}			
	}
}else {
       $userfile= "File not be empty";
}	
	if($nameErr=="" and $mobileErr=="" and $emailErr=="" and  $captchaErr=="" and $userfile=="" ){	
        $myData="website_url";
	$Website_Url="";
	for( $i = 0; $i < 20; $i++)
	{
		$webloop	=	trim("website_url".$i);
		$Website_Url.=$_POST[$webloop];
	}
	$Website_Url=trim($Website_Url);
	if($Website_Url!='') {
	$Website12='<tr><td width="30%">Website Url</td><td width="70%">'.$Website_Url.'</td></tr>';
	}
	$bank_name=	trim($_POST["bank_name"]);
	if($_POST["bank_name"]!=''){
	$bank='<tr><td width="30%">Bank Name</td><td width="70%">'.$bank_name.'</td></tr>';
	}
        $Products_Services=	trim($_POST["Products_Services"]);
	if($_POST["Products_Services"]!=''){
	$Products='<tr><td width="30%">Products Services</td><td width="70%">'.$Products_Services.'</td></tr>';
	}
	$loan_amt=	trim($_POST["loan_amt"]);
	if($_POST["loan_amt"]!=''){
	$loanamt='<tr><td width="30%">Loan Amount</td><td width="70%">'.$loan_amt.'</td></tr>';
	}
	$loan_emi=	trim($_POST["loan_emi"]);
	if($_POST["loan_emi"]!=''){
	$loanemi='<tr><td width="30%">Loan EMI</td><td width="70%">'.$loan_emi.'</td></tr>';
	}
	$loan_rate_int=	trim($_POST["loan_rate_int"]);
	if($_POST["loan_rate_int"]!=''){
	$loanrateint='<tr><td width="30%">Rate of Intrest</td><td width="70%">'.$loan_rate_int.'</td></tr>';
	}
	$startdate=	trim($_POST["startdate"]);
	if($_POST["startdate"]!=''){
	$startdate_e='<tr><td width="30%">Start Date</td><td width="70%">'.$startdate.'</td></tr>';
	}
	$enddate=	trim($_POST["enddate"]);
	if($_POST["enddate"]!=''){
	$enddate_e='<tr><td width="30%">End Date</td><td width="70%">'.$enddate.'</td></tr>';
	}
	$Other_Loan_prd_sec=	trim($_POST["Other_Loan_prd_sec"]);
	if($_POST["Other_Loan_prd_sec"]!=''){
	$Other_Loan_prd_sec_e='<tr><td width="30%">Other loan Total</td><td width="70%">'.$Other_Loan_prd_sec.'</td></tr>';
	}
	$Other_Loan_loan_amt=	trim($_POST["Other_Loan_loan_amt"]);
	if($_POST["Other_Loan_loan_amt"]!=''){
	$Other_Loan_loan_amt_e='<tr><td width="30%">Other loan Amount</td><td width="70%">'.$Other_Loan_loan_amt.'</td></tr>';
	}
	$Other_Loan_loan_emi=	trim($_POST["Other_Loan_loan_emi"]);
	if($_POST["Other_Loan_loan_emi"]!=''){
	$Other_Loan_loan_emi_e='<tr><td width="30%">Other loan EMI</td><td width="70%">'.$Other_Loan_loan_emi.'</td></tr>';
	}
	$Other_Loan_loan_rate_int=	trim($_POST["Other_Loan_loan_rate_int"]);
	if($_POST["Other_Loan_loan_rate_int"]!=''){
	$Other_Loan_loan_rate_int_e='<tr><td width="30%">Other loan Interest Rate</td>
<td width="70%">'.$Other_Loan_loan_rate_int.'</td></tr>';
	}
	$Other_Loan_start_date=	trim($_POST["Other_Loan_start_date"]);
	if($_POST["Other_Loan_start_date"]!=''){
	$Other_Loan_start_date_e='<tr><td width="30%">Other loan Start Date</td><td width="70%">'.$Other_Loan_start_date.'</td></tr>';
	}
	$Other_Loan_end_date=	trim($_POST["Other_Loan_end_date"]);
	if($_POST["Other_Loan_end_date"]!=''){
	$Other_Loan_end_date_e='<tr><td width="30%">Other loan end Date</td><td width="70%">'.$Other_Loan_end_date.'</td></tr>';
	}
	$Existing_bank_name=	trim($_POST["Existing_bank_name"]);
	if($_POST["Existing_bank_name"]!=''){
	$Existing_bank_name='<tr><td width="30%">Existing loan bank Name</td><td width="70%">'.$Existing_bank_name.'</td></tr>';
	}
	$Existing_Credit_Limit=	trim($_POST["Existing_Credit_Limit"]);
	if($_POST["Existing_Credit_Limit"]!=''){
	$Existing_Credit_Limit='<tr><td width="30%">Existing loan Credit Limit</td><td width="70%">'.$Existing_Credit_Limit.'</td></tr>';
	}
	$Existing_Limit_Utiliz=	trim($_POST["Existing_Limit_Utiliz"]);
	if($_POST["Existing_Limit_Utiliz"]!=''){
	$Existing_Limit_Utiliz='<tr><td width="30%">Existing loan Limit Utiliz</td><td width="70%">'.$Existing_Limit_Utiliz.'</td></tr>';
	}
	$carddate=	trim($_POST["carddate"]);
	if($_POST["carddate"]!=''){
	$carddate='<tr><td width="30%">Existing loan Card date</td><td width="70%">'.$carddate.'</td></tr>';
	}
	$other_Credit_Limit=	trim($_POST["other_Credit_Limit"]);
	if($_POST["other_Credit_Limit"]!=''){
	$other_Credit_Limit='<tr><td width="30%">Other Credit Limit</td><td width="70%">'.$other_Credit_Limit.'</td></tr>';
	}
	$other_Limit_Utiliz=	trim($_POST["other_Limit_Utiliz"]);
	if($_POST["other_Limit_Utiliz"]!=''){
	$other_Limit_Utiliz='<tr><td width="30%">Other Limit Utiliz</td><td width="70%">'.$other_Limit_Utiliz.'</td></tr>';
	}
	$other_carddate=	trim($_POST["other_carddate"]);
	if($_POST["other_carddate"]!=''){
	$other_carddate='<tr><td width="30%">Other card date</td><td width="70%">'.$other_carddate.'</td></tr>';
	}
	$task_dropdown = $_POST['task_dropdown'];

        $other_Credit_Name=	trim($_POST["other_Credit_Name"]);
	if($_POST["other_Credit_Name"]!=''){
	$other_Credit_Name='<tr><td width="30%">Other Card Bank Name</td><td width="70%">'.$other_Credit_Name.'</td></tr>';
 	}

        $other_Credit_Limit1=	trim($_POST["other_Credit_Limit1"]);
	if($_POST["other_Credit_Limit1"]!=''){
	$other_Credit_Limit1='<tr><td width="30%">Other Card Credit limit</td><td width="70%">'.$other_Credit_Limit1.'</td></tr>';
         }

        $other_Limit_Utiliz1=	trim($_POST["other_Limit_Utiliz1"]);
	if($_POST["other_Limit_Utiliz1"]!=''){
	$other_Limit_Utiliz1='<tr><td width="30%">Other Card Limit Utilize</td><td width="70%">'.$other_Limit_Utiliz1.'</td></tr>';
	}

        $other_carddate1=	trim($_POST["other_carddate1"]);
	if($_POST["other_carddate1"]!=''){
	$other_carddate1='<tr><td width="30%">Other Credit Card Start Date</td><td width="70%">'.$other_carddate1.'</td></tr>';
	}

	$htmlMessage = '<html>
<head>
  <title></title>
</head>
<body>
  <TABLE border="1" cellpadding="3" cellspacing="0" width="500">
<tbody align="left" style="font-family:verdana; color:purple;">
<tr>
<td width="30%">NAME</td>
<td width="70%">'.$name.'</td>
</tr>
<tr>
<td width="30%">MOBILE NUMBER</td>
<td width="70%">'.$_POST["mobilechk"].'</td>
</tr>
<tr>
<td width="30%">EMAIL ID</td>
<td width="70%">'.$email.'</td>
</tr>
<tr>
<td width="30%">LOAN TYPE</td>
<td width="70%">'.$task_dropdown.'</td>
</tr>'.$Website12.' '.$bank.' '.$Products.' '.$loanamt.' '.$loanemi.' '.$loanrateint.' '.$startdate_e.' '.$enddate_e.' '.$Other_Loan_prd_sec_e.' '.$Other_Loan_loan_amt_e.' '. $Other_Loan_loan_emi_e.' '.$Other_Loan_loan_rate_int_e.' '.$Other_Loan_start_date_e.' '.$Other_Loan_end_date_e.' '.$Existing_bank_name.' '.$Existing_Credit_Limit.' '.$Existing_Limit_Utiliz.' '.$carddate.' '.$other_Credit_Limit.' '.$other_Limit_Utiliz.' '.$other_carddate.' '.$other_Credit_Name.' '.$other_Credit_Limit1.' '.$other_Limit_Utiliz1.' '.$other_carddate1.'
</tbody>
</table>
</body>
</html>';
	$to = "satishmohite123@gmail.com";
    $from = "satishmohite123@gmail.com";  // from  email here//
    $subject ="Upload Your Documents"; 
    $message = $htmlMessage;
	$headers = "From: $from";
    // boundary 
	$semi_rand = md5(time()); 
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	// headers for attachment 
	$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
	// multipart boundary 
	$message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
	$message .= "--{$mime_boundary}\n";
	$files = $uploadfile11;
    $filestmp = $uploadfile11;
	for($x=0;$x<count($files);$x++){
	    if($filestmp[$x]!='')
		{
	    $file = fopen($filestmp[$x],"rb");
	    $data = fread($file,filesize($filestmp[$x]));
	    fclose($file);
	    $data = chunk_split(base64_encode($data));
	    $f_name_arr = explode("/",$files[$x]);
	    $f_name = end($f_name_arr);
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$f_name\"\n" ."Content-Disposition: attachment;\n" . " filename=\"$f_name\"\n".  "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	    $message .= "--{$mime_boundary}\n";
		}
	} 
		$ok = @mail($to, $subject, $message, $headers);
		if ($ok) {
			$message="Thank you  for your query $name";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$name=$nameErr=$mobile=$mobileErr=$email=$emailErr =$task_dropdownErr=$userfile=$captchaErr=$Website=$Website_Url=$bank_name=$bank=$Products_Services=$Products=$loan_amt=$loanamt=$loan_emi=$loanemi=$loan_rate_int=$loanrateint=$startdate_e=$startdate=$enddate_e=$enddate=$Other_Loan_prd_sec=$Other_Loan_prd_sec_e=$Other_Loan_loan_amt_e=$Other_Loan_loan_amt=$Other_Loan_loan_emi_e=$Other_Loan_loan_emi=$Other_Loan_loan_rate_int_e=$Other_Loan_loan_rate_int=$Other_Loan_start_date_e=$Other_Loan_start_date=$Other_Loan_end_date=$Other_Loan_end_date_e=$Existing_bank_name=$Existing_Credit_Limit=$Existing_Limit_Utiliz=$carddate=$other_Credit_Limit=$other_Limit_Utiliz=$other_carddate=$Website12="";
		}else{
			$message="Something Wrong Please try Again!";
			echo "<script type='text/javascript'>alert('$message');</script>";	
		}	
	}else{
		$message="Something Wrong Please Check Validation!";
		echo "<script type='text/javascript'>alert('$message');</script>";	
	} 
} // if end post	
?>

<body id="per" data-spy="scroll" data-target=".bs-docs-sidebar">

<div class="site_wrapper">
   
<!-- HEADER -->
<header id="header">

<?php include('inc-top.php'); ?>
    
</header><!-- end header -->

<div class="clearfix"></div>

<div class="top2_wrapper">

<div class="bg1"> <img src="http://loaninmumbai.com/images/personal-inner-banner.jpg" alt="" /></div>

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

    <h3><i>Upload Your Documents</i></h3>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="frm_enquiry" id="frm_enquiry"  enctype="multipart/form-data" onSubmit="return Checkfiles();" >
		<div class="form-div">
        <label for="name" class="blocklabel">Your Name <span class="mandatory">* &nbsp;&nbsp;<?php echo $nameErr;?></span></label>
        <input name="name" id="name" type="text" class="car-field1" value="<?php echo $name; ?>"  />
        </div>
		<div class="form-div">
        <label for="name" class="blocklabel">Mobile No <span class="mandatory">*&nbsp;&nbsp;<?php echo $mobileErr;?></span></label>
        <input  name="mobilechk" id="mobilechk" type="text" class="car-field1" value="<?php echo $mobile; ?>"  />
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Email id <span class="mandatory">* &nbsp;&nbsp;<?php echo $emailErr;?></span></label>
        <input name="email" id="email"  type="text" class="car-field1" value="<?php echo $email; ?>"/>
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
        <div style="padding-bottom:10px; padding-top:10px;"> <span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;"> 
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div> 
		<div id="dynamicInput">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		
		</div>
        
        </div>
        
		
        <div id="self">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url0" id="website_url0" type="text" class="car-field1" value="<?php echo $Website; ?>"  style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>         
        <div id="dynamicInput1">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput1');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>		
		</div>        
        </div>
        </div>


        
        <div id="business_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url1" id="website_url1" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div id="dynamicInput2">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput2');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        </div>
        
        
        
        <div id="home_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="home_name" type="radio" value="Salaried" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="home_name" type="radio" value="Self"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedhome">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput3">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput3');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfhome">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url2" id="website_url2" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput4">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput4');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput5">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput5');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="coaapself">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url3" id="website_url3" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput6">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput6');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput7">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput7');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selflap">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url4" id="website_url4" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput8">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput8');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput9">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput9');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="spolapself">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url5" id="website_url5" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput10">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput10');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
    </div>

        
        </div>
 		
         
         <div id="lrd_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url6" id="website_url6" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Lease Agreement</label>
		  <input name="attachment" type="file" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
          <div id="dynamicInput11">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput11');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        </div>
         
         
         
         <div id="car_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="car_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="car_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedcar">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">RC Book Copy</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Car Insurance Copy</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput12">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput12');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfcar">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url7" id="website_url7" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">RC Book Copy</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Car Insurance Copy</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput13">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput13');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        </div>
       
        
        <div id="construction_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
		<div style="padding-bottom:10px;">
       <p class="label-text"><a href="project-finance-format-cld.doc" class="text-link">Click here</a> to download Project Details Format</p>
       <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url8" id="website_url8" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
        <label class="blocklabe2">Project Details as per CLD format</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
         </div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Company Profile</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
          <div id="dynamicInput14">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput14');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        </div>
        
        
        <div id="btbl_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url9" id="website_url9" type="text" class="car-field1"  value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
         <div id="dynamicInput15">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput15');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
        </div>
        </div>
        
        
        <div id="bthl_show">
        <div style="padding-top:10px;">
         <div class="addform-tick-list2 email-radio"><input name="bthl_name" type="radio" value="Salaried" id="group_name_0" checked> Salaried</div>
          <div class="addform-tick-list2 email-radio" style="margin-left:55px;"><input name="bthl_name" type="radio" value="Self" id="group_name_1"> Self Employed</div>
        <div class="clearfix"></div>
        </div>
        
        <div id="salariedbthl">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		<div id="dynamicInput16">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput16');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfbthl">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url10" id="website_url10"  type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		<div id="dynamicInput17">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput17');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput18">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput18');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="spobthlself">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url11" id="website_url11" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput19">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput19');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		<div id="dynamicInput20">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput20');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfblap">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url12" id="website_url12" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Existing Loan Sanction Letter</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
         <div class="clearfix"></div>
		</div>
		<div id="dynamicInput21">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput21');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput22">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput22');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="spobtlapself">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url13" id="website_url13" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div id="dynamicInput23">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput23');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div id="dynamicInput24">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput24');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfdeb">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url14" id="website_url14" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
          <div id="dynamicInput25">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput25');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		 <div id="dynamicInput26">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput26');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="spodebself">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url15" id="website_url15" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		 <div id="dynamicInput27">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput27');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
			  <td align="center"><input name="Existing_bank_name" id="Existing_bank_name" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input name="Existing_Credit_Limit" id="Existing_Credit_Limit" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input name="Existing_Limit_Utiliz" id="Existing_Limit_Utiliz" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input type="text"  name="carddate" class="car-field1" id="carddate"/ style="width:180px;"></td>
		    </tr>	
			<!--<tr>
			  <td colspan="7" class="text-link"><a href="#" class="text-link">Add Other Card</a></td>
                         </tr>-->
<tr>
			<td  colspan="7"><div class="table-container">
	        <table width="100%" cellpadding="0" cellspacing="0"><div id="dynamicInputCard" style="border:0px solid red;">		
		    </div></table></div></td>
			</tr>
                       <tr>
			  <td colspan="7" class="text-link"><a href="javascript:void(0);"  onClick="addmoreotherCard('dynamicInputCard');" style="color: #47738b;" id="add_more">Add Other Card</a></td>
		    </tr>
			


            <tr>
              <td><strong>Total</strong></td>
              <td align="center"><input name="other_Credit_Limit" id="other_Credit_Limit" type="text" class="car-field1" style="width:180px;"></td>
              <td align="center"><input name="other_Limit_Utiliz" id="other_Limit_Utiliz" type="text" class="car-field1" style="width:180px;"></td>
              <td align="center"><input name="other_carddate" id="other_carddate" type="text" class="car-field1" style="width:180px;"></td>              
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
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Degree Certificate</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Practice Certificate</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">3rd Months pay Slip</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">1st Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">2nd Year Form No 16</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
           <div id="dynamicInput28">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput28');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        
        <div id="selfpof">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url16" id="website_url16" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Degree Certificate</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Practice Certificate</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>

		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
         <div id="dynamicInput29">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput29');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
        </div>
        
        
        
        <div id="od_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url17" id="website_url17" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Provisional ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		 <div id="dynamicInput30">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput30');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        
        </div>
                 
        
        <div id="cash_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url18" id="website_url18" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Provisional ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		 <div id="dynamicInput31">		
		</div>
		<a href="javascript:void(0);"   onClick="addmoreSalaried('dynamicInput31');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
		</div>
        </div>
        
        
        <div id="equipment_show">
        <div style="padding-bottom:10px; padding-top:10px;"><span class="mandatory">&nbsp;&nbsp;<?php echo $userfile;?></span>
	    <label class="label-text"><strong>Self Employed</strong></label>
        
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url19" id="website_url19" type="text" class="car-field1" value="<?php echo $Website; ?>" style="width:200px;">
		</div>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Company Profile</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 1st Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 2nd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
        
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Last 3rd Year ITR</label>
		 <input type="file" name="userfile[]" style="padding-top:10px;">
		</div>
          <div id="dynamicInput32">		
		</div>
		<a href="javascript:void(0);"  onClick="addmoreSalaried('dynamicInput32');" style="color: #47738b;"  class="attachment" id="add_more">More Documents</a>
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
			  <td align="center"><input name="bank_name" id='bank_name'  type="text" class="car-field1" style="width:90px;"></td>
			  <td align="center">
              <select name="Products_Services" id="Products_Services" class="car-field1" onChange="javascript:test9();" style="width:200px;" >
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
			  <td align="center"><input name="loan_amt" id='loan_amt'  type="text" class="car-field1" style="width:80px;"></td>
			  <td align="center"><input name="loan_emi" id='loan_emi' type="text" class="car-field1" style="width:80px;"></td>
			  <td align="center"><input name="loan_rate_int" id='loan_rate_int' type="text" class="car-field1" style="width:50px;"></td>
			  <td align="center"><input type="text" class="car-field1" name="startdate" id="startdate"/></td>
			  <td align="center"><input type="text" class="car-field1" name="enddate"  id="enddate"/></td>
		    </tr>	
			<tr>
			  <td colspan="7" class="text-link"><a href="javascript:void(0);"  onClick="addmoreotherLOan('dynamicInputloan');" style="color: #47738b;" id="add_more">Add Other Loan</a></td>
		    </tr>
			<tr>
			<td  colspan="7"><div class="table-container">
	        <table width="100%" cellpadding="0" cellspacing="0"><div id="dynamicInputloan">		
		    </div></table></div></td>
			</tr>
			 <tr>
              <td><strong>Total</strong></td>
              <td align="center"><input name="Other_Loan_prd_sec" type="text" class="car-field1" style="width:80px;"></td>
              <td align="center"><input name="Other_Loan_loan_amt" type="text" class="car-field1" style="width:80px;"></td>
              <td align="center"><input name="Other_Loan_loan_emi" type="text" class="car-field1" style="width:80px;"></td>
			  <td align="center"><input name="Other_Loan_loan_rate_int" type="text" class="car-field1" style="width:80px;"></td>
              <td align="center"><input name="Other_Loan_start_date" type="text" class="car-field1" style="width:80px;"></td>
              <td align="center"><input name="Other_Loan_end_date" type="text" class="car-field1" style="width:80px;"></td>
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
        <img src="captcha.php" id="captcha" alt="captcha"/><span class="mandatory">&nbsp;&nbsp;<?php echo $captchaErr;?></span>
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
