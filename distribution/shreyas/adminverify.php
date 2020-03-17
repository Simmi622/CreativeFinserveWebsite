<?php 
 session_start();
 
 ?>

<?php
 // $con=mysqli_connect('localhost','root','','realvalue');

include "connectdb.php";
//$con = mysqli_connect('localhost','cfpli4sr_rv','realvalue@123','cfpli4sr_realvalue');
  // ('localhost','rupeelinkin','rupeelink@123','rupeelinkin');
 
  // session_start();
   $result=mysqli_query($con,"select * from useridcreation where employeeid = '$_POST[username]' AND password = '$_POST[password]'") or die (mysql_error());
   
   $row = mysqli_fetch_array($result);
   //$nm=$_SESSION['nm'];
   
   if(!empty($_POST["remember"])) {
				setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
	echo "Cookies Set Successfuly";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}

//session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
 if(isset($_POST["sub"]))  
 {  
   if(!empty($row['membername']) AND !empty($row['password']))
   {
	$_SESSION['employeeid']= $row['employeeid'] ;
//$_SESSION['mappedto']= $row['mappedto'];
 $_SESSION['userid'] = $row['employeeid'];

 $_SESSION['user_name'] = $row['membername'];
 $_SESSION['mappedto'] = $row['mappedto'];

	    $_SESSION['namemapped']= $row['namemapped'];
		        $_SESSION['role'] = $row['role'];
				      $_SESSION['last_login_timestamp'] = time();  

				//$_SESSION['loggedin_time'] = time();
					//			$_SESSION["user_id"] = 1001;
  
			  //$_session['membername'] = $row['password'];   
	  //$_SESSION['role'] = $row['uid'];
	  //$_SESSION['username'] = $row['username'];
	  	 //echo " SUCCESSFULL LOGIN TO USER PROFILE PAGE...";
	  if($row['role']=='Admin')
	  {
		  		  
           //  $_SESSION['nm']=$_POST['membername'];
          
		  header("location: admin-dashboard.php");
	  }
	   if($row['role']=='Referral partner')
	  {
		  header("location: referral/ref-dashboard.php");
	  }
	   if($row['role']=='Referral Agent')
	  {
		  header("location: referral-agent/ref-dashboard.php");
	  }
	  if($row['role']=='Sr Development Partner')
	  {
		  header("location: sr-development-partner/dashboard.php");
	  }
	  if($row['role']=='Development Partner')
	  {
		  header("location: development-partner/dashboard.php");
	  }
	   if($row['role']=='Vertical head')
	  {
		  header("location: vertical-head/dashboard.php");
	  }
	   if($row['role']=='Secured Vertical Head')
	  {
		  header("location: secured-vertical-head/dashboard.php");
	  }
	   if($row['role']=='Tele Sales')
	  {
		  header("location: tele-sales/dashboard.php");
	  }
	   if($row['role']=='Coordinator')
	  {
		  header("location: coordinator/dashboard.php");
	  }
	   if($row['role']=='Doc boy')
	  {
		  header("location: doc-boy/dashboard.php");
	  }
	  if($row['role']=='Relationship manager')
	  {
		  header("location: rm/dashboard.php");
	  }
	 
	   
   } 
   else
   {
	   echo "SORRY...YOU ENTERD WRONG ID AND PASSWORD...PLEASE RETRY...";
   }
   
 }
   
   
 
  
 /*  while($row=mysqli_fetch_array($result))
   {
	   if($row['membername']==$_POST['username'] && $row['password']==$_POST['password'])
	   {
		   $k=1;
		   break;
		  
	   }
   }
   
     if($k==1) {
		  session_start(); 
		  $_SESSION['nm']=$_POST['username'];
           
         header("location: admin_dashboard1.php");
	 }
	  else 
	  {
         $error = "Your Login Name or Password is invalid";
		  
		  header("location: admin_index.php");
		  echo "<script>alert('Invalid Name or Password')</script>";
      }
*/
	  





?>
