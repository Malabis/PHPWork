<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
$con = new mysqli($servername,$username,$password,$dbname);

$sql="delete from teacher where Tid={$_GET['Tid']}";
$rst=$con->query($sql);

if($rst){
	echo "<script>alert('删除成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('删除失败');history.go(-1);</script>";
		}

$con->close();
?>