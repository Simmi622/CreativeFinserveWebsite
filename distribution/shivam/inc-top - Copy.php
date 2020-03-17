<script type="text/javascript">

var make_button_active = function()
{
  //Get item siblings
  var siblings =($(this).siblings());

  //Remove active class on all buttons
  siblings.each(function (index)
    {
      $(this).removeClass('active');
    }
  )


  //Add the clicked button class
  $(this).addClass('active');
}

//Attach events to menu
$(document).ready(
  function()
  {
    $(".menu li").click(make_button_active);
  }  
)

</script>

<!--<script type="text/javascript">
document.oncopy = function(){
    var bodyEl = document.body;
    var selection = window.getSelection();
    selection.selectAllChildren( document.createElement( 'div' ) );
};
</script>-->

<!--<script type="text/JavaScript">

function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>-->

<!--<script type="text/javascript">
function PopIt() { return "Thanks for visiting Creative Finserve Private Limited"; }
function UnPopIt()  { /* nothing to return */ }

$(document).ready(function() {
    window.onbeforeunload = PopIt;
    $("a").click(function(){ window.onbeforeunload = UnPopIt; });
});
</script>-->


<div id="trueHeader">
    
    <div class="top_border">
    <div id="navcontainer" class="container">
		<style type="text/css">
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		  
		}  
		#boxes .window {
		  position:absolute;
		  left:0;
		  top:0;
		  width:500px;
		  height:330px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 2px solid #333333;
		  -webkit-box-shadow: 0px 0px 25px 3px rgba(0,0,0,0.35);
			-moz-box-shadow: 0px 0px 25px 3px rgba(0,0,0,0.35);
			box-shadow: 0px 0px 25px 3px rgba(0,0,0,0.35);
		 /* -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;*/
		}
		#boxes #dialog {
		  width:40%;
		  height: auto;
		  padding:0px;
		  background-color: #FFFFFF;
		}
		.image_popup {
			width:98%;
			top:-300px;
		}
		</style>


    <ul class="list">
                <li><a href="index.php"><i class="fa fa-chevron-circle-right"></i> Home</a></li>
                <li><a href="about-us.php"><i class="fa fa-chevron-circle-right"></i> About Us</a></li>
                <li><a href="articles.php"><i class="fa fa-chevron-circle-right"></i> Articles</a></li>
                <li><a href="reach-us.php"><i class="fa fa-chevron-circle-right"></i> Contact Us</a></li>
                <li><a href="join-us.php"><i class="fa fa-chevron-circle-right"></i> Join Us</a></li>
            </ul>
    
    </div>
    
    </div>
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="one_fourth"><a href="index.php" id="logo"></a></div>
		
        <!-- Menu -->
        <div class="three_fourth last">
           
           <nav id="access" class="access" role="navigation">
           
            <div id="menu" class="menu">
                
                <ul id="tiny">
                
                    <li><a href="personal-loan.php">Personal<br>loan</a>
						<ul style="background-color:#000;">
                            <li><a href="personal-loan.php#offer">Best offer for the Month</a></li>
                            <li><a href="personal-loan.php#overview">Unsecured Personal loan Overview</a></li>
                            <li><a href="personal-loan.php#features">Unsecured Personal loan Features and Benefits</a></li>
                            <li><a href="personal-loan.php#process">Unsecured Personal loan Process</a></li>
                            <li><a href="personal-loan.php#Eligibility">Unsecured Personal loan Eligibility</a></li>
                            <!--<li><a href="personal-loan.php#emi">Unsecured Personal loan EMI</a></li>-->
                            <li><a href="personal-loan.php#document">Unsecured Personal loan Documents</a></li>
                            <li><a href="personal-loan.php#calculator"> Unsecured  Personal Loan Eligibility Calculator</a></li>
                            <li><a href="personal-loan.php#emicalculator"> Unsecured  Personal Loan EMI Calculator</a></li>
                            <li><a href="personal-loan.php#faq">Unsecured Personal loan FAQ's</a></li>
                        </ul>
					
					</li>  
                    <li><a href="business-loan.php" class="">Business<br>Loan</a>
						<ul>
                            <li><a href="business-loan.php#offer">Best offer for the Month</a></li>
                            <li><a href="business-loan.php#overview">Unsecured Business loan Overview</a></li>
                            <li><a href="business-loan.php#features">Unsecured Business loan Features and Benefits</a></li>
                            <li><a href="business-loan.php#process">Unsecured Business loan Process</a></li>
                            <li><a href="business-loan.php#Eligibility">Unsecured Business loan Eligibility</a></li>
                            <!--<li><a href="business-loan.php#emi">Unsecured Business loan EMI</a></li>-->
                             <li><a href="business-loan.php#document">Unsecured Business loan Documents</a></li>
                            <!--<li><a href="business-loan.php#calculator"> Unsecured  Business Loan Eligibility Calculator</a></li>-->
                            <li><a href="business-loan.php#emicalculator"> Unsecured  Business Loan EMI Calculator</a></li>
                            <li><a href="business-loan.php#faq">Unsecured Business loan FAQ's</a></li>
                        </ul>
					</li>  
                    <li id="home"><a href="home-loan.php" class="">Home<br>Loan</a>
						<ul>
                            <li><a href="home-loan.php#offer">Best offer for the Month</a></li>
                            <li><a href="home-loan.php#overview">Home Loan Overview</a></li>
                            <!--<li><a href="home-loan.php#transfer">Balance Transfer & Top up</a></li>
                            <li><a href="home-loan.php#benefits">Home loan Balance transfer + top up features & benefits</a></li>-->
                            <li><a href="home-loan.php#loan">Smart Home loan</a></li>
                            <li><a href="home-loan.php#features">Home Loan Features and Benefits</a></li>
                            <li><a href="home-loan.php#process">Home Loan Process </a></li>
                            <li><a href="home-loan.php#Eligibility">Home Loan Eligibility</a></li>
                            <!--<li><a href="home-loan.php#emi">Home Loan EMI</a></li>-->
                            <li><a href="home-loan.php#document"> Home Loan Documents</a></li>
                            <li><a href="home-loan.php#calculator"> Home Loan Eligibility Calculator</a></li>
                            <li><a href="home-loan.php#emicalculator"> Home Loan EMI Calculator</a></li>
                            <li><a href="home-loan.php#faq"> Home Loan FAQ's</a></li>
                        </ul>
					</li>  
                    <li><a href="loan-against-property.php" class="">LAP<br>(Term Loan)</a>
                        <ul>
                            <li><a href="loan-against-property.php#offer">Best offer for the Month</a></li>
                            <li><a href="loan-against-property.php#overview">Loan Against Property Overview</a></li>
                            <!--<li><a href="loan-against-property.php#transfer">Balance Transfer & Top Up</a></li>
                            <li><a href="loan-against-property.php#benefits">Loan against property Balance transfer + top up features & benefits</a></li>-->
                            <li><a href="loan-against-property.php#features">Loan Against Property Features and Benefits</a></li>
                            <li><a href="loan-against-property.php#process">Loan Against Property Process</a></li>
                            <li><a href="loan-against-property.php#Eligibility">Loan Against Property Eligibility</a></li>
                            <!--<li><a href="loan-against-property.php#emi">Loan Against Property EMI</a></li>-->
                            <li><a href="loan-against-property.php#document">Loan Against Property Documents</a></li>
                            <li><a href="loan-against-property.php#calculator"> Loan Against Property Eligibility Calculator</a></li>
                            <li><a href="loan-against-property.php#emicalculator"> Loan Against Property EMI Calculator</a></li>
                            <li><a href="loan-against-property.php#faq">Loan Against Property FAQ's</a></li>
                        </ul>
					</li>  
                    
                    <li><a href="#" class="">Balance <br>Transfer</a>
                        <ul>
                            <li><a href="balance-transfer-of-home-loan.php">Balance Transfer of Home Loan</a></li>
                            <li><a href="balance-transfer-of-loan-against-property.php">Balance Transfer of Loan against Property</a></li>
                            <li><a href="balance-transfer-of-business-loan.php">Balance Transfer of Business Loan</a></li>
                            <li><a href="balance-transfer-of-personal-loan.php">Balance Transfer of Personal Loan</a></li>
                            <li><a href="balance-transfer-of-professional-loan.php">Balance Transfer of Professional Loan</a></li>
                        </ul>
					</li>
                    
                    <li><a href="car-refinance.php" class="">Car<br>Refinance</a>
                        <ul>
                            <li><a href="car-refinance.php#overview">Car Refinance Overview</a></li>
                            <li><a href="car-refinance.php#features">Car Refinance Features and Benefits</a></li>
                            <li><a href="car-refinance.php#process">Car Refinance Process</a></li>
                            <li><a href="car-refinance.php#Eligibility">Car Refinance Eligibility</a></li>
                            <!--<li><a href="car-refinance.php#emi">Car Refinance EMI</a></li>-->
                            <li><a href="car-refinance.php#document">Car Refinance Documents</a></li>
                            <li><a href="car-refinance.php#emicalculator"> Car Refinance EMI Calculator</a></li>
                            <li><a href="car-refinance.php#faq">Car Refinance FAQ's</a></li>
                        </ul>
					</li>  
                    <li><a href="construction-finance.php" class="">Construction<br>finance</a>
                        <ul>
						  <li><a href="construction-finance.php#overview">Construction Finance Overview</a></li>
						  <li><a href="construction-finance.php#features">Construction Finance Features and Benefits</a></li>
						  <li><a href="construction-finance.php#process">Construction Finance Process</a></li>
						  <li><a href="construction-finance.php#Eligibility">Construction Finance Eligibility</a></li>
                          <li><a href="construction-finance.php#documents">Construction Finance Documents</a></li>
						  <li><a href="construction-finance.php#faq">Construction Finance FAQ's</a></li>
						  
                        </ul>
					</li> 
                    
                    <li><a href="#" class="">Other<br>Loan's</a>
                        <ul>
                            <li><a href="smart-home-loan.php">Smart Home Loan</a></li>
                            <li><a href="debt-consolidation.php">Debt consolidation</a></li>
                            <li><a href="dropline-overdraft.php">Dropline Overdraft</a></li>
                            <li><a href="commercial-property-purchase-loan.php">Commercial Property Purchase Loan</a></li>
                            <li><a href="professional-loan.php">Professional Loan</a></li>
                            <li><a href="lease-rental-discount.php">Lease Rental Discount</a></li>
                            <li><a href="equipment-machine-loan.php">Equipment / Machine Loan</a></li>
                            <li><a href="credit-card-receivable.php">Credit Card Receivable</a></li>                            
                            <li><a href="#">NRI</a>
                              <ul>
                               <li><a href="nri-personal-loan.php">NRI Personal Loan</a></li>
                               <li><a href="nri-home-loan.php">NRI Home Loan</a></li>
                              </ul>
                            </li>                            
                            <li><a href="over-draft.php">Over Draft</a></li>
                            <li><a href="cash-credit.php">Cash Credit</a></li>
                            <li><a href="credit-card.php">Credit Card</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#" class="">Loan<br>Calculator's</a>
                        <ul>
                            <li><a href="emi-calculator.php">Emi Calculator</a></li>
                            <li><a href="extra-repayment-calculator.php">Extra Repayment Calculator</a></li>
                            <li><a href="home-loan-eligibility-calculator.php">Home Loan Eligibility Calculator</a></li>
                            <li><a href="personal-loan-eligibility-calculator.php">Personal loan Eligibility Calculator</a></li>
                           <li><a href="loan-against-property-eligibility-calculator.php">Loan Against Property Eligibility Calculator</a></li>
                            <li><a href="borrowing-power-calculator.php">Borrowing Power Calculator</a></li>
                            <li><a href="loan-comparison-calculator.php">Loan Comparison Calculator</a></li>
                            <li><a href="loan-repayments-calculator.php">Loan Repayments Calculator</a></li>
                        </ul>
                    </li>  
                </ul>
            </div>
            
        </nav><!-- end nav menu -->
      
        </div>
        
        
		</div>
		
	</div>
    
	</div>
    <div id="download-section1">
			<a href="downloads.php"></a>
		</div>
<?php 
	if(!isset($_SESSION['jquery_popup']))  { 
	$_SESSION['jquery_popup'] = 1;
	?>
	<script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<div id="boxes">
	<div style="top:150px; left: 100px; display: none;" id="dialog" class="window">
	<div align="right" style="font-weight:bold; margin:5px 3px 0 0;"><a href="javascript:void()" class="close"><img src="<?php echo $pre_url ?>/images/close.png" width="16" style="border:none; cursor:pointer;" /></a></div>
	
	<div align="center" style="margin:5px 0 5px 0;">
	  <a href="reach-us.php"><img src="<?php echo $pre_url ?>/images/popup.jpg" class="image_popup"></a></div>
	
	</div>
	
	<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
	<?php }
	//if((isset($_SESSION['jquery_popup'])))  { unset($_SESSION['jquery_popup']); } //uncomment for testing
	?>
