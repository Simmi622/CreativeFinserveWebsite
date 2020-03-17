
var tstflag=0;
/************* EMI Calculations ********************/
var formEmiCalci=new Object();
formEmiCalci['loanAmt']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Amount of Loan you want', param:{min:1,max:999999999}};
formEmiCalci['tenure']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Loan Term in months', param:{min:1,max:360}};
formEmiCalci['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
fieldMap['formEmiCalci']=formEmiCalci;	

function validateCalculator()
{
	var errorStatus=validation(document.formEmiCalci);
	if(errorStatus)
	{
		var emiResult=calculateEMI(document.formEmiCalci);
		emiResult = getFormattedNumber(emiResult);
		document.getElementById('emiid').innerHTML='EMI: '+emiResult;
		
	}	
}

function recalculateEMI(mode){
	var loanAmt,interestRate,tenure;
	loanAmt=document.formEmiCalci.loanAmt.value;
	tenure=document.formEmiCalci.tenure.value;
	interestRate=document.formEmiCalci.interestRate.value;
	if(loanAmt!="" && tenure!="" && parseInt(loanAmt)!=0 && parseInt(tenure)!=0 && interestRate!="")
	{
		var emiResult=calculateEMI(document.formEmiCalci);
		document.getElementById('emiid').style.display='block';
		emiResult = getFormattedNumber(emiResult);
		document.getElementById('emiid').innerHTML='EMI: '+emiResult;
		
	}
}
function calculateEMI(formObj){
	var loanAmt,interestRate,tenure;
	loanAmt=formObj.loanAmt.value;
	tenure=formObj.tenure.value;
	interestRate=formObj.interestRate.value;
	if(parseFloat(interestRate)!=0){
		var interestRateForMonth = interestRate/12; // (Monthly Rate of Interest in %)
		var interestRateForMonthFraction = interestRateForMonth/100; // (Monthly Interest Rate expressed as a fraction)
		var emi =1/Math.pow((1+interestRateForMonthFraction),tenure);
		var emiPerLakh = (loanAmt*interestRateForMonthFraction)/(1 - emi) // (EMI per lakh borrowed)
		emiPerLakh = roundDecimals(emiPerLakh, 0);
		return emiPerLakh;
	}else{
		var emi = loanAmt / tenure;
		var emiPerLakh = roundDecimals(emi, 0);
		return emiPerLakh;
	}
}
/************* EMI Calculations End********************/

/************* Calculate Impact of Rate of Change calculator Start ********************/
var formImpactofChangeRate=new Object();
formImpactofChangeRate['loanAmt']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Amount of Loan you want', param:{min:1,max:999999999}};
formImpactofChangeRate['tenure']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Loan Term in months', param:{min:1,max:360}};
formImpactofChangeRate['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
formImpactofChangeRate['rateChanged']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Rate Changes After Months', param:{min:1,max:360}};
formImpactofChangeRate['newInterestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
fieldMap['formImpactofChangeRate']=formImpactofChangeRate;

function validateImpactofChangeRateCalculator()
{
	var errorStatus=validation(document.formImpactofChangeRate);
	if(errorStatus)
	{
		var result=calculateImpactofChangeRate(document.formImpactofChangeRate);
		
	}	
}

function calculateImpactofChangeRate(formObj){
	if(formObj.loanAmt.value!="" && formObj.loanAmt.value!=0 && formObj.tenure.value!="" && formObj.tenure.value!=0 && formObj.interestRate.value!="" && formObj.rateChanged.value!="" && formObj.rateChanged.value!=0 && formObj.newInterestRate.value!=""){
		var loanAmt=formObj.loanAmt.value;
		var emi=calculateEMI(formObj);
		var interestRate=formObj.interestRate.value;
		var interestRateForMonth = interestRate/12; // (Monthly Rate of Interest in %)
		var interestRateForMonthFraction = interestRateForMonth/100; // (Monthly Interest Rate expressed as a fraction)
		
		var loanOustanding=loanAmt;
		if(parseInt(formObj.rateChanged.value) >= parseInt(formObj.tenure.value)){
			alert('Please Enter Rate Changes After less than Tenure');
			document.getElementById('loanOutstandingAmt').innerHTML="";
			document.getElementById('changedEmi').innerHTML="";
			return;
		}
		for(i=0;i<formObj.tenure.value;i++)
		{
			 
			if(loanOustanding==loanAmt){
				loanOustanding=loanAmt;
				interestPortion = loanOustanding * interestRateForMonthFraction;
				interestPortion = roundDecimals(interestPortion,0);
			}else{
				interestPortion = loanOustanding * interestRateForMonthFraction;
				interestPortion = roundDecimals(interestPortion,0);
			}
			
			loanOustanding = parseFloat(loanOustanding)+parseFloat(interestPortion)-parseFloat(emi);
			loanOustanding = roundDecimals(loanOustanding,0);
			principalPortion = roundDecimals(emi-interestPortion,0)
			
			if(parseFloat(formObj.interestRate.value)!=parseFloat(formObj.newInterestRate.value))
			{
				if(i+1==formObj.rateChanged.value)
				{
					
					document.getElementById('loanOutstandingAmt').style.display="block";
					document.getElementById('changedEmi').style.display="block";
					document.getElementById('oldEmi').style.display="block";
					document.getElementById('loanOutstandingAmt').innerHTML="Amount outstanding after "+formObj.rateChanged.value+" months:"+getFormattedNumber(loanOustanding);
					document.getElementById('oldEmi').innerHTML="<br>Old EMI:"+getFormattedNumber(emi);
					tenure=formObj.tenure.value - formObj.rateChanged.value;
					newInterestRate=formObj.newInterestRate.value;
									
					if(parseFloat(newInterestRate)!=0){
						var newInterestRateForMonth = newInterestRate/12; // (Monthly Rate of Interest in %)
						var newInterestRateForMonthFraction = newInterestRateForMonth/100; // (Monthly Interest Rate expressed as a fraction)
						var emi =1/Math.pow((1+newInterestRateForMonthFraction),tenure);
						var emiPerLakh = (loanOustanding*newInterestRateForMonthFraction)/(1 - emi) // (EMI per lakh borrowed)
						emiPerLakh = roundDecimals(emiPerLakh, 0);
					}else{
						var emi = loanOustanding / tenure;
						emiPerLakh = roundDecimals(emi, 0);
					}
					emiPerLakh = getFormattedNumber(emiPerLakh);
					document.getElementById('changedEmi').innerHTML="<br>New EMI:"+emiPerLakh;
				}
			}else{	
				alert('New Interest Rate and the Old Interest Rate should not be same');
				document.getElementById('loanOutstandingAmt').style.display="none";
				document.getElementById('changedEmi').style.display="none";	
				break;		
			}
		}
	}
	
	
}
/************* Calculate Impact of Rate of Change calculator End ********************/

/************* Calculate Break Up And LoanAmt Outstanding calculator Start ********************/
var formamortization=new Object();
formamortization['loanAmt']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Amount of Loan you want', param:{min:1,max:999999999}};
formamortization['tenure']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Loan Term in months', param:{min:1,max:360}};
formamortization['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
//formamortization['installment']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Installment No.', param:{min:1,max:360}};
formamortization['installmentMonth'] = {blank:true, valid:true, validateFunction:[selectValidation],label:'Installment Date'};
formamortization['installmentYear'] = {blank:true, valid:true, validateFunction:[selectValidation],label:'Installment Date'};
fieldMap['formamortization']=formamortization;

function validateBreakUpAndLoanAmtOutstandingCalculator()
{
    var errorStatus=validation(document.formamortization);
	if(errorStatus)
	{
		var result=calculateamortization(document.formamortization);
		
	}	
}
function calculateamortization(formObj){
    //var dayValue = document.getElementById('installmentDay').value;
	var monthValue = document.getElementById('installmentMonth').value;
	var yearValue = document.getElementById('installmentYear').value;
	if(formObj.loanAmt.value!="" && formObj.tenure.value!="" && formObj.loanAmt.value!=0 && formObj.tenure.value!=0 && formObj.interestRate.value!="" && monthValue!="" && monthValue!=0 && yearValue!="" && yearValue!=0)
	{
		document.getElementById('paymentsDetails').style.display="block";
		
		var loanAmt=formObj.loanAmt.value;
		var emi=calculateEMI(formObj);
		var interestRate=formObj.interestRate.value;
		var interestRateForMonth = interestRate/12; // (Monthly Rate of Interest in %)
		var interestRateForMonthFraction = interestRateForMonth/100; // (Monthly Interest Rate expressed as a fraction)
		
		var loanOustanding=loanAmt;
		var totalPayment=0;
		var totalInterestPortion=0;
		var totalPrincipal=0;
		var strData="<table border='0' cellspacing='1'  bgcolor='#d5cfb1' cellpadding='1'><tr><td width='14%' align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>Installment No</td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>Installment Date</td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>Opening Balance</td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>EMI</td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'><strong>Loan Outstanding</strong></td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>Interest</td><td width='14%'  align='center' bgcolor='#88a943' class='tblwt_txt' height='22'>Principal</td></tr>";
		for(i=1;i<=formObj.tenure.value;i++)
		{
			
		  if(monthValue!=0)
		       month = parseInt(monthValue) + parseInt(i) - 1;
		 else
		      month = parseInt(month) + 1;
		  if(month>12)
		  {
		      year = parseInt(yearValue) + 1;
		      yearValue = year;
		      monthValue = 0;
		      month = parseInt(monthValue) + 1;
		  }else{
              year = yearValue;
		  }
		  
		  if(month<10)
    	  {
    	       var installmentDate = '0'+month+'/'+year;
    	  }else
    	  {
    	       var installmentDate = month+'/'+year;
    	  }
		  
	  		   
				if(loanOustanding==loanAmt){
					loanOustanding=loanAmt;
					strData +='<tr><td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowInstallmentNo'+i+'" ><strong>'+i+'</strong></td>';
					strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowInstallmentDate'+i+'"><strong>'+installmentDate+'</strong></td>';
					strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowOpeningBalance'+i+'"><strong>'+getFormattedNumber(loanOustanding)+'</strong></td>';
					strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowPayment'+i+'"><strong>'+getFormattedNumber(emi)+'</strong></td>';
					totalPayment = parseFloat(totalPayment) + parseFloat(emi);
					interestPortion = loanOustanding * interestRateForMonthFraction;
					interestPortion = roundDecimals(interestPortion,0);
					
				}else{
				    strData +='<tr><td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowInstallmentNo'+i+'">'+i+'</td>';
					strData +='<td class="tbl_txt" bgcolor="#FFFFFF" id="txtRowInstallmentDate'+i+'">'+installmentDate+'</td>';
					strData +='<td class="tbl_txt" bgcolor="#FFFFFF" id="txtRowOpeningBalance'+i+'">'+getFormattedNumber(loanOustanding)+'</td>';
					strData +='<td class="tbl_txt" bgcolor="#FFFFFF" id="txtRowPayment'+i+'">'+getFormattedNumber(emi)+'</td>';
					totalPayment = parseFloat(totalPayment) + parseFloat(emi);
					interestPortion = loanOustanding * interestRateForMonthFraction;
					interestPortion = roundDecimals(interestPortion,0);
					
				}
				
				loanOustanding = parseFloat(loanOustanding)+parseFloat(interestPortion)-parseFloat(emi);
				loanOustanding = roundDecimals(loanOustanding,0);
				if(i==1){
    				strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowloanOustanding'+i+'"><strong>'+getFormattedNumber(loanOustanding)+'</strong></td>';
    				strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowintrestPortion'+i+'"><strong>'+getFormattedNumber(interestPortion)+'</strong></td>';
				}else{
                    strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowloanOustanding'+i+'"><strong>'+getFormattedNumber(loanOustanding)+'</strong></td>';
    				strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowintrestPortion'+i+'">'+getFormattedNumber(interestPortion)+'</td>';				    
				}
				totalInterestPortion = parseFloat(totalInterestPortion) + parseFloat(interestPortion);
				principal = roundDecimals(emi-interestPortion,0);
				if(i==1){
    				strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowprincipalPortion'+i+'"><strong>'+getFormattedNumber(principal)+'</strong></td></tr>';
				}else{
                    strData +='<td  class="tbl_txt" bgcolor="#FFFFFF" id="txtRowprincipalPortion'+i+'">'+getFormattedNumber(principal)+'</td></tr>';				    
				}
				totalPrincipal = parseFloat(totalPrincipal) + parseFloat(principal);
					
		}
		strData+="<tr><td  class='tbl_txt' bgcolor='#FFFFFF' >Total:</td><td bgcolor='#FFFFFF'></td><td  bgcolor='#FFFFFF' class='tbl_txt'></td><td bgcolor='#FFFFFF' class='tbl_txt'>"+getFormattedNumber(totalPayment)+"</td><td bgcolor='#FFFFFF' class='tbl_txt'></td><td bgcolor='#FFFFFF' class='tbl_txt'>"+getFormattedNumber(totalInterestPortion)+"</td><td bgcolor='#FFFFFF' class='tbl_txt'>"+getFormattedNumber(totalPrincipal)+"</td></tr></table>";
		if(parseInt(formObj.installment.value) > parseInt(formObj.tenure.value) || parseInt(formObj.installment.value)==0){
				document.getElementById('tblinstallmentDetails').style.display="none";	
				alert('The Installment must be less than or equal to the Tenure')		
		}
		document.getElementById('tblpaymentsDetails').innerHTML=strData;
		for(i=1;i<=formObj.tenure.value;i++)
		{
    		if(i==formObj.installment.value)
        	{
        	    document.getElementById('tblinstallmentDetails').style.display="block";
        		document.getElementById('openingBalance').innerHTML=document.getElementById('txtRowOpeningBalance'+i).innerHTML;
        		document.getElementById('payment').innerHTML=document.getElementById('txtRowPayment'+i).innerHTML;
        		document.getElementById('loanOustanding').innerHTML=document.getElementById('txtRowloanOustanding'+i).innerHTML;
        		document.getElementById('intrestPortion').innerHTML=document.getElementById('txtRowintrestPortion' + i).innerHTML;
        		document.getElementById('principalPortion').innerHTML=document.getElementById('txtRowprincipalPortion' + i).innerHTML;
        		document.getElementById('installmentNumber').innerHTML=document.getElementById('txtRowInstallmentNo' + i).innerHTML;
        		document.getElementById('installmentDate').innerHTML=document.getElementById('txtRowInstallmentDate' + i).innerHTML;
        					    	
        	}
		}
	
	}
	
}
/************* Calculate Break Up And LoanAmt Outstanding calculator End ********************/

/************* Calculate Actal Cost of 0% Loan Start ********************/
var actualCost=new Object();
actualCost['valueOfProduct']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Value of Product', param:{min:1,max:999999999}};
actualCost['totalNoEmis']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Total Number of EMIs', param:{min:1,max:360}};
actualCost['foregone']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Amount of Cash Discount Foregone', param:{min:1,max:999999999}};
actualCost['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
fieldMap['actualCost']=actualCost;

function validateActualCostCalculator()
{
	var errorStatus=validation(document.actualCost);
	if(errorStatus)
	{
		var result=calculateActualCost(document.actualCost);
		
	}	
}

function calculateActualCost(formObj){
	var valueOfProduct,interestRate,totalNoEmis,totalNoAdvancedEmis,foregone,feesTaken;
	valueOfProduct=formObj.valueOfProduct.value;
	interestRate=formObj.interestRate.value;
	totalNoEmis=formObj.totalNoEmis.value;
	totalNoAdvancedEmis=formObj.totalNoAdvancedEmis.value;
	foregone=formObj.foregone.value;
	feesTaken=formObj.feesTaken.value;
	if(valueOfProduct!="" && totalNoEmis!="" && interestRate!="" && interestRate!=0 && foregone!="" && parseInt(valueOfProduct)!=0 && parseInt(totalNoEmis)!=0 && parseInt(foregone)!=0)
	{
		if(feesTaken==""){
			feesTaken=0;
		}
		
		var R = valueOfProduct/totalNoEmis;
		R = roundDecimals(R, 0);
		var J = interestRate/12; //(monthly interest as percentage)
		var i = J/100;  //(monthly interest as fraction)
		var N = totalNoEmis - totalNoAdvancedEmis;
		temp = 1/(1+i);
		temp = Math.pow(temp,N);
		var S = (1-temp) * (R/i);
		S = roundDecimals(S, 0);
		temp = parseFloat(S) + parseFloat((totalNoAdvancedEmis*R)) + parseInt(foregone) + parseInt(feesTaken);
		actalCostZeroPercentEMI= temp - valueOfProduct;
		document.getElementById('output').innerHTML='Actual cost of Zero Percent EMI :'+getFormattedNumber(actalCostZeroPercentEMI);
	//	alert('Actual cost of Zero Percent EMI::'+actalCostZeroPercentEMI);
	}
	
}
/************* Calculate Actal Cost of 0% Loan End ********************/

/************* Calculate Simple Home Loan Eligibility Calculator Start ********************/
var formSimpleHomeEli=new Object();
formSimpleHomeEli['monthlyIncome']={valid:true, validateFunction:[digitValidation], label:'Monthly Income'};
formSimpleHomeEli['duration']={blank:true,valid:true, validateFunction:[selectValidation], label:'Duration', param:{min:1,max:360}};
formSimpleHomeEli['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
fieldMap['formSimpleHomeEli']=formSimpleHomeEli;	

function validateSimpleHomeEligCalculator()
{
	var errorStatus=validation(document.formSimpleHomeEli);
	if(errorStatus)
	{
		var result=calculateSimpleHomeElig(document.formSimpleHomeEli);
		
	}	
}

function calculateSimpleHomeElig(formObj){
	var monthlyIncome,duration,interestRate;
	monthlyIncome=formObj.monthlyIncome.value;
	interestRate=formObj.interestRate.value;
	duration=formObj.duration.value;
	if(monthlyIncome!="" && parseInt(monthlyIncome)!=0 && duration!="" && interestRate!="" && parseFloat(interestRate)!=0)
	{
		if(monthlyIncome==""){
			monthlyIncome=0;
		}
		
		duration=duration*12;
		var interestRateForMonth = interestRate/100; // (Monthly Rate of Interest in %)
		var interestRateForMonthFraction = interestRateForMonth/12; // (Monthly Interest Rate expressed as a fraction)
		var emi =1/Math.pow((1+interestRateForMonthFraction),duration);
		var emiPerLakh = (100000*interestRateForMonthFraction)/(1 - emi) // (EMI per lakh borrowed)
		emiPerLakh = roundDecimals(emiPerLakh, 2);
		range1 = (monthlyIncome * 35/100)/emiPerLakh
		range2 = (monthlyIncome * 50/100)/emiPerLakh
		range1 = roundDecimals(range1, 0);
		range2 = roundDecimals(range2, 0);
		document.getElementById('output').style.display="block";
		document.getElementById('output').innerHTML="Loan range : "+getFormattedNumber(range1)+" Lakhs  to "+getFormattedNumber(range2)+" Lakhs";
	}
	
}
/************* Calculate Simple Home Loan Eligibility Calculator End ********************/

/************* Calculate Advanced Home Loan Eligibility Calculator Start ********************/
var formAdvancedHomeEli=new Object();
formAdvancedHomeEli['averageIncome']={valid:true, validateFunction:[digitValidation], label:'Average Income from Business / Profession over last three years'};
formAdvancedHomeEli['averageDepreciation']={valid:true, validateFunction:[digitValidation], label:'Average Depreciation claimed over last three years'};
formAdvancedHomeEli['otherTaxable']={valid:true, validateFunction:[digitValidation], label:'Other Taxable income received regularly'};
formAdvancedHomeEli['otherExempt']={valid:true, validateFunction:[digitValidation], label:'Other Exempt income received regularly'};

formAdvancedHomeEli['duration']={blank:true,valid:true, validateFunction:[selectValidation], label:'Duration', param:{min:1,max:360}};
formAdvancedHomeEli['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Rate of Interest applicable on your loan',param:{min:1,max:99}};
fieldMap['formAdvancedHomeEli']=formAdvancedHomeEli;	

function validateAdvancedHomeEligCalculator()
{
	var errorStatus=validation(document.formAdvancedHomeEli);
	if(errorStatus)
	{
		var result=calculateAdvancedHomeElig(document.formAdvancedHomeEli);
		
	}	
}


function calculateAdvancedHomeElig(formObj){
	var monthlyIncome,duration,interestRate;
	averageIncome=formObj.averageIncome.value;
	averageDepreciation=formObj.averageDepreciation.value;
	otherTaxable=formObj.otherTaxable.value;
	otherExempt=formObj.otherExempt.value;
	interestRate=formObj.interestRate.value;
	duration=formObj.duration.value;
	
	if(duration!="" && interestRate!="" && parseFloat(interestRate)!=0)
	{
		if(averageIncome==""){
			averageIncome=0;
		}
		if(averageDepreciation==""){
			averageDepreciation=0;
		}
		if(otherTaxable==""){
			otherTaxable=0;
		}
		if(otherExempt==""){
			otherExempt=0;
		}
		
		monthlyIncome=parseInt(averageIncome)+parseInt(averageDepreciation)+parseInt(otherTaxable)+parseInt(otherExempt);
		duration=duration*12;
		var interestRateForMonth = interestRate/100; // (Monthly Rate of Interest in %)
		var interestRateForMonthFraction = interestRateForMonth/12; // (Monthly Interest Rate expressed as a fraction)
		var emi =1/Math.pow((1+interestRateForMonthFraction),duration);
		var emiPerLakh = (100000*interestRateForMonthFraction)/(1 - emi) // (EMI per lakh borrowed)
		emiPerLakh = roundDecimals(emiPerLakh, 0);
		
		range1 = monthlyIncome * 0.35/12;
		range2 = monthlyIncome * 0.50/12;
		range1 = roundDecimals(range1, 0);
		range2 = roundDecimals(range2, 0);
		
		minLoan = roundDecimals((range1/emiPerLakh*100),0)*1000;
		maxLoan = roundDecimals((range2/emiPerLakh*100),0)*1000;
		
		document.getElementById('output').style.display="block";
		document.getElementById('output').innerHTML="Minimum Amount of Loan : "+getFormattedNumber(minLoan)+" to Maximum Amount of Loan "+getFormattedNumber(maxLoan);
	}
	
}
/************* Calculate Advanced Home Loan Eligibility Calculator End ********************/
/************* Flat Rate to Effective Rate Calculator Start ********************/
var formFlatrateToEffective=new Object();
formFlatrateToEffective['loanAmt']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Amount of Loan you want', param:{min:1,max:999999999}};
formFlatrateToEffective['tenure']={blank:true,valid:true, validateFunction:[rangeValidation], label:'Loan Term in years', param:{min:1,max:30}};
formFlatrateToEffective['interestRate']={blank:true,valid:true, validateFunction:[interestRateValidation], label:'Annual Flat Rate',param:{min:1,max:99}};
fieldMap['formFlatrateToEffective']=formFlatrateToEffective;	

function validateFlatrateToEffectiveCalculator()
{
	var errorStatus=validation(document.formFlatrateToEffective);
	if(errorStatus)
	{
		var result=calculateFlatrateToEffective(document.formFlatrateToEffective);
		
	}	
}

function calculateFlatrateToEffective(formObj){
	var loanAmt,interestRate,tenure;
	loanAmt=formObj.loanAmt.value;
	tenure=formObj.tenure.value;
	interestRate=formObj.interestRate.value;
	advancedEmi=formObj.advancedEmi.value;
	if(loanAmt!="" && parseInt(loanAmt)!=0 && tenure!="" && parseInt(tenure)!=0 && interestRate!="")
	{
		var N = (tenure * 12) - advancedEmi;
		var TI = (loanAmt * tenure * interestRate)/100;
		TI = roundDecimals(TI,0);
		var EMI = (parseInt(TI) + parseInt(loanAmt))/(tenure * 12);
		EMI = roundDecimals(EMI,0);
		var S = loanAmt - (advancedEmi * EMI);
		S = roundDecimals(S,0);
		var APPROX = 0.001;
		var DIFF = 1.0000;
		var count=0;
		while(DIFF > 0.0005)
		{
			if(count>10000){
				break;
			}
			APPROX = APPROX + 0.0001;
			KL = Math.pow((1 + APPROX),N);
			KR = EMI / (EMI - (S*APPROX));
			if(KL > KR){
				DIFF = (KL - KR);
			}else{
				DIFF = (KR - KL);
			}
			count++;
		}
		
		i = APPROX;
		effectiveInterestRate = i * 12 * 100; 
		document.getElementById('totInterestAmt').innerHTML ="Total Interest Amount:"+ getFormattedNumber(TI); 
		document.getElementById('effInterestRate').innerHTML ="Effective Interest Rate: "+ roundDecimals(effectiveInterestRate,2)+"%";
		document.getElementById('remEmis').innerHTML ="Remaining EMIs: "+ getFormattedNumber(EMI);
	}
		
}

/************* Flat Rate to Effective Rate Calculator End ********************/

/************** Check on Keypress only Numbers enters Start**********************/
function isNumberKey(evt,element,mode)
{
	  
	if(mode==1)
	{
		 var val = element.value;
		 var result = val.indexOf('.');
		 if(result==-1){
		 	tstflag=0;
		 }
	 }
	 //var charCode = (evt.which) ? evt.which : event.keyCode;
	 
	 var oEvent = (window.event) ? window.event : evt;
     //  mozilla workthrough
     var charCode = oEvent.keyCode ? oEvent.keyCode : oEvent.which ? oEvent.which : void 0;
	 if ((charCode > 31) && (charCode < 48 || charCode > 57)){
        if(mode==1){
		 	if(charCode==46 && tstflag==0)
            {
            	tstflag=1;
         		return true;
         	}else{
               	return false;
            }
        }else{
        	return false;
        }
     }else{
           return true;
     }
    
}




function roundDecimals(original_number, decimals) {

 var result1 = original_number * Math.pow(10, decimals)

 var result2 = Math.round(result1)

 var result3 = result2 / Math.pow(10, decimals)

 return (result3)

}


function getErrorDiv()
{
	backgroundDiv= document.getElementById("backgroundDiv");
	messageDiv = document.getElementById("messageDiv");
}


/******************* Range Validation Start***************/
function rangeValidation(param,element,lable)
{
	
	var regex = /^\d*(\.\d{1,2})?$/;
 
	if(!regex.test(element.value))
	{
		errorString+="Please enter the " +lable+" without commas in 999999 format";
		return false;
	}
	if(element.value <param.min || element.value >param.max){
		errorString+="Please enter the " +lable+" without commas in 999999 format, between range "+param.min+" and "+param.max;
		return false;
	}
	
	return true;
	
	
}
/******************* Range Validation End***************/



/******************* Interest Rate Validation Start***************/
function interestRateValidation(param,element,lable)
{
	
	var regex =  /^\d*(\.\d{1,2})?$/;
	if(!regex.test(element.value))
	{
		errorString+="Please enter the applicable Annual Interest Rate as a percentage";
		return false;
	}
	if(element.value <param.min || element.value >param.max){
		errorString+="Please enter the applicable Annual Interest Rate as a percentage";
		return false;
	}
	
	return true;
	
}
/******************* Interest Rate Validation End***************/



/******************* Select Options Validation Start ************/
function selectValidation(param,element,lable)
{
	
	if(element.value =="0"){
		errorString+=" Please specify the " +lable;
		return false;
	}
	
	return true;
}
/******************* Select Options Validation End *************/


/******************* Check Array Of Validation Function Start***************/
function checkValidationArray(validateFunctionArray,element,param,lable)
{
	
	for(var i=0;i<validateFunctionArray.length;i++)
	{
		if(!validateFunctionArray[i](param,element,lable))
		{
			return false;
		}
	}
	return true;
}
/******************* Check Array Of Validation Function End***************/


//this will hold the all properties of every form element in the web
var fieldMap = new Object();


//error division set
var  backgroundDiv, messageDiv;

var errorElements=new Object();

//characters to check
var validChars = "!@#%^&*()+=-[]\\\;./{}|\":<>?0123456789";
var specialCharacterSet1 = "#%^*=[]\\\;{}|\<>";
var specialCharacterSet2 = "!@#%^&*()+=-[]\\\;./{}|\":<>?0123456789";
var validPhoneCharsSet = "0123456789-+[] ";


//will hold the messages for blank valid maxchars etc
var errorMessages=new Object();
	errorMessages["blank"] = "Please enter ";
	errorMessages["common"]="";
var errorString="";

/********************** Validation Of Form Elements Start ************************/
function validation(formObject)
{
	errorString="";
	//Get the mapField for the supplied form
	var mapedField = fieldMap[formObject.name];
	
	//As we have to display all the error at time, once there is error at any element this get set to true
	var noError = true;
	
	//Get Error Division, so that we can play with its properties and style
	getErrorDiv();
	
	//Loop through form elements and do testing
	for(var i=0;i<formObject.elements.length;i++)
	{

		if(formObject.elements[i].name != undefined)
		{
			
			var fieldObj =formObject.elements[i];
			
			//Check wheather the element is defined for test, check does it has blank property
			if( mapedField[fieldObj.name] != undefined && fieldObj.disabled==false && mapedField[fieldObj.name]["blank"] != undefined  && mapedField[fieldObj.name].blank && fieldObj.value == "")
			{
				errorString+=errorMessages["blank"]+mapedField[fieldObj.name]["label"]+"\n";
				noError = false;
			}
			
			//check does it has valid property then use validateFunction
			if( mapedField[fieldObj.name] != undefined && fieldObj.disabled==false && mapedField[fieldObj.name]["valid"] != undefined  && fieldObj.value != "" && typeof(mapedField[fieldObj.name].validateFunction)=="function" && !mapedField[fieldObj.name].validateFunction(fieldObj))
			{
				if(mapedField[fieldObj.name].errmessage != undefined)
					errorString+=mapedField[fieldObj.name].errmessage+"\n";
				else
					errorString+=errorMessages["common"]+ mapedField[fieldObj.name].label+"\n";
								
				noError=false;
				
			}
			
			//check does it has valid property then use validateFunction
			if( mapedField[fieldObj.name] != undefined && fieldObj.disabled==false && mapedField[fieldObj.name]["valid"] != undefined  && fieldObj.value != "" && typeof(mapedField[fieldObj.name].validateFunction)=="object" && !checkValidationArray(mapedField[fieldObj.name].validateFunction,fieldObj,mapedField[fieldObj.name].param,mapedField[fieldObj.name].label))
			{
				if(mapedField[fieldObj.name].errmessage != undefined ){
					errorString+=mapedField[fieldObj.name].errmessage+"\n";
				}
				else{
					errorString+=errorMessages["common"]+"\n";	
				}
			
				noError=false;
			}
			
		}
	}
	if(!noError)
	{
		alert(errorString);  // Display Javascript Messages.
	}
	return noError;	
}
/********************** Validation Of Form Elements End ************************/

