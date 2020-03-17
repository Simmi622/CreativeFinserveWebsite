<html><head><script type="text/javascript">
	$(document).ready(function(){
		$('.form-div .error').css('border','white solid 1px');
		$('#loan_error').css('border','white solid 1px');
		$('#task_dropdown').change(function(){
			if(this.value == 'Debt Consolidation'){
				$('.error').css('border','white solid 1px');
				$('.debtblue #carddate').attr('readonly',true);
			}
		});
	});
	function validateName(user_name){

		if(user_name == ''){
			$('#error_user').html('Please enter your name');
			return false;
		}else{
			$('#error_user').html('');
			return true;
		}	
	}
	function validatePhone(mobile_no) {

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
		//alert('task'+task);
		if(task == ''){
			$('#error_task_dropdown').html('Please select loan type');
			return false;
		}else{
			$('#error_task_dropdown').html('');
			return true;
		}
	}

	function num_validation(number){
		//alert(number);
		var filter = /^[0-9-+]+$/;
	    if (filter.test(number) && number.length > 0) {
	    	return true;
	    }else {
	    	return false;
	    }
	}


	function text_validation(text){
		if(text !== ''){
			return true;
		}else{
			return false;
		}
	}

	function check_date(date_val){
		if(date_val !== ''){
			return true;
		}else{
			return false;
		}
	}
	function checkfiles(){

		var user_name = $('#user_name').val();
		var email = $('#email').val();
		var mobile_no = $('#mobilechk').val();
		var task_dropdown = $('#task_dropdown').val();
		var loan_amt = $('.loanblue #loan_amt').val();
		
		var loan_emi = $('.loanblue #loan_emi').val();
		var loan_rate_int = $('.loanblue #loan_rate_int').val();
		var bank_name = $('.loanblue #bank_name').val();
		var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		var filter = /^[0-9-+]+$/;
		var checkbox = $('#c1').val(); //alert(checkbox);return false;
		var date_val = $('#startdate').val();
		var date_val1 = $('#enddate').val();
		
		/*var values = $('input[name="loan_emi[]"]').map(function(){
			alert(this.value);
       		//return this.value;
   		}).get();*/

		if(!validateName(user_name)){
			return false;
		} 
		if(!validatePhone(mobile_no)){
			return false;
		}
		if(!validateEmail(email)){
			return false;
		}if(!validateTask(task_dropdown)){
			return false;
		}
		if($("#colorCheckbox11").is(':checked')){

			if(!text_validation(bank_name)){
				$('.loanblue #bank_name').css('border','red solid 1px');
				$('#loan_error').html('Please enter valid bank name');
				return false;
			}
			if(!num_validation(loan_amt)){
				$('.loanblue #loan_amt').css('border','red solid 1px');
				$('#loan_error').html('Please enter valid loan amount');
				return false;
			}
			if(!num_validation(loan_emi)){
				$('.loanblue #loan_emi').css('border','red solid 1px');
				$('#loan_error').html('Please enter valid loan EMI');
				return false;
			}
			if(!num_validation(loan_rate_int)){
				$('.loanblue #loan_rate_int').css('border','red solid 1px');
				$('#loan_error').html('Please enter valid loan rate intrest');
				return false;
			}
			if(!check_date(date_val)){
				$('.loanblue #startdate').css('border','red solid 1px');
				$('#loan_error').html('Please enter start date');
				return false;
			}
			if(!check_date(date_val1)){
				$('.loanblue #enddate').css('border','red solid 1px');
				$('#loan_error').html('Please enter end date');
				return false;
			}
		}
		var loan_type = $('#task_dropdown').val();
		//alert(loan_type);
		
		if(loan_type == 'Debt Consolidation'){ 

			$('.debtblue #carddate').attr('readonly',true);
			var Existing_bank_name = $('#Existing_bank_name').val();
			var Existing_Credit_Limit = $('#Existing_Credit_Limit').val();
			var Existing_Limit_Utiliz = $('#Existing_Limit_Utiliz').val();
			var date_val3 = $('#carddate').val();
			if($("#colorCheckbox12").is(':checked')){

				if(!text_validation(Existing_bank_name)){
					$('.debtblue #Existing_bank_name').css('border','red solid 1px');
					$('#credit_card_error').html('Please enter existing bank name');
					return false;
				}else if(!num_validation(Existing_Credit_Limit)){
					$('.debtblue #Existing_Credit_Limit').css('border','red solid 1px');
					$('#credit_card_error').html('Please enter existing credit limit');
					return false;
				}else if(!num_validation(Existing_Limit_Utiliz)){
					$('.debtblue #Existing_Limit_Utiliz').css('border','red solid 1px');
					$('#credit_card_error').html('Please enter existing limit utilized');
					return false;
				}else if(!check_date(date_val3)){
					$('.debtblue #carddate').css('border','red solid 1px');
					$('#credit_card_error').html('Please enter credut card start date');
					return false;
				}else{
					$('#loan_error #credit_card_error').html('');
					$('.loanblue .debtblue').css('border','black solid 1px');
					return true;
				}
			}
		}else{
		//	alert('else');
			$('#loan_error').html('');
			$('.loanblue').css('border','white solid 1px');
			return true;
		}
	}

	
	
</script></head>
<body>
<form method="post"  action="process_form_debt.php" name="frm_enquiry" id="frm_enquiry"  enctype="multipart/form-data" onSubmit="return checkfiles();" >
		<div class="form-div">
        <label for="name" class="blocklabel">Your Name <span class="mandatory">*</span></label>
        <input name="user_name" id="user_name" type="text" class="car-field1 left" value="" onBlur="validateName(this.value)" />
        <span id="error_user" class="error"></span>
        </div>
		<div class="form-div">
        <label for="name" class="blocklabel">Mobile No<span class="mandatory">*</span></label>
        <input  name="mobilechk" id="mobilechk" type="text" class="car-field1" value=""  onblur="validatePhone(this.value)" />
        <span id="error_mobilechk" class="error"></span>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Email id<span class="mandatory">*</span></label>
        <input name="email" id="email"  type="text" class="car-field1" value="" onBlur="validateEmail(this.value)"/>
        <span id="error_email" class="error"></span>
		</div>
		<div class="form-div">
        <label for="name" class="blocklabel">Loan Type <span class="mandatory">*</span><span class="help-icon"><a href="#remindersheading" class="help-icon supernote-hover-remindersheading"></a></span></label>
        <select name="task_dropdown" id="task_dropdown" class="car-field1" onChange="javascript:test9();"/ style="width:51%; padding:8px;" onBlur="validateTask(this.value)">
          <option value='Debt Consolidation' >Debt Consolidation</option>
		  </select>
		   <span id="error_task_dropdown" class="error"></span>
        </div>
        <input type="hidden" name="max_count" id="max_count" value="20">
 		


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
        <div style="padding-bottom:10px; padding-top:10px;">
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
        <label><input type="checkbox" name="colorCheckbox"  id="colorCheckbox12" value="debtblue" checked="checked" > <strong>Existing Credit Cards</strong></label>
        <span id="credit_card_error" class="error"></span>
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
        
        
     <div>
        <label><input type="checkbox" name="colorCheckbox" id="colorCheckbox11" value="loanblue" checked="checked" > <strong>Existing Loan Details</strong>
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
			  <td align="center"><input name="loan_amt[]" id='loan_amt'  type="text" class="car-field1" style="width:80px;" onBlur="num_validation(this.value)" ></td>
			  <td align="center"><input name="loan_emi[]" id='loan_emi' type="text" class="car-field1" style="width:80px;"  onblur="num_validation(this.value)"></td>
			  <td align="center"><input name="loan_rate_int[]" id='loan_rate_int' type="text" class="car-field1" style="width:50px;"  onblur="num_validation(this.value)"></td>
			  <td align="center"><input type="text" class="car-field1 datepicker" name="startdate[]" onClick="check_date()" data-validation="date" data-validation-format="dd/mm/yyyy" /></td>
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