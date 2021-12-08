<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['tname'];
$sex = $_POST['tsex'];
$course = $_POST['tcourse'];
$num = $_POST['tnum'];
$ctime = $_POST['ctime'];
$id = $con->query("select count(*) from teacher");
$ids = mysqli_fetch_row($id);
$Sid = $ids[0]+1;
$sql = $con->query("insert into teacher(Tid,Tname,Tsex,Tcourse,Tno,password,pass) values($Sid,'$name','$sex','$course',$num,'123',MD5('123'))");
$addcourse = $con->query("insert into course(Cname,Cdesc,Credit,Ctime) values('$course','暂无','$ctime')");
if($sql){
echo "<script>alert('老师添加成功！');history.go(-1);</script>";
}else{ echo "<script>alert('老师添加失败。');history.go(-1);</script>";}
$con->close();
?>
