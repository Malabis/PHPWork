<?php

include_once "../mysql.php";

$cookie = $_COOKIE["name"];

$Cname = $con->query("select Tcourse from teacher where Tname='$cookie'");
$t = mysqli_fetch_assoc($Cname);
$ts = $t['Tcourse'];

  $sql = "select Sname from selection where Cname='{$ts}'";
  $result = $con->query($sql);  //找到所选课程的学生名字

echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <center><h3 class="text-info" style="margin-left:-80px;">选课学生</h3></center>
    <table class="table table-bordered table-hover"><tr><td>学生名</td><td>性别</td><td>学号</td><td>成绩</td></tr>
    
Eof;

  while($row=mysqli_fetch_assoc($result)){
     $row_name = $row['Sname'];
     $res = $con->query("select * from student where Sname='$row_name'");
     $rows = mysqli_fetch_assoc($res);
     $sc = $con->query("select grade from grade where Sname='$row_name'");
     $scs = mysqli_fetch_assoc($sc);
     echo "<tr>";
     echo "<td>$row_name</td>";
     echo "<td>{$rows['Sex']}</td>";
     echo "<td>{$rows['Sno']}</td>";
     echo "<td>{$scs['grade']}</td>";
     echo "</tr>";
  }

  echo "</table>";

$con->close();
?>