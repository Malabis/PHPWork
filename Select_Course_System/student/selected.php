<?php
include_once "../mysql.php";

$cookie = $_COOKIE['name'];

$sql = "select Cname from selection where Sname='$cookie'";
$result = $con->query($sql);


echo <<<Eof
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

   
Eof;

while($row=mysqli_fetch_assoc($result)){

    $sql_t ="select Tname from teacher where Tcourse='{$row['Cname']}'";
    $result2 = $con->query($sql_t);
    $data = mysqli_fetch_assoc($result2);
    echo "<h4 class='text-primary'>所选课程：<span style='color:#ff0000'>{$row['Cname']}</span> ------ 老师：<span style='color:red'>{$data['Tname']}</span></h4>";
}

mysqli_close($con);
?>