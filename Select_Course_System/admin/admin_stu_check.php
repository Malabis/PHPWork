<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$sql = $con->query("select * from student");

echo <<<Eof
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
   <center><h3 class="text-warning" style="margin-left:-80px;">学生信息</h3></center>
   <table class="table table-bordered table-hover"><tr><td>学号</td><td>ID</td><td>姓名</td><td>性别</td><td>初始密码</td><td>修改</td><td>删除</td></tr>
Eof;
while($row = mysqli_fetch_assoc($sql)){
	  echo "<tr>";
	  echo "<td>{$row['Sno']}</td>";
	  echo "<td>{$row['Sid']}</td>";
	  echo "<td>{$row['Sname']}</td>";
	  echo "<td>{$row['Sex']}</td>";
      echo "<td>{$row['password']}</td>";
      echo "<td><a href='admin/admin_stu_update.php?Sid={$row['Sid']}'>更改</a></td>";
      echo "<td><a href='admin/admin_stu_del.php?Sid={$row['Sid']}'>删除</a></td>";
	  echo "<tr>";
	}
     echo "</table>";

$con->close();
?>
