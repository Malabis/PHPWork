<?php
include_once "../mysql.php";

$cookie = $_COOKIE['name'];
$num = $_POST['snum'];
$score = $_POST['score'];
$name = $_POST['sname'];

$rs = $con->query("select Tcourse from teacher where Tname='$cookie'"); //查询该老师所教课程
$rss = mysqli_fetch_assoc($rs);
$Cname = $rss['Tcourse'];

$sc = $con->query("select grade from grade where Sno='$num'");  //查询该学生之前有无成绩
$scs = mysqli_fetch_assoc($sc);

if(!$scs['grade']){
	$sql = $con->query("insert into grade(Sname,Cname,grade,Sno) values('$name','$Cname',$score,$num)");
	 echo "<script>alert('成绩录入成功！');location='../teacher.php';</script>";
	}else{
		echo "<script>alert('该学生已有成绩。');history.go(-1);</script>";
		}


$con->close();
?>