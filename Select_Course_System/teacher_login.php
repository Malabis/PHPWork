<?php
include_once "mysql.php";

$pass = MD5($_POST['pass']);
$num = $_POST['tnum'];

$sql = "select Tname from teacher where pass='$pass' and Tno=$num";
$result = $con->query($sql);
$data = mysqli_fetch_assoc($result);
$name = $data['Tname'];

if($result){
	setcookie('name',$name,time()+3600);
    echo "<script>location='teacher.php'</script>";	
	}else {
		echo "<script>alert('登录失败！');history.go(-1)</script>";
		}
$con->close();
?>