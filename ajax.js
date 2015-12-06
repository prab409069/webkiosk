function ajaxFunction1(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var name=document.getElementById("name").value;
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?name=" + name;
	ajaxRequest.open("GET", "search1.php" + queryString, true);
	ajaxRequest.send(); 
}
function ajaxFunction2(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var name=document.getElementById("location").value;
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?location=" + name;
	ajaxRequest.open("GET", "search2.php" + queryString, true);
	ajaxRequest.send(); 
}
function ajaxFunction3(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var fee=document.getElementById("range").value;
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?fee=" + name;
	ajaxRequest.open("GET", "search3.php" + queryString, true);
	ajaxRequest.send(); 
}

function ajaxFunctioncompare(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var col1=document.getElementById("col1").value;
		var col2=document.getElementById("col2").value;
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv2");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?col1=" + col1 + "&col2=" + col2;
	ajaxRequest.open("GET", "compare.php" + queryString, true);
	ajaxRequest.send(); 
}

function ajaxFunction4(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var type=document.getElementById("type").value;
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?type=" + type;
	ajaxRequest.open("GET", "search4.php" + queryString, true);
	ajaxRequest.send(); 
}
function ajaxFunction5(){
	var ajaxRequest; 
		ajaxRequest = new XMLHttpRequest();
	
	var place=document.getElementById("range2").value;
	
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			var ajaxDisplay = document.getElementById("ajaxDiv");
			ajaxDisplay.innerHTML = ajaxRequest.responseText;
		}
	}

	var queryString = "?place=" + place;
	ajaxRequest.open("GET", "search5.php" + queryString, true);
	ajaxRequest.send(); 
}
