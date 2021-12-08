<?php
include_once "mysql.php";

$name = $_POST['name'];  
$password = MD5($_POST['password']); 


$sql = $con->query("select Aid from admin where name='$name' and password='$password' limit 1");
$sqls = mysqli_fetch_array($sql);
if($sqls){
	setcookie('name',$name,time()+3600);
	echo "<script>location='admin.php';</script>";
	}else {
		echo "<script>alert('登录失败。');history.go(-1);</script>";
		}

$con->close();
?>