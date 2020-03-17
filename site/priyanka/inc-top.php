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
<div id="trueHeader">
    
    <div class="top_border">
    <div id="navcontainer" class="container">
        <!--<div class="marquee" id="mycrawler" style="width:70%; float:left; font-size:12px; color:#04beb5;">
 			Those confounded friars dully buzz that faltering jay. An appraising tongue acutely causes our courageous hogs. Their fitting submarines deftly break your approving improvisations. Her downcast taxonomies actually box up those disgusted turtles.
        </div>-->
<!--<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler',
	style: {
		'padding': '2px',
		'width': '2000px',
		'background': '',
		'border': ''
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	persist: true,
	savedirection: true
});
</script> -->  


    <ul class="list">
                <li><a href="index.php"><i class="fa fa-chevron-circle-right"></i> Home</a></li>
                <li><a href="about-us.php"><i class="fa fa-chevron-circle-right"></i> About Us</a></li>
                <li><a href="contact-us.php"><i class="fa fa-chevron-circle-right"></i> Contact Us</a></li>
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
                            <li><a href="personal-loan.php#overview">Unsecured Personal loan Overview</a></li>
                            <li><a href="personal-loan.php#features">Unsecured Personal loan Features and Benefits</a></li>
                            <li><a href="personal-loan.php#process">Unsecured Personal loan Process</a></li>
                            <li><a href="personal-loan.php#Eligibility">Unsecured Personal loan Eligibility</a></li>
                            <!--<li><a href="personal-loan.php#emi">Unsecured Personal loan EMI</a></li>-->
                            <li><a href="personal-loan.php#faq">Unsecured Personal loan FAQ's</a></li>
                            <li><a href="personal-loan.php#document">Unsecured Personal loan Documents</a></li>
                            <!--<li><a href="business-loan.php#calculator">Unsecured Personal loan Calculator</a></li>-->
                        </ul>
					
					</li>  
                    <li><a href="business-loan.php" class="">Business<br>Loan</a>
						<ul>
                            <li><a href="business-loan.php#overview">Unsecured Business loan Overview</a></li>
                            <li><a href="business-loan.php#features">Unsecured Business loan Features and Benefits</a></li>
                            <li><a href="business-loan.php#process">Unsecured Business loan Process</a></li>
                            <li><a href="business-loan.php#Eligibility">Unsecured Business loan Eligibility</a></li>
                            <!--<li><a href="business-loan.php#emi">Unsecured Business loan EMI</a></li>-->
                            <li><a href="business-loan.php#faq">Unsecured Business loan FAQ's</a></li>
                            <li><a href="business-loan.php#document">Unsecured Business loan Documents</a></li>
                            <!--<li><a href="business-loan.php#calculator">Unsecured Business loan Calculator</a></li>-->
                        </ul>
					</li>  
                    <li id="home"><a href="home-loan.php" class="">Home<br>Loan</a>
						<ul>
                            <li><a href="home-loan.php#overview">Home Loan Overview</a></li>
                            <!--<li><a href="home-loan.php#transfer">Balance Transfer & Top up</a></li>
                            <li><a href="home-loan.php#benefits">Home loan Balance transfer + top up features & benefits</a></li>-->
                            <li><a href="home-loan.php#loan">Smart Home loan</a></li>
                            <li><a href="home-loan.php#features">Home Loan Features and Benefits</a></li>
                            <li><a href="home-loan.php#process">Home Loan Process </a></li>
                            <li><a href="home-loan.php#Eligibility">Home Loan Eligibility</a></li>
                            <!--<li><a href="home-loan.php#emi">Home Loan EMI</a></li>-->
                            <li><a href="home-loan.php#faq">Home Loan FAQ's</a></li>
                            <li><a href="home-loan.php#document">Home Loan Documents</a></li>
                            <li><a href="home-loan.php#calculator">Home Loan Calculator</a></li>
                        </ul>
					</li>  
                    <li><a href="loan-against-property.php" class="">LAP<br>(Term Loan)</a>
                        <ul>
                            <li><a href="loan-against-property.php#overview">Loan Against Property Overview</a></li>
                            <!--<li><a href="loan-against-property.php#transfer">Balance Transfer & Top Up</a></li>
                            <li><a href="loan-against-property.php#benefits">Loan against property Balance transfer + top up features & benefits</a></li>-->
                            <li><a href="loan-against-property.php#features">Loan Against Property Features and Benefits</a></li>
                            <li><a href="loan-against-property.php#process">Loan Against Property Process</a></li>
                            <li><a href="loan-against-property.php#Eligibility">Loan Against Property Eligibility</a></li>
                            <!--<li><a href="loan-against-property.php#emi">Loan Against Property EMI</a></li>-->
                            <li><a href="loan-against-property.php#faq">Loan Against Property FAQ's</a></li>
                            <li><a href="loan-against-property.php#document">Loan Against Property Documents</a></li>
                        </ul>
					</li>  
                    <li><a href="lease-rental-discount.php" class="">Lease Rental<br>Discount</a>
                        <ul>
                            <li><a href="lease-rental-discount.php#overview">LRD Overview</a></li>
                            <li><a href="lease-rental-discount.php#features">LRD Features and Benefits</a></li>
                            <li><a href="lease-rental-discount.php#process">LRD Process</a></li>
                            <li><a href="lease-rental-discount.php#Eligibility">LRD Eligibility</a></li>
                            <!--<li><a href="lease-rental-discount.php#emi">LRD EMI</a></li>-->
                            <li><a href="lease-rental-discount.php#faq">LRD FAQ's</a></li>
                            <li><a href="lease-rental-discount.php#document">LRD Documents</a></li>
                        </ul>
					</li>  
                    <li><a href="car-refinance.php" class="">Car<br>Refinance</a>
                        <ul>
                            <li><a href="car-refinance.php#overview">Car Refinance Overview</a></li>
                            <li><a href="car-refinance.php#features">Car Refinance Features and Benefits</a></li>
                            <li><a href="car-refinance.php#process">Car Refinance Process</a></li>
                            <li><a href="car-refinance.php#Eligibility">Car Refinance Eligibility</a></li>
                            <!--<li><a href="car-refinance.php#emi">Car Refinance EMI</a></li>-->
                            <li><a href="car-refinance.php#faq">Car Refinance FAQ's</a></li>
                            <li><a href="car-refinance.php#document">Car Refinance Documents</a></li>
                        </ul>
					</li>  
                    <li><a href="construction-finance.php" class="">Construction<br>finance</a>
                        <ul>
						  <li><a href="construction-finance.php#overview">Construction Finance Overview</a></li>
						  <li><a href="construction-finance.php#features">Construction Finance Features and Benefits</a></li>
						  <li><a href="construction-finance.php#process">Construction Finance Process</a></li>
						  <li><a href="construction-finance.php#Eligibility">Construction Finance Eligibility</a></li>
						  <li><a href="construction-finance.php#faq">Construction Finance FAQ's</a></li>
						  <li><a href="construction-finance.php#documents">Construction Finance Documents</a></li>
                        </ul>
					</li>  
                    <li><a href="#" class="">Loan<br>Calculator's</a>
                        <ul>
                            <li><a href="emi-calculator.php">Emi Calculator</a></li>
                            <li><a href="extra-repayment-calculator.php">Extra Repayment Calculator</a></li>
<!--                            <li><a href="home-loan-calculator.php">Home Loan Calculator</a></li>
                            <li><a href="personal-loan-calculator.php">Unsecured Personal loan Calculator</a></li>
                            <li><a href="business-loan-calculator.php">Unsecured Business loan Calculator</a></li>
-->                            <li><a href="loan-against-property-calculator.php">Loan Against Property Calculator</a></li>
                            <li><a href="borrowing-power-calculator.php">Borrowing Power Calculator</a></li>
                            <li><a href="loan-comparison-calculator.php">Loan Comparison Calculator</a></li>
                            <li><a href="loan-repayments-calculator.php">Loan Repayments Calculator</a></li>
                        </ul>
                    </li>  
                    <!--<li><a href="#"><i class="fa fa-pagelines"></i> Layouts</a>
                    
                    	<ul>
                            <li><a href="http://gsrthemes.com/qnima/layout1/fullwidth/index.html">Corporate</a></li>
                            <li><a href="http://gsrthemes.com/qnima/layout2/fullwidth/index.html">Business Classic</a></li>
                            <li><a href="http://gsrthemes.com/qnima/layout3/fullwidth/index.html">Creative</a></li>
                            <li><a href="http://gsrthemes.com/qnima/layout4/fullwidth/index.html">One Page</a></li>
                        </ul>
                    
                    </li>-->
                    
                    <!--<li><a href="#"><i class="fa fa-files-o"></i> About Us</a>
                    
                        <ul>
                            <li><a href="about.html">About Page Style 1</a></li>
                            <li><a href="about-2.html">About Page Style 2</a></li>
                            <li><a href="services.html">Services Style 1</a></li>
                            <li><a href="services-2.html">Services Style 2</a></li>
                            <li><a href="full-width.html">Full Width Page</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar Page</a></li>
                            <li><a href="right-sidebar.html">Right Sidebar Page</a></li>
                            <li><a href="left-nav.html">Left Navigation</a></li>
                            <li><a href="right-nav.html">Right Navigation</a></li>
                            <li><a href="404.html">404 Error Page</a></li>
                        </ul>
                        
                    </li>-->
                    
                    <!--<li><a href="#"><i class="fa fa-cog"></i> Services</a>
                    
                        <ul>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="columns.html">Page Columns</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faqs.html">FAQs</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="#">4 Diffrent Layouts</a></li>                         
                            <li><a href="#">Custom BGs &amp; Colors</a></li>
                            <li><a href="#">PSD Files Included</a></li>                             
                            <li><a href="#">Clean &amp; Valid Code</a></li>
                            <li><a href="#">Useful Typo Elements</a></li>
                            <li><a href="#">Cross Browser Check</a></li>   
                        </ul>
                        
                    </li>-->
  
                    <!--<li><a href="#"><i class="fa fa-picture-o"></i> Portfolio</a>
                    
                        <ul>
                            <li><a href="portfolio-one.html">Single Image</a></li>
                            <li><a href="portfolio-two.html">2 Columns</a></li>
                            <li><a href="portfolio-three.html">3 Columns</a></li>
                            <li><a href="portfolio-four.html">4 Columns</a></li>
                            <li><a href="portfolio-five.html">Portfolio + Sidebar</a></li>
                            <li><a href="portfolio-six.html">Portfolio Fancy</a></li>
                        </ul>
                    </li>-->
                    
                    <!--<li><a href="#"><i class="fa fa-comment"></i>EMI CALCULATOR</a>
                    
                        <ul>
                            <li><a href="blog.html">with Large Image</a></li>
                            <li><a href="blog-2.html">with Small Image</a></li>
                            <li><a href="blog-post.html">Single Post</a></li>
                        </ul>
                    </li>-->
                    
                    <!--<li class="last"><a href="contact.php"><i class="fa fa-phone"></i> Contact</a></li>-->
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
    
    <div id="feedback">
			<a href="extra-repayment-calculator.php"></a>
		</div>