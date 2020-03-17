<?php
ob_start();
if((isset($_POST['name']) && $_POST['name']!="" /*&& (isset($_POST['email'])) && $_POST['email']!=""*/ && (isset($_POST['mobile_no'])) && $_POST['mobile_no']!="" && (isset($_POST['enquiry'])) && $_POST['enquiry']!="" && (isset($_POST['message'])) && $_POST['message']!=""))
{
	$name=$_POST['name'];
	/*$email=$_POST['email'];*/
	$mobile=$_POST['mobile_no'];
	$enquiry=$_POST['enquiry'];

	$message=$_POST['message'];
	
	echo $txt='<table width="600" border="0" cellpadding="8" cellspacing="1">
	  <tr>
		<td valign="top"><div align="left"><img src="http://loaninmumbai.com/images/logo-mail.png" alt="Creative Finserve Private Limited" title="Creative Finserve Private Limited" width="250" height="62"></div></td>
	</tr>
      <tr>
        <td height="20" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><table width="100%" border="0" cellpadding="8" cellspacing="1" bgcolor="#CCCCCC">
          
          <tr>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Name</strong></div></td>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><div align="left">'.$name.'</div></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Mobile</strong></div></td>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><div align="left">'.$mobile.'</div></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Query.</strong></div></td>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><div align="left">'.$enquiry.'</div></td>
          </tr>
          <tr>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Message</strong></div></td>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><div align="left">'.$message.'</div></td>
          </tr>
        </table></td>
      </tr>
</table>';

 	require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = false; // enable SMTP authentication
  
	$mail->Host = "loaninmumbai.com"; // set the SMTP server"
	$mail->Port = 25; // set the SMTP port
	$mail->Username = "enquiry@loaninmumbai.com"; //username
	$mail->Password = "@61j^WLz&_UK"; // password
	$mail->IsHTML(true);
	$mail->From = "enquiry@loaninmumbai.com";
	$mail->FromName = "Creative Finserve Private Limited";
	$mail->AddAddress("cfpl@live.in");
	$mail->AddCC("imran_sable@yahoo.com");
	$mail->Subject = $enquiry;
	$mail->Body = stripslashes($txt);
	
	if(!$mail->Send()){
		//echo $mail->ErrorInfo . "<br><br>";
	}else{
		//echo 'Sent<br>'; 
	}	
	
	echo "<br>";
	
	echo $msg='<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"><div align="left"><img src="http://loaninmumbai.com/images/logo-mail.png" alt="Creative Finserve Private Limited" title="Creative Finserve Private Limited" width="250" height="62"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 13px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none;" valign="top"><b>Respected '.$name.'</b></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 13px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none;" valign="top">Thanks for showing your interest to avail for <b>'.$enquiry.'</b>. Our professional shall get back to you as soon a possible.</td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 13px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none;" valign="top">You can take a further step to get Personalized Solution by uploading your income documents on our website http://loaninmumbai.com/upload-your-documents.php . This will enable us to understand your borrowing capacity and curtail the waiting period.</td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 14px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none; font-weight:bold;">Regards<br>
      Team<br>
      Creative Finserve Pvt Ltd</td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 14px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none; font-weight:bold;">www.loaninmumbai.com<br>
      022 69000012<br>
    022 69000033</td>
  </tr>
</table>';

	//require 'phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = false; // enable SMTP authentication
  
	$mail->Host = "loaninmumbai.com"; // set the SMTP server"
	$mail->Port = 25; // set the SMTP port
	$mail->Username = "enquiry@loaninmumbai.com"; //username
	$mail->Password = "@61j^WLz&_UK"; // password
	$mail->IsHTML(true);
	$mail->From = "enquiry@loaninmumbai.com";
	$mail->FromName = "Creative Finserve Private Limited";
	$mail->AddAddress(addslashes($email));
	$mail->Subject = "Thank You for your enquiry";
	$mail->Body = stripslashes($msg);
	
	if(!$mail->Send()){
		//echo $mail->ErrorInfo . "<br><br>";
	}else{
		//echo 'Sent<br>'; 
	}	
	//@mail($email,"Thank You for your enquiry",$msg,$headers);
	header("location: index.php");
}
?>
	


