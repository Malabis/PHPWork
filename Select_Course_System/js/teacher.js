  function stu(){
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange = function(){
		  if(xhr.readyState===4){
			  document.getElementById('stu').innerHTML = xhr.responseText;
			  }
		  }
	  xhr.open('get','teacher/t_student.php');
	  xhr.send();	  
	  
	  }	  
	  
	  window.onload = function(){
		  stu();
		  }
		  	   
	  //注销用户-删除cookie 
	  function unset(){
		  location="logoff.php";  	
		  }