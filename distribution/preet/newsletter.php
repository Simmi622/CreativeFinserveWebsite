<?php
ob_start();
if((isset($_POST['email']) && $_POST['email']!=""))
{
	$email=$_POST['email'];
	
	echo $txt='<table width="600" border="0" cellpadding="8" cellspacing="1">
	  <tr>
		<td valign="top"><div align="left"><img src="http://loaninmumbai.com/images/logo-mail.png" alt="Creative Finserve Private Limited" title="Creative Finserve Private Limited" width="250" height="62"></div></td>
	</tr>
      <tr>
        <td height="20" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><table width="100%" border="0" cellpadding="8" cellspacing="1" bgcolor="#CCCCCC">
          <tr>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333; padding-left:30"><div align="left"><strong>Email ID</strong></div></td>
            <td height="20" bgcolor="#FFFFFF" style="font-family:Verdana, Arial; font-size:11px; color:#333333;"><div align="left">'.$email.'</div></td>
          </tr>
        </table></td>
      </tr>
</table>';

 	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsMail();
	$mail->Host = "localhost";
	$mail->IsHTML(true);
	$mail->FromName="Admin";
	$mail->From = "admin@loaninmumbai.com";
	$mail->AddAddress("imran_sable@yahoo.com");
	$mail->AddCC("cfpl@live.in");
	$mail->AddBCC("satishmohite123@gmail.com");
	$mail->Subject = 'Newsletter Subscriber';
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
    <td style="font-family: Arial; font-size: 13px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none;" valign="top"><b>Dear Customer,</b></td>
  </tr>
  <tr>
    <td height="10"></td>
  </tr>
  <tr>
    <td style="font-family: Arial; font-size: 13px; font-weight: normal; color: rgb(0, 0, 0); line-height: 20px; text-decoration: none;" valign="top">Thank you for Subscribing to Newsletter from Creative Finserve. We at Creative Finserve will send you important updates that will help you in your money matters</td>
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
</table>
';

	$mail = new PHPMailer();
	$mail->IsMail();
	$mail->Host = "localhost";
	$mail->IsHTML(true);
	$mail->FromName= 'Creative Finserve Private Limited';
	$mail->From = 'admin@cfplindia.com';
	$mail->AddAddress(addslashes($email));
	$mail->Subject = "Thank you for Subscribing";
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
	


