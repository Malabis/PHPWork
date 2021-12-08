<?php
include_once "../mysql.php";

$sql = "select * from plan";
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

   <table class="table table-bordered table-hover"><th></th><th></th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;五个板块任意在其中两个板块中各选一门</th><th></th></tr><tr><td>人文社科</td><td>自然科学</td><td>影视音乐</td><td>数据隐私</td><td>语言艺术</td></td></tr>
Eof;

while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td class='ins'>{$row['rwsk']}</td>";
    echo "<td class='ins'>{$row['zrkx']}</td>";
    echo "<td class='ins'>{$row['ysyy']}</td>";
    echo "<td class='ins'>{$row['sjys']}</td>";
    echo "<td class='ins'>{$row['yyys']}</td>";
    echo "</tr>";
}
echo "</table>";



$con->close();
?>