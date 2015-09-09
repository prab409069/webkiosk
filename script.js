$(document).ready(function() {
    
	
	$("#time").click(function(){
		
	
	
	$("body").append('<div class="curtain"></div>');
	$("body").append('<div class="light"><br><font color="red" size="+2"><center><a href="timetable/ug-I.xls" download>UG-I</a><br><br><a href="timetable/ug-II.xls" download>UG-II</a><br><br><a href="timetable/ug-III.xls" download>UG-III</a><br><br><a href="timetable/ug-IV.xls" download>UG-IV</a></center></font></div>');
	
	$(".light").animate({"opacity":"1","top":"50","height":"300","width":"300"},1000);
	$(".light,.curtain").click(function(){
		
		
		$(".curtain").remove();
		$(".light").remove();
		
		
		});	


    


		
		
		
		
		});

	
	
	
});











