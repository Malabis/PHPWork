<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$Tid=$_POST['tid'];
$name=$_POST['tname'];
$sex=$_POST['tsex'];
$course=$_POST['tcourse'];
$num=$_POST['tnum'];

$sql="update teacher set Tname='{$name}',Tsex='{$sex}',Tcourse='{$course}',Tno='{$num}' where Tid={$Tid}";
$rst=$con->query($sql);
if($rst){
	echo "<script>alert('修改成功！');location='../admin.php';</script>";
	}else{
		echo "<script>alert('修改失败。');history.go(-1);</script>";
		}
$con->close();
?>