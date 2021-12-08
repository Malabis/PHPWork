<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$sql = $con->query("select * from teacher");

echo <<<Eof
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
   <center><h3 class="text-warning" style="margin-left:-80px;">老师信息</h3></center>
   <table class="table table-bordered table-hover"><tr><td>学工号</td><td>ID</td><td>姓名</td><td>性别</td><td>所属课程</td><td>初始密码</td><td>修改</td><td>删除</td></tr>
Eof;
while($row = mysqli_fetch_assoc($sql)){
	  echo "<tr>";
	  echo "<td>{$row['Tno']}</td>";
	  echo "<td>{$row['Tid']}</td>";
	  echo "<td>{$row['Tname']}</td>";
	  echo "<td>{$row['Tsex']}</td>";
      echo "<td>{$row['Tcourse']}</td>";
      echo "<td>{$row['password']}</td>";
      echo "<td><a href='admin/admin_teach_update.php?Tid={$row['Tid']}'>更改</a></td>";
      echo "<td><a href='admin/admin_teach_del.php?Tid={$row['Tid']}'>裁员</a></td>";
	  echo "<tr>";
	}
     echo "</table>";

$con->close();
?>
