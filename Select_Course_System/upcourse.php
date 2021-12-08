<?php
include_once "mysql.php";

$cookie = $_COOKIE['name'];
$sql = $con->query("select Tcourse from teacher where Tname='$cookie'");  //查询该老师的课程
$sqls = mysqli_fetch_assoc($sql);
$sqlss = $sqls['Tcourse'];

$result = $con->query("select * from course where Cname='$sqlss'");

while($row = mysqli_fetch_assoc($result)){
	echo "{$row['Cname']}";
	echo "{$row['Cdesc']}";
	echo "{$row['Ccredit']}";
	};

$con->close();
?>