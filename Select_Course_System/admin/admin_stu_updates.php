<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
$con = new mysqli($servername,$username,$password,$dbname);

$Sid=$_POST['sid'];
$name=$_POST['sname'];
$sex=$_POST['ssex'];
$num=$_POST['snum'];

$sql="update student set Sname='{$name}',Sex='{$sex}',Sno='{$num}' where Sid={$Sid}";
$rst=$con->query($sql);
if($rst){
	echo "<script>alert('修改成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('修改失败。');history.go(-1);</script>";
		}
$con->close();
?>