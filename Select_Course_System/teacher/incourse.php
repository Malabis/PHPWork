<?php
include_once "../mysql.php";

$cookie = $_COOKIE['name'];
$cname = $_POST['cname'];
$cdesc = $_POST['cdesc'];
$credit = $_POST['credit'];
$plate = $_POST['plate'];
$ctime = $_POST['ctime'];
$sql = "select Tcourse from teacher where Tname='$cookie'";//查询该老师所教课程
$sql2 = "insert into course(Cname,Cdesc,Credit,Ctime) values('$cname','$cdesc','$credit','$ctime')";//插入该老师的课程信息
$sql3 = "select * from course";//检查是否成功录入
$result = $con->query($sql);
$data = mysqli_fetch_assoc($result);

$result3 = $con->query($sql3);
$data3 = mysqli_fetch_assoc($result3);

$course = $data['Tcourse'];
$sql7 = "insert into plan(rwsk,zrkx,ysyy,sjys,yyys) values('$course','','','','')";
$sql8 = "insert into plan(rwsk,zrkx,ysyy,sjys,yyys) values('','$course','','','')";
$sql9 = "insert into plan(rwsk,zrkx,ysyy,sjys,yyys) values('','','$course','','')";
$sql10 = "insert into plan(rwsk,zrkx,ysyy,sjys,yyys) values('','','','$course','')";
$sql11 = "insert into plan(rwsk,zrkx,ysyy,sjys,yyys) values('','','','','$course')";

if($plate=='人文社科'){
    $con->query($sql7);
}elseif ($plate=='自然科学'){
    $con->query($sql8);
}elseif ($plate=='影视音乐'){
    $con->query($sql9);
}elseif ($plate=='数据隐私'){
    $con->query($sql10);
}elseif ($plate=='语言艺术'){
    $con->query($sql11);
}else{
    echo "<script>alert('没有该板块，共有五板块(人文社科,自然科学,影视音乐,隐私数据，语言艺术)');history.go(-1);</script>";
}
if ($cname!=$course){
    echo "您未授予该课程，请联系管理员录入";
}else{
    $result2 = $con->query($sql2);
    if($data3['Cname']){
        echo "<script>alert('课程公开成功！');location='../teacher.php';</script>";
    }else{
        echo "<script>alert('课程未公开成功,请联系管理员');history.go(-1);</script>";
    }




}