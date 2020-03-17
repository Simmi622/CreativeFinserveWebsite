$(document).ready(function(){
 
  $("input[name$='group_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salaried").show("");
     $("#self").hide("");
  }
  else if(radio_value=='Self') {
    $("#self").show("");
    $("#salaried").hide("");
  }
  });
 
  $("#salaried").show();
  $("#self").hide();
 
 
 
  $("input[name$='coapplicant_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Coaapsalaried') {
    $("#coaapsal").show("");
     $("#coaapself").hide("");
  }
  else if(radio_value=='Coaapself') {
    $("#coaapself").show("");
    $("#coaapsal").hide("");
  }
  });
 
  $("#coaapsal").show();
  $("#coaapself").hide();



  $("input[name$='home_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedhome").show("");
     $("#selfhome").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfhome").show("");
    $("#salariedhome").hide("");
  }
  });
 
  $("#salariedhome").show();
  $("#selfhome").hide();



  $("input[name$='lap_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedlap").show("");
     $("#selflap").hide("");
  }
  else if(radio_value=='Self') {
    $("#selflap").show("");
    $("#salariedlap").hide("");
  }
  });
 
  $("#salariedlap").show();
  $("#selflap").hide();


 
  $("input[name$='spolapgroup_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='SpolapSalaried') {
    $("#spolapsalaried").show("");
     $("#spolapself").hide("");
  }
  else if(radio_value=='SpolapSelf') {
    $("#spolapself").show("");
    $("#spolapsalaried").hide("");
  }
  });
 
  $("#spolapsalaried").show();
  $("#spolapself").hide();



  $("input[name$='car_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedcar").show("");
     $("#selfcar").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfcar").show("");
    $("#salariedcar").hide("");
  }
  });
 
  $("#salariedcar").show();
  $("#selfcar").hide();




  $("input[name$='bthl_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedbthl").show("");
     $("#selfbthl").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfbthl").show("");
    $("#salariedbthl").hide("");
  }
  });
 
  $("#salariedbthl").show();
  $("#selfbthl").hide();



  $("input[name$='blap_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedblap").show("");
     $("#selfblap").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfblap").show("");
    $("#salariedblap").hide("");
  }
  });
 
  $("#salariedblap").show();
  $("#selfblap").hide();



  $("input[name$='debt_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salarieddeb").show("");
     $("#selfdeb").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfdeb").show("");
    $("#salarieddeb").hide("");
  }
  });
 
  $("#salarieddeb").show();
  $("#selfdeb").hide();



  $("input[name$='spodebgroup_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='SpodebSalaried') {
    $("#spodebsalaried").show("");
     $("#spodebself").hide("");
  }
  else if(radio_value=='SpodebSelf') {
    $("#spodebself").show("");
    $("#spodebsalaried").hide("");
  }
  });
 
  $("#spodebsalaried").show();
  $("#spodebself").hide();



  $("input[name$='spobthl_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Spobthlsalaried') {
    $("#spobthlsal").show("");
     $("#spobthlself").hide("");
  }
  else if(radio_value=='Spobthlself') {
    $("#spobthlself").show("");
    $("#spobthlsal").hide("");
  }
  });
 
  $("#spobthlsal").show();
  $("#spobthlself").hide();



  $("input[name$='spobtlap_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Spobtlapsalaried') {
    $("#spobtlapsal").show("");
     $("#spobtlapself").hide("");
  }
  else if(radio_value=='Spobtlapself') {
    $("#spobtlapself").show("");
    $("#spobtlapsal").hide("");
  }
  });
 
  $("#spobtlapsal").show();
  $("#spobtlapself").hide();






  $("input[name$='prof_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedpof").show("");
     $("#selfpof").hide("");
  }
  else if(radio_value=='Self') {
    $("#selfpof").show("");
    $("#salariedpof").hide("");
  }
  });
 
  $("#salariedpof").show();
  $("#selfpof").hide();



  $("input[name$='group_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedcash").show("");
     $("#selfcash").hide("");
	 $("#individual").hide("");
  }
  if(radio_value=='Self') {
    $("#selfcash").show("");
    $("#salariedcash").hide("");
     $("#individual").hide("");
  }
  else if(radio_value=='Individual') {
   $("#individual").show("");
    $("#salariedcash").hide("");
	$("#selfcash").hide("");
   }
  });
 
  $("#salariedcash").show();
  $("#selfcash").hide();
  $("#individual").hide();



  $("input[name$='group_name']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Salaried') {
    $("#salariedod").show("");
     $("#selfod").hide("");
	 $("#individual").hide("");
  }
  if(radio_value=='Self') {
    $("#selfod").show("");
    $("#salariedod").hide("");
     $("#individual").hide("");
  }
  else if(radio_value=='Individual') {
   $("#individual").show("");
    $("#salariedod").hide("");
	$("#selfod").hide("");
   }
  });
 
  $("#salariedod").show();
  $("#selfod").hide();
  $("#individual").hide();



$("input[name$='group_name2']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Send') {
    $("#send").hide("");
     $("#schedule").hide("");
  }
  else if(radio_value=='Schedule') {
   $("#send").hide("");
    $("#schedule").show("");
   }
  });
 
  $("#schedule").show();
  $("#send").hide();
  

$("input[name$='location_address']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Address') {
    $("#address").show("");
     $("#location").hide("");
  }
  else if(radio_value=='Location') {
   $("#address").hide("");
    $("#location").show("");
   }
  });
 
  $("#address").show();
  $("#location").hide();


$("input[name$='reschedule_meeting']").click(function(){
  var radio_value = $(this).val();
 
  if(radio_value=='Reschedule') {
    $("#reschedule").show("");
     $("#schedule").hide("");
  }
  else if(radio_value=='Schedule') {
   $("#reschedule").hide("");
    $("#schedule").show("");
   }
  });
 
  $("#schedule").show();
  $("#reschedule").hide();

});