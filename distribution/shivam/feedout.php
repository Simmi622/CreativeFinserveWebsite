<h3 align="center">Thanks for your Feedback </h3>
<!-- VIP: change YourEmail to your real email -->

<?php 

$ip = $_POST['ip'];
$httpagent = $_POST['httpagent'];
$httpref = $_POST['$httpref'];
$nameis = $_POST['nameis']; 
$visitormail = $_POST['visitormail']; 
$feedback = $_POST['feedback']; 
$rating = $_POST['rating'];
$emailvalidation = $_POST['emailvalidation']; 
$fieldvalidation = $_POST['fieldvalidation']; 
$htmlcontrol= $_POST['htmlcontrol']; 
$phpform = $_POST['phpform']; 
$htmlform = $_POST['htmlform'];
$attn = $_POST['attn']; 

if (eregi('http:', $feedback)) { die ("Do NOT try that! ! "); } 

if((!$visitormail == "") && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$tellem = "<h2>Feedback was NOT submitted</h2>\n";
}

if(empty($nameis) || empty($feedback) || empty($visitormail)) {
echo "<h2>Use Back - fill in all fields</h2>\n";
}

echo $tellem;

if ($emailvalidation == "y") { 
$req1 = "Email format Validation \n" ; 
}

if ($fieldvalidation == "y") {
$req2 = "Required Form Field Validation \n";
}
if ($htmlcontrol == "y") {
$req3 = "More intergratd HTML (in form) \n";
}
if ($phpform == "y") {
$req4 = "Improved PHP form script generator \n";
}
if ($htmlform == "y") {
$req5 = "A complete HTML form generator \n";
}
$req = $req1 . $req2 . $req3 . $req4 . $req5;

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn; 
$subject = $attn; 

$feedback = stripcslashes($feedback);

$message = " $todayis [EST] \n 
Attention: $attn (Rating: $rating) \n 
From: $nameis ($visitormail)\n
Requested:
$req \n
Feedback: $feedback \n
Additional Info : IP = $ip \n 
Browser = $httpagent \n
Referral = $httpref
";

$from = "From: $visitormail\r\n";

mail("satishmohite123@gmail.com", $subject, $message, $from);


$screenout = str_replace("\n", "<br/>", $message);
?>


<p align="center">

<?php echo $screenout ?>

</p>