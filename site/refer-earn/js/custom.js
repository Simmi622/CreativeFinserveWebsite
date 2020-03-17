"use strict";
function validEmail(mail){

    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    return re.test(mail);


}
function send_mail(){
	 var fname='', mail='', country='',zip='';
	 
	  fname=$('#fname').val();
	  mail=$('#uemail').val();
	  country =$('#ucountry').val(); 
	  zip =$('#uzip').val();
	 
	 if((fname=='')) 		 $('#form-errors').text('Sorry, first name is required !');
	 else if(mail=='')		 $('#form-errors').text('Sorry, email required !');
	 else if(!(validEmail(mail)))	 $('#form-errors').text('Sorry, Please provide a valid email !');	
	 else if(country=='') 		 $('#form-errors').text('Sorry, country field is required !');
	 else if(zip=='') 		 $('#form-errors').text('Sorry, zipcode is required !');
	
	 else{
		 
		  $.ajax({
			url:'ajaxmail.php',
			type:'POST',
			data:{ 'fname':fname,
				   'uemail':mail,
				   'ucountry':country,
				   'uzip':zip,
				  },
			dataType:'json',
			success:function(response){ 
						if(response.success){ 
							$('#form-errors').text('');
							$('#form-success').text('Your request is received, Thank You !'); 
							$('#fname').val('');
							$('#uemail').val('');
							$('#ucountry').val('');
							$('#uzip').val(''); 
							}
						else{ $('#form-errors').text('Request failed.Please retry with all the required details !'); } 
					},
			error:function(){ }
		 });
		 
		 }
	  
	 }
 $(function() {
$('.scrollto, .gototop').on('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
});
