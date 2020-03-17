<pre>
<?php
error_reporting(Null);
//echo '<pre>';print_r($_POST);
//exit;
$name=$nameErr=$mobile=$mobileErr=$email=$emailErr =$task_dropdownErr=$userfile=$captchaErr=$Website=$Website_Url=$bank_name=$bank=$Products_Services=$Products=$loan_amt=$loanamt=$loan_emi=$loanemi=$loan_rate_int=$loanrateint=$startdate_e=$startdate=$enddate_e=$enddate=$Other_Loan_prd_sec=$Other_Loan_prd_sec_e=$Other_Loan_loan_amt_e=$Other_Loan_loan_amt=$Other_Loan_loan_emi_e=$Other_Loan_loan_emi=$Other_Loan_loan_rate_int_e=$Other_Loan_loan_rate_int=$Other_Loan_start_date_e=$Other_Loan_start_date=$Other_Loan_end_date=$Other_Loan_end_date_e=$Existing_bank_name=$Existing_Credit_Limit=$Existing_Limit_Utiliz=$carddate=$other_Credit_Limit=$other_Limit_Utiliz=$other_carddate=$Website12=$other_Credit_Name=$other_Credit_Limit1=$other_Limit_Utiliz1=$other_carddate1="";

$error='';

if($_SERVER["REQUEST_METHOD"] == "POST") {

	/*$recaptcha=$_POST['g-recaptcha-response'];
	if(!empty($recaptcha))
	{

		$google_url="https://www.google.com/recaptcha/api/siteverify";
		$secret='6Ldc_AgTAAAAAHGgVen0P5IiRzlBR2RWnGEIfE3G';
		$ip=$_SERVER['REMOTE_ADDR'];
		$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
		$res=getCurlData($url);
		$res= json_decode($res, true);
		//reCaptcha success check
		if($res['success'])
		{
			//Include login check code
		}
		else
		{
			$error .="Please re-enter your reCAPTCHA.<br>";
		}

	}
	else
	{
		$error .="Please re-enter your reCAPTCHA.<br>";
	}*/
	$nameErr=$mobileErr=$emailErr=$captchaErr=$userfile="";
	$name	=	trim($_POST["user_name"]);
	$mobile	=	trim($_POST["mobilechk"]);
	$email	=	trim($_POST["email"]);


	if (empty($name)) {
		$error .= "Name is required<br>";
	} else {
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$error .= "Only letters and white space allowed<br>";
		}
	}
	if(!empty($mobile)){
		if(preg_match('/^\d{10}$/',$mobile)) // phone number is valid
		{
			$mobile	=	trim($_POST["mobilechk"]);
		}else {
			$error .= "Invalid Mobile number<br>";
		}
	}else{
		$error .= "Mobile is required<br>";
	}

	if (empty($email)){
		$error .= "Email is required<br>";
	} else {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error .= "Invalid email format<br>";
		}
	}
	$task_dropdown = $_POST['task_dropdown'];
	$count = $_POST['max_count'];
	$uploadfile11 = array();
	$sizeLimit = '1048576'*15;
	
	$array_name = array_values(array_filter($_FILES['userfile']['name']));
	$array_type = array_values(array_filter($_FILES['userfile']['type']));
	$array_tmp_name = array_values(array_filter($_FILES['userfile']['tmp_name']));
	$array_size = array_values(array_filter($_FILES['userfile']['size']));
	//print_r($array);
	if(isset($_FILES['userfile'])){
		$j=1;
		for($i = 0; $i < count($array_name); $i++){
			$j++;

			$ftype[]       = $array_type[$i];
			$fname[]       = $array_name[$i];
			$fnametmp[]    =$array_tmp_name[$i];
			$fsize[]    = $array_size[$i];
			$uploaddir = 'upload/';
			$uploadfile = $uploaddir . $name.$j."_".$array_name[$i]; 
			if(file_exists($array_tmp_name[$i])) {
				if($_FILES['userfile']['type'][$i] !== 'exe'){
					if($_FILES['userfile']['size'][$i] <= $sizeLimit){
						if (move_uploaded_file($array_tmp_name[$i], $uploadfile)) {
							$uploadfile11[] = $uploaddir . $name.$j."_".$array_name[$i];
						}
					}else{
						$error .= "File size should not be greater that 15MB".'<br/>';
					}
				}else{
					$error .= "File type not supported";
				}
			}
		}
	}else {
		$error .= "File can not be empty<br>";
	}
	$myData="website_url";
	//print_r($_POST['website_url']);
	$Website_Url="";
	//echo 'count'.$count;
	for( $i = 0; $i < $count; $i++)
	{

		$webloop	=	"website_url".$i;
		/*print_r($_POST[$webloop]);
		echo '<br/>';*/
		if(!empty($_POST[$webloop])){
			$Website_Url .= $_POST[$webloop].' , ';
		}
	}
	//echo 'echo'.$Website_Url=rtrim($Website_Url,' , ');
	/*if($Website_Url!='') {
		$Website12='<tr><td width="30%">Website Url</td><td width="70%">'.$Website_Url.'</td></tr>';
	}*/

	$card_details = "";
	//print_r($_POST['Existing_bank_name']);
/*	echo '<pre>';print_r($_POST);
	echo 'Existing_bank_name';
	print_r($_POST['Existing_bank_name']);*/
	$first_key_1 = key($_POST['Existing_bank_name']);
	//echo '<br/>';
	if(!empty($_POST['Existing_bank_name'][$first_key_1]) && $task_dropdown == 'Debt Consolidation'){
		//echo 'if';
		$card_details .= '<tr>
            <td height="20" colspan="2" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><table width="100%" border="0" cellspacing="1" cellpadding="5">
              <tr>
                <td width="100%"  style="font-family:Verdana, Arial; font-size:12px; color: #333; font-weight:bold;">Existing Credit Cards</td>
              </tr>';
        $card_details .= '<tr><td  style="font-family:Verdana, Arial; font-size:12px; color: #333; font-weight:bold;"><table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">';
		$card_details .= '<tr>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Bank Name</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Credit Limit</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Limit Utilize</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Credit Card Start Date</td>
		    </tr>'; 
		$total_credit_limit = 0;
		$total_limit_utilized=0;
		for($i=0; $i<count($_POST['bank_name']); $i++){

			if(!empty($_POST['Existing_bank_name'][$i]) && !empty($_POST['Existing_Credit_Limit'][$i]) && !empty($_POST['Existing_Limit_Utiliz'][$i]) && !empty($_POST['carddate'][$i])){
					$card_details .= "<tr>";
					$card_details .= "<td>".$_POST['Existing_bank_name'][$i]."</td>";
					$card_details .= "<td>".$_POST['Existing_Credit_Limit'][$i]."</td>";
					$card_details .= "<td>".$_POST['Existing_Limit_Utiliz'][$i]."</td>";
					$card_details .= "<td>".$_POST['carddate'][$i]."</td>";
					$card_details .= "</tr>";
				}
			$total_credit_limit += $_POST['Existing_Credit_Limit'][$i];
			$total_limit_utilized += $_POST['Existing_Limit_Utiliz'][$i];
		}
		$card_details .= '<tr>	  
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Total</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">'.$total_credit_limit.'</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">'.$total_limit_utilized.'</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">-</td>
		    </tr>'; 
		$card_details .= '</table></td></tr>';
		$card_details .= '</table></td></tr>';
	}


	//echo 'loan Details';
	//print_r($_POST['bank_name']);
	$first_key = key($_POST['bank_name']);
	//echo '<br/>';
	$loan_details = "";
	if(!empty($_POST['bank_name'][$first_key])){
		//echo 'iffffff';
		$loan_details .= '<tr>
            <td height="20" colspan="2" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><table width="100%" border="0" cellspacing="1" cellpadding="5">
              <tr>
                <td width="100%"  style="font-family:Verdana, Arial; font-size:12px; color: #333; font-weight:bold;">Existing Loan Details</td>
              </tr>';
        $loan_details .= '<tr><td  style="font-family:Verdana, Arial; font-size:12px; color: #333; font-weight:bold;"><table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">';
		$loan_details .= '<tr>
			 <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Bank Name</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Products / Services</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Loan Amount</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">EMI</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Rate of Intrest</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">EMI Start Date</td>
			  <td bgcolor="#e3e3e3" style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">EMI End Date</td>
		    </tr>'; 
		$total_loan = 0;
		$total_emi=0;
		for($i=0; $i<count($_POST['bank_name']); $i++){
			if(!empty($_POST['bank_name'][$i]) && !empty($_POST['products_services'][$i]) && !empty($_POST['loan_amt'][$i]) && !empty($_POST['loan_emi'][$i]) && !empty($_POST['loan_rate_int'][$i]) && !empty($_POST['startdate'][$i]) && !empty($_POST['enddate'][$i])){
					$loan_details .= "<tr>";
					$loan_details .= "<td>".$_POST['bank_name'][$i]."</td>";
					$loan_details .= "<td>".$_POST['products_services'][$i]."</td>";
					$loan_details .= "<td>".$_POST['loan_amt'][$i]."</td>";
					$loan_details .= "<td>".$_POST['loan_emi'][$i]."</td>";
					$loan_details .= "<td>".$_POST['loan_rate_int'][$i]."</td>";
					$loan_details .= "<td>".$_POST['startdate'][$i]."</td>";
					$loan_details .= "<td>".$_POST['enddate'][$i]."</td>";
					$loan_details .= "</tr>";
				}
			$total_emi += $_POST['loan_emi'][$i];
			$total_loan += $_POST['loan_amt'][$i];
		}
		$loan_details .= '<tr>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">-</td>
			 <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">Total</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">'.$total_loan.'</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">'.$total_emi.'</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">-</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">-</td>
			  <td width="35%" bgcolor="#FFFFFF"  style="font-family:Verdana, Arial; font-size:11px; color: #666; font-weight:bold;">-</td>
		    </tr>'; 

	}
	$loan_details .= '</table></td></tr>';
	$loan_details .= '</table></td></tr>';

$htmlMessage = '<html>
	<head>
	  <title></title>
	</head>
	<body>
	  <table width="700" border="0" cellpadding="8" cellspacing="1">
	  	<tr>
			<td valign="top"><div align="left"><img src="http://loaninmumbai.com/images/logo-mail.png" alt="Creative Finserve Private Limited" title="Creative Finserve Private Limited" width="250" height="62"></div></td>
		</tr>
		<tr>
	        <td height="20" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30">
	        <table width="100%" border="0" cellpadding="8" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
					<td width="28%" height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Name</strong></div></td>
		            <td width="72%" height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$name.'</td>
				</tr>
				<tr>
					<td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Mob</strong></div></td>
		            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$_POST["mobilechk"].'</td>
				</tr>
				<tr>
					<td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Email ID</strong></div></td>
		            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$email.'</td>
				</tr>
				<tr>
					<td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Loan Type</strong></div></td>
		            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$task_dropdown.'</td>
				</tr>
				<tr>
		            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Website Url</strong></div></td>
		            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;">'.$Website_Url.'</td>
		         </tr>'; ?>
				
<?php         
/*echo 'card_details'.$card_details;
echo 'loan_details'.$loan_details;*/
//exit;
	//if(!empty($card_details)){ 
		$htmlMessage .= $card_details.$loan_details;
	//}
$htmlMessage .='</table></td></tr></table></body></html>';
//echo $htmlMessage;exit;
	//$to = ",satishmohite123@gmail.com";
	$to = 'priyanka.t.yendhe@gmail.com,satishmohite123@gmail.com';
	$from = "satishmohite123@loaninmumbai.com,priyanka.t.yendhe@gmail.com";  // from  email here//
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

}else{
	$error .="Something Wrong Please Check Validation!";
}

if($error){
	header('Location: form.php?error='.$error);
}else{
	
	/*header('Location: thankyou.php?name='.$name);*/
	//header('Location: form.php?success='.$name);
	header('Location:thankyou.php?name='.$name);
}







function getCurlData($url)
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	$curlData = curl_exec($curl);
	curl_close($curl);
	return $curlData;
}


?>
