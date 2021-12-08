<?php
include_once "../mysql.php";

$name = $_GET['Cname'];
$cookie = $_COOKIE['name'];
$ctime = $_GET['Ctime'];
//查询多少个

$tot = "select Cname from selection where Sname='$cookie'";
$tots = mysqli_num_rows($con->query($tot));
if($tots<2){
	if($tots==0){
		$sele = "insert into selection(Sname,Cname,Ctime) values('$cookie','$name','$ctime')";
        $select = $con->query($sele);
        echo "<script>alert('选课成功！');history.go(-1);</script>";
		}else if($tots==1){
	       $if = $con->query("select Cname from selection where Sname='$cookie'");  // cookie 的所有课程
	       mysqli_data_seek($if,0);
	       $ifs = mysqli_fetch_assoc($if);
	         if($ifs['Cname']==$name){
	           echo "<script>alert('已选该课程！');history.go(-1);</script>";
	          } else{$sele = "insert into selection(Sname,Cname,Ctime) values('$cookie','$name','$ctime')";
                     $select = $con->query($sele);
                     echo "<script>alert('选课成功！');history.go(-1);</script>";}				 
		 }  
	   
}else{
	echo "<script>alert('选课超出限制！');history.go(-1);</script>";
	}



$con->close();
?>