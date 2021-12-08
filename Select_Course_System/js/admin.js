	   function stu_check(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('stu_check').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','admin/admin_stu_check.php');  
	   xhr.send();
	   } 
	   
	   	 
	  function teach_check(){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('teach_check').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get','admin/admin_teach_check.php');  
	   xhr.send();
	   } 
	   
	  function admin_check(url){
	   var xhr = new XMLHttpRequest();
	   xhr.onreadystatechange = function(){
		   if(xhr.readyState===4){
			   document.getElementById('admin_check').innerHTML = xhr.responseText;
			  
			   }
		   }
		 
	   xhr.open('get',url);  
	   xhr.send();
	   } 	   
	   
	   	   
	  //注销用户-删除cookie 
	  function unset(){
		  location="logoff.php";  	
		  }