
<script type="text/javascript">
function text_null()
{
	var msg="";
	
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
	if(msg!="")
	{
		alert(msg);
		return false;
	}
alert ("Thank you for Subscribing to Newsletter from Creative Finserve");
//return true;
}

</script>

<div class="envelope">
         <h4>Subscribe to our Newsletter &  Receive our latest offer</h4>
        <form action="newsletter.php" method="post" name="frm_enquiry" id="frm_enquiry" onSubmit="return text_null();">
		 <div class="form-div newsletter">
           <input name="email" type="text" class="car-field1_1 inputfield" size="68" placeholder="Enter Email Id"/>
           <input type="submit" name="Submit" id="Submit" value="Submit" class="comment_submit2"/>
		</div>
        </form>
        </div>