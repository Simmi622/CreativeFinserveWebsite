<pre>
<?php
error_reporting(Null);
//echo '<pre>';print_r($_POST);
//exit;
$name=$nameErr=$mobile=$mobileErr=$email=$emailErr =$task_dropdownErr=$userfile=$captchaErr=$Website=$Website_Url=$bank_name=$bank=$Products_Services=$Products=$loan_amt=$loanamt=$loan_emi=$loanemi=$loan_rate_int=$loanrateint=$startdate_e=$startdate=$enddate_e=$enddate=$Other_Loan_prd_sec=$Other_Loan_prd_sec_e=$Other_Loan_loan_amt_e=$Other_Loan_loan_amt=$Other_Loan_loan_emi_e=$Other_Loan_loan_emi=$Other_Loan_loan_rate_int_e=$Other_Loan_loan_rate_int=$Other_Loan_start_date_e=$Other_Loan_start_date=$Other_Loan_end_date=$Other_Loan_end_date_e=$Existing_bank_name=$Existing_Credit_Limit=$Existing_Limit_Utiliz=$carddate=$other_Credit_Limit=$other_Limit_Utiliz=$other_carddate=$Website12=$other_Credit_Name=$other_Credit_Limit1=$other_Limit_Utiliz1=$other_carddate1="";

$error='';

if($_SERVER["REQUEST_METHOD"] == "POST") {

	$recaptcha=$_POST['g-recaptcha-response'];
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
	}
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
			//$fomatedSize[] = formatbytes($_FILES['userfile']['size'][$i]);
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
	$Website_Url="";
	for( $i = 0; $i < count($count); $i++)
	{
		$webloop	=	trim("website_url".$i);
		$Website_Url.=$_POST[$webloop];
	}
	$Website_Url=trim($Website_Url);
	if($Website_Url!='') {
		$Website12='<tr><td width="30%">Website Url</td><td width="70%">'.$Website_Url.'</td></tr>';
	}

	$card_details = "";
	if(count($_POST['Existing_bank_name']) && $task_dropdown == 'Debt Consolidation'){
		$card_details .= '<tr>
			  <th width="16%" valign="middle" bgcolor="#c5c5c5">Bank Name</th>
			  <th width="16%" bgcolor="#c5c5c5">Credit Limit</th>
			  <th width="16%" bgcolor="#c5c5c5">Limit Utilize</th>
			  <th width="16%" bgcolor="#c5c5c5">Credit Card Start Date</th>
		    </tr>'; 
		$total_credit_limit = 0;
		$total_limit_utilized=0;
		for($i=0; $i<count($_POST['bank_name']); $i++){
			$card_details .= "<tr>";
			$card_details .= "<td>".$_POST['Existing_bank_name'][$i]."</td>";
			$card_details .= "<td>".$_POST['Existing_Credit_Limit'][$i]."</td>";
			$card_details .= "<td>".$_POST['Existing_Limit_Utiliz'][$i]."</td>";
			$card_details .= "<td>".$_POST['carddate'][$i]."</td>";
			$card_details .= "</tr>";
			$total_credit_limit += $_POST['Existing_Credit_Limit'][$i];
			$total_limit_utilized += $_POST['Existing_Limit_Utiliz'][$i];
		}
		$card_details .= '<tr>	  
			  <th width="16%" bgcolor="#c5c5c5">Total</th>
			  <th width="16%" bgcolor="#c5c5c5">'.$total_credit_limit.'</th>
			  <th width="16%" bgcolor="#c5c5c5">'.$total_limit_utilized.'</th>
			  <th width="16%" valign="middle" bgcolor="#c5c5c5">-</th>
		    </tr>'; 

	}







	$loan_details = "";
	if(count($_POST['bank_name'])){
		$loan_details .= '<tr>
			  <th width="16%" valign="middle" bgcolor="#c5c5c5">Bank Name</th>
			  <th width="16%" bgcolor="#c5c5c5">Products / Services</th>
			  <th width="16%" bgcolor="#c5c5c5">Loan Amount</th>
			  <th width="16%" bgcolor="#c5c5c5">EMI</th>
			  <th width="16%" bgcolor="#c5c5c5">Rate of Intrest</th>
			  <th width="16%" bgcolor="#c5c5c5">EMI Start Date</th>
			  <th width="16%" bgcolor="#c5c5c5">EMI End Date</th>
		    </tr>'; 
		$total_loan = 0;
		$total_emi=0;
		for($i=0; $i<count($_POST['bank_name']); $i++){
			$loan_details .= "<tr>";
			$loan_details .= "<td>".$_POST['bank_name'][$i]."</td>";
			$loan_details .= "<td>".$_POST['products_services'][$i]."</td>";
			$loan_details .= "<td>".$_POST['loan_amt'][$i]."</td>";
			$loan_details .= "<td>".$_POST['loan_emi'][$i]."</td>";
			$loan_details .= "<td>".$_POST['loan_rate_int'][$i]."</td>";
			$loan_details .= "<td>".$_POST['startdate'][$i]."</td>";
			$loan_details .= "<td>".$_POST['enddate'][$i]."</td>";
			$loan_details .= "</tr>";
			$total_emi += $_POST['loan_emi'][$i];
			$total_loan += $_POST['loan_amt'][$i];
		}
		$loan_details .= '<tr>
			  <th width="16%" valign="middle" bgcolor="#c5c5c5">-</th>
			  <th width="16%" bgcolor="#c5c5c5">Total</th>
			  <th width="16%" bgcolor="#c5c5c5">'.$total_loan.'</th>
			  <th width="16%" bgcolor="#c5c5c5">'.$total_emi.'</th>
			  <th width="16%" bgcolor="#c5c5c5">-</th>
			  <th width="16%" bgcolor="#c5c5c5">-</th>
			  <th width="16%" bgcolor="#c5c5c5">-</th>
		    </tr>'; 

	}
	$loan_details;
	$htmlMessage = '<html>
<head>
  <title></title>
</head>
<body>
  <TABLE border="1" cellpadding="5" cellspacing="0" width="500">
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
<h4>Loan Details</h4>
<table border="1" cellpadding="3" cellspacing="0" width="500">
'.$loan_details.'
</table>';
if(!empty($card_details)){ 
$htmlMessage .='<h4>Credit Card Details</h4>
<table border="1" cellpadding="3" cellspacing="0" width="500">
'.$card_details.'
</table>';
}
$htmlMessage .='</body>
</html>';
	//$to = "satishmohite123@gmail.com";
	$to = 'priyanka.t.yendhe@gmail.com,satishmohite123@gmail.com';
	$from = "satishmohite123@loaninmumbai.com";  // from  email here//
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
	header('Location: form.php?success='.$name);
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
