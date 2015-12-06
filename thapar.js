$(document).ready(function(e) {
    $("#h11").mouseover(function(e) {
        $("#h11").fadeOut(3000);
    });
	$("#h11").mouseleave(function(e) {
        $("#h11").fadeIn(3000);
    });
	$("#href1").click(function(e) {
        $("#edit").show();
		$("#acad").hide();
		 $("#srs").hide();
		 $("#exam").hide();
		 $("#srshr").hide();
		  $("#sub").hide();
		   $("#fees").hide();
		 
    });
	$("#attendencehr").click(function(e) {
        $("#attendence").show();
    });
	$("#srshr").click(function(e) {
        $("#srs").show();
		$("#acad").hide();
		$("#exam").hide();
		 $("#edit").hide();
		  $("#sub").hide();
    });
	$("#acadhr").click(function(e) {
        $("#acad").show();
		 $("#srs").hide();
		 $("#exam").hide();
		 $("#edit").hide();
		  $("#sub").hide();
    });
	$("#examhr").click(function(e) {
        $("#acad").hide();
		 $("#srs").hide();
		 $("#exam").show();
		 $("#edit").hide();
		  $("#sub").hide();
    });
		
   
	$("#subhr").click(function(e) {
        $("#sub").show();
    });
		$("#but1").click(function(e) {
        $("#sel").show();
		});
		$("#markshr").click(function(e) {
        $("#acad").hide();
		$("#srs").hide();
		$("#edit").hide();
		 $("#sub").hide();
		 $("#marks").show();
		 $("#fee").hide();
    	});
		 
    });
	

function ahr()
{
	window.alert("Please contact CITM department\n for more details.");
}
function showValue(newValue)    {
    document.getElementById("range").innerHTML=newValue;    }
	
	function showValue2(newValue)    {
    document.getElementById("range2").innerHTML=newValue;    }