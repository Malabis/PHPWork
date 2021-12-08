<?php
include_once "../mysql.php";


$ColumnName = $_POST['ColumnName'];
$keyWord = $_POST['keyWord'];
$sql = "select * from course where $ColumnName='$keyWord'";
$sql1 = "select * from teacher where $ColumnName='$keyWord'";



if($ColumnName=='Tname')
{
    $res1 = $con->query($sql1);
    echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
      .nos{
		   width:300px;
		   margin:0 auto;
		  }
      table td{
		  text-align:center;
		  }
	  a:hover{
		  text-decoration:none;
		 
		  }	  

    </style>

   <table class="table table-bordered table-hover"><tr><td>课程名</td><td>教师姓名</td><td>教师性别</td></tr>
Eof;

    while($row=mysqli_fetch_assoc($res1)){
        echo "<tr>";
        echo "<td>{$row['Tcourse']}</td>";
        echo "<td>{$row['Tname']}</td>";
        echo "<td>{$row['Tsex']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    $res = $con->query($sql);
    echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
      .nos{
		   width:300px;
		   margin:0 auto;
		  }
      table td{
		  text-align:center;
		  }
	  a:hover{
		  text-decoration:none;
		 
		  }	  

    </style>

   <table class="table table-bordered table-hover"><tr><td>课程名</td><td>课程描述</td><td>学分</td></tr>
Eof;

    while($row=mysqli_fetch_assoc($res)){
        echo "<tr>";
        echo "<td>{$row['Cname']}</td>";
        echo "<td>{$row['Cdesc']}</td>";
        echo "<td>{$row['Credit']}</td>";
        echo "<td>{$row['Ctime']}</td>";
        echo "</tr>";
    }
    echo "</table>";



}










mysqli_close($con);
?>