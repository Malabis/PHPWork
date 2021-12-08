<?php
include_once "../mysql.php";
  
  $sql = "select * from teacher";
  $result = $con->query($sql);


echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>

      table td{
		  text-align:center;
		  }
	  a:hover{
		  text-decoration:none;
		  }	  
	  .ins:hover{
		  color:red;
		  cursor:default;
		  }	  
    </style>

   <table class="table table-bordered table-hover"><tr><td>姓名</td><td>性别</td><td>所属课程</td><td>学工号</td></tr>
Eof;

while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td class='ins'>{$row['Tname']}</td>";
	echo "<td class='ins'>{$row['Tsex']}</td>";
	echo "<td class='ins'>{$row['Tcourse']}</td>";
    echo "<td class='ins'>{$row['Tno']}</td>";
	echo "</tr>";
	}
echo "</table>";


	
$con->close();
?>