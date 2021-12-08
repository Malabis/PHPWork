<?php
include_once "mysql.php";


$pass = MD5($_POST['pass']);
$num = $_POST['snum'];


$sql = "select Sname from student where pass='$pass' and Sno=$num";
$result = $con->query($sql);
$data = mysqli_fetch_assoc($result);
$name = $data['Sname'];

if($data){
	setcookie('name',$name,time()+3600);
    echo "<script>location='student.php'</script>";	
	}else {
		echo "<script>alert('登录失败！');history.go(-1);</script>";
		}
mysqli_close($con);
?>