 function show(url){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('Scourse').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get',url,false);  
	   xhr.send();
	   }
   window.onload = function(){
	   show("student/course.php");
	   teach();
	   plan();
	   course();
	   modal3();
	   }

 function modal3(){
	 var xhr = new XMLHttpRequest();
	 xhr.onreadystatechange = function(){
		 if(xhr.readyState===4){
			 document.getElementById('modal3').innerHTML = xhr.responseText;
		 }
	 }
	 xhr.open('get','student/selected.php');
	 xhr.send();

 }


 function teach(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('Teacher').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','student/s_teacher.php');  
	   xhr.send();
	   }

	   function plan(){
		var xhr = new XMLHttpRequest();
	 	xhr.onreadystatechange = function(){
	 			if(xhr.readyState===4){
			 	document.getElementById('Plan').innerHTML = xhr.responseText;

		 }
	 }

	 xhr.open('get','student/s_plan.php');
	 xhr.send();
 }

 function course(){
	 var xhr = new XMLHttpRequest();
	 xhr.onreadystatechange = function(){
		 if(xhr.readyState===4){
			 document.getElementById('Course').innerHTML = xhr.responseText;

		 }
	 }

	 xhr.open('get','student/coursetable.php');
	 xhr.send();
 }
	   
	   function grade(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('grade').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','student/s_grade.php');  
	   xhr.send();
	   }

 //注销用户-删除cookie
	  function unset(){
		  location="logoff.php";  	
		  }