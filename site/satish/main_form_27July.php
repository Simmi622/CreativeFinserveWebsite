<html><head><script type="text/javascript">

	function validateName(user_name){

		if(user_name == ''){
			//$('.error').css('display','block');
			$('#error_user').html('Please enter your name');
			return false;
		}else{
			$('#error_user').html('');
			return true;
		}
	}
	function validatePhone(mobile_no) {
		/*var a = document.getElementById('mobilechk').value;*/
	    var filter = /^[0-9-+]+$/;
	    if (filter.test(mobile_no) && mobile_no.length == 10) {
	    	$('#error_mobilechk').html('');
	    	return true;
	    }
	    else {

	    	$('#error_mobilechk').html('Please enter valid mobile no');
	    	//alert('Please enter valid mobile no');
	        return false;
	    }
	}

	 function validateEmail(email) {
	 	var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	  	if(emailReg.test(email)){
	  		$('#error_email').html('');
	  		return true;
	    }
	    else {
	    	$('#error_email').html('Please enter valid email id');
	    	//alert('Please enter valid email id');
	        return false;
	    }
	}

	function validateTask(task){
		//salert(task);return false;
		if(task == ''){
			$('#error_task_dropdown').html('Please select loan type');
			//alert('Please select loan type');
			return false;
		}else{
			$('#error_task_dropdown').html('');
			return true;
		}
	}
	function Checkfiles(){
		var user_name = $('#user_name').val();
		var email = $('#email').val();
		var mobile_no = $('#mobilechk').val();
		var task_dropdown = $('#task_dropdown').val();
		var loan_amt = $('#loan_amt').val();
		var loan_emi = $('#loan_emi').val();
		var loan_rate_int = $('#loan_rate_int').val();
		if(!validateName(user_name)){
			return false;
		}else if(!validatePhone(mobile_no)){
			return false;
		}else if(!validateEmail(email)){
			return false;
		}else if(!validateTask(task_dropdown)){
			return false;
		}else if(!num_validation(loan_amt)){
			$('#loan_amt').css('border','red solid 1px');
			$('#loan_error').html('Please enter valid loan amount');
			//alert('Please enter valid loan amount');
			return false;
		}else if(!num_validation(loan_emi)){
			$('#loan_emi').css('border','red solid 1px');
			$('#loan_error').html('Please enter valid loan EMI');
			//alert('Please enter valid loan EMI');
			return false;
		}else if(!num_validation(loan_rate_int)){
			$('#loan_rate_int').css('border','red solid 1px');
			$('#loan_error').html('Please enter valid loan rate intrest');
			//alert('Please enter valid loan rate intrest');
			return false;
		}else{
			$('#loan_error').html('');
			return false;
		}

		return false;
	}

	function num_validation(number){
		var filter = /^[0-9-+]+$/;
	    if (filter.test(number) && number.length !== '') {
	    	return true;
	    }else {
	    	return false;
	    }
	}

	function check_date(){
		alert('cdvcgdvcg');
	}
</script></head>
<body>
<form method="post" action="process_form.php" name="frm_enquiry" id="frm_enquiry"  enctype="multipart/form-data" onsubmit="return checkfiles();" >
		<div class="form-div">
        <label for="name" class="blocklabel">Your Name <span class="mandatory">*</span></label>
        <input name="user_name" id="user_name" type="text" class="car-field1 left" value="" onblur="validateName(this.value)" />
        <span id="error_user" class="error"></span>
        </div>
		<div class="form-div">
        <label for="name" class="blocklabel">Mobile No<span class="mandatory">*</span></label>
        <input  name="mobilechk" id="mobilechk" type="text" class="car-field1" value=""  onblur="validatePhone(this.value)" />
        <span id="error_mobilechk" class="error"></span>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Email id<span class="mandatory">*</span></label>
        <input name="email" id="email"  type="text" class="car-field1" value="" onblur="validateEmail(this.value)"/>
        <span id="error_email" class="error"></span>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Loan Type <span class="mandatory">*</span><span class="help-icon"><a href="#remindersheading" class="help-icon supernote-hover-remindersheading"></a></span></label>
        <select name="task_dropdown" id="task_dropdown" class="car-field1" onChange="javascript:test9();"/ style="width:51%; padding:8px;" onblur="validateTask(this.value)">
        <option value="">Select</option>
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
		   <span id="error_task_dropdown" class="error"></span>
        </div>
        <input type="hidden" name="max_count" id="max_count" value="10">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url0" id="website_url0" type="text" class="car-field1" value=""  style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url1" id="website_url1" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">

        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url2" id="website_url2" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url3" id="website_url3" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url4" id="website_url4" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url5" id="website_url5" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url6" id="website_url6" type="text" class="car-field1" value="" style="width:200px;">
		</div>
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Lease Agreement</label>
		  <input name="userfile[]" type="file" style="padding-top:10px;"> <!-- ????? -->
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
        <div style="padding-bottom:10px; padding-top:10px;">
        
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url7" id="website_url7" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
		<div style="padding-bottom:10px;">
       <p class="label-text"><a href="project-finance-format-cld.doc" class="text-link">Click here</a> to download Project Details Format</p>
       <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url8" id="website_url8" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url9" id="website_url9" type="text" class="car-field1"  value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url10" id="website_url10"  type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url11" id="website_url11" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url12" id="website_url12" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url13" id="website_url13" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
        
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url14" id="website_url14" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <div style="padding-bottom:10px; padding-top:10px;"><
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url15" id="website_url15" type="text" class="car-field1" value="" style="width:200px;">
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
		
			<tr>
			  <th width="16%" valign="middle" bgcolor="#666666">Bank Name</th>
			  <th width="16%" bgcolor="#666666">Credit Limit</th>
			  <th width="16%" bgcolor="#666666">Limit Utilize</th>
			  <th width="16%" bgcolor="#666666">Credit Card Start Date</th>
			  
		    </tr>
		
			
			<tr>
			  <td align="center"><input name="Existing_bank_name[]" id="Existing_bank_name" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input name="Existing_Credit_Limit[]" id="Existing_Credit_Limit" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input name="Existing_Limit_Utiliz[]" id="Existing_Limit_Utiliz" type="text" class="car-field1" style="width:180px;"></td>
			  <td align="center"><input type="text"  name="carddate[]" class="car-field1" id="carddate"/ style="width:180px;"></td>
		    </tr>	
			<tr>
				<td colspan="7" style="padding: 0px;">
					<div id="card_row_container">
						
					</div>
				</td>
			</tr>
			<tr>
				<td  colspan="7"><div class="table-container">
				<table width="100%" cellpadding="0" cellspacing="0"><div id="dynamicInputCard" style="border:0px solid red;">		
				</div></table></div></td>
			</tr>
			<tr>
				<td colspan="7" class="text-link"><a href="javascript:void(0);"  onClick="addmoreotherCard('dynamicInputCard');" style="color: #47738b;" id="add_more">Add Other Card</a></td>
		    </tr>
			


            	
		
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
        <div style="padding-bottom:10px; padding-top:10px;">
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url16" id="website_url16" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url17" id="website_url17" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        <div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url18" id="website_url18" type="text" class="car-field1" value="" style="width:200px;">
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
        <div style="padding-bottom:10px; padding-top:10px;">
	    <label class="label-text"><strong>Self Employed</strong></label>
        
		<div style="padding-bottom:10px;">
        <label class="blocklabe2">Website Url</label>
        <input name="website_url19" id="website_url19" type="text" class="car-field1" value="" style="width:200px;">
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
        <label><input type="checkbox" name="colorCheckbox" value="loanblue" checked="checked" > <strong>Existing Loan Details</strong>
        </label>
        <span id="loan_error" class="error"></span>
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
			<tr id="first_loan_row">
			  <td align="center"><input name="bank_name[]" id='bank_name'  type="text" class="car-field1" style="width:90px;"></td>
			  <td align="center">
	              <select name="products_services[]" id="Products_Services" class="car-field1" onChange="javascript:test9();" style="width:200px;" >
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
			  <td align="center"><input name="loan_amt[]" id='loan_amt'  type="text" class="car-field1" style="width:80px;" onblur="num_validation(this.value)" ></td>
			  <td align="center"><input name="loan_emi[]" id='loan_emi' type="text" class="car-field1" style="width:80px;"  onblur="num_validation(this.value)"></td>
			  <td align="center"><input name="loan_rate_int[]" id='loan_rate_int' type="text" class="car-field1" style="width:50px;"  onblur="num_validation(this.value)"></td>
			  <td align="center"><input type="text" class="car-field1 datepicker" name="startdate[]" onclick="check_date()" data-validation="date" data-validation-format="dd/mm/yyyy" /></td>
			  <td align="center"><input type="text" class="car-field1 datepicker" name="enddate[]" data-validation="date" data-validation-format="dd/mm/yyyy"  /></td>
		    </tr>	
			<tr>
				<td colspan="7" style="padding: 0px;">
					<div id="loan_row_container">
						
					</div>
				</td>
			</tr>
			<tr>
			  <td colspan="7" class="text-link"><a href="javascript:void(0);"  onClick="addmoreotherLOan('dynamicInputloan');" style="color: #47738b;" id="add_more">Add Other Loan</a></td>
		    </tr>
			
			 	
			
			  
		</tbody>
	</table>
</div>
    </div>
        <div class="formdiv" style="margin-top:10px;">
          <input type="checkbox"  id="c1" name="cc" checked="checked" />
          <label style="font-size:12px;" for="c1"><span></span>I agree terms and condition</label>
          </div>

		
		<div class="g-recaptcha" data-sitekey="6Ldc_AgTAAAAADWtRHKC3BiNgy2c0_pMQ9gZYtRg"></div>
		
		<div class="form-div">
        <input type="submit" name="Submit" id="Submit" value="Submit" class="comment_submit2"/>
        </div>
        </form> 
</body>
</html>