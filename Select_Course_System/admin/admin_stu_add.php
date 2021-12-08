<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$name = $_POST['sname'];
$sex = $_POST['ssex'];
$num = $_POST['snum'];
$IDnum = $_POST['IDnum'];
$id = $con->query("select count(*) from student");
$ids = mysqli_fetch_row($id);
$sql = $con->query("insert into student(Sno,Sname,Sex,password,pass,Sid) values('$num','$name','$sex','123',MD5('123'),'$IDnum')");
if($sql){
echo "<script>alert('学生添加成功！');history.go(-1);</script>";
}else{ echo "<script>alert('学生添加失败。');history.go(-1);</script>";}
$con->close();
?>
