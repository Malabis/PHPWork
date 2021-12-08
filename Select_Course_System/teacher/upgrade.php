<?php
include_once "../mysql.php";

$cookie = $_COOKIE['name'];
$name = $_POST['name'];
$score = $_POST['score'];
$num = $_POST['snum'];

$rs = $con->query("select Tcourse from teacher where Tname='$cookie'"); //查询该老师所教课程
$rss = mysqli_fetch_assoc($rs);
$Cname = $rss['Tcourse'];

$se = $con->query("select grade from grade where Sno=$num");
$ses = mysqli_fetch_assoc($se);
if($ses['grade']){
	$update = $con->query("update grade set grade=$score where Sno=$num");
	echo "<script>alert('成绩修改成功！');location='../teacher.php';</script>";
	}else{
		echo "<script>alert('该学生并没有成绩。');history.go(-1);</script>";
		}

$con->close();
?>