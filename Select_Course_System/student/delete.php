<?php
include_once "../mysql.php";


$name = $_GET['Cname'];
$cookie = $_COOKIE['name'];

$sql = "select Sname,Cname from selection where Sname='$cookie' and Cname='$name'";
$sqls = $con->query($sql);
if(mysqli_num_rows($sqls)!=0){
   $del = "delete from selection where Cname='$name' and Sname='$cookie'";
   $dels = $con->query($del);
   echo "<script>alert('退选成功！');history.go(-1);</script>";
}else{
	echo "<script>alert('退选失败，无此课程。');history.go(-1);</script>";
	}
	
$con->close();
?>